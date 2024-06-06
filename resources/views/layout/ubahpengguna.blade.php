<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=== REMIXICON ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!--=== CSS ===-->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard Admin</title>
</head>
<body>

<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li class="active">
            <a href="dashboard">
                <i class="ri-dashboard-2-line"></i>
                <span>Menu</span>
            </a>
        </li>
        <li>
            <a href="bus">
                <i class="ri-bus-fill"></i>
                <span>Bus</span>
            </a>
        </li>
        <li>
            <a href="terminal">
                <i class="ri-building-line"></i>
                <span>Halte</span>
            </a>
        </li>
        <li>
            <a href="rute">
                <i class="ri-road-map-line"></i>
                <span>Rute</span>
            </a>
        </li>
        <li>
            <a href="pengguna">
                <i class="ri-group-line"></i>
                <span>User</span>
            </a>
        </li>
        <li>
            <a href="pesanan">
                <i class="ri-shopping-cart-line"></i>
                <span>Pesan</span>
            </a>
        </li>
        <li class="logout">
        <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('actionlogout') }}"
   onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>
        </li>
    </ul>
</div>

<main class="min">

<section class="Bus section" id="Bus">
    <div class="main_content">
        <div class="header_wreaper">
            <div class="header_title">
                <span>PesanUy</span>
                <h2>Pengguna</h2>
            </div>
            <img src="{{ asset('aset/admin.png') }}" alt="" />
        </div>
        <div class="tabular_wrapper">
            <h3 class="main_title">Data Pengguna</h3>
            <div class="table_container">
                
                
            @foreach($pengguna as $user)
                <form action="/updatedata3/{{$user->id_pengguna}}" method="post">
            @csrf
                    <table>
                        <tr>			
                            <td>Nama Pengguna</td>
                            <td>
                                <input type="text" name="nama_pengguna" value="{{ $user->nama_pengguna }}">
                            </td>
                        </tr>
                        <tr>			
                            <td>Email</td>
                            <td><input type="email" name="email_pengguna" value="{{ $user->email_pengguna }}"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" value="{{ $user->password }}"></td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td>
                                <select name="level">
                                    <option value="Admin" {{ $user->level == 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Pengguna" {{ $user->level == 'Pengguna' ? 'selected' : '' }}>Pengguna</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="UBAH DATA"></td>
                        </tr>		
                    </table>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</section>
</main>

<script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>