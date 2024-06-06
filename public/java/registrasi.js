const regisButton = document.getElementById('regisButton');

regisButton.addEventListener('click', function(event) {
    event.preventDefault();

    const popupBox = document.createElement('div');
    popupBox.classList.add('popup-box');
    popupBox.innerHTML = `
        <h2>Yeah selamat anda telah membuat akun di PesanUy</h2>
        <p>Terima kasih telah mendaftar di PesanUy. Silakan login untuk melanjutkan.</p>
    `;

    document.body.appendChild(popupBox);

    setTimeout(function() {
        popupBox.style.animation = 'fadeOut 0.5s ease-in-out forwards';
    }, 3000);

    setTimeout(function() {
        document.body.removeChild(popupBox);
    }, 3500);
});