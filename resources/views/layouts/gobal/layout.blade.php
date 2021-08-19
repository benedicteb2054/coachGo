<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading  footer-fixed">
<div id="app">
    @include('layouts.gobal.partials.mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('layouts.gobal.partials.menu')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('layouts.gobal.partials.top-bar')
                        <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="px-4 justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                    @yield('page-title')
                                </h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                        @yield('sub-menu')
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="row">
                                @yield('main-content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.gobal.partials.footer')
                <div id="myDynamicModal" class="modal fade" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</div>
@include('layouts.partials.scripts')
</body>
</html>
