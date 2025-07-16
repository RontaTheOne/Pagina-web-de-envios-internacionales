<?php

if (isset($_GET['clase'])&& isset($_GET['funcion'])) 
{
    $clase=$_GET['clase'];
    $funcion=$_GET['funcion'];
    llamar($clase,$funcion);
}

else
{
    $clase='page';
    $funcion='Home';
    llamar($clase,$funcion);
}

function llamar($clase,$funcion)
{
    require_once("controller/".$clase."_control.php");
    
    switch ($clase) {
        case 'page':
            $control= new design();//instanciar
        break;
        
    }//fin switch

    /*llamar funcion*/
    $control->{$funcion}();
}

?>