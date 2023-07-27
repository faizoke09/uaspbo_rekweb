<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Mengajar Dosen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/css')?>/style.css">
    <?= $this->include('layout/style') ?>
</head>
<body>
    <div class="sidebar">
    <div class="text-center">
        <h4 class="font-weight-bold" style="border-bottom: 1px solid #fff; padding-bottom: 10px;">Website Jadwal</h4>
    </div>
        <ul class="nav flex-column ">
            <li class="nav-item">
                <a class="nav-link <?= ($activePage == 'jadwal') ? 'active text-muted' : ''; ?>"  href="<?= base_url('/jadwal') ?>">Jadwal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($activePage == 'dosen') ? 'active text-muted' : ''; ?>" href="<?= base_url('Dosen/dosen') ?>">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($activePage == 'mata-kuliah') ? 'active text-muted' : ''; ?>" href="<?= base_url('/Makul/makul') ?>">Mata Kuliah</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <?= $this->renderSection('content') ?>
        
    </div>
    <?= $this->include('layout/footer') ?>
</body>
</html>
