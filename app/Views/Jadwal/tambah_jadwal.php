<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Tambah Jadwal</h1> 
    <form action="<?= base_url('simpan-jadwal')?>"  method="post">
    <div class="form-group">
      <label for="hari">Nama</label>
        <select class="form-control" id="hari" name="nip" required>
            <option value="">--Pilih--</option>
            <?php foreach($dosen as $isi) : ?>
            <option value="<?= $isi->nip; ?>"><?= $isi->nama ?></option>
            <?php endforeach ; ?>
        </select>
      </div>	
      <div class="form-group">
      <label for="hari">Mata Kuliah</label>
        <select class="form-control" id="hari" name="kode_mk" required>
            <option value="">--Pilih--</option>
            <?php foreach($makul as $isi) : ?>
            <option value="<?= $isi->kode_mk; ?>"><?= $isi->nama_mk ?></option>
            <?php endforeach ; ?>
        </select>
      </div>	
      <div class="form-group">
      <label for="hari">Hari </label>
        <select class="form-control" id="hari" name="hari" required>
            <option value="">--Pilih Hari--</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
        </select>
      </div>			
      <div class="form-group">
        <label for="alamat"> Jam Mulai </label>
        <input type="time" name="waktu_mulai" class="form-control" id="alamat" required>
      </div>
      <div class="form-group">
        <label for="alamat"> Jam Selesai </label>
        <input type="time" name="waktu_selesai" class="form-control" id="alamat" required>
      </div>			
      <button type="submit" class="btn btn-success">Tambah</button>
    </form>
  </div>


<?= $this->endSection() ?>