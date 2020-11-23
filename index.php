<?php
        require 'header.php';
        ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Data <b>Mahasiswa</b></h2>
                    </div>
                    <div class="col-xs-7">
                        <a href="tambah.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>				
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>						
                        <th>Nim</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select* from mahasiswa");
			while ($d = mysqli_fetch_array($data)) {
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['nama'];?></td>
						<td><?php echo $d['nim'];?></td>
						<td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
					</tr>
					<?php
			}
			?>
                </tbody>
            </table>
            <div class="clearfix">
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Sebelumnya</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Selanjutnya</a></li>
                </ul>
            </div>
       <?php
        require 'footer.php';
        ?>