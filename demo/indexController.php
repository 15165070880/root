<?php

namespace demo;

class indexController {

  public static function index($str){
	return md5($str);
  }

}
