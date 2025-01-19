<?= $this->include('layout/header') ?>

<h1>Tambah Mata Pelajaran</h1>
<form action="/mapel/store" method="post">
    <?= csrf_field() ?>
    <label for="nama_pelajaran">Nama Mata Pelajaran:</label>
    <input type="text" name="nama_pelajaran" id="nama_pelajaran" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>

<a href="/mapel">Kembali</a>

<?= $this->include('layout/footer') ?>
