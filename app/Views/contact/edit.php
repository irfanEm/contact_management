<?= view('templates/header', ['title' => 'Edit Kontak']) ?>

<form action="/contact/update/<?= $contact['id'] ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= esc($contact['email']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Password (biarkan kosong jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($contact['nama']) ?>" required>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?= esc($contact['no_hp']) ?>" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="/contact" class="btn btn-secondary">Kembali</a>
</form>

<?= view('templates/footer') ?>
