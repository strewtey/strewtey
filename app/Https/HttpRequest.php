<?php 
namespace App\Https;
/**
 * 
 */
class HttpRequest {

	public function all(){
		return $_POST;
	}

	public function name(string $fields){
		return $_POST[$fields];
	}
}