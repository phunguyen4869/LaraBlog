<?php

namespace App\Helpers;

class Helper
{
    public static function recursiveCategory($categories, $parent_id = 1)
    {
        $html = '';
        $addClass = '';

        foreach ($categories as $key => $category) {
            if ($category->parent_id == $parent_id) {
                if ($parent_id == 1) {
                    $addClass = ' class="has-dropdown"';
                }

                if (self::isChild($categories, $category->id) === true) {
                    // $addClass = ' menu-child child-' . $category->parent_id .'-'. $category->id . '';
                    $addClass = ' class="has-dropdown"';
                }

                $html .= '<li' . $addClass . '>';
                $html .= '<a href="#">' . $category->title . '</a>';

                if (self::isChild($categories, $category->id)) {
                    $html .= '<ul class="dropdown">';
                    $html .= self::recursiveCategory($categories, $category->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }
        return $html;
    }

    public static function isChild($categories, $id)
    {
        foreach ($categories as $category) {
            if ($category->parent_id == $id) {
                return true;
            }
        }
        return false;
    }
}
