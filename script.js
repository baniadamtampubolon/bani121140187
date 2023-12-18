 // Fungsi untuk set cookie
 function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fungsi untuk menyimpan dan memperbarui state ke cookie
function saveStateToCookie(state) {
    setCookie("currentState", state, 7); // Set cookie untuk 7 hari
}

// Fungsi untuk mendapatkan state dari cookie
function getStateFromCookie() {
    return getCookie("currentState") || "No State";
}

// Jalankan fungsi ini setelah dokumen selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    // Tampilkan state dari cookie saat halaman dimuat
    document.getElementById('currentState').innerText = getStateFromCookie();
});

// Fungsi untuk menyimpan state ke cookie dan menampilkan perubahan
function saveStateAndDisplay(newState) {
    saveStateToCookie(newState);
    document.getElementById('currentState').innerText = newState;
}


 // Event untuk validasi form sebelum submit
 $(document).ready(function () {
    $("#updateForm").submit(function (event) {
        // Validasi input di sini
        var nama = $("input[name='nama']").val();
        var sekolah = $("input[name='sekolah']").val();
        var jurusan = $("input[name='jurusan']").val();
        var no_hp = $("input[name='no_hp']").val();
        var alamat = $("textarea[name='alamat']").val();

        if (nama === "" || sekolah === "" || jurusan === "" || no_hp === "" || alamat === "") {
            alert("Semua field harus diisi!");
            event.preventDefault();
        }
    });
});

// Event handling untuk tombol "Delete"
function deletePeserta(id_peserta) {
    // Konfirmasi penghapusan data
    var confirmation = confirm("Apakah Anda yakin ingin menghapus data peserta?");
    
    if (confirmation) {
        // Kirim request ke server untuk menghapus data peserta
        $.ajax({
            type: 'GET',
            url: 'delete_peserta.php?id_peserta=' + id_peserta,
            success: function (data) {
                // Refresh halaman setelah penghapusan berhasil
                location.reload();
            },
            error: function (error) {
                console.error('Error deleting data:', error);
            }
        });
    }
}

// Event handling untuk tombol "Update"
function updatePeserta(id_peserta) {
    // Redirect ke halaman update dengan membawa parameter id_peserta
    window.location.href = 'update.php?id_peserta=' + id_peserta;
}

// Document Ready Function
$(document).ready(function () {
    // Tambahkan event handling untuk tombol "Delete"
    $('.btn-delete').on('click', function () {
        var id_peserta = $(this).data('id');
        deletePeserta(id_peserta);
    });

    // Tambahkan event handling untuk tombol "Update"
    $('.btn-update').on('click', function () {
        var id_peserta = $(this).data('id');
        updatePeserta(id_peserta);
    });
});

