<?php
        require 'header.php';
        ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Tambah <b>Data</b></h2>
                    </div>
                </div>
            </div>


<form method="post" action="tambah-proses.php">
  <div class="form-group">
    <label for="inputText">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama"  placeholder="Ahmad Dewa Fitrah">
  </div>
  <div class="form-group">
    <label for="inputNumber">Nim</label>
    <input type="number" class="form-control" name="nim" placeholder="19510024">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>

 <?php
        require 'footer.php';
        ?>