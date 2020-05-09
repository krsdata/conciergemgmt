<style>
   .navbar-brand img {
  display: block;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;
}
#navbar {
    height:100px;
}
#xyzGiggle{display:none;}

@media (max-width: 480px){
.cms-boatslider {
    margin-top: 100px;
}

}
@media (max-width: 991.98px){
.navbar-expand-lg>.container, .navbar-expand-lg>.container-fluid {
    padding-right: 0;
    padding-left: 0;
    text-align: center !important;
   
    display: block !important;
}
}

</style>

<header class="navigation menufixed" id="headernavigation">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
             @foreach($header_logo as $h)
             <?php /* <img src="{{ asset('/photos/'.$h['logo']) }}?v=1"> */?>
             @endforeach
             <img class="lazyload" data-src="{{ asset('/coastal-concierge-logo-175w.png') }}?v=1">
            </a>
            <!--<a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">-->
            <!--    <div class="hamburger-icon">-->
            <!--      <span></span>-->
            <!--      <span></span>-->
            <!--      <span></span>-->
            <!--      <span></span>-->
            <!--      <span></span>-->
            <!--      <span></span>-->
            <!--    </div>-->
            <!--</a>-->

            <div class="collapse navbar-collapse text-center text-dark" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><div class="media"> 
                                <div class="media-left" style="margin-right:3px;margin-top:2px;"> 
                                    <a href="mailto:laura@coastalconciergemgmt.com"> 
                                        <i class="fa fa-envelope"></i>
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                        <a href="mailto:laura@coastalconciergemgmt.com">laura@coastalconciergemgmt.com </a>
                                </div> 
                            </div>
                                </li>

                                <li>
                            <div class="media"> 
                                <div class="media-left" style="margin-right:3px;margin-top:2px;"> 
                                    <a href="tel:+18004172027"> 
                                        <i class="fa fa-phone"></i>
                                    </a> 
                                </div> 
                                <div class="media-body desktopItem"> 
                                    <a href="tel:+18004172027">Click to Call: +631-599-1864</a>
                                </div> 
                            </div>
                            
                        </li>                
            </ul>

            </div>
            <!-- <div class="collapse navbar-collapse text-center text-dark" id="navbarsExample09">
                <ul class="navbar-nav ml-auto desktopMenu">
                    @if(!empty($top_menu))
                        @foreach($top_menu as $m)
                            @if($m->submenus->isEmpty())
                                <li class="nav-item {{ (Request::path() == $m->details->slug) ? 'active' : '' }}"><a class="nav-link text-dark" href="@if($m->details->slug == '/'){{ url('/') }}@else{{ url('/'.$m->details->slug) }}@endif">{{ $m->details->page_name }}</a>
                                 <span class="cmssubmenu"></span>   
                                </li>
                            @else
                                <li class="nav-item dropdown {{ (Request::path() == $m->details->slug) ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle text-dark" href="{{ url('/'. $m->details->slug) }}" id="dropdown{{ $m->id }}">{{ $m->details->page_name }}</a>

                                    <span class="cmssubmenu"></span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown{{ $m->id }}">
                                            @foreach($m->submenus as $sm)
                                                <li class="{{ (Request::path() == $sm->details->slug) ? 'active' : '' }}"><a class="dropdown-item" href="{{ url('/'.$sm->details->slug) }}">{{ $sm->details->title }} 

                                                    <?php 
                                                    if(strtolower($sm->details->title) == 'entire fleet')
                                                        echo '(29)';
                                                    else {
                                                        $boats = \App\Boat::where(['cat_id' => $sm->details->id ])->where('status','=','active')->where('is_deleted','=','0')->pluck('id');
                                                        if(!empty($boats))
                                                            echo '('.count($boats).')';
                                                    }

                                                    ?>
                                                
                                                </a>
                                                
                                            </li>
                                            @endforeach
                                        </ul>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div> -->
        </div>
    </nav>
</header>

<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
  <div class="offcanvas-menu-inner">
    
    <nav class="offcanvas-navigation">
      <ul class="offcanvas-menu">
        @if(!empty($top_menu))
            @foreach($top_menu as $m)
                @if($m->submenus->isEmpty())
                <li>
                  <a href="@if($m->details->slug == '/'){{ url('/') }}@else{{ url('/'.$m->details->slug) }}@endif">{{ $m->details->page_name }}</a>
                </li>
                @else

                <li class="menu-item-has-children">
                  <a>{{ $m->details->page_name }}</a>
                  <ul class="sub-menu">
                    @foreach($m->submenus as $sm)
                    <li class="menu-item-has-children">
                      <a href="{{ url('/'.$sm->details->slug) }}">{{ $sm->details->title }} 

                            <?php 
                            if(strtolower($sm->details->title) == 'entire fleet')
                                echo '(29)';
                            else {
                                $boats = \App\Boat::where(['cat_id' => $sm->details->id ])->where('status','=','active')->where('is_deleted','=','0')->pluck('id');
                                if(!empty($boats))
                                    echo '('.count($boats).')';
                            }

                            ?>
                        
                        </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                @endif
            @endforeach
        @endif
      </ul>
    </nav>
  </div>
</div>