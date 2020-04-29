<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
       $this->setTitle("pagina inicial");
       $this->setDescription("nosso site bonito de mvc");
       $this->setKeywords("mvc completo");
       $this->setDir("home/");
       $this->renderLayout();

    }
}

?>