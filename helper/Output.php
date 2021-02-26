<?php
namespace helper;

class Output
{
    public static function json(array $arr)
    {
        return json_encode($arr);
    }
}
