<?php

namespace App\Providers;

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
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Settings::where('status', '1')
            ->where('is_deleted', '0')
            ->get();
        $site_settings = array();
        if(isset($settings)){
            foreach($settings as $s){
                if($s->key == 'phone_number'){
                    $number = preg_replace("/[^\d]/", "", substr($s->value, -10));
                    $length = strlen($number);
                    if($length >= 10) {
                        $site_settings['phone'] = substr($s->value, 0, 1).'-'.preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
                    }
                }
                if($s->key == 'company_email'){
                    $site_settings['email'] = $s->value;
                }
                if($s->key == 'top_text'){
                    $site_settings['top_text'] = $s->value;
                }
                if($s->key == 'company_address'){
                    $site_settings['address'] = $s->value;
                }
                if($s->key == 'sl_fb'){
                    $site_settings['sl_fb'] = $s->value;
                }
                if($s->key == 'sl_twitter'){
                    $site_settings['sl_twitter'] = $s->value;
                }
                if($s->key == 'sl_ta'){
                    $site_settings['sl_ta'] = $s->value;
                }
            }
        }
        View::share(['site_settings' => $site_settings]);

        $header_logo = Headerlogo::where('id',1)->get();
        if(!empty($header_logo)){
            View::share(['header_logo' => $header_logo]);
        }

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
                View::share(['top_menu' => $menus]);
            }
        }

        $footer_menu = AllMenu::where('position', 'footer')
            ->where('status', '1')
            ->where('is_deleted', '0')
            ->first();
        if(!empty($footer_menu)){
            $menus = Menus::where('menu_id', $footer_menu->id)
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
                }
                View::share(['footer_menu' => $menus]);
            }
        }
   
    }
}
