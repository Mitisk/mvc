<? require_once(ROOT.'/views/header.php'); ?>

<form action='#' method='post'>

<div class="card" style="margin: 5px 0px 5px 0px;">
    <div class="card-body">
                <h5 class="card-title"><?=$task['name']?> 
                <? if ($task['status'] == '1') {echo '<span class="badge badge-success">Выполнено</span>';} else {echo '<span class="badge badge-secondary">Выполняется</span>';}?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$task['email']?></h6>
                <p class="card-text">

                    <textarea name='text' class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$task['text']?></textarea>

                        <div class="form-check">
                        <input name='status' class="form-check-input" type="checkbox" value="1" id="status" <? if ($task['status'] == '1') { echo 'disabled checked';}?>>
                        <label class="form-check-label" for="status">
                        Задача выполнена
                        </label>
                      </div><br>

                    <button type="submit" name='submit' class="btn btn-success">Сохранить</button>                       
                
                </p>
      
    </div>
</div>

</form>



<? require_once(ROOT.'/views/footer.php'); ?>