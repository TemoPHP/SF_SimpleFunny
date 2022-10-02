<?php

include_once 'view/View.php';

class Controller {

    public function getNotFoundPage()
    {
        \App\View\View::show('404');
    }

    public function getMainPage()
    {
        return \App\View\View::show('form');
    }

    public function getBlogPage()
    {
        $data = $_POST;
        if (!empty($_FILES)) {
            $pathImg = sprintf("./img/%s", $_FILES["img"]['name']);
            $moved = move_uploaded_file($_FILES["img"]["tmp_name"], $pathImg);
            $data['img'] = $pathImg;
        }
        $data['string'] = "Простая строка";
        $data['float'] = 3.32324;
        $data['sum'] = 3 + 5;
        $data['str'] = "a" . "b";

        return \App\View\View::show('blog', $data);
    }

}