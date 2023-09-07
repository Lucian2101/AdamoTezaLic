<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title>Diamonds</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">

                <nav class="nav">
                    <a class="nav__link" href="{{ route('index') }}">Index</a>
                    <a href="/admin/dashboard" class="nav__link active">Admin</a>
                    <a href="{{route('diamond')}}" class="nav__link">diamond</a>
                    <a href="{{ route('auth.logout') }}" class="nav__link">logout</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 bg-warning">
                    <h4>Dashboard</h4>
                    <hr>
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $LoggedUserInfo['name'] }}</td>
                                <td>{{ $LoggedUserInfo['email'] }}</td>
                                <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>