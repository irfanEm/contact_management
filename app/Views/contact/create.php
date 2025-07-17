<?= view('templates/header', ['title' => 'Tambah Kontak']) ?>

<form action="/contact/store" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="/contact" class="btn btn-secondary">Kembali</a>
</form>

<?= view('templates/footer') ?>
