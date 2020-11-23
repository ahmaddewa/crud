<?php
        require 'header.php';
        ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Edit <b>Data</b></h2>
                    </div>
                </div>
            </div>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
?>



<form method="post" action="update.php">
  <div class="form-group">
    <label for="inputText">Nama Mahasiswa</label>
    <input type="hidden" class="form-control" name="id"  value="<?php echo $d['id'];?>">
    <input type="text" class="form-control" name="nama"   value="<?php echo $d['nama'];?>">

  </div>
  <div class="form-group">
    <label for="inputText">Nim</label>
    <input type="number" class="form-control" name="nim" value="<?php echo $d['nim']; ?>">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <button class="btn btn-danger"><a href="index.php"></a>Kembali</button>
</form>
<?php
}
?>
<?php
        require 'footer.php';
        ?>