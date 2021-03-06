<?php
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="KanBank | Kayıt Ol"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center ortala">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="register-nav-link nav-link active" data-toggle="tab" href="#hospitals">Hastaneler</a>
              </li>
              <li class="nav-item">
                <a class="register-nav-link nav-link" data-toggle="tab" href="#receivers">Alıcılar</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="hospitals">

        <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="hname" placeholder="Hastane Adı" class="form-control mb-3" required>
          <input type="text" name="hcity" placeholder="Hastanenin Bulunduğu Şehir" class="form-control mb-3" required>
          <input type="tel" name="hphone" placeholder="Hastane Telefon Numarası" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}">
          <input type="email" name="hemail" placeholder="Hastane Email Adresi" class="form-control mb-3" required>
          <input type="password" name="hpassword" placeholder="Hastane Şifresi" class="form-control mb-3" required minlength="6">
          <input type="submit" name="hregister" value="KAYIT OL" class=" register-btn btn  btn-block mb-4">
        </form>

       </div>


       <div class="tab-pane container fade" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="rname" placeholder="Ad Soyad" class="form-control mb-3" required>
          <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Kan Grubu</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="text" name="rcity" placeholder="Yaşadığınız Şehir" class="form-control mb-3" required>
          <input type="tel" name="rphone" placeholder="Telefon Numarası" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}">
          <input type="email" name="remail" placeholder="Email Adresi" class="form-control mb-3" required>
          <input type="password" name="rpassword" placeholder="Şifre" class="form-control mb-3" required minlength="6">
          <input type="submit" name="rregister" value="KAYIT OL" class=" register-btn btn  btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4 register-link" title="Giriş yapın.">Zaten hesabınız varmı?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>
