<!DOCTYPE html>
<html>
<head>
      <title>Halaman Login Admin</title>
      <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
      <div class="kotak_login">
               <p class="tulisan_login">Login</p>
               <form action="admin/cek_login.php" method="post">
               <form>
                        <label>Username</label>
                        <input type="text" name="username" class="form_login" placeholder="Username atau email..">

                        <label>Password</label>
                        <input type="Password" name="password" class="form_login" placeholder="Password..">

                        <input type="submit" class="tombol_login" value="LOGIN">
                        <br/>
                        <br/>
                        <center>
                                <a class="link" href="index.php">KEMBALI</a> 
                        </center>
               <form>
                <?php
if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan']=="logout"){
    echo "Anda telah berhasil logout";
  }else if($_GET['pesan']=="belum login"){
    echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>
       </div>
</body>
</html>