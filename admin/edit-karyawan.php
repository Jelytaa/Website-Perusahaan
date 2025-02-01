<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-karyawan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from karyawan where karyawan_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="karyawan_id">ID_Karyawan</label>
                        <input type="hidden" name="karyawan_id" value="<?php echo $row['karyawan_id']?>" class="form-control">
                        <input type="number" name="karyawa_id" value="<?php echo $row['karyawan_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" name="no" value="<?php echo $row['no']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <select name="nik" class="form-control">
                            <option value="<?php echo $row['nik']?>" selected><?php echo $row['nik']?></option>   
                        </select>
                    <div>
                    <div class="form-group">
                        <label for="nama_karyawan">Nama Karyawan</label>
                        <textarea name="nama_karyawan" class="form-control"><?php echo $row['nama_karyawan']?></textarea>
                    </div>
                        <div class="form-group">
                        <label for="nik">NIK</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <textarea name="jabatan" class="form-control"><?php echo $row['jabatan']?></textarea>
                    </div>
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>