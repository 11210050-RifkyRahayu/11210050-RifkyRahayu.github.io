<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11210050_RIFKY_RAHAYU</title>
       <style>
             .hilang {
                text-decoration: none;
             }
        </style>
</head>
<body>
<table width='100%' height='100%' border='0' cellspacing='0' cellpadding='1'>
  <tr height='150'>
      <td colspan='2'><img src="images/header.png" height='200'width='100%'></td>
  </tr>
  <tr>
      <td width='200' valign='TOP'>
       <table width='100%' border='0' cellspacing='0' cellpadding='1'>
        <tr><th>MENU</th></tr>
        <tr><td><img src='images/beranda.png' width='15' height='15'> <a href='index.php' class='hilang'>Beranda</a></td></tr>
        <tr><td><img src='images/biodata.webp' width='15' height='15'> <a href='index.php?menu=biodata' class='hilang'>Bio Data</a></td></tr>
        <tr><td><img src='images/pendidikan.png' width='15' height='15'> <a href='index.php?menu=pendidikan' class='hilang'>Pendidikan</a></td></tr>
        <tr><td><img src='images/pelatihan.png' width='15' height='15'> <a href='index.php?menu=pelatihan' class='hilang'>Pelatihan</a></td></tr>
        <tr><td><img src='images/portopolio.png' width='15' height='15'> <a href='index.php?menu=portofolio' class='hilang'>Porto Folio</a></td></tr>

      </table>
      </td>
      <td height='400' valign='TOP'>
        <?php 
        if (ISSET($_GET['menu'])){
            if($_GET['menu'] == 'biodata'){
                include"biodata.php";
            }
        }
        if (ISSET($_GET['menu'])){
            if($_GET['menu'] == 'pendidikan'){
                include"pendidikan.php";
            }
        }
        if (ISSET($_GET['menu'])){
            if($_GET['menu'] == 'pelatihan'){
                include"pelatihan.php";
            }
        }
        if (ISSET($_GET['menu'])){
            if($_GET['menu'] == 'portofolio'){
                include"portofolio.php";
            }
        }
        ?>
       </td>
  </tr>
  <tr height='50'>
      <td colspan='2'><img src="images/bawah.png" height='300'width='100%'></td>
  </tr>
</table>
</body>
</html>