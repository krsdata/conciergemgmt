<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.includes.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.includes.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.includes.header')

                @yield('content')

            </div>

            @include('admin.includes.footer')

        </div>
    </div>

    @include('admin.includes.modals')

    @include('admin.includes.javascripts')

</body>
