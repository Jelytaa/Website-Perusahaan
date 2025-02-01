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
        <h1>Data karyawan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>id_karyawan</th><th>No</th><th>Nik</th><th>Nama_Karyawan</th><th>Jenis
                -kelamin</th><th>Jabatan</th><th>Alamat</th>
                <th>
                    <a href="input-karyawan.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from karyawan");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_karyawan']?></td>
                <td><?php echo $row['no']?></td>
                <td><?php echo $row['nik']?></td>
                <td><?php echo $row['nama_karyawan']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['jabatan']?></td>
                <td><?php echo $row['alamat']?></td>
                <td>

                <a href="edit-karyawan.php?id=<?php echo $row['karyawan_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-karyawan.php?id=<?php echo $row['karyawan_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>