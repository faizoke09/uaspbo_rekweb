<?= $this->extend('layout/sidebar') ?>

<?= $this->section('content') ?>

  <div class="container">		
    <h1 class="mt-4">Edit Jadwal</h1> 
    <form action="<?= base_url('update-jadwal')?>"  method="post">
    <div class="form-group">
      <input type="hidden" name="id_jadwal" class="form-control" value="<?= $view->id_jadwal ?>">
      <label for="hari">Nama</label>
        <select class="form-control" id="hari" name="nip" required>
            <option value="">--Pilih--</option>
            <?php foreach($dosen as $isi) : ?>
            <option value="<?= $isi->nip; ?>"<?= ($isi->nip == $view->nip)? 'selected' : ''?>><?= $isi->nama ?></option>
            <?php endforeach ; ?>
        </select>
      </div>	
      <div class="form-group">
      <label for="hari">Mata Kuliah</label>
        <select class="form-control" id="hari" name="kode_mk" required>
            <option value="">--Pilih--</option>
            <?php foreach($makul as $isi) : ?>
            <option value="<?= $isi->kode_mk; ?>"<?= ($isi->kode_mk == $view->kode_mk) ? 'selected' : ''?>><?= $isi->nama_mk ?></option>
            <?php endforeach ; ?>
        </select>
      </div>	
      <?php
      $jadwal = $view->jadwal; // Nilai dari database: "Senin,10.00-11.00"

      // Memecah nilai menjadi bagian-bagian terpisah
      $elemen = explode(',', $jadwal);
      $hari = $elemen[0]; // Bagian pertama: "Senin"
      $jam = $elemen[1]; // Bagian kedua: "10.00-11.00"

      // Memecah jam menjadi jam mulai dan jam selesai
      $jam_elemen = explode('-', $jam);
      $jam_mulai = $jam_elemen[0]; // Jam mulai: "10.00"
      $jam_selesai = $jam_elemen[1]; // Jam selesai: "11.00"
      ?>
      <div class="form-group">
      <label for="hari">Hari </label>
      <select class="form-control" id="hari" name="hari" required>
        <option value="<?= $jadwal ?>">--Pilih Hari--</option>
        <option value="Senin" <?= ($hari == 'Senin') ? 'selected' : '' ?>>Senin</option>
        <option value="Selasa" <?= ($hari == 'Selasa') ? 'selected' : '' ?>>Selasa</option>
        <option value="Rabu" <?= ($hari == 'Rabu') ? 'selected' : '' ?>>Rabu</option>
        <option value="Kamis" <?= ($hari == 'Kamis') ? 'selected' : '' ?>>Kamis</option>
        <option value="Jumat" <?= ($hari == 'Jumat') ? 'selected' : '' ?>>Jumat</option>
        <option value="Sabtu" <?= ($hari == 'Sabtu') ? 'selected' : '' ?>>Sabtu</option>
      </select>
    </div>	
      <div class="form-group">
        <label for="alamat"> Jam Mulai </label>
        <input type="time" name="waktu_mulai" class="form-control" id="alamat" value="<?= $jam_mulai ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat"> Jam Selesai </label>
        <input type="time" name="waktu_selesai" class="form-control" id="alamat" value="<?= $jam_selesai ?>" required>
      </div>			
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>


<?= $this->endSection() ?>