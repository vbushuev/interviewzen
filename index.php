<?php
include "src/parser.php";
$url="http://interviewzen.bs2/data.json";

class A {
  public function foo(){
    return "foo";
  }
};
class B extends A{
  public function somemethod($url){
      echo Parser::parse($url);
  }
};
$test = new B;
$test->somemethod($url);
?>
