<?php
include "koneksiDB.php";
	$cityname = $_POST['cityname'];
	$countryname = $_POST['countryname'];

if (isset($_POST['submit'])) {
     	$query = "INSERT INTO city (cityname,country) VALUES ('".$cityname."','".$countryname."')";
     	$sql = mysqli_query($kon,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('indexCity.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('addDataCity.php','_SELF');
              </script>
            <?php
          }
   
     }

