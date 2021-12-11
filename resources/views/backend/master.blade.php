<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href={{asset('backend/assets/css/bootstrap.css')}}>

    <link rel="stylesheet" href={{asset('backend/assets/vendors/chartjs/Chart.min.css')}}>

    <link rel="stylesheet" href={{asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}>
    <link rel="stylesheet" href={{asset('backend/assets/css/app.css')}}>
    <link rel="shortcut icon" href={{asset('backend/assets/images/favicon.svg')}} type="image/x-icon">
</head>

<body>
    <div id="app">
    
        @include('backend.partials.side-navbar')
        @include('backend.partials.side-navbar')
        <div id="main">

            @include('backend.partials.top-navbar')

            <div class="main-content container-fluid">
             <div class="page-title">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
                </div>
                <section class="section">

                   @yield('content')
                   
                </section>
            </div>

            @include('backend.partials.footer')
        </div>
    </div>
    
    @include('backend.partials.script')
    
</body>

</html>