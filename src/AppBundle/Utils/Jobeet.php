<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/02/16
 * Time: 22:37
 */
namespace AppBundle\Utils;
class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}