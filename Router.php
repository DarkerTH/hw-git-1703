<?php

/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.11
 * Time: 16.43
 */
class Router
{
    private $fileName;

    function __construct()
    {
        $this->fileName = 'index.html';
    }

    public function setFile($fileName){
        $fileName = preg_replace('[^A-Za-z0-9.-]', '', $fileName);
        $this->fileName = $fileName;
    }

    public function redirect($route){
        header('Location: /hw-git-1703/index.php?route='.$route);
        return true;
    }

    public function render(){
        $filePath = 'templates/'.$this->fileName;

        if (!file_exists($filePath) || empty($this->fileName)){
            $this->redirect('index.html');
            return false;
        }

        include($filePath);
        return true;
    }

}