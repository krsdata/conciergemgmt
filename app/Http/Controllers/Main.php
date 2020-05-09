<?php

namespace App\Http\Controllers;

use App\Boat;
use App\Instagram_status;
use App\BoatDetail;
use App\Category;
use App\ContactForms;
use App\Pages;
use App\Routes;
use App\Slider;
use App\SliderDetail;
use App\BoatPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mail;
use DB;
use App\Helper\CommonFunction;

class Main extends Controller
{
    private $destination = array();
    private $duration = array();
    private $boatType = array();

    public function __construct()
    {   
        $boatData = CommonFunction::getBoatCommonData();
        $this->destination = $boatData['destination'];
        $this->duration = $boatData['durationMix'];
        $this->boatType = $boatData['boatType']; 
    }

    // This funciton is used to do some testing work
    public function customWork($slug){
        // echo "Testing of custom code";exit;
        //$query = DB::connection('mysql2')->table('boats')->select("*")->get();
        //echo "<prE>"; print_r($query);

        // Get maximum serial number
        /*$sn_no = DB::connection('mysql2')->table('incoming_data')->max('sn_no');
        $sn = 0;
        if(isset($sn_no)){
            $sn = $sn_no;
        }
        echo "Next Serial Number:". $sn = $sn + 1;*/
    }
    
    public function index(){
        
        $route = Routes::where('type', 'page')
            ->where('slug', '/')
            ->first();
       // dd($route); exit;
        $page = Pages::where('id', $route->pbc_id)->first();
        $slider = Slider::where('id', $page->featured_slider)->first();
        if(!empty($slider)){
            $slider->slides = SliderDetail::where('slider_id', $slider->id)->orderBy('indexing')->get();
        }
        $contact_form = null;
        $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
            ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
            ->where('contact_forms.type', 'page')
            ->where('cfu.pbc_id', $page->id)
            ->first();
        /*$contact_form = ContactForms::where('type', 'page')
            ->where('pbc_id', $page->id)
            ->first();*/

        $instastatus = DB::table('instagram_status')->where('id',1)->first();

        /*if($page->contact_form > 0){
            $contact_form = ContactForms::where('id', $page->contact_form)->first();
        }*/
        
        $insta_data = null;
        /*try{
            $insta = new \Vinkla\Instagram\Instagram(config('services.instagram.accessToken'));
            $insta_data = $insta->media();
            if($insta_data != null){
                foreach($insta_data as $i){
                    $i->all_comments = $insta->comments($i->id);
                }
            }
        }catch (Exception $e){
            $insta_data = null;
        }*/

        //call the destination
 
        return view('frontend.templates.our-boats', [
            'title' => '',
            'contact_form' => $contact_form,
            'page' => $page,
            'slider' => $slider,
            'insta' => $insta_data,
            'js' => 'frontend.pages.js.instagram-js',
            'style' => 'frontend.pages.styles.instagram-styles',
            'instastatus' => $instastatus
        ]);
    }

    public function homePage(Request $request, $slug="our-boats")
    {
        $route = Routes::where('slug', $slug)
            ->where('status', '1')
            ->where('is_deleted', '0')
            ->first();
        //echo $route;exit;

        // Check the slug in destination
        $dest = DB::table('destinations')
            ->where('status','=','1')
            ->where('slug','=', $slug)
            ->select('id')
            ->first();
        
        $destinations = null;
        $destImages = null;
        //dd($route); exit;
        if(!empty($route)){
            if($route->type == 'page')
            {
                
                $page = Pages::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', '1')
                    ->first();
                if(!empty($page))
                {
                    
                    $filterData = array(); //used to check filter data;

                    $contact_form = null;
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'page')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();

                    /*$contact_form = ContactForms::where('type', 'page')
                        ->where('pbc_id', $page->id)
                        ->first();*/
                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'page')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/
                    $view = 'frontend.pages.single-page';
                    $templates = File::allFiles(resource_path('views/frontend/templates'));
                    $custom_templates = array();
                    $categories = null;
                    $allboats = null;
                    foreach($templates as $tmp){
                        $custom_templates[] = basename($tmp->getFilename(), ".blade.php");
                       // $custom_templates[] = rtrim($tmp->getFilename(), '.blade.php');
                      
                    }
                    if(!empty($page->template) && in_array($page->template, $custom_templates)){
                        $view = 'frontend.templates.'.$page->template;
                        //$categories = Category::all();    
                       // dd( $view); die();
                        $allboats = DB::table('boats')->select('page_name')->get();

                        // echo "<pre>"; print_r($allboats);exit;
                        $destinations = DB::table('destinations')->orderBy('destinations.sort','ASC')->get();
                        
                        $destImages = DB::table('destination_images')
                        ->select('*')
                        ->get()->toArray();

                        $categories = DB::table('categories')
                        ->join('routes', 'routes.pbc_id', '=', 'categories.id')
                        ->join('menus', 'menus.route_id', '=', 'routes.id')
                        ->where('routes.type','=','category')
                        ->where('menus.parent_route_id','=',2)
                        ->select('categories.*')
                        ->orderBy('menus.sn_no','ASC')
                        ->limit(2)
                        ->get();
                        //dd( $categories); die();
                        /* === Accessing Get Param set while Searching ==== */
                        if(isset($_POST['form_min'])){
                            $filterData = $_POST;
                            //echo "<pre>"; print_r($filterData);exit;
                            // echo "<pre>"; print_r($request->all());exit;
                            /* $query = $_SERVER['QUERY_STRING'];
                            $getParam = array();
                            foreach (explode('&', $query) as $pair) 
                            {
                                list($key, $value) = explode('=', $pair);
                                $getParam[] = array(urldecode($key) => urldecode($value));
                            } */
                        }
                        
                        foreach($categories as $c){
                            
                            if(isset($_POST['search']))
                            {
                                // extract($_POST);
                                $c->boats = Boat::where('cat_id', $c->id)
                                ->orderBy('sn_no', 'asc')
                                ->get(); 

                                /* $sql = "SELECT b.* FROM boats as b left join boat_details as bd on bd.boat_id = b.id WHERE b.cat_id = ".$c->id;

                                //Filter Conditions Start
                                // If Min-Max is set
                                if($min == '')
                                    $min = 0;
                                if($max == '')
                                    $max = 0;

                                //$sql .= " AND bd.key = 'price' AND bd.value >= $min AND bd.value <= $max";

                                // $sql .= " group by b.id";
                                $result = DB::select(DB::raw($sql)); 
                                $c->boats = $result;  */
                            }
                            else {
                                $c->boats = Boat::where('cat_id', $c->id)
                                ->orderBy('sn_no', 'asc')
                                ->limit(4)
                                ->get();
                            }

                            foreach($c->boats as $b){
                                $b->details = BoatDetail::where('boat_id', $b->id)->get();
                                $b->slug = Routes::where('type', 'boat')
                                    ->where('pbc_id', $b->id)
                                    ->first();
                            }
                        }
                    }
                    $slider = null;
                    if(!empty($page->featured_slider)){
                        $slider = Slider::find($page->featured_slider);
                        $slider->slides = SliderDetail::where('slider_id', $page->featured_slider)->orderBy('indexing')->get();
                    }
                    
                    // ==== Query to call all Harbors from boats table to show in dropdown
                    $departurePort = array();
                    $boatLength = array();
                    $query = DB::table('boat_details as bd')
                        ->select('bd.key', 'bd.value')
                        ->where(['bd.key' => 'harbor'])
                        ->orWhere(['bd.key' => 'size'])
                        ->get()->toArray();

                    if(!empty($query))
                    {
                        foreach ($query as $row) {
                            if($row->key == 'harbor' && $row->value != NULL)
                                $departurePort[] = $row->value;       
                            //else if($row->key == 'size')
                                //$boatLength[] = $row->value;     
                        }
                    }
                    //echo "<pre>"; print_r($departurePort);exit; 
                    $departurePort = array_unique($departurePort);
                    rsort($departurePort);

                    //$boatLength = array_unique($boatLength);
                    //sort($boatLength);
                    // echo "<pre>"; print_r($boatLength);exit;

                    $boatLength = array('<41', "41' - 60'", "61'+");
                    $beds = array('< 5', "6 - 10", "10+");

                    // Get Water Toys category from helper
                    $waterToysCat = CommonFunction::getWaterToysCat();
                    $boatsOnWaterToys = DB::table('boats')->select('*')->where('is_deleted', '0')->get();
                    
                    //$boatsFilter = $this->filterBoats();
                    return view($view, [
                        'page' => $page,
                        'title' => $page->title,
                        'slug' => $route,
                        'contact_form' => $contact_form,
                        'slider' => $slider,
                        'categories' => $categories,
                        'allboats' => $allboats,
                        'destination' => $this->destination,
                        'destinations' => $destinations,
                        'destImages' => $destImages,
                        'duration' => $this->duration,
                        'boatType' => $this->boatType,
                        'departurePort' => $departurePort,
                        'boatLength' => $boatLength,
                        'beds' => $beds,
                        'filterData' => $filterData,
                        'waterToysCat' => $waterToysCat,
                        'boatsOnWaterToys' => $boatsOnWaterToys,
                        //'filterBoats' => $boatsFilter,
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
            if($route->type == 'category'){
                
                $page = Category::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', '1')
                    ->first();
                if(!empty($page)){
                    $boats = Boat::where('cat_id', $page->id)
                        ->where('is_deleted', '0')
                        ->where('status', 'active')
                        ->orderBy('sn_no', 'asc')
                        ->get();
                    $contact_form = null;
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'category')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();

                    /*$contact_form = ContactForms::where('type', 'category')
                        ->where('pbc_id', $page->id)
                        ->first();*/

                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'category')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/
                    foreach($boats as $b){
                        $boat_slug = Routes::where('type', 'boat')
                            ->where('pbc_id', $b->id)
                            ->first();
                        $b->slug = $boat_slug->slug;
                        $b->details = BoatDetail::where('boat_id', $b->id)
                            ->get();
                    }
                    return view('frontend.pages.single-category', [
                        'page' => $page,
                        'title' => $page->title,
                        'boats' => $boats,
                        'slug' => $route,
                        'contact_form' => $contact_form
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
            if($route->type == 'boat'){
                $page = Boat::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', 'active')
                    ->first();

                if(!empty($page)){
                    $boat_slug = Routes::where('type', 'boat')
                        ->where('pbc_id', $page->id)
                        ->first();
                    $page->slug = $boat_slug->slug;
                    $page->details = BoatDetail::where('boat_id', $page->id)
                        ->get();
                    $slider = Slider::find($page->slider_id);
                    $slider->slides = SliderDetail::where('slider_id', $page->slider_id)->orderBy('indexing')->get();
                    
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'boat')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();
                        
                    /*$contact_form = ContactForms::where('type', 'boat')
                        ->where('pbc_id', $page->id)
                        ->first();*/

                    /*=== Get the Package Info of the boat === */
                    $packageData = array();
                    $boatPackages = DB::table('boat_packages')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        ->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($boatPackages)){
                        foreach ($boatPackages as $row) 
                            $packageData[] = $row; //$row->keyname;
                    }
                    //echo  "<pre>"; print_r($packageData); exit;

                    /*=== Get the Water Toys Info of the boat === */
                    $waterToysData = array();
                    $boatToys = DB::table('boat_water_toys')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($boatToys)){
                        foreach ($boatToys as $row) 
                            $waterToysData[] = $row; //$row->keyname;
                    }

                    $specificationData = array();
                    $specification = DB::table('boat_specification')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($specification)){
                        foreach ($specification as $speci) 
                            $specificationData[] = $speci; //$row->keyname;
                    }

                    $headingcontent = array();
                    $headcontent = DB::table('boat_headingcontent')
                        ->where('boat_id','=',$page->id)
                        ->where('heading_two', '=', NULL)
                        ->where('content_two', '=', NULL)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id', 'asc')
                        ->get()->toArray();
                    if(!empty($headcontent)){
                        foreach ($headcontent as $head) 
                            $headingcontent[] = $head; //$row->keyname;
                    }

                    // Calling heading content two
                    $headingcontentTwo = array();
                    $headcontentTwo = DB::table('boat_headingcontent')
                        ->where('boat_id','=',$page->id)
                        ->where('heading', '=', NULL)
                        ->where('content', '=', NULL)
                        ->select('*')
                        ->orderBy('id', 'asc')
                        ->get()->toArray();
                    if(!empty($headcontentTwo)){
                        foreach ($headcontentTwo as $head) 
                            $headingcontentTwo[] = $head; 
                    }
                    //echo "<pre>"; print_r($headingcontentTwo);exit;
 
                    $video = array();
                    $videocontent = DB::table('boat_videocontent')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($videocontent)){
                        foreach ($videocontent as $vedi) 
                            $video[] = $vedi; //$row->keyname;
                    }
                    //echo  "<pre>"; print_r($waterToysData); exit;


                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'boat')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*$contact_form = null;
                    if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/

                    // Get Water Toys category from helper
                    $waterToysCat = CommonFunction::getWaterToysCat();

                    return view('frontend.pages.single-boat', [
                        'page' => $page,
                        'title' => $page->title,
                        'slug' => $route,
                        'slider' => $slider,
                        'contact_form' => $contact_form,
                        'packageData' => $packageData,
                        'waterToysData' => $waterToysData,
                        'specificationData' => $specificationData,
                        'headingcontent' => $headingcontent,
                        'headingcontentTwo' => $headingcontentTwo,
                        'video' => $video,
                        'waterToysCat' => $waterToysCat
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
        }
        else if(!empty($dest)){
            // Load the destination
            return $this->destinationDetail($slug);
        }
        else if($slug == 'custom-work'){
            return $this->customWork($slug);
        }
        else{
            return view('frontend.pages.404', [
                'title' => '404 - Not Found'
            ]);
        }
    }

    public function singlePage(Request $request, $slug="our-boats"){
        $route = Routes::where('slug', $slug)
            ->where('status', '1')
            ->where('is_deleted', '0')
            ->first();
        //echo $route;exit;

        // Check the slug in destination
        $dest = DB::table('destinations')
            ->where('status','=','1')
            ->where('slug','=', $slug)
            ->select('id')
            ->first();
        
        $destinations = null;
        $destImages = null;

        if(!empty($route)){
            if($route->type == 'page')
            {
                $page = Pages::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', '1')
                    ->first();
                if(!empty($page))
                {
                    $filterData = array(); //used to check filter data;

                    $contact_form = null;
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'page')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();

                    /*$contact_form = ContactForms::where('type', 'page')
                        ->where('pbc_id', $page->id)
                        ->first();*/
                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'page')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/
                    $view = 'frontend.pages.single-page';
                    $templates = File::allFiles(resource_path('views/frontend/templates'));
                    $custom_templates = array();
                    $categories = null;
                    $allboats = null;
                    foreach($templates as $tmp){
                        $custom_templates[] = basename($tmp->getFilename(), ".blade.php");
                       // $custom_templates[] = rtrim($tmp->getFilename(), '.blade.php');
                    }
                    if(!empty($page->template) && in_array($page->template, $custom_templates)){
                        $view = 'frontend.templates.'.$page->template;
                        //$categories = Category::all();    
                        
                        $allboats = DB::table('boats')->select('page_name')->get();

                        // echo "<pre>"; print_r($allboats);exit;
                        $destinations = DB::table('destinations')->orderBy('destinations.sort','ASC')->get();
                        
                        $destImages = DB::table('destination_images')
                        ->select('*')
                        ->get()->toArray();

                        $categories = DB::table('categories')
                        ->join('routes', 'routes.pbc_id', '=', 'categories.id')
                        ->join('menus', 'menus.route_id', '=', 'routes.id')
                        ->where('routes.type','=','category')
                        ->where('menus.parent_route_id','=',2)
                        ->select('categories.*')
                        ->orderBy('menus.sn_no','ASC')
                        ->get();

                        /* === Accessing Get Param set while Searching ==== */
                        if(isset($_POST['form_min'])){
                            $filterData = $_POST;
                            //echo "<pre>"; print_r($filterData);exit;
                            // echo "<pre>"; print_r($request->all());exit;
                            /* $query = $_SERVER['QUERY_STRING'];
                            $getParam = array();
                            foreach (explode('&', $query) as $pair) 
                            {
                                list($key, $value) = explode('=', $pair);
                                $getParam[] = array(urldecode($key) => urldecode($value));
                            } */
                        }
                        
                        foreach($categories as $c){
                            
                            if(isset($_POST['search']))
                            {
                                // extract($_POST);
                                $c->boats = Boat::where('cat_id', $c->id)
                                ->orderBy('sn_no', 'asc')
                                ->get(); 

                                /* $sql = "SELECT b.* FROM boats as b left join boat_details as bd on bd.boat_id = b.id WHERE b.cat_id = ".$c->id;

                                //Filter Conditions Start
                                // If Min-Max is set
                                if($min == '')
                                    $min = 0;
                                if($max == '')
                                    $max = 0;

                                //$sql .= " AND bd.key = 'price' AND bd.value >= $min AND bd.value <= $max";

                                // $sql .= " group by b.id";
                                $result = DB::select(DB::raw($sql)); 
                                $c->boats = $result;  */
                            }
                            else {
                                $c->boats = Boat::where('cat_id', $c->id)
                                ->orderBy('sn_no', 'asc')
                                ->get();
                            }

                            foreach($c->boats as $b){
                                $b->details = BoatDetail::where('boat_id', $b->id)->get();
                                $b->slug = Routes::where('type', 'boat')
                                    ->where('pbc_id', $b->id)
                                    ->first();
                            }
                        }
                    }
                    $slider = null;
                    if(!empty($page->featured_slider)){
                        $slider = Slider::find($page->featured_slider);
                        $slider->slides = SliderDetail::where('slider_id', $page->featured_slider)->orderBy('indexing')->get();
                    }
                    
                    // ==== Query to call all Harbors from boats table to show in dropdown
                    $departurePort = array();
                    $boatLength = array();
                    $query = DB::table('boat_details as bd')
                        ->select('bd.key', 'bd.value')
                        ->where(['bd.key' => 'harbor'])
                        ->orWhere(['bd.key' => 'size'])
                        ->get()->toArray();

                    if(!empty($query))
                    {
                        foreach ($query as $row) {
                            if($row->key == 'harbor' && $row->value != NULL)
                                $departurePort[] = $row->value;       
                            //else if($row->key == 'size')
                                //$boatLength[] = $row->value;     
                        }
                    }
                    //echo "<pre>"; print_r($departurePort);exit; 
                    $departurePort = array_unique($departurePort);
                    rsort($departurePort);

                    //$boatLength = array_unique($boatLength);
                    //sort($boatLength);
                    // echo "<pre>"; print_r($boatLength);exit;

                    $boatLength = array('<41', "41' - 60'", "61'+");
                    $beds = array('< 5', "6 - 10", "10+");

                    // Get Water Toys category from helper
                    $waterToysCat = CommonFunction::getWaterToysCat();
                    $boatsOnWaterToys = DB::table('boats')->select('*')->where('is_deleted', '0')->get();

                    //$boatsFilter = $this->filterBoats();
                    return view($view, [
                        'page' => $page,
                        'title' => $page->title,
                        'slug' => $route,
                        'contact_form' => $contact_form,
                        'slider' => $slider,
                        'categories' => $categories,
                        'allboats' => $allboats,
                        'destination' => $this->destination,
                        'destinations' => $destinations,
                        'destImages' => $destImages,
                        'duration' => $this->duration,
                        'boatType' => $this->boatType,
                        'departurePort' => $departurePort,
                        'boatLength' => $boatLength,
                        'beds' => $beds,
                        'filterData' => $filterData,
                        'waterToysCat' => $waterToysCat,
                        'boatsOnWaterToys' => $boatsOnWaterToys,
                        //'filterBoats' => $boatsFilter,
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
            if($route->type == 'category'){
                $page = Category::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', '1')
                    ->first();
                if(!empty($page)){
                    $boats = Boat::where('cat_id', $page->id)
                        ->where('is_deleted', '0')
                        ->where('status', 'active')
                        ->orderBy('sn_no', 'asc')
                        ->get();
                    $contact_form = null;
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'category')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();

                    /*$contact_form = ContactForms::where('type', 'category')
                        ->where('pbc_id', $page->id)
                        ->first();*/

                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'category')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/
                    foreach($boats as $b){
                        $boat_slug = Routes::where('type', 'boat')
                            ->where('pbc_id', $b->id)
                            ->first();
                        $b->slug = $boat_slug->slug;
                        $b->details = BoatDetail::where('boat_id', $b->id)
                            ->get();
                    }
                    return view('frontend.pages.single-category', [
                        'page' => $page,
                        'title' => $page->title,
                        'boats' => $boats,
                        'slug' => $route,
                        'contact_form' => $contact_form
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
            if($route->type == 'boat'){
                $page = Boat::where('id', $route->pbc_id)
                    ->where('is_deleted', '0')
                    ->where('status', 'active')
                    ->first();

                if(!empty($page)){
                    $boat_slug = Routes::where('type', 'boat')
                        ->where('pbc_id', $page->id)
                        ->first();
                    $page->slug = $boat_slug->slug;
                    $page->details = BoatDetail::where('boat_id', $page->id)
                        ->get();
                    $slider = Slider::find($page->slider_id);
                    $slider->slides = SliderDetail::where('slider_id', $page->slider_id)->orderBy('indexing')->get();
                    
                    $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                        ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                        ->where('contact_forms.type', 'boat')
                        ->where('cfu.pbc_id', $page->id)
                        ->first();
                        
                    /*$contact_form = ContactForms::where('type', 'boat')
                        ->where('pbc_id', $page->id)
                        ->first();*/

                    /*=== Get the Package Info of the boat === */
                    $packageData = array();
                    $boatPackages = DB::table('boat_packages')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        ->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($boatPackages)){
                        foreach ($boatPackages as $row) 
                            $packageData[] = $row; //$row->keyname;
                    }
                    //echo  "<pre>"; print_r($packageData); exit;

                    /*=== Get the Water Toys Info of the boat === */
                    $waterToysData = array();
                    $boatToys = DB::table('boat_water_toys')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($boatToys)){
                        foreach ($boatToys as $row) 
                            $waterToysData[] = $row; //$row->keyname;
                    }

                    $specificationData = array();
                    $specification = DB::table('boat_specification')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($specification)){
                        foreach ($specification as $speci) 
                            $specificationData[] = $speci; //$row->keyname;
                    }

                    $headingcontent = array();
                    $headcontent = DB::table('boat_headingcontent')
                        ->where('boat_id','=',$page->id)
                        ->where('heading_two', '=', NULL)
                        ->where('content_two', '=', NULL)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id', 'asc')
                        ->get()->toArray();
                    if(!empty($headcontent)){
                        foreach ($headcontent as $head) 
                            $headingcontent[] = $head; //$row->keyname;
                    }

                    // Calling heading content two
                    $headingcontentTwo = array();
                    $headcontentTwo = DB::table('boat_headingcontent')
                        ->where('boat_id','=',$page->id)
                        ->where('heading', '=', NULL)
                        ->where('content', '=', NULL)
                        ->select('*')
                        ->orderBy('id', 'asc')
                        ->get()->toArray();
                    if(!empty($headcontentTwo)){
                        foreach ($headcontentTwo as $head) 
                            $headingcontentTwo[] = $head; 
                    }
                    //echo "<pre>"; print_r($headingcontentTwo);exit;
 
                    $video = array();
                    $videocontent = DB::table('boat_videocontent')
                        ->where('boat_id','=',$page->id)
                        ->select('*')
                        //->groupBy('keyname')
                        ->orderBy('id')
                        ->get()->toArray();
                    if(!empty($videocontent)){
                        foreach ($videocontent as $vedi) 
                            $video[] = $vedi; //$row->keyname;
                    }
                    //echo  "<pre>"; print_r($waterToysData); exit;


                    /*if(empty($contact_form)){
                        $contact_form = ContactForms::where('type', 'boat')
                            ->where('pbc_id', null)
                            ->first();
                        if(empty($contact_form)){
                            $contact_form = ContactForms::where('type', 'general')
                                ->where('pbc_id', null)
                                ->first();
                        }
                    }*/
                    /*$contact_form = null;
                    if($page->contact_form > 0){
                        $contact_form = ContactForms::where('id', $page->contact_form)->first();
                    }*/

                    // Get Water Toys category from helper
                    $waterToysCat = CommonFunction::getWaterToysCat();

                    return view('frontend.pages.single-boat', [
                        'page' => $page,
                        'title' => $page->title,
                        'slug' => $route,
                        'slider' => $slider,
                        'contact_form' => $contact_form,
                        'packageData' => $packageData,
                        'waterToysData' => $waterToysData,
                        'specificationData' => $specificationData,
                        'headingcontent' => $headingcontent,
                        'headingcontentTwo' => $headingcontentTwo,
                        'video' => $video,
                        'waterToysCat' => $waterToysCat
                    ]);
                }else{
                    return view('frontend.pages.404', [
                        'title' => '404 - Not Found'
                    ]);
                }
            }
        }
        else if(!empty($dest)){
            // Load the destination
            return $this->destinationDetail($slug);
        }
        else if($slug == 'custom-work'){
            return $this->customWork($slug);
        }
        else{
            return view('frontend.pages.404', [
                'title' => '404 - Not Found'
            ]);
        }
    }

    /**
     * makeContact - function to make a contact request
    */
    public function makeContact(Request $request){
        if($request->isMethod('post')){
            $data = array();
            $data['name'] = $request->get('name');
            $data['email'] = $request->get('email');
            $data['body'] = $request->get('message');
            $final['data'] = $data;

            Mail::send('emails.email', $final, function($message) use ($data) {
                $message->to('ravip@cmsminds.com', $data['name'])
                    ->subject('Contact - coastal concierge');
                $message->from($data['email'], $data['name']);
            });

            if(Mail::failures()){
                return redirect()
                    ->back()
                    ->with('error', 'E-mail was not sent! Please try again');
            }else{
                return redirect()
                    ->back()
                    ->with('success', 'E-mail was sent successfully!');
            }
        }
    }

    /**
     * sendEmail - function for all kind of contact forms
    */
    public function sendEmail(Request $request){
        

        if($request->isMethod('post')){
            $data['data'] = $request->get('data');
            //echo "<pre>"; print_r($data['data']);exit;
           
            try{
                // Store the data in upboard database
                $this->storeUpboardLead($data['data']);

                if(isset($data['data']['email1']) && $data['data']['email1']!=""){
                    $data['emailnew'] = $data['data']['email1'];
                }elseif(isset($data['data']['email']) && $data['data']['email']!=""){
                    $data['emailnew'] = $data['data']['email'];
                }else{
                    $data['emailnew'] ='';
                }
            
               if( (isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '32039Sundancer') || (isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '292020OpenSpeedBoat') || (isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '43Azimut')){

                   if(isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '32039Sundancer'){

                    //$body = "32' Sundancer";

                    
                     $body['test'] = "";
                        Mail::send('emails.new_email', $data, function($message)use ($data) {
                             $message->to($data['emailnew'])->subject
                                ('Coastal Concierge');
                             $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                        });
                        Mail::send('emails.other_emails', $body, function($message) use ($data) {
                        $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                        $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                         });

                   }
                  
                   if(isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '292020OpenSpeedBoat'){
                    
                    $body['test'] = '';
                       Mail::send('emails.speed_boat', $data, function($message)use ($data) {
                             $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                             $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                        });
                       Mail::send('emails.other_emails', $body, function($message) use ($data) {
                        $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                        $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                         });
                   }
                   if(isset($data['data']['firstBoatChoice']) && $data['data']['firstBoatChoice'] == '43Azimut'){
                    
                    $body['test'] = '';
                       Mail::send('emails.azimut', $data, function($message)use ($data) {
                             $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                             $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                        });
                       Mail::send('emails.other_emails', $body, function($message) use ($data) {
                        $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                        $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                         });
                   }
                   
                   
                } 
               else {
                    $body['test'] = '';
                    
                      
                      Mail::send('emails.other_emails', $body, function($message) use ($data) {
                        $message->to($data['emailnew'], '')->subject
                                ('Coastal Concierge');
                        $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                         });
                }

                if(isset($_POST['pagename']) && $_POST['pagename'] !=""){
                    $data['pagename'] = $_POST['pagename'];
                } else{
                    $data['pagename'] = "Home Page";
                } 

                Mail::send('emails.contact',["data1"=>$request->get('data')] , function($message) use ($data){
                $message->to('swapniljain1434@gmail.com', '')->subject
                        ($data['pagename']);
                $message->from('swapniljain1434@gmail.com','Coastal Concierge');
                });
            
                if(Mail::failures()){
                    $request->session()->flash('alert-error', 'Something went wrong! Please try again!');
                    
                    return redirect()
                        ->back()
                        ->with('alert', 'Something went wrong! Please try again!');
                }else{
                    $request->session()->flash('alert-success', 'Your message was sent successfully!');

                    return redirect()
                        ->back()
                        ->with('alert', 'Your message was sent successfully!');
                }
            }catch (\Exception $e){
               /* echo $e->getMessage();
                exit;*/

                $request->session()->flash('alert-error', 'Something went wrong! Please try again!');
                return redirect()
                    ->back()
                    ->with('alert', 'Something went wrong! Please try again!');
            }
        }
    }
    
    public function redirectpage(Request $request){
      if(isset($_POST['redirectvalue']) && $_POST['redirectvalue']!=""){
        $data[] = "test";
        return redirect('/credit-card-payment')->with(['data' => $data]);
      }
      if(isset($_POST['redirectpaypal']) && $_POST['redirectpaypal'] !=""){
        $data[] = "test";
        return redirect('/payment')->with(['data' => $data]);
      }
    }

    // Destination detail function
    public function destinationDetail($slug = NULL){
        if($slug != NULL) 
        {
            $route = Routes::where('type', 'page')
            ->where('slug', '/')
            ->first();

            $page = Pages::where('id', $route->pbc_id)->first();
            // echo "<prE>"; print($page);exit;

            $contact_form = null;
            
            // Call the destination
            $dest = DB::table('destinations')
                ->where('status','=','1')
                ->where('slug','=', $slug)
                ->select('*')
                ->first();
            // echo "<prE>"; print_r($dest);exit;

            $hc = array();
            if(!empty($dest))
            {
                $page->page_name = $dest->page_name; //Used on the form, to send in email

                //print_r($destData);
                $hc = DB::table('destination_details')
                    ->where('dest_id','=', $dest->id)
                    ->orderBy('id', 'asc')
                    ->get()->toArray();

                $images = DB::table('destination_images')
                    ->where('dest_id','=', $dest->id)
                    ->orderBy('id', 'asc')
                    ->get();
                //echo "<prE>"; print_r($images);

                $contact_form = ContactForms::select('contact_forms.*', 'cfu.pbc_id')
                    ->leftJoin('contact_form_uses as cfu', 'cfu.form_id', '=', 'contact_forms.id')
                    ->where('contact_forms.type', 'dest')
                    ->where('cfu.pbc_id', $dest->id)
                    ->first();
            }
            
            return view('frontend.pages.single-destination', [
                'title' => $dest->title,
                'contact_form' => $contact_form,
                'page' => $page,
                'dest' => $dest,
                'hc' => $hc,
                'images' => $images,
                'js' => 'frontend.pages.js.instagram-js',
                'style' => 'frontend.pages.styles.instagram-styles',
            ]);
        }
    }

    // Function to load destination via Ajax
    public function loadDestination(Request $request)
    { 

        if(isset($_GET['cat_id'])) {
            extract($_GET);

            $catData = DB::table('destinations')
                ->where('status','=','1')
                ->where('cat_id','=', $cat_id)
                ->select('id', 'title', 'page_name', 'slug', 'cat_id')
                ->orderBy('title','ASC')
                ->get()->toArray();
            
            if(!empty($catData))
            {
                $destData = array();
                foreach ($catData as $row){
                    
                    //Converting NULL to "" String
                    array_walk_recursive($row, function (&$item, $key) {
                        $item = null === $item ? '' : $item;
                    });

                    $destData[] = array('id' => $row->id, 'title'=>$row->title, 'page_name'=>$row->page_name, 'slug'=>$row->slug, 'cat_id'=>$row->cat_id);

                }
                $result = array('status' => 1, 'message' => 'Destinations get successfully', 'data' => $destData);
            }
            else
                $result = array('status' => 0, 'message' => 'No record found');

            return response()->json($result);
        }
    }

    // Function to load boat info via Ajax - for Bachlors Pages
    public function loadBoatInfo(Request $request)
    { 
        if(isset($_GET['boat_id'])) {
            $id = $_GET['boat_id'];
            $total_cost = 0;

            $boatPackage = DB::table('boat_packages')
                ->where('boat_id','=',$id)
                ->select('*')
                ->groupBy('keyname')
                ->orderBy('id')
                ->get()->toArray();

            $valueCount = 0; $valueArray = array();
            if(!empty($boatPackage)) 
            {
                $i = 1;
                foreach ($boatPackage as $row) 
                {
                    $boatPack = BoatPackages::where(['keyname' => $row->keyname, 'boat_id' => $row->boat_id])->pluck('value');
                    $valueCount = count($boatPack);

                    if(!empty($boatPack)) { 
                        foreach ($boatPack as $key => $val) {
                            $valueArray[$row->keyname][] = $val;
                        }
                    }
                }
            }
            // echo "<pre>"; print_r($valueArray);

            if($valueCount){
                for($j = 0; $j < $valueCount; $j++){ 
                    if(!empty($boatPackage)) 
                    {
                        $i = 1;
                        foreach ($boatPackage as $row) 
                        {
                            if($valueArray[$row->keyname][$j] == 4)
                                $total_cost = $valueArray['total cost'][$j];
                        }
                    }
                }
            }

            $total_cost = str_replace("$", "", $total_cost);
            $total_cost = str_replace(",", "", $total_cost);
            
            if($total_cost)
                $result = array('status' => 1, 'message' => 'Destinations get successfully', 'total_cost' => $total_cost);
            else
                $result = array('status' => 0, 'message' => 'No record found');

            return response()->json($result);
        }
    }

    // Function to update word/char count via Ajax
    public function updateCount(Request $request)
    { 
        // echo "<prE>"; print_r($_GET);exit;
        if(isset($_GET['module_id']) && isset($_GET['module_type'])) {
            extract($_GET);

            if($module_type == 'boat') {
                DB::table('boat_details')->where(['boat_id' => $module_id, 'key' => 'total_words'])->delete();
                DB::table('boat_details')->where(['boat_id' => $module_id, 'key' => 'total_chars'])->delete();
                $record = array(
                    'key' => 'total_words', 
                    'value' => $words,
                    'boat_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('boat_details')->insert($record);
            
                $record = array(
                    'key' => 'total_chars', 
                    'value' => $characters,
                    'boat_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('boat_details')->insert($record);
            }
            
            else if($module_type == 'dest') {
                DB::table('destination_seo')->where(['dest_id' => $module_id, 'key' => 'total_words'])->delete();
                DB::table('destination_seo')->where(['dest_id' => $module_id, 'key' => 'total_chars'])->delete();

                $record = array(
                    'key' => 'total_words', 
                    'value' => $words,
                    'dest_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('destination_seo')->insert($record);
                $record = array(
                    'key' => 'total_chars', 
                    'value' => $characters,
                    'dest_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('destination_seo')->insert($record);
            }  

            else if($module_type == 'page') {
                
                DB::table('pages_seo')->where(['page_id' => $module_id, 'key' => 'total_words'])->delete();
                DB::table('pages_seo')->where(['page_id' => $module_id, 'key' => 'total_chars'])->delete();

                $record = array(
                    'key' => 'total_words', 
                    'value' => $words,
                    'page_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('pages_seo')->insert($record);
                $record = array(
                    'key' => 'total_chars', 
                    'value' => $characters,
                    'page_id' => $module_id, 
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('pages_seo')->insert($record);
            }           

            $result = array('status' => 1, 'message' => 'Count updated successfully');
            return response()->json($result);
        }
    }

    // Function to filter boats via Ajax
    public function filterBoats(){
        $categories = DB::table('categories')
            ->join('routes', 'routes.pbc_id', '=', 'categories.id')
            ->join('menus', 'menus.route_id', '=', 'routes.id')
            ->where('routes.type','=','category')
            ->where('menus.parent_route_id','=',2)
            ->where('categories.title', '!=', 'entire fleet')
            ->select('categories.*')
            ->orderBy('menus.sn_no','ASC')
            ->get();

        foreach($categories as $c){
            $c->boats = Boat::where('cat_id', $c->id)
            ->orderBy('sn_no', 'asc')
            ->get();
        

            foreach($c->boats as $b){
                $b->details = BoatDetail::where('boat_id', $b->id)->get();
                $b->slug = Routes::where('type', 'boat')
                    ->where('pbc_id', $b->id)
                    ->first();
            }
        }
        //echo "<pre>"; print_r($categories);

        $html = ""; $boatFound = false;
        if(!empty($categories)) {
            $i = 0; 
            foreach($categories as $c)
            {
                $html .= '<div class="col-md-12">';
                /*if(isset($_GET['form_boatType']))
                {
                    $flBoatType = $_GET['form_boatType'];
                    $found = CommonFunction::findCatInFilter($c->title, $flBoatType);
                    if($found)
                    {
                    $html .= '<div class="containers mb-5 pt-3 pb-3 boat-header">
                            <p class="mb-1 mt-2 text-center text-white">'.$c->title.'</p>
                        </div>';
                    }
                }*/
                $html .= '<div class="containers mb-5 pt-3 pb-3 boat-header">
                            <p class="mb-1 mt-2 text-center text-white">'.$c->title.'</p>
                        </div>';

                $html .= '<div class="row">';
                    
                if(!empty($c->boats)) {

                    $array = json_decode(json_encode($c->boats), True);
                    
                    foreach($c->boats as $b) {

                        $canShow = false; 
                        // Filter conditions start
                        if(isset($_GET['filter'])) 
                        {
                            extract($_GET);
                            //print_r($_GET);exit;
                            $budgetShow = true;
                            $boatTypeShow = true; 
                            $departureShow = true;

                            $capacityShow = true; 
                            $boatLengthShow = true;

                            $destinationShow = true; 
                            $durationShow = true;
                            $bedsShow = true; 

                            foreach($b->details as $bd) 
                            {
                                $condition = '';
                                if($form_min != '' && $form_max != '' && $bd->key == 'price' && $bd->value != NULL){
                                    $value = (int) str_replace(",", "",$bd->value);
                                    if($value >= $form_min && $value <= $form_max){
                                        $budgetShow = true;
                                    }
                                    else
                                        $budgetShow = false;
                                }
                                
                                if(isset($form_boatType) && $bd->key == 'boatType' && $bd->value != NULL){
                                    
                                    $bt = $form_boatType;
                                    $value = explode(",", $bd->value);
                                    $common = array_intersect($value, $bt);
                                    
                                    if(!empty($common)){
                                        $boatTypeShow = true;
                                    }
                                    else
                                        $boatTypeShow = false;
                                }

                                if(isset($form_departure) && !empty($form_departure) && $bd->key == 'harbor' && $bd->value != NULL){
                                    $dep = $form_departure;
                                    if (in_array($bd->value, $dep)){
                                        $departureShow = true;
                                    }
                                    else
                                        $departureShow = false;
                                }

                                if($form_maxcap >= 1 && $bd->key == 'capacity'){
                                    $dbValue = (int) ($bd->value);

                                    if($dbValue >= $form_maxcap){
                                        $capacityShow = true;
                                    }
                                    else
                                        $capacityShow = false;
                                }

                                if($form_maxsleep > 1 && $bd->key == 'beds'  && $bd->value != NULL){
                                    $dbValue = (int) ($bd->value);

                                    if($dbValue >= $form_maxsleep){
                                        $bedsShow = true;
                                    }
                                    else
                                        $bedsShow = false;
                                } 

                                if(isset($form_boatLength) && !empty($form_boatLength) && $bd->key == 'size'  && $bd->value != NULL)
                                {
                                    $length = $form_boatLength;
                                    $size = (int) ($bd->value);
                                    
                                    foreach ($length as $key => $value) {
                                        //echo $size. $value;

                                        /*if($value == '<41' && $bd->value <= 40){
                                            $boatLengthShow = true;
                                        }
                                        else if($value == "41' - 60'" && $bd->value > 40 && $bd->value <= 60){
                                            $boatLengthShow = true;
                                        }
                                        else if($value == "61'+" && $bd->value > 60){
                                            $boatLengthShow = true;
                                        }
                                        else
                                            $boatLengthShow = false;*/

                                        if(($value == "<41" && $size <= 40) || ($value == "41' - 60'" && $size > 40 && $size <= 60) || ($value == "61'+" && $size > 60)){
                                            $boatLengthShow = true;
                                        }
                                        else {
                                            $boatLengthShow = false; 
                                        }

                                        if($boatLengthShow)
                                            break;
                                    }
                                }

                                if(isset($form_destination) && !empty($form_destination) && $bd->key == 'destination' && $bd->value != NULL)
                                {
                                    $dest = $form_destination;
                                    $value = explode(",", $bd->value);
                                    $common = array_intersect($value, $dest);
                                    if(!empty($common)){
                                        $destinationShow = true;
                                        $advanceFilterBox = true;
                                    }
                                    else
                                        $destinationShow = false;
                                }

                                if(isset($form_duration) && !empty($form_duration) && $bd->key == 'duration' && $bd->value != NULL)
                                {
                                    $dura = $form_duration;
                                    $value = explode(",", $bd->value);
                                    //print_r($value);
                                    //print_r($form_duration);

                                    foreach ($form_duration as $key => $dura) {
                                        if($dura == 0 && (in_array(0, $value) || in_array(1, $value))){
                                            $durationShow = true;
                                        }
                                        else if($dura == 1 && (in_array(2, $value) || in_array(3, $value))){
                                            $durationShow = true;
                                        }
                                        else if($dura == 2 && (in_array(4, $value) || in_array(5, $value))){
                                            $durationShow = true;
                                        }
                                        else
                                            $durationShow = false;
                                    }

                                    /*$common = array_intersect($value, $dura);
                                    if(!empty($common)){
                                        $durationShow = true;
                                        $advanceFilterBox = true;
                                    }
                                    else
                                        $durationShow = false;*/
                                }
                            }

                            // If all filter matches, then can Show the output
                            if($budgetShow && $boatTypeShow && $departureShow && $capacityShow && $bedsShow && $boatLengthShow && $destinationShow && $durationShow) 
                                $canShow = true;
                            else
                                $canShow = false;
                        }
                        else
                            $canShow = true;
                        // Filter conditions end

                        if($canShow) {
                            $boatFound = true;

                            $html .= '<div class="col-lg-6 col-md-6 mb-5">
                                <div class="blog-item">';
                            
                            foreach($b->details as $bd) {
                                if($bd->key == 'best_seller' && $bd->value == 'on') {
                                    $html .= '<div class="seller-img">
                                      <img class="lazyload" data-src="'.asset('/photos/2/blue_seller.png').'" src="'.asset('/photos/2/blue_seller.png').'" alt="best seller image coastalconcierge" />
                                    </div>';
                                }

                                if($bd->key == 'jet_ski' && $bd->value == 'on') {
                                    $html .= '<div class="jet_ski">
                                        <img class="lazyload" data-src="'.asset('/photos/2/jet_ski.png').'" src="'.asset('/photos/2/jet_ski.png').'" alt="jetski icon coastalconcierge" />
                                    </div>';
                                }

                                if($bd->key == 'sea_bob' && $bd->value == 'on') {
                                    $html .= '<div class="sea_bob">
                                        <img class="lazyload" data-src="'.asset('/photos/2/sea_bob.png').'" src="'.asset('/photos/2/sea_bob.png').'" alt="sea bob icon coastalconcierge" />
                                    </div>';
                                }

                                if($bd->key == 'paddle-board' && $bd->value == 'on') {
                                    $html .= '<div class="paddle-board">
                                        <img class="lazyload" data-src="'.asset('/photos/2/paddleboard.png').'" src="'.asset('/photos/2/paddleboard.png').'" alt="paddle-board icon coastalconcierge" />
                                    </div>';
                                }

                                if($bd->key == 'brand_new' && $bd->value == 'on') {
                                    $html .= '<div class="seller-img">
                                        <img class="lazyload" data-src="'.asset('/photos/2/brand_new.png').'" src="'.asset('/photos/2/brand_new.png').'" alt="brand new icon coastalconcierge" />
                                    </div>';
                                }

                                if($bd->key == '4_hour' && $bd->value == 'on') {
                                    $html .= '<div class="image10">
                                        <img class="lazyload" data-src="'.asset('/photos/2/4-hour-rate.png').'" src="'.asset('/photos/2/4-hour-rate.png').'" alt="4 hour rate icon coastalconcierge" />
                                    </div>';
                                } 
                                elseif($bd->key == '8_hour' && $bd->value == 'on') {
                                    $html .= '<div class="image10">
                                        <img class="lazyload" data-src="'.asset('/photos/2/8-hour-rate.png').'" src="'.asset('/photos/2/8-hour-rate.png').'" alt="8 hour rate icon coastalconcierge" />
                                    </div>';
                                } 
                            } //Loop close

                            $html .= '<div class="ourboatbox">
                                        <a href="'.url('/'.$b->slug->slug).'" target="_blank">
                                            <img class="img-fluid rounded boat-feature lazyload" data-src="'.$b->image.'" src="'.$b->image.'" alt="coastal concierge" />
                                        </a>
                                    </div>';

                            $html .= '<div class="row">
                                        <div class="col-lg-12">
                                            <span class="popular-image">
                                                <span class="post-no">'. $b->sn_no .'</span>
                                            </span>
                                            <span class="boats_price_box">
                                                <span class="boats_price_box_item2">From</span>
                                                <span class="boats_price_box_item text-white h4">$';
                                                    foreach($b->details as $bd) {
                                                        if($bd->key == 'price') {
                                                            $html .= $bd->value;
                                                        }
                                                    }
                                                $html .= '</span>

                                                <span class="boats_price_box_item1">';
                                                    foreach($b->details as $bd) {
                                                        if($bd->key == 'added_price') {
                                                            $html .= '+'.$bd->value;
                                                        }
                                                    }
                                                $html .= '</span>
                                            </span>
                                        </div>
                                    </div>';

                            $html .= '<div class="blog-item-content bg-white p-1 boat_it">
                                        <h3 class="text-center font-weight-bold mb-4 pt-2">
                                            <a href="'.$b->slug->slug.'" target="_blank">'.$b->page_name.'</a>
                                        </h3>';

                            $html .= '<div class="text-center mb-3 boat-info">
                                <span class="text-capitalize">
                                    <i class="fas fa-map-marker-alt"></i> ';
                                    foreach($b->details as $bd){
                                        if($bd->key == 'harbor'){
                                            $html .= $bd->value;
                                        }
                                    }
                                $html .= '</span>
                            </div>';

                            $html .= '<div class="text-center mb-3 boat-info">
                                <span class="text-capitalize mr-3">
                                    <i class="fas fa-ruler-horizontal"></i> ';
                                        foreach($b->details as $bd){
                                            if($bd->key == 'size'){
                                                $html .= $bd->value;
                                            }
                                        } $html .= ' FT
                                </span>';

                                $html .= '<span class="text-capitalize mr-3">
                                    <i class="fas fa-tachometer-alt"></i> ';
                                    foreach($b->details as $bd){
                                        if($bd->key == 'speed'){
                                            $html .= $bd->value;
                                        }
                                    } $html .= ' MPH
                                </span>';

                                $html .= '<span class="text-capitalize mr-3">
                                    <i class="fas fa-user-friends"></i> ';
                                    foreach($b->details as $bd){ 
                                        if($bd->key == 'capacity'){
                                            $html .= $bd->value;
                                        }
                                    }
                                $html .= '</span>';

                                $html .= '<span class="text-capitalize">
                                    <i class="fas fa-bed"></i> ';
                                    foreach($b->details as $bd){
                                        if($bd->key == 'beds'){
                                            $html .= $bd->value;
                                        }
                                    }
                                $html .= '</span>
                            </div>';

                            $html .= '<div class="text-center boat-info">';
                                foreach($b->details as $bd) {
                                    if($bd->key == 'day_trips') {
                                        $html .= '<span class="text-capitalize">
                                            <i class="fa fa-sun-o"></i> Day Trips
                                        </span>';
                                    }
                                }

                                foreach($b->details as $bd) {
                                    if($bd->key == 'overnights' && $bd->value == 'on') {
                                        $html .= '<span class="text-capitalize ml-2">
                                            <i class="fa fa-moon-o"></i> Overnights
                                        </span>';
                                    }
                                }
                            $html .= '</div>';
                 
                            $html .= '<div class="col text-center mt-4 pb-3">
                                <a href="'.$b->slug->slug.'" target="_blank" class="btn btn-small btn-main btn-round-full border-0 font-weight-bold button-space button-width">Learn More</a>
                            </div>';
                            
                            $html .= '</div>';
                        } // canShow Close
                        $html .= '</div>'; //Boat box starting div close
                        $html .= '</div>'; //Boat row close
                    }
                } //$c->boats close
                $html .= '</div>'; //Boat row close
                $html .= '</div>'; //Category row close
            }
        }
        if($boatFound){
            $result = array('status' => 1, 'message' => 'Data received', 'data' => $html);
        }
        else{
            $result = array('status' => 0, 'message' => 'No record found');
        }
        return response()->json($result);
    }

    // Function to store leads in upboard database
    public function storeUpboardLead($data)
    { 
        //echo "<pre>"; print_r($data);exit;
        $param = array();
        $source_url = '';

        if(!empty($data)) {
            if(isset($data['Full Name'])){
                $param['full-name'] = $data['Full Name'];
            }

            if(isset($data['fullName'])){
                $param['full-name'] = $data['fullName'];
            }

            // If not set
            if(!isset($param['full-name']))
                $param['full-name'] = NULL;

            if(isset($data['Phone'])){
                $param['phone'] = $data['Phone'];
            }

            if(isset($data['mobilePhone'])){
                $param['phone'] = $data['mobilePhone'];
            }

            // If not set
            if(!isset($param['phone']))
                $param['phone'] = NULL;

            if(isset($data['email'])){
                $param['email'] = $data['email'];
            }

            if(isset($data['Email'])){
                $param['email'] = $data['Email'];
            }

            // If not set
            if(!isset($param['email']))
                $param['email'] = NULL;

            if(isset($data['Preferred Date & Time'])){
                $param['date-requested'] = $data['Preferred Date & Time'];
            }
            else
                $param['date-requested'] = NULL;


            if(isset($data['Preferred Time'])){
                $param['time-requested'] = $data['Preferred Time'];
            }
            else
                $param['time-requested'] = NULL;

            if(isset($data['numberOfGuests'])){
                $param['number-of-guests'] = $data['numberOfGuests'];
            }

            if(isset($data['#Guests'])){
                $param['number-of-guests'] = $data['#Guests'];
            }

            if(isset($data['Overnight #Guests'])){
                $param['number-of-guests'] = $data['Overnight #Guests'];
            }

            // If not set
            if(!isset($param['number-of-guests']))
                $param['number-of-guests'] = NULL;

            if(isset($data['Budget'])){
                $param['total-budget'] = $data['Budget'];
            }

            if(isset($data['Budget $'])){
                $param['total-budget'] = $data['Budget $'];
            }

            // If not set
            if(!isset($param['total-budget']))
                $param['total-budget'] = NULL;

            if(isset($data['Boat Choice'])){
                $param['boat-choice1'] = $data['Boat Choice'];
            }

            if(isset($data['boatChoice'])){
                $param['boat-choice1'] = $data['boatChoice'];
            }

            // If not set
            if(!isset($param['boat-choice1']))
                $param['boat-choice1'] = NULL;

            if(isset($data['boatChoice2'])){
                $param['boat-choice2'] = $data['boatChoice2'];
            }
            else
                $param['boat-choice2'] = NULL;

            if(isset($data['boatChoice3'])){
                $param['boat-choice3'] = $data['boatChoice3'];
            }
            else
                $param['boat-choice3'] = NULL;

            if(isset($data['Additional Message'])){
                $param['additional-notes'] = $data['Additional Message'];
            }

            if(isset($data['Requests/Comments'])){
                $param['additional-notes'] = $data['Requests/Comments'];
            }

            if(isset($data['Additional Notes'])){
                $param['additional-notes'] = $data['Additional Notes'];
            }

            // If not set
            if(!isset($param['additional-notes']))
                $param['additional-notes'] = NULL;

            // Additional Fields
            if(isset($data['#Nights'])){
                $param['nights'] = $data['#Nights'];
            }

            if(isset($data['#Bedrooms'])){
                $param['bedrooms'] = $data['#Bedrooms'];
            }

            if(isset($data['chefNeeded'])){
                $param['chef_needed'] = $data['chefNeeded'];
            }

            if(isset($data['Departure Date'])){
                $param['departure_date'] = $data['Departure Date'];
            }

            if(isset($data['Departure Time'])){
                $param['departure_time'] = $data['Departure Time'];
            }

            if(isset($data['Return Date'])){
                $param['return_date'] = $data['Return Date'];
            }

            if(isset($data['Return Time'])){
                $param['return_time'] = $data['Return Time'];
            }

            // More Fields
            if(isset($data['Purpose of Trip'])){
                $param['purpose_of_trip'] = $data['Purpose of Trip'];
            }

            if(isset($data['Event Date'])){
                $param['event_date'] = $data['Event Date'];
            }

            if(isset($data['Departure Dock'])){
                $param['departure_dock'] = $data['Departure Dock'];
            }

            if(isset($data['Return Dock'])){
                $param['return_dock'] = $data['Return Dock'];
            }

            if(isset($data['Is departure dock reserved and/or paid for?'])){
                $param['is_departure_dock_reserved_and_paid'] = $data['Is departure dock reserved and/or paid for?'];
            }

            if(isset($data['Is return dock reserved and/or paid for?'])){
                $param['is_return_dock_reserved_and_paid'] = $data['Is return dock reserved and/or paid for?'];
            }

            if(isset($data['Alcohol Type'])){
                $param['alcohol_type'] = $data['Alcohol Type'];
            }

            if(isset($data['Food Type'])){
                $param['food_type'] = $data['Food Type'];
            }

            if(isset($data['Backup Dates'])){
                $param['backup_dates'] = $data['Backup Dates'];
            }

            // Some more fields
            if(isset($data['Itinerary'])){
                $param['itinerary-requested'] = $data['Itinerary'];
            }


            // If Key is an array - From Water Toys Page
            if(isset($data['Select Water Toys']) && is_array($data['Select Water Toys'])){
                $waterToys = array();
                foreach ($data['Select Water Toys'] as $val) {
                    $waterToys[] = $val;
                }

                if(!empty($waterToys))
                    $param['water_toys'] = implode(",", $waterToys);
            }

            $param['source'] = 'hamptonsboatrental.com';
            $param['source_url'] = $source_url = $_SERVER['HTTP_REFERER']; 
        }

        // print_r($param);
        // Now store the lead in the DB
        if(!empty($param)) {

            // Get last maximum serial number
            $sn_no = DB::connection('mysql2')->table('incoming_data')->max('sn_no');
            $sn = 0;
            if(isset($sn_no)){
                $sn = $sn_no;
            }
            $sn = $sn + 1;
            // echo "Serial Number: ".$sn;

            // Insert basic info of the lead
            if($source_url == 'https://hamptonsboatrental.com/ready-to-book/')
                $type = '5466';
            else if($source_url == 'https://hamptonsboatrental.com/hamptons-boat-charters/')
                $type = '4759';
            else if($source_url == 'https://hamptonsboatrental.com/bachelorette-parties/')
                $type = '1319';
            else if($source_url == 'https://hamptonsboatrental.com/')
                $type = '5667';
            else if($source_url == 'https://hamptonsboatrental.com/overnight-yacht-request/')
                $type = '7058';
            else if($source_url == 'https://hamptonsboatrental.com/hamptons-event-yacht-request/' || $source_url == 'https://hamptonsboatrental.com/hamptons-event-yacht-request-/')
                $type = '7050';
            else
                $type = 'upboard';

            $record = array(
                'key' => '_wpcf7',
                'value' => $type, 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            $record = array(
                'key' => '_wpcf7_version',
                'value' => '5.1.1', 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            $record = array(
                'key' => '_wpcf7_locale',
                'value' => 'en_US', 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            $record = array(
                'key' => '_wpcf7_unit_tag',
                'value' => 'wpcf7-f5656-p5654-o1', 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            $record = array(
                'key' => '_wpcf7_container_post',
                'value' => 'upboard', 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            $record = array(
                'key' => 'g-recaptcha-response',
                'value' => null, 
                'sn_no' => $sn
            );
            DB::connection('mysql2')->table('incoming_data')->insert($record);

            foreach($param as $k => $v){
                $record = array(
                    'key' => $k,
                    'value' => $v, 
                    'sn_no' => $sn
                );
                $rs = DB::connection('mysql2')->table('incoming_data')->insert($record);    
            }

            // Insert status key with this request
            $record = array(
                'key' => 'status',
                'value' => 'Requested', 
                'sn_no' => $sn
            );
            $rs = DB::connection('mysql2')->table('incoming_data')->insert($record); 

            // Update Entry Date
            $record = array(
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ); 
            $rs = DB::connection('mysql2')->table('incoming_data')->where('sn_no', $sn)->update($record);
        }
    }
}
