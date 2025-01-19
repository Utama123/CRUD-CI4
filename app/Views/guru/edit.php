<?= $this->include('layout/header') ?>

<h1>Edit Guru</h1>
<form action="/guru/update/<?= $guru['id'] ?>" method="post">
    <?= csrf_field() ?>
    <label for="nama">Nama guru:</label>
    <input type="text" name="nama" id="nama" value="<?= esc($guru['nama']) ?>" required>
    <br>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" id="mata_pelajaran" value="<?= esc($guru['mata_pelajaran']) ?>" required>
    <br>
    <button type="submit">Simpan</button>
</form>

<a href="/guru">Kembali</a>

<?= $this->include('layout/footer') ?>
