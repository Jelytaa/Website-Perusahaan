<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>WELCOME TO PERUSAHAAN ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Proses memperkenalkan karyawan baru kepada perusahaan dan sebaliknya, yaitu memperkenalkan perusahaan kepada karyawan baru. Dalam proses ini, karyawan baru akan diberikan gambaran mengenai budaya, nilai-nilai, dan tujuan perusahaan.  </p>
						<p><a class="btn btn-warning btn-lg" href="tampil-mahasiswa.php" role="button">Karyawan</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>