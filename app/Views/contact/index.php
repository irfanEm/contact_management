<?= view('templates/header', ['title' => 'Daftar Kontak']) ?>

<a href="/contact/create" class="btn btn-primary mb-3">Tambah Kontak</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= esc($contact['email']) ?></td>
            <td><?= esc($contact['nama']) ?></td>
            <td><?= esc($contact['no_hp']) ?></td>
            <td>
                <a href="/contact/edit/<?= $contact['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="/contact/delete/<?= $contact['id'] ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus kontak ini?')">
                    <?= csrf_field() ?>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<?= view('templates/footer') ?>
