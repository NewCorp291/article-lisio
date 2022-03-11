<?php
  session_start();

  if(!$_SESSION['connected']){
    header('Location: /login.php');
  }
?>
<h1>Admin</h1>
<a href="/logout.php">Déconnexion</a>
<form method="POST" action="/app/functions/register.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="text" class="form-control" name="name" id="my-login"  placeholder="Identifiant">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php
if(isset($_SESSION['flash_message'])) {
  $message = $_SESSION['flash_message'];
  unset($_SESSION['flash_message']);
  echo $message;
}
?>