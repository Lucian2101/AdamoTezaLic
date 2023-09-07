<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title>Diamonds</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">

                <nav class="nav">
                    <a class="nav__link" href="{{ route('index') }}">Index</a>
                    <a href="/admin/dashboard" class="nav__link">Admin</a>
                    <a href="{{route('diamond')}}" class="nav__link active">Diamond</a>
                    <a href="{{ route('auth.logout') }}" class="nav__link">Logout</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="intro">
        <div class="container">
            <div class="col-md-12 bg-warning">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Price
                            </th>
                        </tr>
                        @foreach ($data as $em)
                        <tr>
                            <td>{{ $em->id }}</td>
                            <td>{{ $em->name }}</td>
                            <td>{{ $em->description }}</td>
                            <td>{{ $em->price }}</td>
                            <td>
                                <a href="{{'delete/'.$em['id']}}">Delete</a>
                            </td>
                            <td>
                                <a href="{{'edit/'.$em['id']}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>