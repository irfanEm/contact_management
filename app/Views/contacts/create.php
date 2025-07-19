<?= view('templates/header') ?>

<div class="container py-5">
  <h2>Tambah Kontak</h2>
  <form method="post" action="/contacts/store">
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
    <button class="btn btn-primary">Simpan</button>
    <a href="/contacts" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?= view('templates/footer') ?>
