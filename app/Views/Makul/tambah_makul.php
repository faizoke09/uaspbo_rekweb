<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Tambah Mata Kuliah</h1> 
    <form action="<?= base_url('Makul/simpan-makul')?>" method="post">
      <div class="form-group">
        <label for="nama">Kode Mata Kuliah</label>
        <input type="text" name="kode_mk" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="alamat">Nama Mata Kuliah</label>
        <input type="text" name ="nama_mk" class="form-control" id="alamat" required>
      </div>	
      <div class="form-group">
        <label for="alamat">SKS</label>
        <input type="number" name ="sks" class="form-control" id="alamat" required>
      </div>		
      <button type="submit" class="btn btn-success">Tambah</button>
    </form>
  </div>


<?= $this->endSection() ?>