<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="mt-4">Data Dosen</h2>
    <div class="text-right">
        <a href="<?= base_url('Dosen/tambah-dosen') ?>" class="btn btn-success mb-4">Tambah Dosen</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dosen as $isi) : ?>
            <tr>
                <td><?= $isi['nip']?></td>
                <td><?= $isi['nama']?></td>
                <td>
                    <a href="<?= base_url('/Dosen/edit-dosen/'.$isi['id_dosen'])?>" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="<?= base_url('/Dosen/delete-dosen/'.$isi['id_dosen'])?> " class="btn btn-danger btn-sm mr-2" onclick="return confirm('Yakin menghapus nama <?= $isi['nama']?>')" >
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
