<?php
class Dreller {

/**
 * This tool will create a <i> tag quickly.
 *
 * @param string $icon   Name of icon from Font Awesome.
 * @param string $prefix The prefix class to use, like fas, far, fab, etc.
 *                       Default fas.
 * @author Dreller
 * @return string
 */
public function buildFA($icon, $prefix = 'fas'){
  return "<i class='$prefix fa-$icon'></i>&nbsp;";
}


/**
 * This tool will retrieve a GET variable if set.
 *
 * @param string $key     Name GET variable.
 * @param string $default Value to return if variable is not set.
 *                        Default ''.
 * @author Dreller
 * @return mixed
 */
public function getGET($key, $default = ''){
  $wip = $default;
  if( isset($_GET[$key]) ){
    $wip = trim($_GET[$key]);
  }
  return $wip;
}

/**
 * This tool will retrieve a POST variable if set.
 *
 * @param string $key     Name POST variable.
 * @param string $default Value to return if variable is not set.
 *                        Default ''.
 * @author Dreller
 * @return mixed
 */
public function getPOST($key, $default = ''){
  $wip = $default;
  if( isset($_POST[$key]) ){
    $wip = trim($_POST[$key]);
  }
  return $wip;
}

/**
 * This tool will output a variable content in a <pre>.
 *
 * @param string $var     Name of variable.
 *
 * @author Dreller
 * @return string
 */
public function printVar($var){
  $wip = $var;
  if( is_array($var) ){
    $wip = print_r($var, TRUE);
  }
  return "<pre>$wip</pre>";
}


}
