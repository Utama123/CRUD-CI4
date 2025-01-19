<?= $this->include('layout/header') ?>

<h1>Tambah Guru</h1>
<form action="/guru/store" method="post">
    <?= csrf_field() ?>
    <label for="nip">Nip Guru:</label>
    <input type="text" name="nip" id="nip" required>
    <br>
    <label for="nama">Nama Guru:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran" id="mata_pelajaran" required>
    <br>
    <label for="alamat">Alamat Guru:</label>
    <input type="text" name="alamat" id="alamat" required>
    <br>
    <label for="telepon">Telepon Guru:</label>
    <input type="text" name="telepon" id="telepon" required>
    <br>
    <button type="submit">Simpan</button>
</form>

<a href="/guru">Kembali</a>

<?= $this->include('layout/footer') ?>
