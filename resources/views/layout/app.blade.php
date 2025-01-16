<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('argon/css/argon.css?v=1.2.0') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('argon/vendor/select2/dist/css/select2.min.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/html-duration-picker@latest/dist/html-duration-picker.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('argon/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('argon/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <script src="{{ asset('fullcalendar/dist/index.global.min.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #calendar-container {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 15px;
        background-color: #f8f9fa;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .fc-toolbar-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .fc-daygrid-event {
        border-radius: 5px;
        font-size: 0.85rem;
        padding: 2px 5px;
    }

    .fc-day-today {
        background-color: rgba(0, 123, 255, 0.2) !important;
    }

    .fc-event-title {
        white-space: normal !important;
    }
</style>


    </head>

    <style type="text/css">
        table td {
            word-break: break-word;
            vertical-align: top;
            white-space: normal !important;
        }

        .position-relative {
            position: relative;
        }

        .indicator{
            background: #dd3b3b;
            border-radius: 50%;
            box-shadow: 0 .1rem .2rem rgba(0, 0, 0, .05);
            color: #fff;
            font-size: .675rem;
            margin-left: -18px;
            height: 18px;
            padding: 1px;
            position: absolute;
            text-align: center;
            top: -10px;
            width: 20px;
            z-index: 1;
        }
    </style>

    <body>

        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <div class="sidenav-header  align-items-center">
                    <div class="mt-2" style="padding-top: 10%;"> UAS PEMWEB </div>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        @include('layout.sidebar')
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center">
                            <h3 class="text-white"></h3>
                        </ul>
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">
                                                @if (Auth::user())
                                                    {{ Auth::user()->name }}
                                                @else
                                                    <i> (Guest) </i>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                @include('jawaban.NomorSatu.index')
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid mt-4 mb-4">
                @if ($message = Session::get('message'))
                    <div class="alert alert-{{ $message[1] }} alert-block">
                        {{ $message[0] }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>

        <!-- Argon Scripts -->
        <!-- Core -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script src="{{ asset('argon/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <!-- Argon JS -->
        <script src="{{ asset('argon/js/argon.js?v=1.2.0') }}"></script>
        <script src="{{ asset('argon/vendor/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/datatables.net/js/jquery.dataTables.min.js') }}"> </script>
        <script src="{{ asset('argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"> </script>

        @yield('addon-script')
        
    </body>

</html>