<?php
if (isset($_POST['siap'])) {
  //oke sekarang proses dia login
  // define("username", "admin");
  // define("pwd", "adkesma000");
  define("username", "admin");
  define("pwd", "adkesma000");

  if ($_POST['login'] === username &&  $_POST['password'] === pwd) {
    //oke masuk
    session_start();
    $_SESSION['login_admin'] = true;
    header("Location: ../index.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin MUARA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active">HALAMAN LOGIN ADMIN POLKESMA</h2>


      <!-- Icon -->
      <div class="fadeIn first">
        <img src="../logobem.jpeg" style="width:120px;" id="icon" alt="User Icon" />
        <br>
        <a href="https://fikti.bem.gunadarma.ac.id" rel="nofollow" target="_blank"> BEM FIKTI UNIVERSITAS GUNADARMA</a></h2>
      </div>

      <!-- Login Form -->
      <form action="" method="post">
        <div class="m-b-md text-center">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">

          <input type="password" id="password" class="fadeIn third form-password" name="password" placeholder="Password">
          <br><input type="checkbox" class="form-checkbox"> Show password

        </div>
        <br>
        <input type="submit" class="fadeIn fourth" name="siap" value="Log In">
      </form>

      <!-- Remind Passowrd -->


      <div class="copyright m-t-sm">
        <div>Maintained by Biro PTI<br>2021/2022 </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="../../assets/vendor/jquery/jquery.min.js"></script>

  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->

  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="../../assets/js/sb-admin-2.min.js"></script>



</body>

<!-- Show Passeord -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.form-checkbox').click(function() {
      if ($(this).is(':checked')) {
        $('.form-password').attr('type', 'text');
      } else {
        $('.form-password').attr('type', 'password');
      }
    });
  });
</script>

</html>