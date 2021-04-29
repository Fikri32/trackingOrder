<!DOCTYPE html>
<html lang="en">

<!-- Acto/index-5.html  13 Nov 2019 13:00:42 GMT -->
<head>
@include('layouts.incl_top')

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- main header -->
    @include('layouts.navbar')
    <!-- main-header end -->

@yield('content')
   

    <!-- main-footer -->
    @include('layouts.footer')
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
@include('layouts.incl_bot')

</body><!-- End of .page_wrapper -->

<!-- Acto/index-5.html  13 Nov 2019 13:01:28 GMT -->
</html>
