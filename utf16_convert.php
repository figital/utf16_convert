<?

  function utf16_convert($str) {

    $str = preg_replace("@\\\u([0-9]{3,4})@", "&#x$1;", $str);
    return $str;

  }

  error_reporting(E_ALL);
  ini_set('display_errors',1);

  $test = "Here\u2019s an apostrophe!";

  $test = utf16_convert($test);
  echo $test;


?>
