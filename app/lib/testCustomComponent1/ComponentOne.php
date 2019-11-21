<?php
namespace SampleApp\testCustomComponent1;

/**
*
Custom Component One
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

