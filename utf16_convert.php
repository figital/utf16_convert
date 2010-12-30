<?

  function utf16_convert($string) {

    $string = preg_replace("@\\\u([0-9]{3,4})@", "&#x$1;", $string);
    return $string;

  }

?>
