<?php
class Parser{
  public static function parse($url){
    $rjson = "";
    $result=0;
    $opts = array(
      'http'=>array(
        'method'=>"GET"
      )
    );
    $context = stream_context_create($opts);
    $rjson = file_get_contents($url,false,$context);
    $json= json_decode($rjson);
    foreach($json as $str){
      $result+=preg_match("/^a.*/i",$str); // finds words with first A
      $result+=preg_match("/^.*?e$/i",$str);//finds words with last E
      $result+=preg_match("/^.{3}$/i",$str);//find words of length==3 PS: it's easier to write strlen($str) but for pretty reading ...
    }
    return $result;
  }
}
?>
