<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Tambah Dosen</h1> 
    <form action="<?= base_url('Dosen/simpan-dosen')?>" method="post">
      <div class="form-group">
        <label for="nama">NIP</label>
        <input type="text" name="nip" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="alamat">Nama</label>
        <input type="text" name ="nama" class="form-control" id="alamat" required>
      </div>	
      <button type="submit" class="btn btn-success">Tambah</button>
    </form>
  </div>


<?= $this->endSection() ?>