<h1>Data Siswa - <?= $pelajaran['nama_pelajaran']; ?></h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
    </tr>
    <?php foreach ($siswa as $s): ?>
        <tr>
            <td><?= $s['id']; ?></td>
            <td><?= $s['siswa_nama']; ?></td>
            <td><?= $s['kelas']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/mata_pelajaran">Kembali</a>
