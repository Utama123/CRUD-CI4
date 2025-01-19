<?= $this->include('layout/header') ?>
<h1>Data Siswa</h1>
<a href="/siswa/create">Tambah Siswa</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($siswa as $s): ?>
        <tr>
            <td><?= $s['id']; ?></td>
            <td><?= $s['nama']; ?></td>
            <td><?= $s['nis']; ?></td>
            <td><?= $s['kelas']; ?></td>
            <td><?= $s['alamat']; ?></td>
            <td>
                <a href="/siswa/edit/<?= $s['id']; ?>">Edit</a> | 
                <a href="/siswa/delete/<?= $s['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->include('layout/footer') ?>