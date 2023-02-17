<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
   
   <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="{{route('cars.index');}}" class="navbar-brand">Cars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{route('cars.index');}}" class="nav-link">All Cars</a>                       
                    </li>
                    <li class="nav-item">
                        <a href="{{route('search');}}" class="nav-link">Search</a>                       
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cars.create');}}" class="nav-link">Add</a>                       
                    </li> 
                    <li class="nav-item">
                        <a href="{{route('update');}}" class="nav-link">Update</a>                       
                    </li>                                         
                    
                </ul>
            </div>
        </div>        
    </nav>
    @yield('content')
</body>
</html>