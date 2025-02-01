<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Data Karyawan</h2>
				<?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from karyawan where karyawan_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<td width="15%">NIK</td><td width="10%">:</td><td><?php echo $row['nik']?></td>
						</tr>
						<tr>
							<td>Nama karyawan</td><td>:</td><td><?php echo $row['nama_karyawan']?></td>
						</tr>
						<tr>
							<td>Jenis kelamin</td><td>:</td><td><?php echo $row['jenis_kelamin']?></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><?php echo $row['alamat']?></td>
						</tr>
						</thead>
					
						</table><a href="karyawan.php"> kembali		
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