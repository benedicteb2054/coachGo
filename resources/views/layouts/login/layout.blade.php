<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    @yield('content')
    @include('layouts.partials.scripts')
</body>
</html>