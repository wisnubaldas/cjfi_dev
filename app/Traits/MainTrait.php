<?php
namespace App\Traits;

trait MainTrait
{
    public static function alfabet($index)
    {
        $a =[
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        ];
        return $a[$index];
    }
}
