<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Edit Mata Kuliah</h1> 
    <form action="<?= base_url('Makul/update-makul')?>" method="post">
      <div class="form-group">
        <label for="nama">Kode Mata Kuliah</label>
        <input type="hidden" class="form-control" name="id_mk" value="<?= $makul->id_mk ?>">
        <input type="text" name="kode_mk" value ="<?= $makul->kode_mk ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="alamat">Nama Mata Kuliah</label>
        <input type="text" name ="nama_mk" value ="<?= $makul->nama_mk ?>" class="form-control" id="alamat">
      </div>	
      <div class="form-group">
        <label for="alamat">SKS</label>
        <input type="number" name ="sks" value ="<?= $makul->sks ?>" class="form-control" id="alamat">
      </div>		
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>


<?= $this->endSection() ?>