**Bani Adam Tampubolon**
**121140187**

Pada bagian Login username, dan password adalah sebagai berikut
Username: admin
Password: admin

Bagian 1: Client-side Programming
1.1 membuat halaman tampilan table data penjualan gadget disertai CRUD. membuat form input dengan 5 data Menampilkan data dari server kedalam index menggunakan tag `table`

1.2 Membuat beberapa event untuk menghandle interaksi pada halaman web berupa input

Bagian 2: Server-side Programming 
2.1 Implementasikan script PHP untuk mengelola data dari formulir pada diatas file create, edit, delete menggunakan variabel `$_POST`  dan `$_GET`.


2.2  Buatlah sebuah objek PHP berbasis OOP yaitu `koneksi` dan `peserta`yang merupakan turunan dari `koneksi` yang memiliki metode dan menggunakan objek tersebut dalam skenario koneksi ke database dan crud.

3.3 Bagian 3: Database Management
3.1 Buatlah sebuah tabel pada database MySQL

CREATE TABLE peserta (
  id_peserta int(11) NOT NULL,
  nama varchar(50) NOT NULL,
  sekolah varchar(50) NOT NULL,
  jurusan varchar(50) NOT NULL,
  no_hp char(13) NOT NULL,
  alamat varchar(50) NOT NULL
);

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO peserta (id_peserta, nama, sekolah, jurusan, no_hp, alamat) VALUES
(1, 'John Doe', 'SMA 1 Jakarta', 'IPA', '081234567890', 'Jl. Merdeka No. 123'),
(2, 'Jane Smith', 'SMA 2 Surabaya', 'IPS', '085678912345', 'Jl. Jendral Sudirman No. 45'),
(3, 'Michael Johnson', 'SMK 3 Bandung', 'Teknik Mesin', '081112223344', 'Jl. Pahlawan No. 67'),
(4, 'Amanda Lee', 'SMK 4 Medan', 'Teknik Elektro', '082334455667', 'Jl. Kebon Sirih No. 89'),
(5, 'David Wang', 'SMA 5 Semarang', 'Bahasa', '083556677889', 'Jl. Gajah Mada No. 101'),
(6, 'Sophia Kim', 'SMA 6 Makassar', 'Sastra', '081234567890', 'Jl. Agus Salim No. 111'),
(7, 'Daniel Chen', 'SMK 7 Denpasar', 'Teknik Informatika', '085678912345', 'Jl. Diponegoro No. 121'),
(8, 'Olivia Tan', 'SMK 8 Palembang', 'Kimia', '081112223344', 'Jl. Mangkubumi No. 131'),
(9, 'Ethan Nguyen', 'SMA 9 Bandar Lampung', 'Matematika', '082334455667', 'Jl. Sudirman No. 143'),
(10, 'Isabella Wong', 'SMA 10 Pontianak', 'Fisika', '083556677889', 'Jl. Thamrin No. 155');

3.2  membuat konfigurasi koneksi ke database MySQL pada file `konekssi`.

3.3  melakukan manipulasi data pada tabel database dengan menggunakan query SQL dalam form crud. Misalnya, tambah data `$_POST`, ambil data `$_GET`, atau update data `$_POST`.

Bagian 4: State Management
4.1 membuatlah skrip PHP yang menggunakan session untuk menyimpan state pengguna user kedalam variabel global
.

4.2 menerapkan manajemen status (state) dengan memanfaatkan cookie dan penyimpanan lokal pada sisi klien menggunakan JavaScript. Sertakan skrip khusus yang akan dieksekusi saat pengguna berada di halaman indeks, untuk memastikan pengelolaan data status yang efektif dan responsif.

Bagian Bonus: Hosting Aplikasi Web 

- Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
 Dengan memilih provider hosting website yang gratis, lalu daftar dan login, setelah itu request untuk buat websitenya, buat database lalu atur cpanel.

- Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
 Pilihan penyedia layanan yang optimal telah dibuat, mempertimbangkan faktor biaya, khususnya karena hosting gratis di 000webhost tidak menimbulkan beban biaya bulanan atau tahunan, menjadikannya opsi yang hemat biaya.
 Layanan ini juga sangat sesuai untuk proyek-proyek kecil atau eksperimen, menyediakan lingkungan pengembangan yang lengkap.
 Proses pendaftaran dan konfigurasi dengan 000webhost berlangsung dengan cepat, memungkinkan pengguna untuk segera memulai hosting situs web tanpa menunggu lama.
 Layanan hosting gratis ini dirancang khusus untuk pemula yang mungkin belum memiliki pengetahuan mendalam tentang administrasi server, dengan menyajikan panel kontrol yang sederhana.

- Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
 Keamanan aplikasi web yang dihosting telah ditingkatkan dengan menggunakan Protokol HTTPS digunakan untuk mengenkripsi data yang dikirimkan

- Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
 Konfigurasi server yang digunakan untuk hosting gratis ini tidak banyak, mungkin hanya dengan mengkonfigurasikan versi PHP.
