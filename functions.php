<?php

function convertToUrl($string) {
    if (!isset($string) or empty($string)) return false;
    $string = mb_strtolower($string);
    $string = str_replace(
        array(
            'à', 'â', 'ä', 'á', 'ã', 'å',
            'î', 'ï', 'ì', 'í',
            'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
            'ù', 'û', 'ü', 'ú',
            'é', 'è', 'ê', 'ë',
            'ç', 'ÿ', 'ñ',
        ),
        array(
            'a', 'a', 'a', 'a', 'a', 'a',
            'i', 'i', 'i', 'i',
            'o', 'o', 'o', 'o', 'o', 'o',
            'u', 'u', 'u', 'u',
            'e', 'e', 'e', 'e',
            'c', 'y', 'n',
        ),
        $string);
    $string = str_replace(' ', '~', $string);
    $string = filter_var($string, FILTER_SANITIZE_EMAIL);
    $forbidden = array('!', '#', '$', '%', '&', '*', '+', '-', '/', '=', '?', '^', '_', '`', '{', '|', '}', '~', '@', '.', '[', ']', '\'', ' ');
    $string = str_replace($forbidden, '-', $string);
    $string = preg_replace('#-+#', '-', $string);
    return trim($string, '-');
}


function truncateString($string, $n) {
    $n = (int)$n;
    if (!is_string($string) OR !isset($string) OR $n <= 0 OR !isset($n)) return false;
    if ($n >= strlen($string)) return $string;
    trim($string);
    $string = ' ' . $string . ' ';
    if ($string{$n} != ' ') {
        while ($string{$n} != ' ') {
            $n++;
        }
    }
    return trim(substr($string, 0, $n)) . '...';
}



function email($title) {

    return "Bonjour,\n\nJe suis intéressé par votre offre \"" . $title . "\".";

}
