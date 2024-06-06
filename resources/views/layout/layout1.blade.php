<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>{{Auth::user()->email_pengguna}} | PesanUy</title>
</head>
<body>

    <nav>
        <div class="nav_logo">PesanUy</div>
        @if(Auth::check())
            <div class="nav_user">Welcome, {{ Auth::user()->username }}</div>
            <a href="{{ route('logout') }}" class="btn">Logout</a>
        @else
            <a href="{{ route('login') }}" class="btn">Masuk/Daftar</a>
        @endif
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>