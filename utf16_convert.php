<?

  function utf16_convert($string) {

    $string = preg_replace("@\\\u([0-9a-z]{3,4})@", "&#x$1;", $string);
    return $string;

  }

?>
