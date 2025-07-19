<?= view('templates/header') ?>

<div class="container py-5">
  <h2>Edit Kontak</h2>
  <form method="post" action="/contacts/update/<?= $contact['id'] ?>">
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?= esc($contact['email']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Password (kosongkan jika tidak ingin diubah)</label>
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
    <a href="/contacts" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?= view('templates/footer') ?>
