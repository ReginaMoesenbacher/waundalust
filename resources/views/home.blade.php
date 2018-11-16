@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->



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
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>


            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>



        </main>
    </div>
</div>


</body>
</html>

@endsection
