<!doctype html>
<html lang="en">
<head>
    @include('frontend.includes.head')
</head>
<body>
    <style>.l{position:fixed;width:100%;height:100%;background:#fff;top:0px;z-index:999}.d{display:inline-block;position:fixed;width:80px;height:80px;top:50%;left:50%;margin-left:-40px;margin-top:-40px}.d div{position:absolute;border:4px solid #15b8f3;opacity:1;border-radius:50%;animation:lds-ripple 1s cubic-bezier(0,.2,.8,1) infinite}.d div:nth-child(2){animation-delay:-.5s}@keyframes lds-ripple{0%{top:36px;left:36px;width:0;height:0;opacity:1}100%{top:0;left:0;width:72px;height:72px;opacity:0}}</style>
    <div class="l"><div class="d"><div></div><div></div></div></div>
    @include('frontend.includes.header')
    <div class="main-wrapper">
        @yield('content')
        @include('frontend.templates.waterToysBoats')
        @include('frontend.includes.footer')
    </div>
    @include('frontend.includes.javascripts')
</body>
</html>