<?php
require "smarty/Smarty.class.php";

class Plantilla
{
    static  private $plantilla;

    /**
     * @return Smarty
     */
    public static function getPlantilla(): Smarty
    {
        self::$plantilla = new Smarty();
        self::$plantilla->template_dir="../vista/plantilla";
        self::$plantilla->compile_dir="../vista/plantilla_compiladas";
        return self::$plantilla;
    }

}
