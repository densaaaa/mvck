<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <!-- <?php foreach ($data as $mhs): ?>       Looping untuk menampilkan data mahasiswa -->
        <tr>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['jurusan'] ?></td>
        </tr>
        <!-- <?php endforeach; ?>        // Akhir dari looping -->
    </table>
</body>
</html>
