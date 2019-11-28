<? require_once(ROOT.'/views/header.php'); ?>

<h1>Добавление новой задачи</h1>

<form action='#' method='post'>
<div class="row">
<div class="col-md-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Имя</span>
  </div>
  <input type="name" name='name' class="form-control" aria-describedby="basic-addon1">
</div>
</div>
<div class="col-md-6">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">E-mail</span>
  </div>
  <input type="email" name='email' class="form-control" aria-describedby="basic-addon1">
</div>
</div>
<div class="col-md-12">
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Задача</span>
  </div>
  <textarea name='text' class="form-control"></textarea>
</div>
<br><button type="submit" name='submit' class="btn btn-primary btn-lg btn-block">Отправить</button>
</div>
</div>
</form>

<? require_once(ROOT.'/views/footer.php'); ?>