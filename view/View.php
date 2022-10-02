<?php

namespace App\View;

class View
{
    const PAGES = [
        "404" => '/page/404.php',
        "form" => '/page/form.php',
        "blog" => '/page/blog.php',
    ];

    public static function getTemplate()
    {
        $elements = [
            'header' => './view/partials/header.php',
            'footer' => './view/partials/footer.php',
        ];

        $template = file_get_contents('./view/layout.php');
        foreach ($elements as $key => $path) {
            $template = str_replace("{{ ". $key ." }}", file_get_contents($path), $template);
        }

        return $template;
    }

    public static function show(string $page, array $data = [])
    {
        $pageContent = self::getTemplate();
        $pageContent = str_replace("{{ content }}", file_get_contents('./view/' . self::PAGES[$page]), $pageContent);

        foreach ($data as $key => $value) {
            $pageContent = str_replace("{{ " . $key ." }}", $value, $pageContent);
        }

        echo $pageContent;
    }
}