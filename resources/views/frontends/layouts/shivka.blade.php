<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shivaaythemes.in/shivka-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 15:46:39 GMT -->
<head>
    @include("frontends.partials.titlemeta")
    @include("frontends.partials.headcss")
</head>
<body>
    @include("frontends.partials.loder")

    @include("frontends.partials.loder")
    @include("frontends.partials.headerbar")

    @yield('content')

    @include("frontends.partials.footerbar")


<!--Back To Top Start-->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 273.171;"></path>
        </svg>
    </div>
<!--Back To Top End-->
    @include("frontends.partials.vendorscripts")
    @yield('scriptbawah')
</body>

<!-- Mirrored from shivaaythemes.in/shivka-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 15:47:07 GMT -->
</html>