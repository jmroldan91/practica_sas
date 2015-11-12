<?php
    require_once 'classes/AutoLoad.php';
    $imagen = Request::get('i');
    $ext = Files::getFileExtension($imagen);
    $path = '../../subidas/';
    $name = $path.$imagen;
    $fp = fopen($name, 'rb');
    header("Content-Type: image/".$ext);
    fpassthru($fp);

