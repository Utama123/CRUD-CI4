<?= $this->include('layout/header') ?>

<h1>Edit Siswa</h1>
<form action="/siswa/update/<?= $siswa['id'] ?>" method="post">
    <?= csrf_field() ?>
    <label for="nama">Nama siswa:</label>
    <input type="text" name="nama" id="nama" value="<?= esc($siswa['nama']) ?>" required>
    <br>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" id="mata_pelajaran" value="<?= esc($siswa['mata_pelajaran']) ?>" required>
    <br>
    <button type="submit">Simpan</button>
</form>

<a href="/siswa">Kembali</a>

<?= $this->include('layout/footer') ?>
