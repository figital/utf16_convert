<?

  error_reporting(E_ALL);
  ini_set('display_errors',1);

  include("utf16_convert.php");

  $test = "Here\u2019s an apostrophe!";

  echo '<b>Original:</b> ' . $test;
  echo '<p><b>Converted:</b> ';

  $test = utf16_convert($test);

  echo $test;

?>
