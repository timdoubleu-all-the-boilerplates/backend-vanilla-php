<?php
namespace SampleApp\testCustomComponent2;

/**
*
Custom Component Two
*/
class Requests
{

  function __construct($arg)
  {
    # code...
  }

  public function makeRequest() {
    $res = "Component Two";
    return $res;
  }
}
