<? require_once(ROOT.'/views/header.php'); ?>

<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="/<?=$page?>/name">Сортировать по имени</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="/<?=$page?>/email">Сортировать по e-mail</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="/<?=$page?>/text">Сортировать по тексту</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="/<?=$page?>/status">Сортировать по выполнению</a></li>
            </ol>
            </nav>

            <? if ($status=='ok') { ?>
                <div class="alert alert-info" role="alert">
                Задание отправлено!
                </div>
            <?}?>

            <? foreach ($tasksList as $item) :?>
            <div class="card" style="margin: 5px 0px 5px 0px;">
            <div class="card-body">
                <h5 class="card-title"><?= $item['name'] ?> 
                    <? if ($item['status'] == '1') {echo '<span class="badge badge-success">Выполнено</span>';}
                    else {echo '<span class="badge badge-secondary">Выполняется</span>';}?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $item['email'] ?></h6>
                <p class="card-text"><?= $item['text'] ?></p>
            <? if (!User::isGuest()): ?> 
                <a href="/update/<?=$item['id']?>" class="btn btn-outline-warning btn-sm">редактировать</a>
            <? endif; ?>
            </div>
            </div>
            <? endforeach; ?>

            <br>

            <nav aria-label="Навигация">
            <ul class="pagination justify-content-center">
            
            <? for ($i = 1; $i <= $str_pag; $i++){
                $page == $i ? $dis = ' disabled' : $dis = '';

                echo '<li class="page-item'.$dis.'"><a class="page-link" href="/'.$i.'/'.$sort.'">'.$i.'</a></li>';
            }?>


            </ul>
            </nav>



<? require_once(ROOT.'/views/footer.php'); ?>