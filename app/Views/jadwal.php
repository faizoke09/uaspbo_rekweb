<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2 class="mt-4">Jadwal Mengajar Dosen</h2>
    <div class="text-right">
        <a href="<?= base_url('Jadwal/tambah-jadwal') ?>" class="btn btn-success mb-4">Tambah Jadwal</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Mata Kuliah</th>
                <th>Jadwal</th>
                <th>Aksi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jadwal as $isi) : ?>
            <tr>
                <td><?= $isi->nama ?></td>
                <td><?= $isi->nama_mk ?></td>
                <td><?= $isi->jadwal ?></td>
                <td>
                    <a href="<?= base_url('/Jadwal/edit-jadwal/'.$isi->id_jadwal)?>" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="<?= base_url('/Jadwal/delete-jadwal/'.$isi->id_jadwal)?>" class="btn btn-danger btn-sm mr-2"  onclick="return confirm('Yakin menghapus jadwal <?= $isi->jadwal?>')">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('/Jadwal/viewDetail/'.$isi->id_jadwal)?>">View detail</a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
