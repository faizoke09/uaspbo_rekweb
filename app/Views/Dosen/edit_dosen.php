<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Edit Dosen</h1> 
    <form action="<?= base_url('Dosen/update-dosen')?>" method="post">
      <div class="form-group">
        <label for="nama">NIP</label>
        <input type="hidden" class="form-control" name="id_dosen" value="<?= $edit->id_dosen ?>">
        <input type="text" name="nip" value ="<?= $edit->nip ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="alamat">Nama</label>
        <input type="text" name ="nama" value ="<?= $edit->nama?>" class="form-control" id="alamat">
      </div>	
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>


<?= $this->endSection() ?>