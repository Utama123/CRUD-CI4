<?= $this->include('layout/header') ?>

<h1>Data Mata Pelajaran</h1>
<a href="/mata_pelajaran/create">Tambah Mata Pelajaran</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Pelajaran</th>
        <th>Guru</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($mata_pelajaran as $mp): ?>
        <tr>
            <td><?= $mp['id']; ?></td>
            <td><?= $mp['nama_pelajaran']; ?></td>
            <td><?= $mp['guru_nama']; ?></td>
            <td>
                <a href="/mata_pelajaran/siswa/<?= $mp['id']; ?>">Lihat Siswa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->include('layout/footer') ?>