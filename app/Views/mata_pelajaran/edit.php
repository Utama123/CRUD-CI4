<?= $this->include('layout/header') ?>

<h1>Edit Mata Pelajaran</h1>
<form action="/mata_pelajaran/update/<?= $mata_pelajaran['id'] ?>" method="post">
    <?= csrf_field() ?>
    <label for="nama_pelajaran">Nama Mata Pelajaran:</label>
    <input type="text" name="nama_pelajaran" id="nama_pelajaran" value="<?= esc($mata_pelajaran['nama_pelajaran']) ?>" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>

<a href="/mata_pelajaran">Kembali</a>

<?= $this->include('layout/footer') ?>
