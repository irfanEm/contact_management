<h3><?= esc($title) ?></h3>

<form action="/contacts/store" method="post" class="needs-validation" novalidate>
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
    <div class="invalid-feedback">Nama wajib diisi</div>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
    <div class="invalid-feedback">Email wajib diisi</div>
  </div>

  <div class="mb-3">
    <label>No HP</label>
    <input type="text" name="no_hp" class="form-control" required>
    <div class="invalid-feedback">Nomor HP wajib diisi</div>
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
    <div class="invalid-feedback">Password wajib diisi</div>
  </div>

  <button class="btn btn-primary">Simpan</button>
</form>

<script>
// Bootstrap 5 client-side validation
(() => {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
