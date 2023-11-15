<?php

//memasukkan koneksi ke sini
include_once("koneksi.php");

$result = mysqli_query(mysqli, "SELECT * FROM user_admin ORDER BY id ASC")

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form Input Create User</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
  ></script>
  <script src="https://unpkg.com/hyperscript.org@0.9.11"></script>
  
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="external.css">
    <link rel="PHP" href="index.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid2 justify-content-center"> <!--header-->
        <div class="row">
          <div class="headerCreateUser text-center">
            <div class="col-md-9 mx-5 my-4 justify-content-center position: absolute">
              <font6>Create User</font6>
            </div>
            <div class="col-md-1 mx-3 my-4">
              <a href="profile.html"><img src="https://drive.google.com/uc?export=view&id=1qNqQUwA8e7GHBGhYYebVAGk9z27sGOIK" alt="logo profile" class="img1"></a>
            </div> 
          </div>
        </div>
      </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col mx-5 my-3">
               <label><font3>Nama Lengkap</font3></label>
               <div class="row mt-2 mx-1">
                <input accept="text" placeholder="masukkan nama">
               </div>
            </div>
            <div class="col mx-5 my-3">
                <label><font3>ID</font3></label>
                <div class="row mt-2 mx-1">
                    <input accept="number" placeholder="masukkan ID">
                </div>
             </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col mx-5 my-3">
               <label><font3>Email</font3></label>
               <div class="row mt-2 mx-1">
                <input accept="email" placeholder="masukkan email">
               </div>
            </div>
          <div class="col mx-5 my-3">
            <label><font3>Status</font3></label>
            <div class="form-group">
                <select class="form-select" aria-label="Status">
                    <option selected value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-4 mx-5 my-3">
        <a href="add.php">
          <button class="btn btn-primary" type="submit"><font5>Tambah</font5></button>
    </a>
        </div>
    </div>
  
  
  <?php
    while($user_admin = mysqli_fetch_data($result)){
      $conn = new mysqli('localhost','root','','user_admin'); 
      if (isset($_POST['Submit'])){

        $inputan = $conn->prepare(
          "INSERT INTO user_admin(
            nama,
            id,
            email,
            statusUser
          ) VALUES(?,?,?,?)"

        );

        $nama = $_POST['nama'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $status = $_POST['statusUser'];

        $sql->bind_param("ssssssss", $nama, $gender, $email, $ttl, $alamat,$agama,$hobi,$hp);

        if($sql->execute()){
          Header('Location: index.php');
         }else{
          echo "Error";
         }
         
         $sql->close();
         $conn->close();
      }
    }
    ?>

    <!--php untuk memasukkannya ke db-->

    <?php

    ?>

</body>
</html>