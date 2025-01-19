<?= $this->include('layout/header') ?>

<h1>Tambah Guru</h1>
<form action="/guru/store" method="post">
    <?= csrf_field() ?>
    <label for="nama">Nama Guru:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" id="mata_pelajaran" required>
    <br>
    <button type="submit">Simpan</button>
</form>

<a href="/guru">Kembali</a>

<?= $this->include('layout/footer') ?>
