<?php

namespace App\Utilities;

class Helper
{
    public static function getAllMenu()
    {
        $path = resource_path('data/menu-data/verticalMenu.json');
        $menu = file_get_contents($path);

        return json_decode($menu, true);
    }
}
