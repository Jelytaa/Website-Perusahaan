<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-karyawan.php" method="POST">
                    <div class="form-group">
                        <label for="nim">id_karyawan</label>
                        <input type="number" name="id_karyawan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="">Nama_karyawan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>