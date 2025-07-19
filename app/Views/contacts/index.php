<?= view('templates/header') ?>

<div class="container py-5">
  <h2>Daftar Kontak</h2>
  <a href="/contacts/create" class="btn btn-primary mb-3">Tambah Kontak</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $c): ?>
      <tr>
        <td><?= esc($c['nama']) ?></td>
        <td><?= esc($c['email']) ?></td>
        <td><?= esc($c['no_hp']) ?></td>
        <td>
          <a href="/contacts/edit/<?= $c['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="/contacts/delete/<?= $c['id'] ?>" onclick="return confirm('Hapus kontak?')" class="btn btn-sm btn-danger">Hapus</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?= view('templates/footer') ?>
