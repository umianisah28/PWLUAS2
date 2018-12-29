<?php
include "koneksiDB.php";
	$companyname = $_POST['companyname'];


if (isset($_POST['submit'])) {
     	$query = "INSERT INTO company (name) VALUES ('".$companyname."')";
     	$sql = mysqli_query($kon,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('indexCompany.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('addCompany.php','_SELF');
              </script>
            <?php
          }
   
     }

