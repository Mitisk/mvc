<? require_once(ROOT.'/views/header.php'); ?>

<h1>Вход администратора</h1>

<form action='#' method='post'>
<div class="row">

<div class="col-md-12">
  <? if (isset($errors)) {
      foreach ($errors as $error) {
        echo '<p>' . $error . '</p>';
      }
  }
  ?>
</div>

<div class="col-md-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Логин</span>
  </div>
  <input type="login" name='login' placeholder="admin" aria-label="admin" class="form-control" aria-describedby="basic-addon1">
</div>
</div>

<div class="col-md-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Пароль</span>
  </div>
  <input type="password" name='password' placeholder="123" aria-label="123" class="form-control" aria-describedby="basic-addon1">
</div>
</div>

<div class="col-md-12">
<br><button type="submit" name='submit' class="btn btn-primary btn-lg btn-block">Войти</button>
</div>

</div>
</form>

<? require_once(ROOT.'/views/footer.php'); ?>