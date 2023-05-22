<?php
if(isset($_GET["p"])){

    if($_GET["p"]==="mhs"){
        if(isset($_GET["sp"])){
            if($_GET["sp"]=="addnew"){
                $pg="mahasiswa/mhsadd.php";
                $TPage = "Menambahkan data Mahasiswa";  
            }
            if($_GET["sp"]=="edit"){
                $pg="mahasiswa/mhsedit.php";     
                $TPage = "Edit Data Mahasiswa";
            }
            if($_GET["sp"]=="dele"){
                $pg="mahasiswa/mhsdele.php";     
                $TPage="Hapus Data Mahasiswa";
            }
        }else{
            $pg = "mahasiswa/mhslist.php";
            $TPage="List Data Mahasiswa";
        }
    }
}else{
        
    $pg="pageutm.php";
    $TPage="home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TPage;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #cccccc;">
    
<nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #663300;">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.php"><img src="D0A09B8D-9896-4FC0-AF9B-193AD9D332E8.jpeg" width="50" height="50" class="img-thumbnail" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " href="main.php">Home</a>
        <a class="nav-link" href="main.php?p=mhs">DataMahasiswa</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
<?php
    include_once($pg);
?>
</div>
</body>
</html>