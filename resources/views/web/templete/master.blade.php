<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rising Globe Technology & Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('web/img/logo/icon.png')}}">    
    <!-- ===================== CSS ======================= -->   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('web/css/icons.min.css')}}">    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('web/css/plugins.css')}}">    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    @yield('meta') 
    <!-- Modernizer JS -->
    <script src="{{asset('web/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <section>
        {{-- HEADER --}}
        @include('web.include.header')

        {{-- CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('web.include.footer')


        <!-- ====================== JS ====================== -->
        <!-- jQuery JS -->
        <script src="{{asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('web/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
        <!-- Plugins JS -->
        <script src="{{asset('web/js/plugins.js')}}"></script>
        <!-- Ajax Mail -->
        <script src="{{asset('web/js/ajax-mail.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('web/js/main.js')}}"></script>
        @yield('script')
    </section>    
</body>
</html>
       

        

  