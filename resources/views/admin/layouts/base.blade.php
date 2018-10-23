<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Topwork | Admin page</title>
    <meta name="description" content="Blank inner page examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="{{ asset('assets/admin/fonts/webfont.js') }}" type="text/javascript"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/css/app_admin.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Base Styles -->

    <link rel="shortcut icon" href="assets/demo/demo11/media/img/logo/favicon.ico"/>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled
 m-aside-left--skin-light m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
    @include('admin.layouts.header')
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        @include('admin.layouts.left_sidebar')
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    @yield('base.title')
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <div class="m_datatable m-datatable m-datatable--default
                                m-datatable--error m-datatable--loaded"
                                 id="m_datatable_latest_orders">
                                @yield('base.function')
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        @include('flash::message')
                        @yield('base.content')
                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    @include('admin.layouts.footer')
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Nav -->
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/app_admin.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
</body>
<!-- end::Body -->
</html>
