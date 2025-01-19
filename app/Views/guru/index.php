<?= $this->include('layout/header') ?>
<h1>Data Guru</h1>
<a href="/guru/create">Tambah Guru</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($guru as $g): ?>
        <tr>
            <td><?= $g['id']; ?></td>
            <td><?= $g['nama']; ?></td>
            <td><?= $g['nip']; ?></td>
            <td><?= $g['alamat']; ?></td>
            <td><?= $g['telepon']; ?></td>
            <td>
                <a href="/guru/edit/<?= $g['id']; ?>">Edit</a> | 
                <a href="/guru/delete/<?= $g['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->include('layout/footer') ?>
