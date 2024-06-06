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
                <h2>Rute</h2>
            </div>
            <img src="{{ asset('aset/admin.png') }}" alt="" />
        </div>
        <div class="tabular_wrapper">
            <h3 class="main_title">Data Rute</h3>
            <div class="table_container">
                
            <a class="btn btn-primary" href="tambahrute">Add Data</a>
                <a class="btn btn-danger" href="deleteAll2">Wipe Data</a>
               
                <table>
                    <thead>
                        <tr>
                        <th>Bus</th>
                        <th>Terminal</th>
                        <th>Tanggal Berangkat</th>
                        <th>Tanggal Tiba</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Tiba</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rute as $bus)
                        <tr>
                        <td>{{ $bus->bus->nama_bus }}</td>
                        <td>{{ $bus->terminal->nama_terminal }}</td>
                        <td>{{ $bus->tanggal_berangkat }}</td>
                        <td>{{ $bus->tanggal_tiba }}</td>
                            <td>{{ $bus->waktu_berangkat }}</td>
                            <td>{{ $bus->waktu_tiba }}</td>
                            <td>{{ $bus->harga }}</td>
                            <td>
                            <a type="button" class="btn btn-warning" href="/ubahrute/{{$bus->id_rute}}">Delete</a>
                            <a type="button" class="btn btn-danger" href="/deleterute/{{$bus->id_rute}}">Delete</a>
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