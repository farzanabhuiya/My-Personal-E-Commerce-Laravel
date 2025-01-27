<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <meta name="Description" content="Truested Online Earning Platform">
    <meta name="Author" content="starlink">
    <meta name="keywords" content="dating, love, dating app, programming wormhole">


	 <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="./asset/images/brand-logos/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('admin/asset/images/brand-logos/favicon.png')}}" type="image/x-icon">


    <script src="https://kit.fontawesome.com/1159b8e81c.js" crossorigin="anonymous"></script>


    {{-- <script src="./asset/libs/choices.js/public/assets/scripts/choices.min.js"></script> --}}



    <!-- Main Theme Js -->


    <script src="{{ asset('admin/asset/js/main.js') }}"></script>
    {{-- <script src="{{ asset('admin/asset/ckeditor/ckeditor5.css') }}"></script> --}}
    {{-- <script src="../asset/js"></script> --}}
    {{-- select2 cdn --}}

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <link href="{{ asset('admin/asset/css/sweetalert2.min.css') }}" rel="stylesheet">


    <style>
        .ck-editor__editable {
            min-height: 200px;
            /* Editor's content area height */
        }
    </style>







    <!---/datetimepicker-->
    <link rel="stylesheet" href="{{ asset('admin/asset/css/datetimepicker.css') }} ">

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/asset/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Style Css -->
    <link href="{{ asset('admin/asset/css/styles.css') }}" rel="stylesheet">


    <!-- Icons Css -->
    <link href="{{ asset('admin/asset/css/icons.css') }}" rel="stylesheet">


    <!-- Node Waves Css -->
    <link href="{{ asset('admin/asset/libs/node-waves/waves.min.css') }}" rel="stylesheet">


    <!-- Simplebar Css -->
    <link href="{{ asset('admin/asset/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">


    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/asset/libs/flatpickr/flatpickr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/asset/libs/@simonwep/pickr/themes/nano.min.css') }}">


    <!-- Choices Css -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/asset/libs/choices.js/public/assets/styles/choices.min.css') }}"> --}}


    <link rel="stylesheet" href="{{ asset('admin/asset/libs/jsvectormap/css/jsvectormap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/asset/libs/swiper/swiper-bundle.min.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/asset/libs/prismjs/themes/prism-coy.min.css') }}">


 


    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/asset/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{ asset('admin/asset/libs/prismjs/themes/prism-coy.min.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/asset/libs/quill/quill.snow.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/asset/libs/quill/quill.bubble.css') }}">

    <script src="https://code.highcharts.com/highcharts.js"></script>


</head>

<body>






    <!-- Start Switcher -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio"
                                        name="header-colors" id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio"
                                        name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio"
                                        name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header"
                                        type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-footer d-grid">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div class="page">

        {{-- Header --}}

        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="#" class="header-logo">
                                <img src="{{ asset('admin/asset/images/brand-logos/logo.png') }}" alt="logo"
                                    class="desktop-logo">
                                <img src="{{ asset('admin/asset/images/brand-logos/logo.png') }}" alt="logo"
                                    class="toggle-logo">
                                <img src="{{ asset('admin/asset/images/brand-logos/logo.png') }}" alt="logo"
                                    class="desktop-dark">
                                <img src="{{ asset('admin/asset/images/brand-logos/logo.png') }}" alt="logo"
                                    class="toggle-dark">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->


                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bx bx-bell header-link-icon"></i>
                            <span style="display: none;"
                                class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary bg-pink-transparent avatar-rounded"
                                id="notification-dot">
                                <i class="bi bi-circle-fill fs-8"></i>
                            </span>
                        </a>
                        <!-- End::main-header-dropdown -->
                    </div>


                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                {{-- <div class="me-sm-2 me-0">
                                    <img src="{{ asset('images/default/default.png') }}" alt="img" width="32"
                                        height="32" class="rounded-circle">
                                </div> --}}
                                <div class="me-sm-2 me-0">
                                    <img src="https://api.dicebear.com/7.x/initials/svg?seed= {{ auth()->user()->name }}"alt="img"
                                        width="32" height="32" class="rounded-circle">
                                </div>

                                {{--
                                <div class="image">
                                    <!---<img src="https://api.dicebear.com/7.x/initials/svg?seed= {{ auth()->user()->name }}" alt="" />--->
                                    <img src="{{ asset('storage/users/'.auth()->user()->profile_img) ? asset('storage/users/'.auth()->user()->profile_img) : ''}}" alt="" />
                                   </div> --}}
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">{{ config('app.name') }}</p>

                                    @role('supper_admin')
                                        <span class="op-7 fw-normal d-block fs-11">Super Admin</span>
                                    @endrole
                                    @role('admin')
                                        <span class="op-7 fw-normal d-block fs-11"> Admin</span>
                                    @endrole
                                    @role('writter')
                                        <span class="op-7 fw-normal d-block fs-11">writter</span>
                                    @endrole





                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">



                            <li>
                                <a href="{{ route('profile') }}">
                                    <i class="lni lni-user"></i> View Profile
                                </a>
                            </li>


                            <li class="logout"><a class="dropdown-item d-flex" href="#"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log
                                    Out</a></li>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                            </form>




                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="bx bx-cog header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>

        </header>


        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="#" class="header-logo">
                    <img src="{{ asset('admin/asset/images/brand-logos/' . 'logo.png') }}" alt="logo" class="desktop-logo">
                    <img src="{{ asset('admin/asset/images/brand-logos/' . 'logo.png') }}" alt="logo" class="toggle-logo">
                    <img src="{{ asset('admin/asset/images/brand-logos/' . 'logo.png') }}" alt="logo" class="logo">
                    <img src="{{ asset('admin/asset/images/brand-logos/' . 'favicon.png') }}" alt="logo" class="toggle-dark">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <div class="slide-right" id="slide-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <li class="slide">
                            <a href="{{route('dashbord.admin')}} " class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>



                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Manage</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::User -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Category</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Category</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('category.store') }}" class="side-menu__item">Avilable
                                        Category</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('category.index') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::User -->

                        <!-- Start::User -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">SubCategorie</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">SubCategorie</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Subcategorie.story') }}" class="side-menu__item">Avilable
                                        SubCategorie</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Subcategorie.index') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::User -->


                        <!-- Start::User -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Brand</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Brand</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Brand.index') }}" class="side-menu__item">Avilable Brand</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Brand.store') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::User -->


                        <!-- Start::User -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Item</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Item</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Item.index') }}" class="side-menu__item">Avilable Items</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Item.store') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::User -->



                        <!-- Start::ProductSize -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">ProductSize</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">ProductSize</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('ProductSize.index') }}" class="side-menu__item">Avilable
                                        ProductSize</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('ProductSize.store') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::ProductSize -->





                        <!-- Start::ProductColour -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">ProductColour</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">ProductColour</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('ProductColour.store') }}" class="side-menu__item">Avilable
                                        ProductColour</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('ProductColour.index') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::ProductColour -->




                        <!-- Start::Product -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Product</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Product</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Product.index') }}" class="side-menu__item">Avilable
                                        Product</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Product.create') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::Product-->




                        <!-- Start::DiscountCoupon -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">DiscountCoupon</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">DiscountCoupon</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Discount.store') }}" class="side-menu__item">Avilable
                                        DiscountCoupon</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Discount.index') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::discount-->


                           
                        
                    
                        <!-- Start::Shipping -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Shipping</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Shipping</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Shipping.index') }}" class="side-menu__item">Avilable
                                        Shipping</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Shipping.store') }}" class="side-menu__item">Add New</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::Product-->



                        <!-- Start::order -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Order</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Order</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('Order.list') }}" class="side-menu__item">Avilable
                                        Order List</a>
                                </li>
                              
                            </ul>
                        </li>
                        <!-- End::order-->


                           <!-- Start::page -->
                           <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Page</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Shipping</a>
                                </li>
                                <li class="slide">
                                    <a href="{{route('Page.index')}}" class="side-menu__item">Avilable
                                        Page</a>
                                </li>
            
                                <li class="slide">
                                    <a href="{{route('Page.story')}}" class="side-menu__item">Add New</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::Page-->
                        
                       


                        {{-- <!-- Start::User -->   
                        <li class="slide">
                            <a href="{{ route('users') }}" class="side-menu__item">
                                <i class="bx bx-user side-menu__icon"></i>
                                <span class="side-menu__label">Users</span>
                            </a>
                        </li>
                        <!-- End::User -->
        
                        <!-- Start::Payment Method -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-heart side-menu__icon"></i>
                                <span class="side-menu__label">Interests</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Interests</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('interests') }}" class="side-menu__item">Avilable Interests</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('add.interest.view') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::Payment Method -->
        
        
                        <!-- Start::Notification -->
                        <li class="slide">
                            <a href="{{ route('notification') }}" class="side-menu__item">
                                <i class="bx bx-notification side-menu__icon"></i>
                                <span class="side-menu__label">Send Notification</span>
                            </a>
                        </li>
                        <!-- End::Notification -->
        
        
        
        
        
                        <li class="slide__category"><span class="category-name">System Settings</span></li>
                        <!-- Start::General Setting -->
                        <li class="slide">
                            <a href="{{ route('general.setting.view') }}" class="side-menu__item">
                                <i class="bx bx-cog side-menu__icon"></i>
                                <span class="side-menu__label">General Setting</span>
                            </a>
                        </li>
                        <!-- End::General Setting -->
                        <!-- Start::Payment Method -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-money side-menu__icon"></i>
                                <span class="side-menu__label">Payment Methods</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Payment Methods</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('gateways') }}" class="side-menu__item">Avilable Method</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('add.gateway.view') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::Payment Method -->
        
                        <!-- Start::Memberships -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-crown side-menu__icon"></i>
                                <span class="side-menu__label">Memberships</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Memberships</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('memberships') }}" class="side-menu__item">Avilable Memberships</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ route('add.memberships.view') }}" class="side-menu__item">Add New</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::Memberships --> --}}

                    </ul>

                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>

        <div class="main-content app-content">
            <div class="container-fluid">
                <div class="d-md-flex d-block align-items-center justify-content-between  page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">@yield('title')</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>




        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-semibold">{{ config('app.name') }}</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a
                        href="https://wa.me/{{ config('dev.whatsapp') }}" target="_blank">
                        <span class="fw-semibold text-primary text-decoration-underline">Starlink</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>


    </div>
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Popper JS -->
    <script src="{{ asset('admin/asset/libs/@popperjs/core/umd/popper.min.js') }}"></script>


    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    


    <!-- Node Waves JS-->
    <script src="{{ asset('admin/asset/libs/node-waves/waves.min.js') }}"></script>


    <!-- Sticky JS -->
    <script src="{{ asset('admin/asset/js/sticky.js') }}"></script>


    <!-- Simplebar JS -->
    {{-- <script src="{{ asset('admin/asset/libs/simplebar/simplebar.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('admin/asset/js/simplebar.js') }}"></script> --}}


    <!-- Color Picker JS -->
    <script src="{{ asset('admin/asset/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>



    <!-- JSVector Maps JS -->
    <script src="{{ asset('admin/asset/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>


    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('admin/asset/libs/jsvectormap/maps/world-merc.js') }}"></script>


    <!-- Apex Charts JS -->
    <script src="{{ asset('admin/asset/libs/apexcharts/apexcharts.min.js') }}"></script>


    <!-- Chartjs Chart JS -->
    <script src="{{ asset('admin/asset/libs/chart.js/chart.min.js') }}"></script>


    <!-- CRM-Dashboard -->
    {{-- <script src="{{ asset('admin/asset/js/crm-dashboard.js') }}"></script> --}}


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('admin/asset/js/custom-switcher.min.js') }}"></script>


    <!-- Custom JS -->
    {{-- <script src="{{ asset('admin/asset/js/custom.js') }}"></script> --}}


    <!-- Internal Choices JS -->
    {{-- <script src="{{ asset('admin/asset/js/choices.js') }}"></script> --}}


    <!-- Quill Editor JS -->
    {{-- <script src="{{ asset('admin/asset/libs/quill/quill.min.js') }}"></script> --}}





    <!-- Internal Quill JS -->
    {{-- <script src="{{ asset('admin/asset/js/quill-editor.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!---/datetimepicker--->
    <script src="{{ asset('admin/asset/js/datetimepicker.js') }}"></script>
    {{-- sweetalert cdn --}}
    


   

 

<!-- Defaultmenu JS -->
    <script src="{{ asset('admin/asset/js/defaultmenu.min.js') }}"></script>

    <script src="{{ asset('Js/sweetalert.js') }}"></script>
  

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 

    <!-- Choices JS -->
    <script src="{{ asset('admin/asset/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>



    @stack('customJs')

<script>
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
  </script>

</body>

<script>
    $(document).ready(function(event) {
        $('.logout').click(function() {

            $(this).next('form').submit();



        })
    })

showToast('Status updated successfully!')


</script>



<script>
    Highcharts.chart('container', {

title: {
 text: 'U.S Solar Employment Growth',
 align: 'left'
},

subtitle: {
 text: 'By Job Category. Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>.',
 align: 'left'
},

yAxis: {
 title: {
     text: 'Number of Employees'
 }
},

xAxis: {
 accessibility: {
     rangeDescription: 'Range: 2010 to 2022'
 }
},

legend: {
 layout: 'vertical',
 align: 'right',
 verticalAlign: 'middle'
},

plotOptions: {
 series: {
     label: {
         connectorAllowed: false
     },
     pointStart: 2010
 }
},

series: [{
 name: 'Installation & Developers',
 data: [
     43934, 48656, 65165, 81827, 112143, 142383,
     171533, 165174, 155157, 161454, 154610, 168960, 171558
 ]
}, {
 name: 'Manufacturing',
 data: [
     24916, 37941, 29742, 29851, 32490, 30282,
     38121, 36885, 33726, 34243, 31050, 33099, 33473
 ]
}, {
 name: 'Sales & Distribution',
 data: [
     11744, 30000, 16005, 19771, 20185, 24377,
     32147, 30912, 29243, 29213, 25663, 28978, 30618
 ]
}, {
 name: 'Operations & Maintenance',
 data: [
     null, null, null, null, null, null, null,
     null, 11164, 11218, 10077, 12530, 16585
 ]
}, {
 name: 'Other',
 data: [
     21908, 5548, 8105, 11248, 8989, 11816, 18274,
     17300, 13053, 11906, 10073, 11471, 11648
 ]
}],

responsive: {
 rules: [{
     condition: {
         maxWidth: 500
     },
     chartOptions: {
         legend: {
             layout: 'horizontal',
             align: 'center',
             verticalAlign: 'bottom'
         }
     }
 }]
}

});
 </script>
 

{{-- pie chart --}}

<script>
    Highcharts.chart('pie_chart', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Egg Yolk Composition'
    },
    tooltip: {
        valueSuffix: '%'
    },
    subtitle: {
        text:
        'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Percentage',
            colorByPoint: true,
            data: [
                {
                    name: 'Water',
                    y: 55.02
                },
                {
                    name: 'Fat',
                    sliced: true,
                    selected: true,
                    y: 26.71
                },
                {
                    name: 'Carbohydrates',
                    y: 1.09
                },
                {
                    name: 'Protein',
                    y: 15.5
                },
                {
                    name: 'Ash',
                    y: 1.68
                }
            ]
        }
    ]
});
</script>

{{-- ,culom chart --}}
<script>
    Highcharts.chart('culom_chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Corn vs wheat estimated production for 2023'
    },
    subtitle: {
        text:
            'Source: <a target="_blank" ' +
            'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>'
    },
    xAxis: {
        categories: ['USA', 'China', 'Brazil', 'EU', 'Argentina', 'India'],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '1000 metric tons (MT)'
        }
    },
    tooltip: {
        valueSuffix: ' (1000 MT)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Corn',
            data: [387749, 280000, 129000, 64300, 54000, 34300]
        },
        {
            name: 'Wheat',
            data: [45321, 140000, 10000, 140500, 19500, 113500]
        }
    ]
});
</script>


</html>
