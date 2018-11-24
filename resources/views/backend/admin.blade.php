@extends('backend.layouts.app')

@section('content')

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Waundalust</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky mt-5 pt-5">
                    <ul class="nav flex-column align-items-start">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('waundarouten.index') }}">
                                Wanderrouten
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Alternative Aktivitäten
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Hütten
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Bergführer
                            </a>
                        </li>

                    </ul>


                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('container')

            </main>
        </div>
    </div>


    </body>
    </html>

@endsection
