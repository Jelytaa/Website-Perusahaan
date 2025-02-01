<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Karyawan</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>ID_Karyawan</th>
							<th>No</th>
							<th>NIK</th>
							<th>Nama Karyawan</th>
							<th>Jenis Kelamin</th>
							<th>Jabatan</th>>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from karyawan");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['karyawan_id']?></td>
							<td><?php echo $row['nomor']?></td>
							<td><?php echo $row['nik']?></td>
							<td><?php echo $row['nama_karyawan']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['jabatan']?></td>
								<td><?php echo $row['alamat']?></td>
							<td><a href="detail-karyawan.php?id=<?php echo $row['karyawan_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>info karyawan</h4>
				<img src="images/inpokaryawan.jfif" class="img-thumbnail img-responsive">
				<p> Karyawan perusahaan adalah orang yang bekerja di suatu perusahaan atau lembaga dan menerima upah atau gaji sebagai imbalan atas jasa yang diberikan<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info Karya</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>