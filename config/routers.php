<?php
return array(
    'add' => 'task/add',
    'update/([0-9]+)' => 'admin/update/$1',
    'update' => 'task/index',
    '([0-9]+)' => 'task/index/$1',
    'login' => 'admin/login',
    'logout' => 'admin/logout',
    '' => 'task/index',

    'admin' => 'admin/index',
);