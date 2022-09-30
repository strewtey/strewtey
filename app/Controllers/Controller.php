<?php 
namespace App\Controllers;
use Scraps\Controllers\Controller as BaseController;
use Scraps\Controllers\Traits\StaticCall;
use Cookie;

/**
 * 
 */
class Controller extends BaseController{
	use StaticCall;

	public function __construct(){ /*...*/ }

	public function own(){
		return isset($_GET['auth']) ? $_GET['auth'] : (isset($_SERVER['auth']) ? $_SERVER['auth'] : 'public');
	}

	public static function owner(){
		return isset($_GET['auth']) ? $_GET['auth'] : (isset($_SERVER['auth']) ? $_SERVER['auth'] : 'public');
	}

	public function authentificate(){

		return false;

	}
	public function visit(){

		if(!cookie_has('visit')){

			cookie('visit', $_SERVER['REMOTE_ADDR']);

			return false;

		}

		return true;

	}

	public function welcome(){
		redirect('welcome');
	}

}