<?php
if (!function_exists('cdn_asset')) {
    function word_teaser($string, $count)
    {
        $original_string = $string;
        $words = explode(' ', $original_string);

        if (count($words) > $count) {
            $words = array_slice($words, 0, $count);
            $string = implode(' ', $words);
        }

        return $string;
    }
}

