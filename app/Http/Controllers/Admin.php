<?php

namespace App\Http\Controllers;

use App\AllMenu;
use App\ContactForms;
use App\Menus;
use App\Headerlogo;
use App\Pages;
use App\Routes;
use App\Settings;
use App\Slider;
use App\SliderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Boat;
use App\BoatDetail;
use App\ActivityLog;
use App\User;
use App\Destinations;
use App\UserRole;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Validator;
use App\Helper\CommonFunction;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;

class Admin extends Controller
{
    private $destination = array();
    private $awesomePlace = array();
    private $duration = array();
    private $boatType = array();
    private $entryDate = '';
    private $boatFields = [
                'price',
                'added_price',
                'harbor',
                '4_hour',
                '8_hour',
                'best_seller',
                'jet_ski',
                'size',
                'speed',
                'capacity',
                'beds',
                'boatType',
                'destination',
                'specializedDestination',
                'duration',
                'day_trips',
                'overnights',
                'jkeyword1',
                'jkeyword2',
                'jkeyword3',
                'sea_bob',
                'brand_new',
                'excellent_for',
                'urlranking1',
                'urlranking2',
                'urlranking3',
                'exactkey1',
                'exactkey2',
                'exactkey3',
                'densitykey1',
                'densitykey2',
                'densitykey3',
                'varkey1',
                'varkey2',
                'varkey3',
                'lsikey1',
                'lsikey2',
                'lsikey3',
                'seo_brad_data',
                'paddle-board',
    ];
    private $pageFields = [
                'seo_brad_data',
                'urlranking1',
                'urlranking2',
                'urlranking3',
                'exactkey1',
                'exactkey2',
                'exactkey3',
                'densitykey1',
                'densitykey2',
                'densitykey3',
                'varkey1',
                'varkey2',
                'varkey3',
                'lsikey1',
                'lsikey2',
                'lsikey3',
    ];
    private $destinationFields = [
                'seo_brad_data',
                'urlranking1',
                'urlranking2',
                'urlranking3',
                'exactkey1',
                'exactkey2',
                'exactkey3',
                'densitykey1',
                'densitykey2',
                'densitykey3',
                'varkey1',
                'varkey2',
                'varkey3',
                'lsikey1',
                'lsikey2',
                'lsikey3',
    ];
    private $dateFormat = 'Y-m-d H:i:s';

    public function __construct()
    { 
        $boatData = CommonFunction::getBoatCommonData();
        $this->destination = $boatData['destination'];
        $this->awesomePlace = $boatData['awesomePlace'];
        $this->duration = $boatData['duration'];
        $this->boatType = $boatData['boatType'];
        $this->entryDate = date($this->dateFormat);
    }
    
    /**
     * Dashboard - function for dashboard page
    */
    public function dashboard(){
        // echo Session::get('isLoggedIn');exit;
        CommonFunction::isUserLogin();

        return view('admin.pages.dashboard', [
            'pages' => Pages::count(),
            'categories' => Category::count(),
            'boats' => Boat::count(),
            'contacts' => ContactForms::count()
        ]);
    }

    /**
     * boats - function to show all the boats
     */
    public function boats(Request $request){
        CommonFunction::isUserLogin();

        $sort = 'asc';
        if($request->exists('sort') && $request->sort != null){
            $sort = $request->sort;
        }
        $boats = Boat::where('status', 'active')
            ->where('is_deleted', '0')
            ->orderBy('sn_no', $sort)
            ->get();
        $cat = null;
        if($request->exists('category') && $request->category != null){
            $cat = $request->get('category');
            $boats = Boat::where('status', 'active')
                ->where('is_deleted', '0')
                ->where('cat_id', $cat)
                ->orderBy('sn_no', $sort)
                ->get();
        }
        if($request->isMethod('post')){
            foreach($request->get('order') as $k => $v){
                $boat = Boat::findOrFail($k);
                $boat->sn_no = $v;
                $boat->save();
            }
            return redirect()
                ->back()
                ->with('success', 'Boats were serialized successfully!');
        }
        $categories = Category::all();
        foreach($boats as $b){
            if($b->cat_id != null){
                $b->category = Category::find($b->cat_id);
            }
        }
        return view('admin.pages.boats', [
            'boats' => $boats,
            'cat' => $cat,
            'sort' => $sort,
            'categories' => $categories,
            'modals' => 'admin.pages.modals.boats-modals',
            'js' => 'admin.pages.js.boats-js'
        ]);
    }

    /**
     * addBoats - function to add boats from admin panel
     */
    public function addBoats(Request $request){
        CommonFunction::isUserLogin();
        $categories = Category::all();

        if($request->isMethod('post')){
            // echo "<pre>"; print_r($request->all()); exit;
            
            $boat = new Boat();
            $errors = array();
            if(!$boat->validate($request->all())){
                $boat_e = $boat->errors();
                foreach ($boat_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(empty($errors))
            {
                $boat->content = $request->get('content');
                $boat->meta_description = $request->get('meta_description');
                $boat->meta_keyword = $request->get('meta_keyword');
                $boat->boat_script = $request->get('boat_script');
                $boat->title = $request->title;
                $boat->page_name = $request->page_name;

                if($request->file('new_local_cruising_area') != ''){
                    $file = $request->file('new_local_cruising_area')->getClientOriginalName(); 
                    $extension = explode(".", $file);
                    $filename = date('ymdhis').".".$extension[1];
                    $request->file('new_local_cruising_area')->move(base_path('/public/photos/2/'), $filename);
                    $boat->new_local_cruising_area = $filename;
                }

                if($request->file('brochure') != ''){
                    $file = $request->file('brochure')->getClientOriginalName(); 
                    $extension = explode(".", $file);
                    $filename = date('ymdhis').".".$extension[1];
                    $request->file('brochure')->move(base_path('/public/photos/2/'), $filename);
                    $boat->brochure = $filename;
                }

                if($request->file('specification_pdf') != ''){
                    $file = $request->file('specification_pdf')->getClientOriginalName(); 
                    $extension = explode(".", $file);
                    $filename = date('ymdhis').".".$extension[1];
                    $request->file('specification_pdf')->move(base_path('/public/photos/2/'), $filename);
                    $boat->specification_pdf = $filename;
                }
                

                if($request->exists('category') && $request->category != null){
                    $boat->cat_id = (int)$request->category;
                }
                if($request->exists('slider_id') && $request->slider_id != null){
                    $boat->slider_id = $request->slider_id;
                }
                $boat->sn_no = $request->sn_no;
                $boat->image = $request->image;


                //echo "<pre>"; print_r($boat);
                if($boat->save())
                {
                    $route = new Routes();
                    if($request->slug != null){
                        $route->slug = $this->slugify($request->slug);
                    }else{
                        $route->slug = $this->slugify($boat->title);
                    }
                    $route->pbc_id = $boat->id;
                    $route->type = 'boat';
                    $route->save();
                    $fixed_additional_fields = $this->boatFields;
                    foreach($fixed_additional_fields as $f){
                        $v = null;
                        if($request->exists($f)){
                            $v = $request->get($f);
                        }
                        $details = new BoatDetail();
                        $details->key = $f;

                        // convert in comma seprated values
                        if(isset($v) && is_array($v)) //$v == 'boatType' || $v == 'destination' || $v == 'duration')
                            $details->value = implode(',', $v);
                        else    
                            $details->value = $v;

                        $details->boat_id = $boat->id;
                        $details->save();
                    }

                    // Insert Package if available
                    if(isset($request->keyname) && !empty($request->keyname)) 
                    {
                        $keyname = $request->keyname;
                        for($i = 0; $i < count($keyname); $i++)
                        {   
                            $key = str_replace(" ", "",(strtolower($keyname[$i])));
                            $values = $request->$key;

                            for($j=0; $j < count($values); $j++) {
                                $record = array(
                                    'keyname' => strtolower($keyname[$i]), 
                                    'value' => $request->$key[$j],
                                    'boat_id' => $boat->id, 
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                                $rs = DB::table('boat_packages')->insert($record);
                            }
                        }   
                    }

                    // Insert Specification if available
                    if(isset($request->stext) && !empty($request->stext) && isset($request->stext1) && !empty($request->stext1)) 
                    {
                        $stext = $request->stext;
                        $stext1 = $request->stext1;

                        for($i = 0; $i < count($stext); $i++)
                        {   
                            if($stext[$i] != '') {
                                $speci = array(
                                    'stext' => $stext[$i],
                                    'stext1' => $stext1[$i],
                                    'boat_id' => $boat->id, 
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                            $specis = DB::table('boat_specification')->insert($speci);
                            }
                        }   
                    }

                    // Insert Heading And Content if available
                    if(isset($request->heading) && !empty($request->heading) && isset($request->contentnew) && !empty($request->contentnew)) 
                    {
                        $heading = $request->heading;
                        $content = $request->contentnew;
                      
                        for($i=0; $i < count($heading); $i++)
                        {
                            if($heading[$i] != '' && $content[$i] != '') {
                                $record = array(
                                    'heading' => $heading[$i], 
                                    'content' => $content[$i], 
                                    'boat_id' => $boat->id, 
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                               
                                $rs = DB::table('boat_headingcontent')->insert($record);
                            }
                        }     
                    }

                    // Insert Heading Two And Content Two if available
                    if(isset($request->heading_two) && !empty($request->heading_two) && isset($request->content_two) && !empty($request->content_two)) 
                    {
                        $heading = $request->heading_two;
                        $content = $request->content_two;
                      
                        for($i=0; $i < count($heading); $i++)
                        {
                            if($heading[$i] != '' && $content[$i] != '') {
                                $record = array(
                                    'heading_two' => $heading[$i], 
                                    'content_two' => $content[$i], 
                                    'boat_id' => $boat->id, 
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                               
                                $rs = DB::table('boat_headingcontent')->insert($record);
                            }
                        }     
                    }

                    // Insert Vedio Url if available
                    if(isset($request->video) && !empty($request->video)) 
                    {
                        $video = $request->video;
                       
                        for($i=0; $i < count($video); $i++)
                        {
                            if($video[$i] != '') {
                                $record = array(
                                    'video' => $video[$i],  
                                    'boat_id' => $boat->id, 
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                               
                                $rs = DB::table('boat_videocontent')->insert($record);
                            }
                        }     
                    }

                    // Insert Water Toys if available
                    if(isset($request->wcat_id) && !empty($request->wcat_id)) 
                    {
                        $cat_id = $request->wcat_id;
                        for($i = 0; $i < count($cat_id); $i++)
                        {   
                            //$key = str_replace(" ", "",(strtolower($keyname[$i])));
                            //$values = $request->$key;
                            $cid = $cat_id[$i];
                            //print_r($_POST['keycat_'.$cid]);

                            if(isset($_POST['keycat_'.$cid])) 
                            {
                                $catItems = $_POST['keycat_'.$cid];
                                $catValues = $_POST['valcat_'.$cid];
                                $catLinks = $_POST['linkcat_'.$cid]; $request->linkcat_.$cid;
                                $catIcons = $_POST['iconkeycat_'.$cid]; $request->iconkeycat_.$cid;
                                $catSequences = $_POST['sequencecat_'.$cid]; $request->sequencecat_.$cid;
                                 
                                for($j=0; $j < count($catItems); $j++) 
                                {
                                    $record = array(
                                        'cat_id' => $cid,
                                        'keyname' => strtolower($catItems[$j]), 
                                        'value' => strtolower($catValues[$j]),
                                        'link' => $catLinks[$j], 
                                        'sequence' => $catSequences[$j],
                                        'icon' => $catIcons[$j],
                                        'boat_id' => $boat->id,
                                        'created_at' => date($this->dateFormat), 
                                        'updated_at' => date($this->dateFormat),
                                    );
                                    //print_r($record);
                                    $rs = DB::table('boat_water_toys')->insert($record);
                                }
                            }

                            //Insert extra Key and values
                            if(isset($_POST['tkeynameCat_'.$cid]) && !empty($_POST['tkeynameCat_'.$cid])) 
                            {
                                $extraItems = $_POST['tkeynameCat_'.$cid];
                                //print_r($extraItems);

                                for($j=0; $j < count($extraItems); $j++) 
                                {
                                    $key = strtolower($extraItems[$j]);
                                    $values = $_POST[$key.'cat_'.$cid];
                                    
                                    foreach ($values as $k => $v) 
                                    {
                                        $record = array(
                                            'cat_id' => $cid,
                                            'keyname' => strtolower($key), 
                                            'value' => $v,
                                            'boat_id' => $boat->id,
                                            'created_at' => date($this->dateFormat), 
                                            'updated_at' => date($this->dateFormat),
                                        );
                                        $rs = DB::table('boat_water_toys_cols')->insert($record);
                                    }
                                }
                            }
                        }   
                    }

                    $msg = 'New boat "'.$request->title.'" created by';
                    CommonFunction::addActivityLog($msg);
                    
                    return redirect()
                        ->to('/dashboard/boats-add')
                        ->with('success', 'Boat was added successfully!');
                }else{
                    return redirect()
                        ->to('/dashboard/boats-add')
                        ->with('error', 'Something went wrong. Please try again.');
                }
            }else{
                return redirect()
                    ->to('dashboard/boats-add')
                    ->withInput()
                    ->with('errors', $errors);
            }
        }
        
        // Get Water Toys category from helper
        $waterToysCat = CommonFunction::getWaterToysCat();

        //$dir_path = asset('public/photos/2/icons/');
        $icons = CommonFunction::getIcons();
        $dirPat = asset('photos/2/Icons/'); 

        return view('admin.pages.boats-add', [
            'categories' => $categories,
            'destination' => $this->destination,
            'duration' => $this->duration,
            'boatType' => $this->boatType,
            'waterToysCat' => $waterToysCat,
            'icons' => $icons,
            'dirPat' => $dirPat,
            'sliders' => Slider::all(),
            'awesomePlace' => array(),
            'js' => 'admin.pages.js.boats-add-js',
            'modals' => 'admin.pages.modals.boats-add-modals'
        ]);
    }

    /**
     * editBoat - function to edit a boat
    */
    public function editBoat(Request $request, $id){
        CommonFunction::isUserLogin();
        $boat = Boat::findOrFail($id);
        $slug = Routes::where('type', 'boat')
            ->where('pbc_id', $id)
            ->first();
        $boat->slug = $slug->slug;
        $boat->details = BoatDetail::where('boat_id', $id)->get();

        /* === Get package data of the boat === */
        $boat->boatPackage = DB::table('boat_packages')
                ->where('boat_id','=',$id)
                ->select('*')
                ->groupBy('keyname')
                ->orderBy('id')
                ->get()->toArray();

        $boat->boatPackageAll = DB::table('boat_packages')
                ->where('boat_id','=',$id)
                ->select('*')
                ->orderBy('id')
                ->get()->toArray();

        /* === Get Water toys data of the boat === */
        $boat->waterToys = DB::table('boat_water_toys')
                ->where('boat_id','=',$id)
                ->select('*')->get()->toArray();

        $boat->boat_specification = DB::table('boat_specification')
                ->where('boat_id','=',$id)
                ->select('*')->get()->toArray();

        $boat->boat_headingcontent = DB::table('boat_headingcontent')
                ->where('boat_id', '=', $id)
                ->where('heading_two', '=', NULL)
                ->where('content_two', '=', NULL)
                ->select('*')
                ->orderBy('id', 'asc')
                ->get()->toArray();

        $boat->boat_headingcontentTwo = DB::table('boat_headingcontent')
                ->where('boat_id','=',$id)
                ->where('heading','=',NULL)
                ->where('content','=',NULL)
                ->select('*')
                ->orderBy('id', 'asc')
                ->get()->toArray();

        $boat->boat_videocontent = DB::table('boat_videocontent')
                ->where('boat_id','=',$id)
                ->select('*')->get()->toArray();
            
        $categories = Category::all();
        if($request->isMethod('post')){
            //echo "<pre>"; print_r($request->all()); exit;

            $boat = Boat::findOrFail($id);
            $boat->content = $request->get('content');
            $boat->meta_description = $request->get('meta_description');
            $boat->meta_keyword = $request->get('meta_keyword');
            if($request->get('boat_script') != ""){
                $boat->boat_script = $request->get('boat_script');
            }else{
                $boat->boat_script='';
            }
            
            $boat->title = $request->title;
            $boat->page_name = $request->page_name;
            if($request->exists('category') && $request->category != null){
                $boat->cat_id = (int)$request->category;
            }
            if($request->exists('slider_id') && $request->slider_id != null){
                $boat->slider_id = $request->slider_id;
            }
            $boat->sn_no = $request->sn_no;
            $boat->image = $request->image;

            if($request->file('new_local_cruising_area') != ''){
                $file = $request->file('new_local_cruising_area')->getClientOriginalName(); 
                $extension = explode(".", $file);
                $filename = date('ymdhis').".".$extension[1];
                $request->file('new_local_cruising_area')->move(base_path('/public/photos/2/'), $filename);
                $boat->new_local_cruising_area = $filename;

                $image_path = base_path('/public/photos/2/').$request->local_cruising_area; 

                if (file_exists($image_path)) {
                       @unlink($image_path);
                }

            }

            if($request->file('brochure') != ''){
                $file = $request->file('brochure')->getClientOriginalName(); 
                $extension = explode(".", $file);
                $filename = date('ymdhis').".".$extension[1];
                $request->file('brochure')->move(base_path('/public/photos/2/'), $filename);
                $boat->brochure = $filename;

                $image_path = base_path('/public/photos/2/').$request->oldbrochure; 

                if (file_exists($image_path)) {
                       @unlink($image_path);
                }

            }

            if($request->file('specification_pdf') != ''){
                $file = $request->file('specification_pdf')->getClientOriginalName(); 
                $extension = explode(".", $file);
                $filename = date('ymdhis').".".$extension[1];
                $request->file('specification_pdf')->move(base_path('/public/photos/2/'), $filename);
                $boat->specification_pdf = $filename;

                $image_path = base_path('/public/photos/2/').$request->old_specification_pdf; 

                if (file_exists($image_path)) {
                       @unlink($image_path);
                }

            }

            $boat->save();
            $slug->slug = $request->slug;
            $slug->save();
            $fixed_additional_fields = $this->boatFields;

            foreach($fixed_additional_fields as $f){
                $v = null;
                if($request->exists($f)){
                    $v = $request->get($f);
                }
                $details = BoatDetail::where('boat_id', $id)
                    ->where('key', $f)
                    ->first();
                if(!empty($details))
                {
                    // convert in comma seprated values
                    if(isset($v) && is_array($v)) //$v == 'boatType' || $v == 'destination' || $v == 'duration')
                        $details->value = implode(',', $v);
                    else    
                        $details->value = $v;

                    $details->save();
                }else{
                    $details = new BoatDetail();
                    $details->boat_id = $id;
                    $details->key = $f;
                    
                    // convert in comma seprated values
                    if(isset($v) && is_array($v)) //$v == 'boatType' || $v == 'destination' || $v == 'duration')
                        $details->value = implode(',', $v);
                    else    
                        $details->value = $v;

                    $details->save();
                }
            }

            // Insert Package if available
            if(isset($request->keyname) && !empty($request->keyname)) 
            {
                // First delete the old data
                DB::table('boat_packages')->where(['boat_id' => $id])->delete();

                $keyname = $request->keyname;
                for($i = 0; $i < count($keyname); $i++)
                {   
                    $key = str_replace(" ", "",(strtolower($keyname[$i])));
                    $values = $request->$key;

                    for($j=0; $j < (count($values)-1); $j++) { // Becuase 1 empty row is comming from html
                        //if($request->$key[$j] != '-') {
                            $record = array(
                                'keyname' => strtolower($keyname[$i]), 
                                'value' => $request->$key[$j],
                                'boat_id' => $boat->id, 
                                'created_at' => date($this->dateFormat), 
                                'updated_at' => date($this->dateFormat),
                            );
                            $rs = DB::table('boat_packages')->insert($record);
                        //}
                    }
                }   
            }

            // Insert Water Toys if available
            if(isset($request->wcat_id) && !empty($request->wcat_id)) 
            {
                // First delete the old data
                DB::table('boat_water_toys')->where(['boat_id' => $id])->delete();
                DB::table('boat_water_toys_cols')->where(['boat_id' => $id])->delete();

                $cat_id = $request->wcat_id;
                for($i = 0; $i < count($cat_id); $i++)
                {   
                    $cid = $cat_id[$i];

                    if(isset($_POST['keycat_'.$cid])) 
                    {
                        $catItems = $_POST['keycat_'.$cid];
                        $catValues = $_POST['valcat_'.$cid];
                        $catLinks = $_POST['linkcat_'.$cid]; $request->linkcat_.$cid;
                        $catIcons = $_POST['iconkeycat_'.$cid]; $request->iconkeycat_.$cid;
                        $catSequences = $_POST['sequencecat_'.$cid]; $request->sequencecat_.$cid; 
                        
                        for($j=0; $j < count($catItems); $j++) 
                        {
                            if($catItems[$j] != '-' && $catValues[$j] != '-') {
                                $record = array(
                                    'cat_id' => $cid,
                                    'keyname' => strtolower($catItems[$j]), 
                                    'value' => strtolower($catValues[$j]),
                                    'link' => $catLinks[$j], 
                                    'sequence' => $catSequences[$j],
                                    'icon' => $catIcons[$j],
                                    'boat_id' => $boat->id,
                                    'created_at' => date($this->dateFormat), 
                                    'updated_at' => date($this->dateFormat),
                                );
                                //print_r($record);
                                $rs = DB::table('boat_water_toys')->insert($record);
                            }
                        }
                    }

                    //Insert extra Key and values
                    if(isset($_POST['tkeynameCat_'.$cid]) && !empty($_POST['tkeynameCat_'.$cid])) 
                    {
                        $extraItems = $_POST['tkeynameCat_'.$cid];
                        //print_r($extraItems);

                        for($j=0; $j < count($extraItems); $j++) 
                        {
                            $key = strtolower($extraItems[$j]);
                            $values = $_POST[$key.'cat_'.$cid];
                            
                            foreach ($values as $k => $v) 
                            {
                                if($v != '-') {
                                    $record = array(
                                        'cat_id' => $cid,
                                        'keyname' => strtolower($key), 
                                        'value' => $v,
                                        'boat_id' => $boat->id,
                                        'created_at' => date($this->dateFormat), 
                                        'updated_at' => date($this->dateFormat),
                                    );
                                    $rs = DB::table('boat_water_toys_cols')->insert($record);
                                }
                            }
                            
                        }
                    }
                }   
            }

            // Insert Specification if available
            if(isset($request->stext) && !empty($request->stext) && isset($request->stext1) && !empty($request->stext1)) 
            {
                // First delete the old data
                DB::table('boat_specification')->where(['boat_id' => $id])->delete();

                //Insert as new
                $stext = $request->stext;
                $stext1 = $request->stext1;
               
                
                for($i=0; $i < count($stext); $i++)
                {
                    if($stext[$i] != '' && $stext1[$i] != '') {
                        $specification = array(
                            'stext' => $stext[$i], 
                            'stext1' => $stext1[$i], 
                            'boat_id' => $boat->id, 
                            'created_at' => date($this->dateFormat), 
                            'updated_at' => date($this->dateFormat),
                        );
                        $s1 = DB::table('boat_specification')->insert($specification);
                    }
                }     
            }

            // Insert Heading And Content if available
            DB::table('boat_headingcontent')->where(['boat_id' => $id])->delete();
            if(isset($request->heading) && !empty($request->heading) && isset($request->contentnew) && !empty($request->contentnew)) 
            {
                $heading = $request->heading;
                $content = $request->contentnew;
              
                //for($i=0; $i < count($heading); $i++)
                for($i=0; $i < $request->totalHC1; $i++)
                {
                    if($heading[$i] != '' && $content[$i] != '') {
                        $record = array(
                            'heading' => $heading[$i], 
                            'content' => $content[$i], 
                            'boat_id' => $boat->id, 
                            'created_at' => date($this->dateFormat), 
                            'updated_at' => date($this->dateFormat),
                        );
                       
                        $rs = DB::table('boat_headingcontent')->insert($record);
                    }
                }     
            }

            // Insert Heading And Content Two if available
            if(isset($request->heading_two) && !empty($request->heading_two) && isset($request->content_two) && !empty($request->content_two)) 
            {
                $heading = $request->heading_two;
                $content = $request->content_two;
              
                //for($i=0; $i < count($heading); $i++)
                for($i=0; $i < $request->totalHC2; $i++)
                {
                    if($heading[$i] != '' && $content[$i] != '') {
                        $record = array(
                            'heading_two' => $heading[$i], 
                            'content_two' => $content[$i], 
                            'boat_id' => $boat->id, 
                            'created_at' => date($this->dateFormat), 
                            'updated_at' => date($this->dateFormat),
                        );
                       
                        $rs = DB::table('boat_headingcontent')->insert($record);
                    }
                }     
            }

             // Insert video if available
            if(isset($request->video) && !empty($request->video)) 
            {
                // First delete the old data
                DB::table('boat_videocontent')->where(['boat_id' => $id])->delete();

                //Insert as new
                $video = $request->video;
               
                
                for($i=0; $i < count($video); $i++)
                {
                    if($video[$i] != '') {
                        $specification = array(
                            'video' => $video[$i], 
                            'boat_id' => $boat->id, 
                            'created_at' => date($this->dateFormat), 
                            'updated_at' => date($this->dateFormat),
                        );
                        $s1 = DB::table('boat_videocontent')->insert($specification);
                    }
                }     
            }

            // === Create entry in Activity log ===
            $msg = 'Boat "'.$request->title.'" updated by';
            CommonFunction::addActivityLog($msg);

            return redirect()
                ->to('/dashboard/boats/'.$id)
                ->with('success', 'Boat edited successfully!');
        }

        // Get Water Toys category from helper
        $waterToysCat = CommonFunction::getWaterToysCat();
        $icons = CommonFunction::getIcons();
        $dirPat = asset('photos/2/Icons/'); 

        return view('admin.pages.edit-boat', [
            'boat' => $boat,
            'categories' => $categories,
            'destination' => $this->destination,
            'awesomePlace' => $this->awesomePlace,
            'duration' => $this->duration,
            'boatType' => $this->boatType,
            'waterToysCat' => $waterToysCat,
            'icons' => $icons,
            'dirPat' => $dirPat,
            'sliders' => Slider::all(),
            'modals' => 'admin.pages.modals.edit-boat-modals',
            'js' => 'admin.pages.js.edit-boats-js'
        ]);
    }
    
    /**
     * deleteBoats - function to delete a boat
     */
    public function deleteBoat(Request $request){
        CommonFunction::isUserLogin();
        if($request->isMethod('post')){

            $boat = Boat::findOrFail($request->boat_id);

            if(Boat::destroy($request->boat_id)){
                $route = Routes::where('type', 'boat')
                    ->where('pbc_id', $request->boat_id)
                    ->first();
                Routes::destroy($route->id);
                $boat_details = BoatDetail::where('boat_id', $request->boat_id)->get();
                if(!empty($boat_details)){
                    foreach($boat_details as $bd){
                        BoatDetail::destroy($bd->id);
                    }
                }

                // Delete the Package Data also
                DB::table('boat_packages')->where(['boat_id' => $request->boat_id])->delete();

                // Delete the Water toys Data also
                DB::table('boat_water_toys')->where(['boat_id' => $request->boat_id])->delete();
                DB::table('boat_water_toys_cols')->where(['boat_id' => $request->boat_id])->delete();

                DB::table('boat_headingcontent')->where(['boat_id' => $request->boat_id])->delete();
                DB::table('boat_specification')->where(['boat_id' => $request->boat_id])->delete();

                // === Create entry in Activity log ===
                if(!empty($boat)) {
                    $msg = 'Boat "'.$boat->title.'" deleted by';
                    CommonFunction::addActivityLog($msg);
                }

                return redirect()
                    ->back()
                    ->with('success', 'Boat was deleted successfully!');
            }else{
                return redirect()
                    ->back()
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }
    }

    /**
     * function to make url/link/slug
    */
    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    /**
     * Categories - function for categories CRUD
     */
    public function categories(Request $request){
        CommonFunction::isUserLogin();

        $categories = Category::paginate(5);
        foreach($categories as $c){
            $slug = Routes::where('type', 'category')
                ->where('pbc_id', $c->id)
                ->first();
            $c->slug = $slug->slug;
        }
        if($request->isMethod('post')){
            /**
             * code for add a category
            */
            if($request->action == 'add'){
                $category = new Category();
                $category->title = $request->name;
                $category->details = $request->details;
                $category->featured_image = $request->featured_image;
                $category->sub_caption = $request->sub_caption;
                if($category->save()){
                    $route = new Routes();
                    if($request->slug != null){
                        $route->slug = $this->slugify($request->slug);
                    }else{
                        $route->slug = $this->slugify($category->title);
                    }
                    $route->pbc_id = $category->id;
                    $route->type = 'category';
                    $route->save();
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('success', 'Category was added successfully.');
                }else{
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('error', 'Something went wrong. Please try again.');
                }
            }

            /**
             * code for edit a category
             */
            if($request->action == 'edit'){
                $category = Category::findOrFail($request->edit_id);
                $category->title = $request->title;
                $category->details = $request->details;
                $category->featured_image = $request->featured_image;
                $category->sub_caption = $request->sub_caption;
                if($category->save()){
                    $route = Routes::where('type', 'category')
                        ->where('pbc_id', $request->edit_id)
                        ->first();
                    $route->slug = $request->slug;
                    $route->save();
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('success', 'Category was edited successfully.');
                }else{
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('error', 'Something went wrong. Please try again.');
                }
            }

            /**
             * code for delete a category
             */
            if($request->action == 'delete'){
                if(Category::destroy($request->delete_id)){
                    $route = Routes::where('type', 'category')
                        ->where('pbc_id', $request->edit_id)
                        ->first();
                    Routes::destroy($route->id);
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('success', 'Category was deleted successfully.');
                }else{
                    return redirect()
                        ->to('/dashboard/boat-categories')
                        ->with('error', 'Something went wrong. Please try again.');
                }
            }
        }
        return view('admin.pages.categories', [
            'categories' => $categories,
            'modals' => 'admin.pages.modals.categories-modals',
            'js' => 'admin.pages.js.categories-js'
        ]);
    }

    /**
     * sliders - function to show all the silders
    */
    public function sliders(Request $request){
        CommonFunction::isUserLogin();

        $sliders = Slider::paginate(11);
        return view('admin.pages.sliders', [
            'sliders' => $sliders,
            'modals' => 'admin.pages.modals.sliders-modals',
            'js' => 'admin.pages.js.sliders-js'
        ]);
    }


    /**
     * addSliders - function to add silders
     */
    public function addSliders(Request $request){
        CommonFunction::isUserLogin();

        if($request->isMethod('post')){
            // echo "<pre>"; print_r($request->all());exit;
            DB::transaction(function() use ($request){
                try{
                    $slider = new Slider();
                    $faker = Faker::create();
                    if($request->exists('title')){
                        $slider->title = $request->title;
                    }
                    if($request->exists('details')){
                        $slider->details = $request->details;
                    }

                    if($request->exists('jkeyword1')){
                        $slider->jkeyword1 = $request->jkeyword1;
                    }
                    if($request->exists('jkeyword2')){
                        $slider->jkeyword2 = $request->jkeyword2;
                    }
                    if($request->exists('jkeyword3')){
                        $slider->jkeyword3 = $request->jkeyword3;
                    }
                    $slider->slider_code = $faker->unique()->randomNumber(null);
                    if($slider->save()){
                        $id = $slider->id;
                        if($request->count != 0){
                            for($i = 1; $i <= $request->count; $i++){
                                $details = new SliderDetail();
                                $details->slider_id = $id;
                                if($request->exists('caption'.$i)){
                                    $details->title = $request->get('caption'.$i);
                                }
                                if($request->exists('text'.$i)){
                                    $details->details = $request->get('text'.$i);
                                }
                                if($request->exists('image'.$i)){
                                    $details->image_path = $request->get('image'.$i);
                                }
                                $details->save();
                            }
                        }

                        // === Create entry in Activity log ===
                        $msg = 'New slider "'.$request->title.'" created by';
                        CommonFunction::addActivityLog($msg);

                        return redirect()
                            ->to('/dashboard/sliders')
                            ->with('success', 'Slider added successfully!');
                    }
                }catch (\Exception $e){
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Something went wrong! Please try again!');
                }
            });
        }
        return view('admin.pages.sliders-add', [
            'js' => 'admin.pages.js.sliders-add-js',
            'modals' => 'admin.pages.modals.sliders-add-modals'
        ]);
    }

    /**
     * singleSlider - function to CRUD access for a particular slider
    */
    public function singleSlider(Request $request, $id){
        CommonFunction::isUserLogin();
      
        $slider = Slider::findOrFail($id);
        $slider->slides = SliderDetail::where('slider_id', $id)->orderBy('indexing')->get();
        if($request->isMethod('post')){
              
            //echo "<pre>"; print_r($request->all());exit;   
            DB::transaction(function() use ($request, $id){
                try{
                    $slider = Slider::findOrFail($id);
                    $slider->title = $request->title;
                    $slider->details = $request->details;
                    
                    $slider->jkeyword1 = $request->jkeyword1;
                    $slider->jkeyword2 = $request->jkeyword2;
                    $slider->jkeyword3 = $request->jkeyword3;
                    $slider->updated_at = date($this->dateFormat);

                    if($slider->save()){
                        if($request->count != 0){
                            for($i = 1; $i <= $request->count; $i++){
                                if($request->exists('edit-'.$i)){
                                      
                                   $details = SliderDetail::find($request->get('edit-'.$i));
                                    if($request->exists('caption'.$i)){
                                        $details->title = $request->get('caption'.$i);
                                    }
                                    if($request->exists('text'.$i)){
                                        $details->details = $request->get('text'.$i);
                                    }
                                    if($request->exists('image'.$i)){
                                        $details->image_path = $request->get('image'.$i);
                                    }
                                    if($request->exists('indexing-'.$i)){
                                        $details->indexing   = $request->get('indexing-'.$i);
                                    }

                                    $details->save();
                                    
                                }else{

                                  $details = new SliderDetail();
                                    $details->slider_id = $slider->id;
                                    if($request->exists('caption'.$i)){
                                        $details->title = $request->get('caption'.$i);
                                    }
                                    if($request->exists('text'.$i)){
                                        $details->details = $request->get('text'.$i);
                                    }
                                    if($request->exists('image'.$i)){
                                        $details->image_path = $request->get('image'.$i);
                                    }
                                    $details->save();
                                }
                            }
                           
                        }

                        // === Create entry in Activity log ===
                        $msg = 'Slider "'.$request->title.'" updated by';
                        CommonFunction::addActivityLog($msg);

                        return redirect()->to('/dashboard/slider/'.$id)->with('success', 'Slider was edited successfully!');
                      
                    }
                }catch (\Exception $e){
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Something went wrong! Please try again!');
                }
            });
        }
        return view('admin.pages.sliders-edit', [
            'slider' => $slider,
            'js' => 'admin.pages.js.sliders-edit-js',
            'modals' => 'admin.pages.modals.sliders-edit-modals'
        ]);
    }

    /**
     * deleteSlide - function to delete a slider image
    */
    public function deleteSlide(Request $request){
        CommonFunction::isUserLogin();

        if($request->isMethod('post')){
            //echo "<prE>"; print_r($request->all());

            $sd = DB::table('slider_details')
                    ->leftJoin("sliders as s", "s.id" , "=", "slider_details.slider_id")
                    ->where(['slider_details.id' => $request->slide_id])
                    ->select('s.title')
                    ->first();
        
            if(SliderDetail::destroy([$request->slide_id])){

                // === Create entry in Activity log ===
                if(isset($sd->title)) {
                    $msg = 'Image from slider "'.$sd->title.'" deleted by';
                    CommonFunction::addActivityLog($msg);
                }

                return redirect()
                    ->back()
                    ->with('success', 'Slider image was deleted');
            }else{
                return redirect()
                    ->back()
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }
    }

    /**
     * deleteSlider - function to delete a slider
     */
    public function deleteSlider(Request $request){
        CommonFunction::isUserLogin();

        if($request->isMethod('post')){

            $slider = Slider::findOrFail($request->slider_id);
            
            if(Slider::destroy([$request->slider_id])){

                // === Create entry in Activity log ===
                if(!empty($slider)) {
                    echo $msg = 'Slider "'.$slider->title.'" deleted by';
                    CommonFunction::addActivityLog($msg);
                }

                return redirect()
                    ->back()
                    ->with('success', 'Slider was deleted');
            }else{
                return redirect()
                    ->back()
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }
    }

    /**
     * allMenus - function to control site menus
    */
    public function allMenus(Request $request){
        CommonFunction::isUserLogin();
        
        $menus = AllMenu::paginate(20);
        if($request->isMethod('post')){
            $menu = new AllMenu();
            $menu->title = $request->title;
            $menu->position = $request->position;
            if($menu->save()){
                return redirect()
                    ->to('/dashboard/menus')
                    ->with('success', 'Menu added successfully!');
            }else{
                return redirect()
                    ->to('/dashboard/menus')
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }
        return view('admin.pages.all-menus', [
            'menus' => $menus,
            'js' => 'admin.pages.js.all-menus-js',
            'modals' => 'admin.pages.modals.all-menus-modals'
        ]);
    }

    /**
     * deleteMenu - function to delete a menu
    */
    public function deleteMenu(Request $request){
        if($request->isMethod('post')){

            $menu = AllMenu::findOrFail($request->delete_id);

            if(AllMenu::destroy($request->delete_id)){
                // === Create entry in Activity log ===
                if(!empty($menu)) {
                    $msg = 'Menu "'.$menu->title.'" deleted by';
                    CommonFunction::addActivityLog($msg);
                }
                return redirect()
                    ->to('/dashboard/menus')
                    ->with('success', 'Menu was deleted successfully!');
            }else{
                return redirect()
                    ->to('/dashboard/menus')
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }
    }

    /**
     * menus - function for menus CRUD
     */
    public function menus(Request $request, $id){
        $menu = AllMenu::findOrFail($id);
        $menus = Menus::where('menu_id', $id)
            ->where('parent_route_id', null)
            ->orderBy('sn_no', 'asc')
            ->get();
        $route_ids = array();
        foreach($menus as $m){
            $route_ids[] = $m->route_id;
            $route = Routes::find($m->route_id);
            if($route->type == 'page'){
                $details = Pages::find($route->pbc_id);
                $route->title = $details->title;
                $m->details = $route;
            }
            if($route->type == 'boat'){
                $details = Boat::find($route->pbc_id);
                $route->title = $details->title;
                $m->details = $route;
            }
            if($route->type == 'category'){
                $details = Category::find($route->pbc_id);
                $route->title = $details->title;
                $m->details = $route;
            }
            $submenus = Menus::where('menu_id', $id)
                ->where('parent_route_id', $m->route_id)
                ->where('status', '1')
                ->where('is_deleted', '0')
                ->orderBy('sn_no', 'asc')
                ->get();
            foreach($submenus as $sm){
                $route_ids[] = $sm->route_id;
                $sm_route = Routes::find($sm->route_id);
                if($sm_route->type == 'category'){
                    $details = Category::find($sm_route->pbc_id);
                    $sm_route->title = $details->title;
                    $sm->details = $sm_route;
                }
                if($sm->_routetype == 'page'){
                    $details = Pages::find($sm_route->pbc_id);
                    $sm_route->title = $details->title;
                    $sm->details = $sm_route;
                }
                if($sm_route->type == 'boat'){
                    $details = Boat::find($sm_route->pbc_id);
                    $sm_route->title = $details->title;
                    $sm->details = $sm_route;
                }
            }
            $m->submenus = $submenus;
        }
        $pages = Pages::all();
        foreach($pages as $p){
            $p->route = Routes::where('type', 'page')
                ->where('pbc_id', $p->id)
                ->first();
            if(in_array($p->route->id, $route_ids)){
                $p->menu = 'yes';
            }
        }
        $categories = Category::all();
        foreach($categories as $c){
            $c->route = Routes::where('type', 'category')
                ->where('pbc_id', $c->id)
                ->first();
            if(in_array($c->route->id, $route_ids)){
                $c->menu = 'yes';
            }
        }
        $boats = Boat::all();
        foreach($boats as $b){
            $b->route = Routes::where('type', 'boat')
                ->where('pbc_id', $b->id)
                ->first();
            if(in_array($b->route->id, $route_ids)){
                $b->menu = 'yes';
            }
        }
        if($request->isMethod('post')){
            $previous_data = Menus::where('menu_id', $id)->get();
            foreach($previous_data as $d){
                Menus::destroy($d->id);
            }
            $arr = array();
            parse_str($request->menu, $arr);
            if(isset($arr['route'])){
                $sn = 1;
                foreach($arr['route'] as $k => $v){
                    $add = new Menus();
                    $add->menu_id = $id;
                    $add->route_id = $k;
                    $add->sn_no = $sn;
                    if($v != 'null'){
                        $add->parent_route_id = (int)$v;
                    }
                    if($add->save()){
                        $sn++;
                    }
                }
            }
//            return response()
//                ->json([
//                    'menu' => $menu_builder
//                ], 200);
            return redirect()
                ->to('/dashboard/menus/'.$id)
                ->with('success', 'Menus saved successfully!');
        }
        return view('admin.pages.menus', [
            'js' => 'admin.pages.js.menus-js',
            'modals' => 'admin.pages.modals.menus-modals',
            'menu' => $menu,
            'pages' => $pages,
            'categories' => $categories,
            'boats' => $boats,
            'menus' => $menus
        ]);
    }

    /**
     * addPages - function to add pages dynamically
    */
    public function addPages(Request $request){
        if($request->isMethod('post')){
            //echo '<pre>'; print_r($request->all()); exit;

            DB::transaction(function() use ($request){
                try{
                    $page = new Pages();
                    $page->title = $request->title;
                    $page->page_name = $request->page_name;
                    $page->content = $request->get('content');
                    $page->sub_caption = $request->sub_caption;
                    
                    $page->jkeyword1 = $request->jkeyword1;
                    $page->jkeyword2 = $request->jkeyword2;
                    $page->jkeyword3 = $request->jkeyword3;

                    //$page->contact_form = $request->contact_form;
                    if($request->exists('meta_key')){
                        $page->meta_key = $request->meta_key;
                    }
                    if($request->exists('meta_description')){
                        $page->meta_description = $request->get('meta_description');     
                    }
                    if($request->exists('page_script')){
                        //$page->page_script = $request->get('page_script');     
                    }
                    if($request->exists('image')){
                        $page->featured_image = $request->image;
                    }
                    if($request->exists('slider')){
                        $page->featured_slider = $request->slider;
                    }
                    if($request->exists('template')){
                        $page->template = $request->template;
                    }

                    if($page->save()){
                        // SEO Tools entry
                        $fixed_additional_fields = $this->pageFields;
                        foreach($fixed_additional_fields as $f){
                            $v = null;
                            if($request->exists($f)){
                                $v = $request->get($f);
                            }
                            $record = array(
                                'page_id' => $page->id,
                                'key' => $f,
                                'value' => $v,
                                'created_at' => $this->entryDate,
                                'updated_at' => $this->entryDate
                            ); 
                            $rs = DB::table('pages_seo')->insert($record);
                        }

                        $route = new Routes();
                        if($request->slug != null){
                            $route->slug = $this->slugify($request->slug);
                        }else{
                            $route->slug = $this->slugify($page->title);
                        }
                        $route->pbc_id = $page->id;
                        $route->type = 'page';
                        $route->save();

                        // === Create entry in Activity log ===
                        $msg = 'New page "'.$request->title.'" created by';
                        CommonFunction::addActivityLog($msg);

                        return redirect()
                            ->to('/dashboard/pages/all')
                            ->with('success', 'A new page was published!');
                    }
                }catch (\Exception $e){
                  //echo 'Message: ' .$e->getMessage();
                    return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Something went wrong! Please try again!');
                }
            });
        }
        $templates = File::allFiles(resource_path('views/frontend/templates'));
        $custom_templates = array();

        foreach($templates as $tmp){
             
           // $custom_templates[] = rtrim($tmp->getFilename(), '.blade.php');
            $custom_templates[] = basename($tmp->getFilename(), ".blade.php");
            //print_R($tmp->getFilename());
        }
       
        return view('admin.pages.add-pages', [
            'js' => 'admin.pages.js.add-pages-js',
            'modals' => 'admin.pages.modals.add-pages-modals',
            'sliders' => Slider::all(),
            'contactForms' => ContactForms::all(),
            'templates' => $custom_templates
        ]);
    }

    /**
     * pages - function for all pages index
    */
    public function pages(Request $request){
        $pagination = 20;
        if($request->exists('size')){
            $pagination = $request->get('size');
        }
        $pages = Pages::paginate($pagination);
        foreach($pages as $p){
            $slug = Routes::where('pbc_id', $p->id)
                ->where('type', 'page')
                ->first();
            $p->slug = $slug->slug;
        }
        return view('admin.pages.pages', [
            'pages' => $pages
        ]);
    }

    /**
     * editPages - function to edit a page
     */
    public function editPage(Request $request, $id){
        $page = Pages::findOrFail($id);
        $slug = Routes::where('pbc_id', $page->id)
            ->where('type', 'page')
            ->first();
        $page->slug = $slug->slug;
        if($request->isMethod('post')){
            //echo "<pre>"; print_r($request->all());exit;

            $page = Pages::findOrFail($id);
            if(!empty($page)) 
            {
                // Comment By AVR
                $page->title = $request->title;
                $page->page_name = $request->page_name;
                $page->content = $request->get('content');
                $page->template = $request->template;
                $page->sub_caption = $request->sub_caption;

                $page->jkeyword1 = $request->jkeyword1;
                $page->jkeyword2 = $request->jkeyword2;
                $page->jkeyword3 = $request->jkeyword3;

                if($request->exists('meta_key')){
                    $page->meta_key = $request->meta_key;
                }
                if($request->exists('meta_description')){
                    $page->meta_description = $request->get('meta_description');   
                }
                /*if($request->exists('page_script')){
                    $page->page_script = $request->get('page_script');     
                }*/
                if($request->exists('image')){
                    $page->featured_image = $request->image;
                }
                if($request->exists('slider_id')){
                    $page->featured_slider = $request->slider_id;
                } 

                // This was already commented
                /*if($request->exists('contact_form_id')){
                    $page->contact_form = $request->contact_form_id;
                }*/
                
                if($page->save()){
                    $slug->slug = $request->slug;
                    $slug->save();

                    $fixed_additional_fields = $this->pageFields;
                    foreach($fixed_additional_fields as $f){
                        $v = null;
                        if($request->exists($f)){
                            $v = $request->get($f);
                        }
                        
                        $details = DB::table('pages_seo')
                            ->where('key', '=', $f)
                            ->where('page_id', '=', $id)
                            ->select('id')
                            ->first();

                        if(!empty($details))
                        {
                            $record = array(
                                'value' => $v,
                                'updated_at' => $this->entryDate
                            ); 
                            $rs = DB::table('pages_seo')->where('id', $details->id)->update($record);
                        }
                        else{
                            $record = array(
                                'page_id' => $id,
                                'key' => $f,
                                'value' => $v,
                                'created_at' => $this->entryDate,
                                'updated_at' => $this->entryDate
                            ); 
                            $rs = DB::table('pages_seo')->insert($record);
                        }
                    }

                    // === Create entry in Activity log ===
                    $msg = 'Page "'.$request->title.'" updated by';
                    CommonFunction::addActivityLog($msg);

                    return redirect()
                        ->to('/dashboard/pages/'.$id)
                        ->with('success', 'Page edited successfully!');
                }else{
                    return redirect()
                        ->to('/dashboard/pages/'.$id)
                        ->with('error', 'Something went wrong! Please try again!');
                }
            }
        }
        $templates = File::allFiles(resource_path('views/frontend/templates'));
        $custom_templates = array();
        foreach($templates as $tmp){
            $custom_templates[] = basename($tmp->getFilename(), ".blade.php");
            //$custom_templates[] = rtrim($tmp->getFilename(), '.blade.php');
        }

        // call the SEO tools
        $seoTools = DB::table('pages_seo')
            ->where('page_id', '=', $id)
            ->select('*')
            ->get()->toArray();

        return view('admin.pages.edit-page', [
            'page' => $page,
            'seoTools' => $seoTools,
            'modals' => 'admin.pages.modals.edit-page-modals',
            'js' => 'admin.pages.js.edit-page-js',
            'sliders' => Slider::all(),
            'contactForms' => ContactForms::all(),
            'templates' => $custom_templates
        ]);
    }
    public function deletePages(Request $request, $id){
      
            $page = Pages::findOrFail($id);

            if(Pages::destroy($id)){
                $route = Routes::where('type', 'page')
                    ->where('pbc_id', $id)
                    ->first();
                Routes::destroy($route->id);

                DB::table('pages_seo')->where(['page_id' => $id])->delete();

                // === Create entry in Activity log ===
                if(!empty($page)) {
                    $msg = 'Page "'.$page->title.'" deleted by';
                    CommonFunction::addActivityLog($msg);
                }
               
                return redirect()
                    ->back()
                    ->with('success', 'Page was deleted successfully!');
            }else{
                return redirect()
                    ->back()
                    ->with('error', 'Something went wrong! Please try again!');
            }
    
    }
    /**
     * settings - function for overall sites settings CRUD
    */
    public function settings(Request $request){
        if($request->isMethod('post')){

            // echo "<pre>"; print_r($request->all());exit;

            foreach($request->except('_token') as $key => $value){
                $setting = Settings::where('key', $key)->first();
                if(!empty($setting)){
                    $setting->value = $value;
                    $setting->save();

                    // === Create entry in Activity log ===
                    $title = str_replace("_", " ", $key);
                    $msg = 'Settings "'.$title.'" updated by';
                    CommonFunction::addActivityLog($msg);
                }
            }
            return redirect()
                ->back()
                ->with('success', 'Settings were saved successfully!');
        }

         $headerlogototal = Headerlogo::get();

        $logos = Headerlogo::where('id', '1')->limit(1)->get();


        $settings = Settings::where('status', '1')
            ->where('is_deleted', '0')
            ->get();
        return view('admin.pages.settings', [
            'settings' => $settings,
            'logos' => $logos
        ]);
    }

    /**
     * contactForms - function to list all contact forms
    */
    public function contactForms(Request $request){
        
        // Copy of the form
        if(isset($_GET['ref']) && $_GET['ref'] == 'copy'){
            $forms = ContactForms::find($_GET['id']);
            $faker = Faker::create();
            $short_code = $faker->unique()->randomNumber(null);
            //echo "<pre>"; print_r($forms);
            $record = array(
                'title' => $forms->title,
                'short_code' => $short_code,
                'components' => "\"$forms->components\"",
                'type' => $forms->type,
                'status' => $forms->status,
                'created_at' => $this->entryDate,
                'updated_at' => $this->entryDate
            ); 
            //echo "<pre>"; print_r($record); exit;
            $rs = DB::table('contact_forms')->insert($record);
            $last_id = DB::getPdo()->lastInsertId();

            // === Create entry in Activity log ===
            $msg = 'Copy of Contact Form "'.$forms->title.'" created by';
            CommonFunction::addActivityLog($msg);

            return redirect()
                ->to('/dashboard/contact-forms')
                ->with('success', 'Contact form has been copied successfully!');
        }


        $forms = ContactForms::paginate(20);
        foreach($forms as $f){
            $cfUses = DB::table('contact_form_uses')
                    ->where('form_id', '=', $f->id)
                    ->select('pbc_id')
                    ->get()->toArray();

            //if($f->pbc_id != null){
                if($f->type == 'page'){
                    // $f->pbc = Pages::find($f->pbc_id);
                    $title = array();
                    if(count($cfUses)) {
                        foreach ($cfUses as $row) {
                            $res = CommonFunction::GetSingleField('pages', 'page_name', 'id', $row->pbc_id);
                            if($res)
                                $title[] = $res;
                        }

                        if(!empty($title))
                            $f->pbc = implode(", ", $title);
                    }
                }
                if($f->type == 'category'){
                    //$f->pbc = Category::find($f->pbc_id);
                    $title = array();
                    if(count($cfUses)) {
                        foreach ($cfUses as $row) {
                            $res = CommonFunction::GetSingleField('categories', 'title', 'id', $row->pbc_id);
                            if($res)
                                $title[] = $res;
                        }

                        if(!empty($title))
                            $f->pbc = implode(", ", $title);
                    }
                }
                if($f->type == 'boat'){
                    //$f->pbc = Boat::find($f->pbc_id);
                    $title = array();
                    if(count($cfUses)) {
                        foreach ($cfUses as $row) {
                            $res = CommonFunction::GetSingleField('boats', 'page_name', 'id', $row->pbc_id);
                            if($res)
                                $title[] = $res;
                        }

                        if(!empty($title))
                            $f->pbc = implode(", ", $title);
                    }
                }
                if($f->type == 'dest'){
                    $f->type = 'Destination';
                    //$f->pbc = Destinations::find($f->pbc_id);

                    $title = array();
                    if(count($cfUses)) {
                        foreach ($cfUses as $row) {
                            $res = CommonFunction::GetSingleField('destinations', 'page_name', 'id', $row->pbc_id);
                            if($res)
                                $title[] = $res;
                        }

                        if(!empty($title))
                            $f->pbc = implode(",", $title);
                    }

                }
            //}
        } 
        return view('admin.pages.contact-forms', [
            'forms' => $forms,
            'js' => 'admin.pages.js.contact-forms-js',
            'modals' => 'admin.pages.modals.contact-forms-modals'
        ]);
    }

    /**
     * contactForms - function to list all contact forms
     */
    public function addContactForms(Request $request){
        if($request->isMethod('post')){
            // echo "<prE>"; print_r($request->all());exit;
            extract($_POST);

            /*$form = new ContactForms();
            $form->title = $request->title;
            $faker = Faker::create();
            
            if($request->exists('components') && $request->components != null){
                $form->components = $request->components;
            }
            if($request->exists('type') && $request->type != null){
                $form->type = $request->type;
            }
            if($request->exists('pbc_id') && $request->pbc_id != null){
                $form->pbc_id = $request->pbc_id;
            }*/

            $faker = Faker::create();
            $short_code = $faker->unique()->randomNumber(null);
            $record = array(
                'title' => $title,
                'short_code' => $short_code,
                'components' => "\"$components\"", // "" to show in form builder
                'type' => $type,
                'status' => '1',
                'created_at' => $this->entryDate,
                'updated_at' => $this->entryDate
            );
            $rs = DB::table('contact_forms')->insert($record);
            $last_id = DB::getPdo()->lastInsertId();

            if($request->exists('pbc_id') && $request->pbc_id != null){
                if($last_id) {
                    $ids = $request->pbc_id;
                    foreach ($ids as $id) 
                    {
                        $record = array(
                            'form_id' => $last_id,
                            'pbc_id' => $id
                        );
                        $rs = DB::table('contact_form_uses')->insert($record);
                        $formAdded = true;
                    }
                }
            }

            //if($form->save()){
            if($last_id){
                // === Create entry in Activity log ===
                $msg = 'New contact form "'.$request->title.'" created by';
                CommonFunction::addActivityLog($msg);

                return redirect()
                    ->to('/dashboard/contact-forms')
                    ->with('success', 'Contact form was created!');
            }else{
                return redirect()
                    ->to('/dashboard/contact-forms/add')
                    ->withInput()
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }

        $pages = Pages::all();
        $op_pages = $op_categories = $op_boats = $op_dest = '<option value="">Select from below...</option>';
        /*foreach($pages as $p){
            $op_pages .= '<option value="'.$p->id.'">'.$p->title.'</option>';
        }*/
        $categories = Category::all();
        /*foreach($categories as $c){
            $op_categories .= '<option value="'.$c->id.'">'.$c->title.'</option>';
        }*/
        $boats = Boat::all();
        /*foreach($boats as $b){
            $op_boats .= '<option value="'.$b->id.'">'.$b->title.'</option>';
        }*/

        $dest = Destinations::all();
        /*foreach($dest as $d){
            $op_dest .= '<option value="'.$d->id.'">'.$d->title.'</option>';
        }*/

        return view('admin.pages.add-contact-form', [
            'js' => 'admin.pages.js.add-contact-form-js',
            'pages' => $op_pages,
            'categories' => $op_categories,
            'boats' => $op_boats,
            'dest' => $op_dest,
            'raw_boats' => $boats,
            'allPages' => $pages,
            'allCategories' => $categories,
            'allBoats' => $boats,
            'allDest' => $dest,
        ]);
    }

    /**
     * editContactForms - function to edit a contact form
     */
    public function editContactForms(Request $request, $id){
        $forms = ContactForms::findOrFail($id);
        $cfUses = DB::table('contact_form_uses')
                ->where('form_id', '=', $id)
                ->select('pbc_id')
                ->get()->toArray();

        $pages = Pages::all();
        $op_pages = $op_categories = $op_boats = $op_dest = '<option value="">Select from below...</option>';
        /*foreach($pages as $p){
            if($forms->type == 'page' && $forms->pbc_id == $p->id){
                $op_pages .= '<option value="'.$p->id.'" selected>'.$p->title.'</option>';
            }else{
                $op_pages .= '<option value="'.$p->id.'">'.$p->title.'</option>';
            }
        }*/
        $categories = Category::all();
        /*foreach($categories as $c){
            if($forms->type == 'category' && $forms->pbc_id == $c->id){
                $op_categories .= '<option value="'.$c->id.'" selected>'.$c->title.'</option>';
            }else{
                $op_categories .= '<option value="'.$c->id.'">'.$c->title.'</option>';
            }
        }*/
        $boats = Boat::all();
        /*foreach($boats as $b){
            if($forms->type == 'boat' && $forms->pbc_id == $b->id){
                $op_boats .= '<option value="'.$b->id.'" selected>'.$b->title.'</option>';
            }else{
                $op_boats .= '<option value="'.$b->id.'">'.$b->title.'</option>';
            }
        }*/

        $dest = Destinations::all();
        /*foreach($dest as $d){
            if($forms->type == 'dest' && $forms->pbc_id == $d->id){
                $op_dest .= '<option value="'.$d->id.'" selected>'.$d->title.'</option>';
            }else{
                $op_dest .= '<option value="'.$d->id.'">'.$d->title.'</option>';
            }
        }*/

        if($request->isMethod('post')){
            // echo "<prE>"; print_r($request->all());exit;
            extract($_POST);
            /*$form = ContactForms::findOrFail($id);
            $form->title = $request->title;
            $faker = Faker::create();
            $form->short_code = $faker->unique()->randomNumber(null);
            $form->components = $request->components;
            if($request->exists('type') && $request->type != null){
                $form->type = $request->type;
            }
            if($request->exists('pbc_id') && $request->pbc_id != null){
                $form->pbc_id = $request->pbc_id;
            }*/

            $record = array(
                'title' => $title,
                'components' => "\"$components\"",
                'type' => $type,
                'updated_at' => $this->entryDate
            ); 
            $update = DB::table('contact_forms')->where('id', $id)->update($record);

            DB::table('contact_form_uses')->where(['form_id' => $id])->delete();

            if($request->exists('pbc_id') && $request->pbc_id != null){
                $ids = $request->pbc_id;
                foreach ($ids as $pid) 
                {
                    $record = array(
                        'form_id' => $id,
                        'pbc_id' => $pid
                    );
                    $rs = DB::table('contact_form_uses')->insert($record);
                    $formAdded = true;
                }
            }

            if($update){

                // === Create entry in Activity log ===
                $msg = 'Contact Form "'.$request->title.'" updated by';
                CommonFunction::addActivityLog($msg);

                return redirect()
                    ->to('/dashboard/contact-forms/edit/'.$id)
                    ->with('success', 'Contact form was edited!');
            }else{
                return redirect()
                    ->to('/dashboard/contact-forms/edit/'.$id)
                    ->withInput()
                    ->with('error', 'Something went wrong! Please try again!');
            }
        }

        return view('admin.pages.edit-contact-form', [
            'forms' => $forms,
            'js' => 'admin.pages.js.edit-contact-form-js',
            'cfUses' => $cfUses,
            'pages' => $op_pages,
            'categories' => $op_categories,
            'boats' => $op_boats,
            'dest' => $op_dest,
            'raw_boats' => $boats,
            'allPages' => $pages,
            'allCategories' => $categories,
            'allBoats' => $boats,
            'allDest' => $dest,
        ]);
    }

    /**
     * deleteContactForms - function to edit a contact form
     */
    public function deleteContactForms(Request $request){
        $form = ContactForms::findOrFail($request->delete_id);

        if(ContactForms::destroy($request->delete_id)){
            
            DB::table('contact_form_uses')->where(['form_id' => $request->delete_id])->delete();

            // === Create entry in Activity log ===
            if(!empty($form)) {
                $msg = 'Contact Form "'.$form->title.'" deleted by';
                CommonFunction::addActivityLog($msg);
            }

            return redirect()
                ->to('/dashboard/contact-forms')
                ->with('success', 'Contact form was deleted successfully!');
        }else{
            return redirect()
                ->to('/dashboard/contact-forms')
                ->with('error', 'Something went wrong! Please try again!');
        }
    }

    /**
     * media - function to CRUD for media library
    */
    public function media(Request $request){
        return view('admin.pages.media', [
            'js' => 'admin.pages.js.media-js'
        ]);
    }

    /**
     * sections - function to show custom sections
    */
    public function sections(Request $request){
        return view('admin.pages.sections');
    }

    public function logo(Request $request){
        $headerlogototal = Headerlogo::get();

        $logos = Headerlogo::where('id', '1')->limit(1)->get();

        return view('admin.pages.logo', [
            'logos' => $logos,
        ]);
    }
    public function addlogo(Request $request)
    {
         if ($request->isMethod('post')) {

           $this->validate($request, [
                //'logo' => 'required|image|mimes:jpeg,jpg|dimensions:width=130,height=117',
            'logo' => 'required|image|mimes:jpeg,jpg,png',
            ]);

             $headerlogo = new Headerlogo();

            $headerlogototal = Headerlogo::get();
            $countlogo = count($headerlogototal);
           
            $headerlogo->logo = $request->logo;

             
            if($request->file('logo') != ''){
                $file = $request->file('logo')->getClientOriginalName(); 
                $extension = explode(".", $file);
                $filename = date('ymdhis').".".$extension[1];
                $request->file('logo')->move(base_path('/public/photos/'), $filename);
            }

            if($countlogo>0){

                 $id = DB::update('UPDATE `headerlogo` SET `logo` = "'.$filename.'" WHERE `id` = 1 ');

            } else {
                $id = DB::table('headerlogo')->insertGetId(
                        ['logo'=>$filename]);
            }
            
            if($id != ''){

                // === Create entry in Activity log ===
                $msg = 'Logo updated by';
                CommonFunction::addActivityLog($msg);

                 return redirect()
                ->to('/dashboard/settings')
                ->with('success', 'Logo Added Successfully');
            }else{
                return redirect()
                ->to('/dashboard/settings')
                ->with('error', 'Something went wrong! Please try again!');
            }   

         }
    }
    public function changeinstastatus(Request $request){
        
        $status = $request->status;

        $id = DB::update('UPDATE `instagram_status` SET `status` = "'.$status.'" WHERE `id` = 1 ');


        /*$user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  */
        return response()->json(['success'=>'Status change successfully.']);
    }

    //change Password function
    public function changePassword(Request $request){

        //Change password submit 
        if($request->isMethod('post'))
        {
            // echo "<pre>"; print_r($request->all()); exit;    
            extract($_POST);
            $user_id = Auth::user()->id;

            $record = array(
                'password' => Hash::make($new_password), 
                'updated_at' => date($this->dateFormat),
            ); 
            $rs = DB::table('users')->where('id', $user_id)->update($record);
            if($rs) {

                // === Create entry in Activity log ===
                $msg = 'Account password changed by';
                CommonFunction::addActivityLog($msg);

                Auth::logout();
                \Session::flash('success', 'Password has been changed successfully! Please login again.');
                return redirect()->to('/login');
            }
            else {
                return redirect()
                        ->to('/dashboard/change-password')
                        ->with('errors', 'Something went wrong!');
            }    
        }

        return view('admin.pages.change-password');
    }

    // Activity Log funciton
    public function activityLog($id = NULL, Request $request)
    {
        //Delete the entry 
        if($id != NULL) {
            DB::table('activity_logs')->where(['id' => $id])->delete();
            return redirect()
                ->back()
                ->with('success', 'Log deleted successfully!');
        }

        $pagination = 20;
        if($request->exists('size')){
            $pagination = $request->get('size');
        }
        $logs = ActivityLog::select('*')->orderBy('id', 'desc')->paginate($pagination);
        
        return view('admin.pages.activity-log', [
            'logs' => $logs
        ]);

        //return view('admin.pages.activity-log');
    }

    // Add User funciton
    public function addUser($id = NULL, Request $request)
    {
        $userData = array(
            'id' => '',
            'name' => '', 
            'email' => '',
            'phone' => '', 
            'status' => '',
            'password' => '',
            'role_id' => '',
        );

        //Load Data in case of 
        if($id != NULL) 
        {
            $user = DB::table('users')
                ->where('id', '=', $id)
                ->select('*')
                ->first();

            $userData = json_decode(json_encode($user), True);
            //print_r($userData); exit;
        }

        //Form Submit 
        if($request->isMethod('post'))
        {
            //echo "<pre>"; print_r($request->all()); exit;    
            extract($_POST);
            
            //First check email should be unique
            if($id == NULL) {
                $exist = DB::table('users')
                    ->where('email', '=', $email)
                    ->where('is_deleted', '=', '0')
                    ->select('id')
                    ->get();
            }
            else {
                $exist = DB::table('users')
                    ->where('email', '=', $email)
                    ->where('id', '!=', $id)
                    ->where('is_deleted', '=', '0')
                    ->select('id')
                    ->get();
            }

            //Redirect back
            if(count($exist))
            { 
                return redirect()
                    ->to('/dashboard/add-user/'.$id)
                    ->with('error', $email. ' is already registered!');
            }
            else { 
                // Add in DB
                if($id == NULL) {
                    $record = array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'status' => $status,
                        'password' => Hash::make($new_password),
                        'role_id' => $role_id,
                        'created_at' => $this->entryDate,
                        'updated_at' => $this->entryDate
                    );
                    $rs = DB::table('users')->insert($record);
                    if($rs) {
                        // === Create entry in Activity log ===
                        $msg = 'New user "'.$name.'" created by';
                        CommonFunction::addActivityLog($msg);

                        $msg = "User has been added successfully!";

                        /*return redirect()
                            ->to('/dashboard/add-user')
                            ->with('success', 'User has been added successfully!');*/
                    }
                }
                else{ //Update

                    $record = array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'status' => $status,
                        'role_id' => $role_id,
                        'updated_at' => $this->entryDate
                    );

                    if($new_password != '')
                        $record['password'] = Hash::make($new_password);

                    $rs = DB::table('users')->where('id', $id)->update($record);
                    
                    // === Create entry in Activity log ===
                    $msg = 'User "'.$name.'" updated by';
                    CommonFunction::addActivityLog($msg);

                    $msg = "User has been updated successfully!";
                }

                return redirect()
                        ->to('/dashboard/list-users')
                        ->with('success', $msg );
            }
        }

        $UserRole = CommonFunction::getUserRoles();
        return view('admin.pages.users.add-user', [
            'userData' => $userData,
            'UserRole' => $UserRole,
        ]);
    }

    // User List funciton
    public function listUsers($id = NULL, Request $request)
    {
        $loginUserId = Auth::user()->id;

        //Delete the entry 
        if($id != NULL) {
            $user = User::find($id);
            if(!empty($user)) {

                if($loginUserId != $id) {
                    DB::table('users')->where(['id' => $id])->delete();

                    // === Create entry in Activity log ===
                    $msg = 'User "'.$user->name.'" deleted by';
                    CommonFunction::addActivityLog($msg);

                    return redirect()
                        ->back()
                        ->with('success', 'User has been deleted successfully!');
                }
                else {
                    return redirect()
                        ->back()
                        ->with('error', 'You can not delete your own account!');
                }
            }
        }

        $pagination = 20;
        if($request->exists('size')){
            $pagination = $request->get('size');
        }
        
        $users = User::select('users.*', 'ur.role')
            ->leftJoin('user_roles as ur', 'ur.id', '=', 'users.role_id') 
            ->orderBy('users.id', 'desc')->paginate($pagination);
        
        return view('admin.pages.users.list-users', [
            'users' => $users,
            'loginUserId' => $loginUserId
        ]);

        //return view('admin.pages.activity-log');
    }

    // My Profile  funciton
    public function myProfile(Request $request)
    {
        //Load Data in case of 
        $id = Auth::user()->id;
        
        $user = DB::table('users as u')
            ->leftJoin("user_roles as ur", "ur.id" , "=", "u.role_id")
            ->where('u.id', '=', $id)
            ->select('u.*', 'ur.role')
            ->first();

        //Form Submit 
        if($request->isMethod('post'))
        {
            //echo "<pre>"; print_r($request->all()); exit;    
            extract($_POST);
            
            //First check email should be unique
            $exist = DB::table('users')
                ->where('email', '=', $email)
                ->where('id', '!=', $id)
                ->where('is_deleted', '=', '0')
                ->select('id')
                ->get();

            //Redirect back
            if(count($exist))
            { 
                return redirect()
                    ->to('/dashboard/my-profile')
                    ->with('error', $email. ' is already registered!');
            }
            else { 
                $record = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'updated_at' => date($this->dateFormat)
                );

                // Profile Pic UPloading
                if ($request->hasFile("profile_pic")) 
                {
                    $file = $request->file("profile_pic");
                    $ext = $file->getClientOriginalExtension();
                    
                    $filename =  (time() * rand()) .".".$ext;
                    $upload = $file->move(base_path('/public/photos/2/users/'), $filename);
                    if($upload){
                        $record['profile_pic'] = $filename;

                        // Unlink old pic
                        if($old_pic != '') {
                            $imgToDel = public_path("photos/2/users/".$old_pic);
                            if(file_exists($imgToDel))
                                unlink($imgToDel);
                        }
                    }
                }
                
                $rs = DB::table('users')->where('id', $id)->update($record);
                
                // === Create entry in Activity log ===
                $msg = 'Profile updated by';
                CommonFunction::addActivityLog($msg);

                $msg = "Profile has been updated successfully!";

                return redirect()
                        ->to('/dashboard/my-profile')
                        ->with('success', $msg );
            }
        }

        return view('admin.pages.users.my-profile', [
            'user' => $user,
        ]);
    }

    /**
     * addDestination - function to add destination dynamically
    */
    public function addDestination($id = NULL, Request $request)
    {
        CommonFunction::isUserLogin();

        $destData = array('id' => '', 'title' => '', 'page_name' => '', 'slug' => '', 'meta_key' => '', 'meta_description' => '', 'featured_slider' => '', 'status' => '', 'jkeyword1' => '', 'jkeyword2' => '', 'jkeyword3' => '', 'slider_title' => '', 'cat_id' => '', 'featured_image' => '', 'sort' => '','short_description' => '', 'sub_caption' => '');
        //echo "<prE>"; print_r($destData);exit;
        
        //$detailData = array('id' => '', 'dest_id' => '', 'heading' => '',  'content' => '');
        $detailData = array();
        $destImages = array();
        $seoTools = array();

        //Load Data in case of Edit
        if($id != NULL) 
        {
            $dest = DB::table('destinations as d')
                ->leftJoin("sliders as s", "s.id" , "=", "d.featured_slider")
                ->where('d.id', '=', $id)
                ->select('d.*', 's.title as slider_title')
                ->first();
            
            $destData = json_decode(json_encode($dest), True);

            $dd = DB::table('destination_details')
                ->where('dest_id', '=', $id)
                ->select('*')
                ->get()->toArray();

            $detailData = json_decode(json_encode($dd), True);

            $destImages = DB::table('destination_images')
                ->where('dest_id', '=', $id)
                ->select('*')
                ->get()->toArray();

            // call the SEO tools
            $seoTools = DB::table('destination_seo')
                ->where('dest_id', '=', $id)
                ->select('*')
                ->get()->toArray();
        }

        //Form Submit Start
        if($request->isMethod('post')){
            //echo '<pre>'; print_r($request->all()); exit;
            extract($_POST); 
            
            //First check slug should be unique
            $slug = str_replace(" ", "", strtolower($request->slug));
            if($id == NULL) {
                $exist = DB::table('destinations')
                    ->where('slug', '=', $slug)
                    ->where('is_deleted', '=', '0')
                    ->select('id')
                    ->get();
            }
            else {
                $exist = DB::table('destinations')
                    ->where('slug', '=', $slug)
                    ->where('id', '!=', $id)
                    ->where('is_deleted', '=', '0')
                    ->select('id')
                    ->get();
            }

            //if slug is exist then, redirect back
            if(count($exist))
            { 
                return redirect()
                    ->to('/dashboard/add-destination/'.$id)
                    ->with('error', $slug. ' is already exist with another destination!');
            }
            else { 
                /*$record = $request->all();
                $record['updated_at'] = $this->entryDate;
                $record['slug'] = $slug;
                unset($record['heading']);
                unset($record['gallery_images']);
                unset($record['content']);
                unset($record['_token']);
                unset($record['totalHC2']);
                unset($record['oldFeatured']); */

                $record = array(
                    'title' => $title,
                    'page_name' => $page_name,
                    'slug' => $slug,
                    'cat_id' => $cat_id,
                    'featured_image' => $featured_image,
                    'status' => $status,
                    'meta_key' => $meta_key,
                    'meta_description' => $meta_description,
                    'jkeyword1' => $jkeyword1,
                    'jkeyword2' => $jkeyword2,
                    'jkeyword3' => $jkeyword3,
                    'updated_at' => $this->entryDate,
                    'sort' => $sort,
                    'short_description' => $short_description,
                    'sub_caption' => $sub_caption
                );

                // Featured Image UPloading
                /*if ($request->hasFile("featured_image")) 
                {
                    $file = $request->file("featured_image");
                    $ext = $file->getClientOriginalExtension();
                    
                    $filename =  (time() * rand()) .".".$ext;
                    $upload = $request->file('featured_image')->move(base_path('/public/photos/2/destination/'), $filename);
                    if($upload){
                        $record['featured_image'] = $filename;
                        $featuredUpload = true;
                    }
                }*/

                // Add in DB
                if($id == NULL) {
                    $record['created_at'] = $this->entryDate;
                    $rs = DB::table('destinations')->insert($record);
                    $last_id = DB::getPdo()->lastInsertId();

                    if($last_id) {

                        //Insert Heading And Content if available
                        CommonFunction::addDestinationInfo($request->heading, $request->content, $last_id);

                        // Gallery Images UPloading
                        if ($request->hasFile("gallery_images")) 
                        {
                            $galleryImages = array();
                            foreach($request->file('gallery_images') as $gfile){
                                $ext = $gfile->getClientOriginalExtension();
                                $filename =  (time() * rand()) .".".$ext;
                                $upload = $gfile->move(base_path('/public/photos/2/destination/'), $filename);
                                if($upload)
                                    $galleryImages[] = $filename;  
                            }

                            if(!empty($galleryImages)) 
                                CommonFunction::addGalleryImages($galleryImages, $last_id);
                        }

                        // SEO Tools entry
                        $fixed_additional_fields = $this->destinationFields;
                        foreach($fixed_additional_fields as $f){
                            $v = null;
                            if($request->exists($f)){
                                $v = $request->get($f);
                            }
                            $record = array(
                                'dest_id' => $last_id,
                                'key' => $f,
                                'value' => $v,
                                'created_at' => $this->entryDate,
                                'updated_at' => $this->entryDate
                            ); 
                            $rs = DB::table('destination_seo')->insert($record);
                        }
                        
                        // === Create entry in Activity log ===
                        $msg = 'New destination "'.$title.'" created by';
                        CommonFunction::addActivityLog($msg);

                        $msg = "Destination has been added successfully!";
                    }
                }
                else{ //Update
                    $rs = DB::table('destinations')->where('id', $id)->update($record);
                    if($rs) { 

                        //Delete the Destination details first
                        DB::table('destination_details')->where(['dest_id' => $id])->delete();

                        //Insert Heading And Content if available
                        CommonFunction::addDestinationInfo($request->heading, $request->content, $id);

                        //Gallery Images UPloading
                        if ($request->hasFile("gallery_images")) 
                        {
                            $galleryImages = array();
                            foreach($request->file('gallery_images') as $gfile){
                                $ext = $gfile->getClientOriginalExtension();
                                $filename =  (time() * rand()) .".".$ext;
                                $upload = $gfile->move(base_path('/public/photos/2/destination/'), $filename);
                                if($upload)
                                    $galleryImages[] = $filename;  
                            }

                            if(!empty($galleryImages)) 
                                CommonFunction::addGalleryImages($galleryImages, $id);
                        }

                        // SEO Tools
                        $fixed_additional_fields = $this->destinationFields;
                        foreach($fixed_additional_fields as $f){
                            $v = null;
                            if($request->exists($f)){
                                $v = $request->get($f);
                            }
                            
                            $details = DB::table('destination_seo')
                                ->where('key', '=', $f)
                                ->where('dest_id', '=', $id)
                                ->select('id')
                                ->first();

                            if(!empty($details))
                            {
                                $record = array(
                                    'value' => $v,
                                    'updated_at' => $this->entryDate
                                ); 
                                $rs = DB::table('pages_seo')->where('id', $details->id)->update($record);
                            }
                            else{
                                $record = array(
                                    'dest_id' => $id,
                                    'key' => $f,
                                    'value' => $v,
                                    'created_at' => $this->entryDate,
                                    'updated_at' => $this->entryDate
                                ); 
                                $rs = DB::table('destination_seo')->insert($record);
                            }
                        }

                        //Delete the old featured image
                        /*if(isset($featuredUpload) && $oldFeatured != '') {
                            $imgToDel = public_path("photos/2/destination/".$oldFeatured);
                            if(file_exists($imgToDel))
                                unlink($imgToDel);
                        }*/

                        // === Create entry in Activity log ===
                        $msg = 'Destination "'.$title.'" updated by';
                        CommonFunction::addActivityLog($msg);

                        $msg = "Destination has been updated successfully!";
                    }
                }

                return redirect()
                    ->to('/dashboard/add-destination/'.$id)
                     ->with('success', $msg );
            }
        }
        
        $templates = File::allFiles(resource_path('views/frontend/templates'));
        $custom_templates = array();
        foreach($templates as $tmp){
           // $custom_templates[] = rtrim($tmp->getFilename(), '.blade.php');
            $custom_templates[] = basename($tmp->getFilename(), ".blade.php");
            //print_R($tmp->getFilename());
        }
            
        $destCats = CommonFunction::destinationCats();

        return view('admin.pages.destination.add-destination', [
            'js' => 'admin.pages.js.add-pages-js',
            'modals' => 'admin.pages.modals.add-pages-modals',
            'sliders' => Slider::all(),
            'contactForms' => ContactForms::all(),
            'templates' => $custom_templates,
            'destData' => $destData,
            'detailData' => $detailData,
            'destImages' => $destImages,
            'destCats' => $destCats,
            'seoTools' => $seoTools,
        ]);
    }
    
    
    /**
     * listDestinations - function for all Destination
    */
    public function listDestinations($id = NULL, Request $request){
        CommonFunction::isUserLogin();

        //Delete the entry 
        if($id != NULL) {
            $destination = Destinations::find($id);
            /*if(isset($destination->featured_image))
            {
                $imgToDel = public_path("photos/2/destination/".$destination->featured_image);
                if(file_exists($imgToDel))
                    unlink($imgToDel);
            }*/

            // Delete the Gallery also
            $images = DB::table('destination_images')
                ->where('dest_id', '=', $id)
                ->select('*')
                ->get();

            if(count($images) > 0)
            {
                foreach ($images as $img) {
                    if($img->img_name != NULL) 
                    {
                        $imgToDel = public_path("photos/2/destination/".$img->img_name);
                        if(file_exists($imgToDel))
                            unlink($imgToDel);
                    }
                    DB::table('destination_images')->where(['id' => $img->id])->delete();
                }
            }

            // === Create entry in Activity log ===
            if(!empty($destination)) {
                $msg = 'Destination "'.$destination->title.'" deleted by';
                CommonFunction::addActivityLog($msg);
            }

            DB::table('destinations')->where(['id' => $id])->delete();
            DB::table('destination_details')->where(['dest_id' => $id])->delete();
            DB::table('destination_seo')->where(['dest_id' => $id])->delete();
            
            return redirect()
                ->back()
                ->with('success', 'Destination has been deleted successfully!');
        }
        
        $pagination = 20;
        if($request->exists('size')){
            $pagination = $request->get('size');
        }

        $destList = Destinations::select('*')->orderBy('title', 'asc')->paginate($pagination);
        $destCats = CommonFunction::destinationCats();

        return view('admin.pages.destination.list-destinations', [
            'destList' => $destList,
            'destCats' => $destCats,
        ]);
    }

    //Function to delete destination images
    public function deleteDestinationImages($id = NULL, Request $request){
        CommonFunction::isUserLogin();

        //Delete the entry 
        if($id != NULL)
        {
            $data = DB::table('destination_images')
                ->where('id', '=', $id)
                ->select('*')
                ->first();

            if(!empty($data))
            {
                $filename = $data->img_name; 
                
                if($filename != NULL) 
                {
                    $imgToDel = public_path("photos/2/destination/".$filename);
                    if(file_exists($imgToDel))
                        unlink($imgToDel);
                }
                DB::table('destination_images')->where(['id' => $id])->delete();
            }
            
            return redirect()
                ->back()
                ->with('success', 'Image has been deleted successfully!');
        }
    }

    // Function to add user roles
    public function addRole(Request $request)
    {
        CommonFunction::isUserLogin();
        $modules = CommonFunction::getWebsiteModules();

        //Form Submit 
        if($request->isMethod('post'))
        {
            // echo "<pre>"; print_r($request->all()); 
            extract($_POST);

            if($role != '') {
            
                //First check role should be unique
                $exist = DB::table('user_roles')
                    ->where('role', '=', $role)
                    ->select('id')
                    ->get();

                //Redirect back
                if(count($exist))
                { 
                    return redirect()
                        ->to('/dashboard/add-role')
                        ->with('error', "Role '$role' is already exist!");
                }
                else {

                    //Create entry of role
                    $record = array(
                        'role' => $role,
                        'created_at' => $this->entryDate,
                        'updated_at' => $this->entryDate
                    );

                    $rs = DB::table('user_roles')->insert($record);
                    $last_id = DB::getPdo()->lastInsertId();
                    if($last_id) {
                        CommonFunction::updatePrivileges($modules, $last_id);
                    
                        // === Create entry in Activity log ===
                        $msg = 'New role "'.$role.'" created by';
                        CommonFunction::addActivityLog($msg);

                        $msg = "Role has been created successfully!";

                        return redirect()
                                ->to('/dashboard/add-role')
                                ->with('success', $msg );
                    }
                    else {
                        return redirect()
                                ->to('/dashboard/add-role')
                                ->with('error', "Something went wrong!");
                    }
                }
            }
        }

        return view('admin.pages.roles.add-role', [
            'modules' => $modules,
        ]);
    }

    // Function to List roles
    public function listRoles($id = NULL, Request $request){
        CommonFunction::isUserLogin();

        //Delete the Role 
        if($id != NULL) {
            $UserRole = UserRole::find($id);

            // === Create entry in Activity log ===
            if(!empty($UserRole)) {
                $msg = 'User role "'.$UserRole->role.'" deleted by';
                CommonFunction::addActivityLog($msg);
            }

            DB::table('user_roles')->where(['id' => $id])->delete();
            DB::table('user_privileges')->where(['role_id' => $id])->delete();
            
            return redirect()
                ->back()
                ->with('success', 'Role has been deleted successfully!');
        }
        
        $pagination = 20;
        if($request->exists('size')){
            $pagination = $request->get('size');
        }

        $roleList = UserRole::select('*')->orderBy('role', 'asc')->paginate($pagination);

        $modules = CommonFunction::getWebsiteModules();
        return view('admin.pages.roles.list-roles', [
            'roleList' => $roleList,
            'modules' => $modules,
        ]);
    }

    // Function to edit user roles
    public function editRole($id = NULL, Request $request)
    {
        CommonFunction::isUserLogin();
        $modules = CommonFunction::getWebsiteModules();

        //Form Submit 
        if($request->isMethod('post'))
        {
            //echo "<pre>"; print_r($request->all()); exit;
            extract($_POST);

            if($role != '') {
            
                //First check role should be unique
                $exist = DB::table('user_roles')
                    ->where('role', '=', $role)
                    ->where('id', '!=', $id)
                    ->select('id')
                    ->get();

                //Redirect back
                if(count($exist))
                { 
                    return redirect()
                        ->to('/dashboard/edit-role/'.$id)
                        ->with('error', "Role '$role' is already exist!");
                }
                else {

                    //Update the role
                    $record = array(
                        'role' => $role,
                        'updated_at' => $this->entryDate
                    );

                    $update = DB::table('user_roles')->where('id', $id)->update($record);
                    
                    if($update) {
                        DB::table('user_privileges')->where(['role_id' => $id])->delete();
                        CommonFunction::updatePrivileges($modules, $id);
                    
                        // === Create entry in Activity log ===
                        $msg = 'User role "'.$role.'" updated by';
                        CommonFunction::addActivityLog($msg);

                        $msg = "Role has been updated successfully!";

                        return redirect()
                                 ->to('/dashboard/edit-role/'.$id)
                                ->with('success', $msg);
                    }
                    else {
                        return redirect()
                                ->to('/dashboard/edit-role/'.$id)
                                ->with('error', "Something went wrong!");
                    }
                }
            }
        }

        $UserRole = DB::table('user_roles as ur')
                ->leftJoin("user_privileges as up", "up.role_id" , "=", "ur.id")
                ->where('ur.id', '=', $id)
                ->select('ur.*', 'up.module_type', 'up.can_read', 'up.can_write', 'up.can_delete')
                ->get()->toArray();

        $role = CommonFunction::GetSingleField('user_roles', 'role', 'id', $id);

        return view('admin.pages.roles.edit-role', [
            'modules' => $modules,
            'UserRole' => $UserRole,
            'role' => $role,
        ]);
    }

    // Custome function to logout Admin
    public function logout()
    {
        // === Create entry in Activity log ===
        $msg = 'Logged out by';
        CommonFunction::addActivityLog($msg);   
        Session::forget('isLoggedIn');

        Auth::logout();
        return redirect("/");
    }
}