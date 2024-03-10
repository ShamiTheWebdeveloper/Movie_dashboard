<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Material Dash {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
        <!-- End plugin css for this page -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo/style.css') }}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
            <div class="mdc-drawer__header">
                <a href="#" class="brand-logo">
                    <img src="../assets/images/logo.svg" alt="logo">
                </a>
            </div>
            <div class="mdc-drawer__content">
                <div class="mdc-list-group">
                    <nav class="mdc-list mdc-drawer-menu">
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('dashboard') }}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                                Dashboard
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('select') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"/>
                                </svg>
                                &nbsp;&nbsp;
                                Selected movie
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('user.recommends') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
                                &nbsp;&nbsp;
                                Users suggest
                            </a>
                        </div>

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{ route('Useruploads') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                                </svg>
                                &nbsp;&nbsp;
                                Your uploads
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </aside>
        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
            <!-- partial:partials/_navbar.html -->
            <header class="mdc-top-app-bar">
                <div class="mdc-top-app-bar__row">
                    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                        <span class="mdc-top-app-bar__title">Upload movie and recommend to others</span>
                    </div>
                    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                        <div class="menu-button-container menu-profile d-none d-md-block">
                            <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon text-primary" aria-hidden="true">person</i>&nbsp;
                    {{ Auth::user()->name }}
                </span>
                            </button>
                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-account-edit-outline text-primary"></i>
                                        </div>
                                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <a href="{{ route('profile.edit') }}" class="item-subject font-weight-normal">Edit profile</a>
                                        </div>
                                    </li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <div class="item-thumbnail item-thumbnail-icon-only">
                                            <i class="mdi mdi-settings-outline text-primary"></i>
                                        </div>
                                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="item-subject font-weight-normal">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x :href="route('logout')"
                                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x>
                                                </form>
                                            </h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="divider d-none d-md-block"></div>
                    </div>
                </div>
                <hr>
            </header>
            <!-- partial -->
            <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <main class="content-wrapper">
                    {{ $slot }}
                </main>
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- end inject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/material.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- end inject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    </body>
</html>
