<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=== REMIXICON ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!--=== CSS ===-->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard {{Auth::user()->email_pengguna}}</title>
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
<section class="Dashboard section" id="Dashboard">
    <div class="main_content">
        <div class="header_wreaper">
            <div class="header_title">
                <span>PesanUy</span>
                <h2>Dashboard</h2>
            </div>
            <img src="{{ asset('aset/admin.png') }}" alt="" />
        </div>
        <div class="card_container">
            <h3 class="main_title">Informasi Data</h3>
            <div class="card_wrapper">
                <div class="data_card light-red">
                    <div class="card_header">
                        <div class="pengguna">
                            <span class="title">
                                Data Pengguna
                            </span>
                            <span class="card_value">{{ $totalUsers }} Pengguna</span>
                        </div>
                        <i class="ri-group-line icon dark-red"></i>
                    </div>
                </div>

                <div class="data_card light-purple">
                    <div class="card_header">
                        <div class="pengguna">
                            <span class="title">
                                Data Bus
                            </span>
                            <span class="card_value">{{ $totalBus }} Bus</span>
                        </div>
                        <i class="ri-bus-fill icon dark-purple"></i>    
                    </div>
                </div>
                
                <div class="data_card light-green">
                    <div class="card_header">
                        <div class="pengguna">
                            <span class="title">
                                Data Rute
                            </span>
                            <span class="card_value">{{ $totalRoutes }} Rute</span>
                        </div>
                        <i class="ri-road-map-line icon dark-green"></i>    
                    </div>
                </div>

                <div class="data_card light-orange">
                    <div class="card_header">
                        <div class="pengguna">
                            <span class="title">
                                Data Pesanan
                            </span>
                            <span class="card_value">{{ $totalOrders }} Pesanan</span>
                        </div>
                        <i class="ri-shopping-cart-line icon dark-orange"></i>     
                    </div>
                </div>

                <div class="data_card light-blue">
                    <div class="card_header">
                        <div class="pengguna">
                            <span class="title">
                                Jumlah Pemasukan
                            </span>
                            <span class="card_value">Rp {{ number_format($totalRevenue, 2) }}</span>
                        </div>  
                        <i class="ri-wallet-3-line icon dark-blue"></i>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>