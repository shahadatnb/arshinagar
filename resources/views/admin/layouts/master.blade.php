<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <ul class="nav flex-column nav-pills" >
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">Category</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>