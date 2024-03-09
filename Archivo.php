<?php

    include("./Usuario.php");
    $user = new Usuario();
    $user->insertUsuario($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['pass'], $_REQUEST['mail'], $_REQUEST['type'], $_REQUEST['coments']);
    header('Location:index.html')

?>