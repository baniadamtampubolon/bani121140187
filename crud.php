<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="script.js"></script>
    <title>Manajemen Universitas</title>
</head>

<body style="background-color: white; color: ;">

    <nav class="navbar" style="background-color: #1f3732; color: #fff">
        <span class="navbar-brand mb-0 h1">UAS PEMROGRAMAN WEB</span>
    </nav>

    <div class="container mt-4">
        <h4 class="text-center">Daftar Mahasiswa Baru Universitas Jayabaya</h4>
        <?php
        include "koneksi.php";

        //Cek apakah ada kiriman form dari method post
        if (isset($_GET['id_peserta'])) {
            $id_peserta = htmlspecialchars($_GET["id_peserta"]);

            $sql = "delete from peserta where id_peserta='$id_peserta' ";
            $hasil = mysqli_query($kon, $sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:crud.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="table" style="background-color: #fff; border-radius: 20;">
            <thead class="thead" style="background-color: #52605d; color: #fff;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $sql = "select * from peserta order by id_peserta desc";

            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["sekolah"];   ?></td>
                        <td><?php echo $data["jurusan"];   ?></td>
                        <td><?php echo $data["no_hp"];   ?></td>
                        <td><?php echo $data["alamat"];   ?></td>
                        <td>
                            <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>"
                                class="btn btn-warning btn-sm" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_peserta=<?php echo $data['id_peserta']; ?>"
                                class="btn btn-danger btn-sm" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
        }
        ?>
        </table>
        <a href="create.php" class="btn btn-primary" style="background-color: #788784;" role="button">Tambah Data</a>
       
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

 <!-- Footer -->
 <footer class="footer mt-5" style="background-color: #1f3732; color: #fff;">
        <div class="container text-center">
            <p>&copy; Copyright Bani Adam Tampubolon</p>
            <p>2023</p>
        </div>
    </footer>

</html>
