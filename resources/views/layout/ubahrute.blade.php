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
                
                
            @foreach($rute as $route)
                <form action="/updatedata1/{{$route->id_rute}}" method="post">
            @csrf
                    <table>
                        <tr>			
                            <td>Tanggal Berangkat</td>
                            <td>
                                <input type="date" name="tanggal_berangkat" value="{{ $route->tanggal_berangkat }}">
                            </td>
                        </tr>
                        <tr>			
                            <td>Tanggal Tiba</td>
                            <td><input type="date" name="tanggal_tiba" value="{{ $route->tanggal_tiba }}"></td>
                        </tr>
                        <tr>			
                            <td>Waktu Berangkat</td>
                            <td><input type="text" name="waktu_berangkat" value="{{ $route->waktu_berangkat }}"></td>
                        </tr>
                        <tr>			
                            <td>Waktu Tiba</td>
                            <td><input type="text" name="waktu_tiba" value="{{ $route->waktu_tiba }}"></td>
                        </tr>
                        <tr>			
                            <td>Asal</td>
                            <td>
                                <select name="id_terminal">
                                    <option disabled selected>Pilih</option>
                                    @foreach($terminal as $terminal)
                                    <option value="{{ $terminal->id_terminal }}" {{ $route->id_terminal == $terminal->id_terminal ? 'selected' : '' }}>{{ $terminal->nama_terminal }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>			
                            <td>Transportasi</td>
                            <td>
                                <select name="id_bus">
                                    <option disabled selected>Pilih</option>
                                    @foreach($bus as $bus)
                                    <option value="{{ $bus->id_bus }}" {{ $route->id_bus == $bus->id_bus ? 'selected' : '' }}>{{ $bus->nama_bus }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" name="harga" value="{{ $route->harga }}"></td>
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