<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="mt-4">Mata Kuliah</h2>
    <div class="text-right">
        <a href="<?= base_url('/Makul/tambah-makul') ?>" class="btn btn-success mb-4">Tambah Jadwal</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($makul as $isi) : ?>
            <tr>
                <td><?= $isi['kode_mk'] ?></td>
                <td><?= $isi['nama_mk'] ?></td>
                <td><?= $isi['sks'] ?></td>
                <td>
                    <a href="<?= base_url('/Makul/edit-makul/'.$isi['id_mk'])?>" class="btn btn-success btn-sm"  >
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="<?= base_url('/Makul/delete-makul/'.$isi['id_mk'])?>" class="btn btn-danger btn-sm mr-2" onclick="return confirm('Yakin menghapus mata kuliah <?= $isi['nama_mk']?>')">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
