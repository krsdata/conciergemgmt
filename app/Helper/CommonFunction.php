<?php
namespace App\Helper;

use DB;
use Auth;
use App\AllMenu;
use App\Boat;
use App\Category;
use App\Menus;
use App\Pages;
use App\Routes;
use App\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Headerlogo;
use Illuminate\Support\Facades\Redirect;
use Session;

class CommonFunction
{
    public static function isUserLogin()
    {  
        if(Session::has('isLoggedIn')){
            // do nothing
        }
        else{
            Redirect::to('login')->send();
        }
    }

    // Function to get website modules
    public static function getWebsiteModules()
    {
        $modules = array(
            'pages' => 'Pages',
            'boats' => 'Boats',
            'sliders' => 'Sliders',
            'destinations' => 'Destinations', 
            'users' => 'Users', 
            'menus' => 'Menus', 
            'contact_forms' => 'Contact Forms',
            'media' => 'Media',
            'settings' => 'Settings',
            'activity_log' => 'Activity Log',
        );
        return $modules;
    }


    // Get Common Data
    public static function getBoatCommonData()
    {
        $data['destination'] = array(
                'Sag Harbor waters', 
                'Shelter Island',
                'Greenport',
                'East Hampton', 
                'Montauk', 
                'Block Island RI', 
                'Old Saybrook CT',
                'Fishers Island NY',
                'Mohegan Sun CT', 
                'Mystic Seaport CT',
                'Newport RI', 
                "Martha's Vineyard MA", 
                'Nantucket MA',
                'New York City'    
        );
        
        $data['awesomePlace'] = array(
                "Sunset Beach Beach Club",
                "Claudio's Restaurant",
                "Major's Cove Sanctuary Swimming",
                "Salt Restaurant",
                "Yacht Hampton Floating Playground",
                "Ram's Head Inn",
                "Port Waterfront & Grill",
                "Duryea's Lobster Deck",
                "Sightseeing & Celebrity Homes", 
                "Navy Beach",
                "Gurney's Star Island Resort",
                "Bostwick's On The Harbor",
                "Bug Lighthouse",
                "Fishing",
                "Coecles Harbor Swimming",
                "Shelter Island Estuary Tour",
                "North Fork Wineries",
                "Sunset Beach Beach Massage",
                "Shelter Island Paddle Boards", 
                "Wake Boarding",
                "Montauk Fishing",
                "Jet Skiing",
                "Electronic Surfboard",
                "Sea Bob Island" 
        );

        $data['duration'] = array('3 hour', '4 hour', '7 hour', '8 hour', 'Overnight', 'Multi-night');
        $data['durationMix'] = array('3 or 4 hour', '7 or 8 hour', 'Overnight or Multi-night');

        //Call the boat type from DB
        $boatType = array();

        /* $categories = DB::table('categories')
                ->where('status','=','1')
                ->where('is_deleted','=','0')
                ->where('is_deleted','=','0')
                ->where('title','!=','Inactive Boats')
                ->where('title','!=','Active Boats')
                ->select('categories.id','categories.title')
                ->orderBy('title')
                ->get()->toArray();
        if(!empty($categories)){
            foreach ($categories as $row) {
                $boatType[] = $row->title;
            }
        }
        else{
            $boatType = array("Boats < 40'", 'Groups >12 & Event Yachts', 'Luxury Overnight Yachts', 'Sailboats & Catamarans ', "Yachts >40'", 'Fishing Boat', 'Ski & Watersports Boats', 'Entire Fleet');
        }
        $data['boatType'] = $boatType; */

        // code from top menu bar
        $top_menu = AllMenu::where('position', 'top-navbar')
            ->where('status', '1')
            ->where('is_deleted', '0')
            ->first();

        if(!empty($top_menu)){
            $menus = Menus::where('menu_id', $top_menu->id)
                ->where('status', '1')
                ->where('parent_route_id', null)
                ->where('is_deleted', '0')
                ->orderBy('sn_no', 'asc')
                ->get();
            if(!empty($menus)){
                foreach($menus as $m){
                    $route = Routes::find($m->route_id);
                    if($route->type == 'page'){
                        $details = Pages::find($route->pbc_id);
                        $details->slug = $route->slug;
                        $m->details = $details;
                    }
                    if($route->type == 'boat'){
                        $details = Boat::find($route->pbc_id);
                        $details->slug = $route->slug;
                        $m->details = $details;
                    }
                    if($route->type == 'category'){
                        $details = Category::find($route->pbc_id);
                        $details->slug = $route->slug;
                        $m->details = $details;
                    }
                    $submenus = Menus::where('menu_id', $top_menu->id)
                        ->where('parent_route_id', $m->route_id)
                        ->where('status', '1')
                        ->where('is_deleted', '0')
                        ->orderBy('sn_no', 'asc')
                        ->get();
                    foreach($submenus as $sm){
                        $sm_route = Routes::find($sm->route_id);
                        if($sm_route->type == 'category'){
                            $sm->details = Category::find($sm_route->pbc_id);
                            $sm->details->slug = $sm_route->slug;
                        }
                        if($sm->_routetype == 'page'){
                            $sm->details = Pages::find($sm_route->pbc_id);
                            $sm->details->slug = $sm_route->slug;
                        }
                        if($sm_route->type == 'boat'){
                            $sm->details = Boat::find($sm_route->pbc_id);
                            $sm->details->slug = $sm_route->slug;
                        }
                    }

                    $m->submenus = $submenus;
                }
                //View::share(['top_menu' => $menus]);

                if(!empty($menus)) {
                    foreach($menus as $m) {
                        if($m->submenus->isEmpty()) {
                        }
                        else{
                            foreach($m->submenus as $sm){
                                $boatType[] = $sm->details->title;
                            }
                        }
                    }
                }
                else{
                    $boatType = array("Boats < 40'", 'Groups >12 & Event Yachts', 'Luxury Overnight Yachts', 'Sailboats & Catamarans ', "Yachts >40'", 'Fishing Boat', 'Ski & Watersports Boats', 'Entire Fleet');
                }
            }
        } 

        $data['boatType'] = $boatType;

        return $data;
    }

    //This funciton is used to pass column name in views blade files
    public static function GetSingleField($table, $select, $field, $value)
    {
        $result = DB::table($table)->where([$field => $value])->select($select)->first();
        if (!empty($result)) {
            return $result->$select;
        } else {
            return '';
        }
    }

    // Get Water Toys Categories
    public static function getWaterToysCat()
    {
        $cat = array(
            'Relaxation Toys', 
            'Adventure Toys',
            'Motorized Toys',
        );
        return $cat;
    }

    // Fnction to find filtered category in sidebar categories
    public static function findCatInFilter($catName, $filterCats) //$index
    {
        $data = self::getBoatCommonData();
        $boatType = $data['boatType'];

        $found = false;
        foreach ($filterCats as $key => $value) {
            if(isset($boatType[$value]) && $boatType[$value] == $catName)
                $found = true;
        }

        return $found;

        //if (array_key_exists($index, $boatType) && in_array($catName, $boatType))

        /*if(isset($boatType[$index]) && $boatType[$index] == $catName)
            return true;
        else
            return false;*/
    }

    // Fnction to add Activity log
    public static function addActivityLog($msg) {
        if($msg != '') {
            $name = Auth::user()->name;
            $user_id = Auth::user()->id;
            $msg = $msg." ".$name;

            $record = array(
                'logmsg' => $msg, 
                'created_by' => $user_id,
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
            );

            $rs = DB::table('activity_logs')->insert($record);
        }
    }

    // Fnction to get Icons from directory
    public static function getIcons() {
        $icons = array();
        foreach (glob("../public/photos/2/Icons/*.png") as $filename) {
            
            $files = explode("/", $filename);
            //$arr = array('path' => "", 'file' => $files[5]);
            if(isset($files[5]))
                $icons[] = $files[5];
        }
        return $icons;
    }

    // Fnction to get Destinations Categories
    public static function destinationCats() {
        return $cats = array('1' => 'Local', '2' => 'Overnight', '3' => 'Dining');
    }

    // Fnction to Add heading and content of destination
    public static function addDestinationInfo($heading, $content, $dest_id) {
        if(!empty($heading) && !empty($content)) 
        {
            for($i=0; $i < count($heading); $i++)
            {
                if($heading[$i] != '' && $content[$i] != '') {
                    $record = array(
                        'heading' => $heading[$i], 
                        'content' => $content[$i], 
                        'dest_id' => $dest_id
                    );
                   
                    $rs = DB::table('destination_details')->insert($record);
                }
            }     
        }
    }

    // Fnction to Add Gallery Images of destination
    public static function addGalleryImages($images, $dest_id) {
        foreach ($images as $img) {
            $record = array(
                'img_name' => $img, 
                'dest_id' => $dest_id,
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
            );
           
            $rs = DB::table('destination_images')->insert($record);
        }     
    }

    // Fnction to Update user privileges
    public static function updatePrivileges($modules, $role_id) {
        foreach ($modules as $key => $m) {
            $module = $key; //strtolower($m);

            $record = array(
                'role_id' => $role_id,
                'module_type' => $module,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            );

            if(isset($_POST['read_'.$module]))
                $record['can_read'] = 'on';

            if(isset($_POST['write_'.$module]))
                $record['can_write'] = 'on';

            if(isset($_POST['delete_'.$module]))
                $record['can_delete'] = 'on';

            //echo "<prE>"; print_r($record);

            DB::table('user_privileges')->insert($record);
        }    
    }

    // Fnction to get user access of user on modules
    public static function getUserAccess($module = NULL) {
        $result = array();
        $role_id = Auth::user()->role_id;
        $privileges = DB::table('user_privileges')
                ->where('role_id','=', $role_id)
                ->where('module_type','=', $module)
                ->first();
        if(!empty($privileges))
            return $privileges;
        else
            $result;
    }

    // Fnction to get all user Roles, in add/edit users
    public static function getUserRoles() {
        return $roles = DB::table('user_roles')
                ->select('*')
                ->orderBy('role', 'asc')
                ->get()->toArray();
    }
}