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
        <li>
        <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="{{ route('actionlogout') }}"
   onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             <i class="ri-logout-circle-line"></i>
    <span>Logout</span>
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
                
                
                <a class="btn btn-danger" href="deleteAll1">Wipe Data</a>
                <a class="btn btn-success" href="eksporpengguna">Print Data</a>
                <table>
                    <thead>
                        <tr>
                        <th>Nama pengguna</th>
                            <th>Email pengguna</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengguna as $bus)
                        <tr>
                        <td>{{ $bus->nama_pengguna }}</td>
                            <td>{{ $bus->email_pengguna }}</td>
                            <td>{{ $bus->password }}</td>
                            <td>
                            <a type="button" class="btn btn-warning" href="/ubahpengguna/{{$bus->id_pengguna}}">Edit</a>
                            <a type="button" class="btn btn-danger" href="/deletepengguna/{{$bus->id_pengguna}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</main>

<script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>