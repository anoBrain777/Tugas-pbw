<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Mahasiswa</h2>
        <?php
        include 'koneksi.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM mahasiswa WHERE id=$id";
            $result = $koneksi->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $npm = $row['npm'];
                $nama = $row['nama'];
                $jurusan = $row['jurusan'];
            } else {
                echo "Data tidak ditemukan.";
                exit();
            }
        }

        if (isset($_POST['update'])) {
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $sql = "UPDATE mahasiswa SET npm='$npm', nama='$nama', jurusan='$jurusan' WHERE id=$id";
            if ($koneksi->query($sql) === TRUE) {
                header("Location: index.php"); // Redirect kembali ke halaman utama setelah berhasil mengupdate
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
        }
        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $npm; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $jurusan; ?>"
                    required>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    <!-- Tambahkan link JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>