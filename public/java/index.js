document.addEventListener("DOMContentLoaded", function() {

    // Function to handle the "PESAN" button click
function handlePesanButtonClick() {
// Show prompt box for payment form
const nama = prompt("Masukkan Nama:");
const namaBank = prompt("Masukkan Nama Bank:");
const nomorRekening = prompt("Masukkan Nomor Rekening:");
const totalHarga = "500000"; // Total Harga
const confirmation = confirm(`Apakah Anda yakin ingin melakukan pembayaran sejumlah ${totalHarga} ke ${namaBank} atas nama ${nama} dengan nomor rekening ${nomorRekening}?`);

if (confirmation) {
 alert("Pembayaran berhasil!");
} else {
 alert("Pembayaran dibatalkan.");
}
}  document.querySelector('.popup-content button').addEventListener('click', handlePesanButtonClick);

 
 const carousel = document.querySelector('.carousel');
 const slides = carousel.querySelectorAll('img');
 const totalSlides = slides.length;
 let currentSlide = 0;

 // Function to show the current slide
 function showSlide(slideIndex) {
     // Hide all slides
     slides.forEach(slide => slide.style.display = 'none');
     // Show the current slide
     slides[slideIndex].style.display = 'block';
 }

 // Function to move to the next slide
 function nextSlide() {
     currentSlide = (currentSlide + 1) % totalSlides;
     showSlide(currentSlide);
 }

 // Function to move to the previous slide
 function prevSlide() {
     currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
     showSlide(currentSlide);
 }

 // Initial slide display
 showSlide(currentSlide);

 // Add event listeners to navigation buttons
 document.querySelector('.carousel .btn-prev').addEventListener('click', prevSlide);
 document.querySelector('.carousel .btn-next').addEventListener('click', nextSlide);

 function openPopup() {
document.getElementById("popup").style.display = "block";
}

function openPopup(event) {
event.preventDefault(); // Menghentikan perilaku default form
document.getElementById("popup").style.display = "block";
}
// Menyembunyikan pop-up box
function closePopup() {
document.getElementById("popup").style.display = "none";
}

// Menambahkan event listener pada tombol Search untuk menampilkan pop-up box
document.querySelector('.booking_container form').addEventListener('submit', openPopup);

// Menambahkan event listener pada tombol close di pop-up box untuk menyembunyikan pop-up box
document.querySelector('.popup .close').addEventListener('click', closePopup);

// Menambahkan event listener untuk menutup pop-up box saat mengklik di luar area pop-up box
window.addEventListener('click', function(event) {
if (event.target == document.getElementById('popup')) {
closePopup();
}
});
});