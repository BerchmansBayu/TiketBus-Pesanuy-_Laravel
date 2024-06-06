document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll('.menu li a');
    
    // Function to hide all sections
    function hideAllSections() {
        const sections = document.querySelectorAll('main section');
        sections.forEach(section => {
            section.style.display = 'none';
        });
    }

    // Function to show the selected section
    function showSection(sectionId) {
        hideAllSections();
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

    // Initially hide all sections except the first one
    hideAllSections();
    const defaultSectionId = 'Dashboard'; // Default section to show
    showSection(defaultSectionId);

    // Add click event listener to each menu item
    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            const sectionId = this.getAttribute('href').slice(1); // Get section id from href
            showSection(sectionId);
        });
    });

    // Function to show pop up box
    function showPopup(title, inputs, onCancel, onSave) {
        const popup = document.createElement('div');
        popup.classList.add('popup');
        const content = `
            <div class="popup-content">
                <div class="popup-header">
                    <h2>${title}</h2>
                    <button class="close-btn" onclick="hidePopup()">×</button>
                </div>
                <div class="popup-body">
                    ${inputs}
                </div>
                <div class="popup-footer">
                    <button onclick="${onCancel}()">Batal</button>
                    <button onclick="${onSave}()">Simpan</button>
                </div>
            </div>
        `;
        popup.innerHTML = content;
        document.body.appendChild(popup);
    }

    // Function to hide pop up box
    function hidePopup() {
        const popup = document.querySelector('.popup');
        if (popup) {
            document.body.removeChild(popup);
        }
    }

    // Function to handle "Tambah Data" button click in Bus section
    function handleAddBusData() {
        const inputs = `
            <input type="text" placeholder="Kode Bus">
            <input type="text" placeholder="Nama Bus">
            <input type="text" placeholder="Kelas">
            <input type="number" placeholder="Jumlah Kursi">
        `;
        showPopup('Bus', inputs, 'cancelAddBusData', 'saveBusData');
    }

    // Function to handle "Tambah Data" button click in Terminal section
    function handleAddTerminalData() {
        const inputs = `
            <input type="text" placeholder="Nama Terminal">
            <input type="text" placeholder="Kode">
            <input type="text" placeholder="Nama Kota">
        `;
        showPopup('Terminal', inputs, 'cancelAddTerminalData', 'saveTerminalData');
    }

    // Function to handle "Tambah Data" button click in Rute section
    function handleAddRuteData() {
        const inputs = `
            <input type="date" placeholder="Tanggal Berangkat">
            <input type="date" placeholder="Tanggal Tiba">
            <input type="time" placeholder="Waktu Berangkat">
            <input type="time" placeholder="Waktu Tiba">
            <input type="text" placeholder="Asal">
            <input type="text" placeholder="Tujuan">
            <input type="number" placeholder="Harga">
        `;
        showPopup('Rute', inputs, 'cancelAddRuteData', 'saveRuteData');
    }

    // Event listener for "Tambah Data" buttons
    document.querySelector('.Bus .add-data-btn').addEventListener('click', handleAddBusData);
    document.querySelector('.Terminal .add-data-btn').addEventListener('click', handleAddTerminalData);
    document.querySelector('.Rute .add-data-btn').addEventListener('click', handleAddRuteData);

    // Function to handle cancel action in Bus section
    window.cancelAddBusData = function() {
        hidePopup();
    }

    // Function to handle save action in Bus section
    window.saveBusData = function() {
        // Add your save logic here
        hidePopup();
    }

    // Function to handle cancel action in Terminal section
    window.cancelAddTerminalData = function() {
        hidePopup();
    }

    // Function to handle save action in Terminal section
    window.saveTerminalData = function() {
        // Add your save logic here
        hidePopup();
    }

    // Function to handle cancel action in Rute section
    window.cancelAddRuteData = function() {
        hidePopup();
    }

    // Function to handle save action in Rute section
    window.saveRuteData = function() {
        // Add your save logic here
        hidePopup();
    }

    // Function to handle delete button click in Bus section
    document.querySelectorAll('.Bus table button').forEach(button => {
        button.addEventListener('click', function() {
            alert('Berhasil Menghapus Data');
        });
    });

    // Function to handle delete button click in Terminal section
    document.querySelectorAll('.Terminal table button').forEach(button => {
        button.addEventListener('click', function() {
            alert('Berhasil Menghapus Data');
        });
    });

    // Function to handle delete button click in Rute section
    document.querySelectorAll('.Rute table button').forEach(button => {
        button.addEventListener('click', function() {
            alert('Berhasil Menghapus Data');
        });
    });

    // Function to handle delete button click in Pengguna section
    document.querySelectorAll('.Pengguna table button').forEach(button => {
        button.addEventListener('click', function() {
            alert('Berhasil Menghapus Data');
        });
    });

    // Function to handle delete button click in Pesanan section
    document.querySelectorAll('.Pesanan table button').forEach(button => {
        button.addEventListener('click', function() {
            alert('Berhasil Menghapus Data');
        });
    });

    // Function to show confirmation box
    function showConfirmation(message, onConfirm) {
        if (confirm(message)) {
            onConfirm();
        }
    }

    // Function to handle "Wipe Data" button click in each section
    document.querySelectorAll('.section .delete-all-btn').forEach(button => {
        button.addEventListener('click', function() {
            const sectionName = this.closest('.section').id;
            const message = `Apakah anda yakin ingin menghapus semua data di ${sectionName}?`;
            showConfirmation(message, function() {
                alert(`Berhasil menghapus semua data di ${sectionName}`);
                // Add your wipe data logic here
            });
        });
    });
});
