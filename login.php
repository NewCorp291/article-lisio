<?php
  session_start();
  if($_SESSION != null){
    header('Location: /administration.php');
  }
?>

<form method="POST" action="/app/functions/connection.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="text" class="form-control" name="name" id="my-login"  placeholder="Identifiant">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php
if(isset($_SESSION['flash_message'])) {
  $message = $_SESSION['flash_message'];
  unset($_SESSION['flash_message']);
  echo $message;
}
?>