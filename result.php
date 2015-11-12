<?php     
    require_once 'classes/AutoLoad.php';
    $session = new Session();    
    $nuss = Request::post("id_us");
    $fecha = Request::post("anio") . '/' . Request::post("mes") . '/'. Request::post("dia");
    $tipoId = Request::post("Tipo_Id");
    $dni = Request::post("dni");        
    $datosUsuario =  array($nuss, $fecha, $tipoId, $dni);
    if(isset($_FILES['imagen'])){        
        $imagenes = $_FILES['imagen'];
        $result = UploadFile::multiUpload($imagenes,'../../subidas/', $nuss);
        $session->set("datosUsuario", $datosUsuario);
        $session->set("resultado", $result);
        header('Location: ./imagenesUsuario.php');
        exit();
    }else{
        header('Location: ./index.html');
        exit();
    }
    
