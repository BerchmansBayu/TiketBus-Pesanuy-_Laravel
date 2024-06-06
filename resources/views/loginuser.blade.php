<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/login&Regis.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="container">
        <div class="forms">
            <div class="form registrasi">
                <div class="header">
                    <div class="logo-wrapper">
                        <img src="{{ asset('aset/logo.png') }}" alt="Logo" class="logo" width="80" height="80">
                    </div>
                    <span class="title">Login User</span>
                    <form action="{{ route('actionlogin1') }}" method="POST">
                      @csrf
                        <div class="input-field">
                            <input type="text" name="nama_pengguna" placeholder="Masukan Username" required>
                            <i class="uil uil-user icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Masukan Password" required>
                            <i class="uil uil-padlock icon"></i>
                        </div>
                        <div class="button">
                            <button type="submit"  style="
    background-color: #007BFF; 
    border: none; 
    color: white; 
    padding: 10px 20px; 
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 14px; 
    margin: 4px 2px; 
    cursor: pointer; 
    border-radius: 5px;
    transition: background-color 0.3s ease;
" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#007BFF';">Login</button>
                        </div>
                   
                    <div class="login-signup">
                        <span class="text">Login admin <a href="{{ route('login') }}" class="text signup-text">Login</a></span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>