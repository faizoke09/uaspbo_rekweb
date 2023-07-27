<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2 class="mt-4">Halaman Detail</h2>
    <div class="text-right">
        <a href="<?= base_url('/jadwal') ?>" class="btn btn-success mb-4">Kembali ke Home</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Jadwal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jadwal as $isi) : ?>
            <tr>
                <td><?= $isi->nip?></td>
                <td><?= $isi->nama?></td>
                <td><?= $isi->kode_mk?></td>
                <td><?= $isi->nama_mk?></td>
                <td><?= $isi->sks?></td>
                <td><?= $isi->jadwal?></td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
