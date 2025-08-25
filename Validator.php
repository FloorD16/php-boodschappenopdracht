<?php

class Validator {
    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min, $max) {
        
        return $value >= $min && $value <= $max;
    }

    public static function decimal($value, $min, $max) {
        $decimalCount;

        if (strpos($value, '.') !== false) {
            $decimalCount = strlen(explode('.', $number)[1]);
        } else {
            $decimalCount = 0;
        }

        return $decimalCount >= $min && $decimalCount <= $max;
    }
}