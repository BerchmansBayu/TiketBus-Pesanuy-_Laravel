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
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h1>Hasil Pencarian Bus</h1>
            <h2>Surabaya (Kampung Melayu) ke Malang (Landungsari)</h2>
            <h3>Kamis, 04 April 2024</h3>
            <h3>1 Penumpang</h3>
            <form>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Transportasi</th>
                            <th>Berangkat</th>
                            <th>Tiba</th>
                            <th>Kelas</th>
                            <th>Harga per Orang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Purnama</td>
                            <td>07.00</td>
                            <td>10.00</td>
                            <td>Economy</td>
                            <td>500000</td>
                            <td><button type="button">PESAN</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <style>
        .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-inner img {
            width: 100%;
            flex-shrink: 0;
        }

        .carousel-buttons {
            position: absolute;
            top: 50%;
            right: 10px;
            display: flex;
            flex-direction: column;
            transform: translateY(-50%);
        }

        .carousel-buttons .btn {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            margin-bottom: 5px;
            cursor: pointer;
        }
    </style>

    <header class="section_container header_container">
        <h1 class="section_header">Temukan dan Booking Sekarang<br />Dapatkan Pengalaman Terbaik Bersama PesanUy</h1>
        <div class="carousel">
            <div class="carousel-inner">
                <img src="{{ asset('aset/EKONOMI.png') }}" alt="header" />
                <img src="{{ asset('aset/BISNIS.png') }}" alt="header" />
                <img src="{{ asset('aset/EKSEKUTIF.png') }}" alt="header" />
            </div>
            <div class="carousel-buttons">
                <button class="btn btn-prev" style="
    background-color: transparent; 
    border: none; 
    color: #007BFF; 
    padding: 10px 20px; 
    font-size: 20px; 
    cursor: pointer; 
    transition: color 0.3s ease;
    margin-right: 10px;
" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007BFF';">&#10094;</button>
                <button class="btn btn-next"  style="
    background-color: transparent; 
    border: none; 
    color: #007BFF; 
    padding: 10px 20px; 
    font-size: 20px; 
    cursor: pointer; 
    transition: color 0.3s ease;
    margin-left: 10px;
" onmouseover="this.style.color='#0056b3';" onmouseout="this.style.color='#007BFF';">&#10095;</button>
            </div>
        </div>
    </header>

    <section class="section_container booking_container">
        <div class="booking_nav">
            <span>Pencarian Tiket</span>
        </div>
        <form>
            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="text" id="kota_asal" name="kota_asal">
                        <label>Kota Asal</label>
                    </div>
                    <p>Dimana Asal Kota Anda?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="text" id="kota_tujuan" name="kota_tujuan">
                        <label>Kota Tujuan</label>
                    </div>
                    <p>Kemana Tujuan Kota Anda?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="number" id="penumpang" name="penumpang">
                        <label>Penumpang</label>
                    </div>
                    <p>Berapa Jumlah Penumpang?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                    <p>Kapan Tanggal Berangkat?</p>
                </div>
            </div>
            <button class="btn" type="submit">Search</button>
        </form>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel-inner');
            const prevButton = document.querySelector('.btn-prev');
            const nextButton = document.querySelector('.btn-next');
            const images = document.querySelectorAll('.carousel-inner img');
            let currentIndex = 0;

            function showSlide(index) {
                if (index >= images.length) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = images.length - 1;
                } else {
                    currentIndex = index;
                }
                carousel.style.transform = `translateX(${-currentIndex * 100}%)`;
            }

            nextButton.addEventListener('click', function() {
                showSlide(currentIndex + 1);
            });

            prevButton.addEventListener('click', function() {
                showSlide(currentIndex - 1);
            });
        });
    </script>
</main>

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>