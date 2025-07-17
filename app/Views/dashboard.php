<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CI4 Auth</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            <h5>Selamat datang, <?= $user['username'] ?>!</h5>
                            <p class="mb-0">Anda berhasil login ke sistem.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5>Informasi Akun</h5>
                                        <p class="mb-1"><strong>Email:</strong> <?= $user['email'] ?></p>
                                        <p class="mb-0"><strong>Status:</strong> Aktif</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Aksi</h5>
                                        <a href="#" class="btn btn-primary btn-sm">Edit Profil</a>
                                        <a href="<?= site_url('logout') ?>" class="btn btn-danger btn-sm">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>