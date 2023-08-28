<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('') }}/" data-template="horizontal-menu-template-starter">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sifasum | UINSBY</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('') }}/fonts/materialdesignicons.css" />

    <link rel="stylesheet" href="{{ url('') }}/fonts/fontawesome.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ url('') }}/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('') }}/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}//css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('') }}//vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('') }}/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('') }}/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-ex-7">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-7">
                        <div class="navbar-nav me-auto">
                            <a class="nav-item nav-link active" href="javascript:void(0)">Bayaran</a>
                        </div>
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);"><i
                                        class="tf-icons navbar-icon mdi mdi-lock-outline me-1"></i>Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="card">
                <!-- Help Center Header -->
                <div class="help-center-header d-flex flex-column justify-content-center align-items-center mt-5">
                    <h3 class="text-center text-primary fw-semibold">Hello, how can we help?</h3>
                    <p class="text-center px-3 mb-0">Common troubleshooting topics: eCommerce, Blogging to payment</p>
                    <div class="input-wrapper my-3 input-group input-group-lg input-group-merge px-5">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-magnify mdi-20px"></i></span>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- /Help Center Header -->

                <!-- Popular Articles -->
                <div class="help-center-popular-articles py-5">
                    <div class="container-xl">
                        <h4 class="text-center my-4">Popular Articles</h4>
                        <div class="row mb-2">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    @foreach ($rooms as $key => $room)
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body text-center">
                                                    {{-- <img class="mb-3" src="{{ url('') }}/svg/icons/rocket.svg"
                                                        height="60" alt="Help center landing"> --}}
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100"
                                                            src="../../assets/img/elements/18.jpg" alt="Third slide">
                                                    </div>
                                                    <h5>Getting Started</h5>
                                                    <p>Whether you're new or you're a power user, this article will…</p>
                                                    <a class="btn btn-outline-primary waves-effect"
                                                        href="./pages-help-center-article.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Popular Articles -->

                <!-- Knowledge Base -->
                <div class="help-center-knowledge-base bg-help-center py-5 mt-4">
                    <div class="container-xl">
                        <h4 class="text-center my-4">Knowledge Base</h4>
                        <div class="row">
                            <div class="col-lg-10 mx-auto mb-2">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div
                                                            class="avatar-initial bg-label-success rounded me-2 w-100">
                                                            <i class="mdi mdi-rocket-outline mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Getting Started</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">Account</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a
                                                            href="./pages-help-center-categories.html">Authentication</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Billing</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">14 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div class="avatar-initial bg-label-info rounded me-2 w-100">
                                                            <i class="mdi mdi-gift-outline mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Orders</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">Processing
                                                            orders</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Payments</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Returns, Refunds
                                                            and Replacements</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">13 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div
                                                            class="avatar-initial bg-label-primary rounded me-2 w-100">
                                                            <i class="mdi mdi-lock-open-outline mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Safety and security</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">Security and
                                                            hacked accounts</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Privacy</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Spam and fake
                                                            accounts</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">9 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div class="avatar-initial bg-label-danger rounded me-2 w-100">
                                                            <i class="mdi mdi-content-paste mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Rules and policies</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">General</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Intellectual
                                                            property</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Guidelines for
                                                            law enforcement</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">14 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div
                                                            class="avatar-initial bg-label-warning rounded me-2 w-100">
                                                            <i class="mdi mdi-message-outline mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Chats</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">Account</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a
                                                            href="./pages-help-center-categories.html">Authentication</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Billing</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">14 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar avatar-sm">
                                                        <div
                                                            class="avatar-initial bg-label-secondary rounded me-2 w-100">
                                                            <i class="mdi mdi-link mdi-20px"> </i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-3 ms-2">Connections</h5>
                                                </div>
                                                <ul>
                                                    <li class="text-primary py-1">
                                                        <a href="./pages-help-center-categories.html">Conversations</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">Jobs</a>
                                                    </li>
                                                    <li class="text-primary pb-1">
                                                        <a href="./pages-help-center-categories.html">People</a>
                                                    </li>
                                                </ul>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0);" class="text-body">14 articles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Knowledge Base -->

                <!-- Keep Learning -->
                <div class="help-center-keep-learning py-5 mb-2">
                    <div class="container-xl">
                        <h4 class="text-center my-4">Keep Learning</h4>
                        <div class="row mb-4">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/svg/icons/laptop.svg"
                                                    height="60" alt="Help center landing">
                                                <h5>Blogging</h5>
                                                <p>Expert tips &amp; tools to improve your website or online store using
                                                    blog.</p>
                                                <a class="btn btn-outline-primary waves-effect"
                                                    href="./pages-help-center-categories.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/svg/icons/lightbulb.svg"
                                                    height="60" alt="Help center landing">
                                                <h5>Inspiration Center</h5>
                                                <p>Inspiration from experts to help you start and grow your big ideas.
                                                </p>
                                                <a class="btn btn-outline-primary waves-effect"
                                                    href="./pages-help-center-categories.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="../../assets/svg/icons/discord.svg"
                                                    height="60" alt="Help center landing">
                                                <h5>Community</h5>
                                                <p>A group of people living in the same place or having a particular.
                                                </p>
                                                <a class="btn btn-outline-primary waves-effect"
                                                    href="./pages-help-center-categories.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Keep Learning -->

                <!-- Help Area -->
                <div class="help-center-contact-us bg-help-center">
                    <div class="container-xl">
                        <div class="row justify-content-center py-5 my-4">
                            <div class="col-md-8 col-lg-6 text-center">
                                <h4>Still need help?</h4>
                                <p class="mb-4">
                                    Our specialists are always happy to help. Contact us during standard business hours
                                    or email
                                    us 24/7 and we'll get back to you.
                                </p>
                                <div class="d-flex justify-content-center flex-wrap gap-4">
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary waves-effect waves-light">Visit our community</a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary waves-effect waves-light">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Help Area -->
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('') }}/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/js/bootstrap.js"></script>
    <script src="{{ url('') }}/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ url('') }}/libs/node-waves/node-waves.js"></script>

    <script src="{{ url('') }}/libs/hammer/hammer.js"></script>

    <script src="{{ url('') }}/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ url('') }}/js/main.js"></script>

    <!-- Page JS -->
</body>

</html>
