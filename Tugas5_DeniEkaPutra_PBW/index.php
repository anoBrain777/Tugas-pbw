<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Deni</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>CRUD Mahasiswa dan KRS</h2>
        <!-- Form tambah mahasiswa dan KRS -->
        <form method="post" action="aksi.php">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="npm">NPM:</label>
                    <input type="text" class="form-control" id="npm" name="npm" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="jurusan">Jurusan:</label>
                    <select class="form-control" id="jurusan" name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="kodemk">Pilih Mata Kuliah:</label>
                    <select class="form-control" id="kodemk" name="kodemk" required>
                        <option value="">Pilih Mata Kuliah</option>
                        <option value="Pemrograman Berbasis Web">Pemrograman Berbasis Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Struktur Data">Struktur Data</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah Mahasiswa dan KRS</button>
        </form>

        <hr>

        <!-- Tabel untuk menampilkan daftar mahasiswa -->
        <h3>Daftar Mahasiswa</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>KRS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'aksi.php';
                // Tampilkan daftar mahasiswa
                tampilkanDataMahasiswa();
                ?>
            </tbody>
        </table>
    </div>
    <!-- Tambahkan link JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>