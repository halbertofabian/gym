<?php
class App
{
    public static function startApp()
    {
        $url = App::getRute();
        include_once 'vista/app.php';
    }

    public static function getRute()
    {
        return "http://localhost/app/";
    }

    public static function getComponent($componente)
    {
        $url = App::getRute();
        include_once 'vista/componentes/' . $componente . '.componente.php';
    }
}
