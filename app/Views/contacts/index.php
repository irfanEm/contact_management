<h3><?= esc($title) ?></h3>

<a href="/contacts/create" class="btn btn-primary mb-3">Tambah Kontak</a>

<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
<?php endif; ?>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $i => $contact): ?>
        <tr>
          <td><?= $i + 1 ?></td>
          <td><?= esc($contact['nama']) ?></td>
          <td><?= esc($contact['email']) ?></td>
          <td><?= esc($contact['no_hp']) ?></td>
          <td>
            <a href="/contacts/edit/<?= $contact['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="/contacts/delete/<?= $contact['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
