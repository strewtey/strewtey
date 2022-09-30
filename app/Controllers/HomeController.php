<?php 
namespace App\Controllers;
use Crypt;
use DB;
use App\Https\HttpRequest;
use Support\Image;
// use View;
// use Scraps\Controller\Controller;
/**
 * 
 */
class HomeController extends Controller{
	public function index(){
		// echo "<pre>";
		// var_dump(DB::getConfig('ddd'));
		// var_dump(DB::select('
		// 	SELECT *
		// 	FROM users
		// '));
		// echo "</pre>";
		// $d = new \DB();
		// if($this->visit()) view('home.index');
		// else $this->welcome();
		// view('pages.public.home.web.index');
		if($this->own() == 'public'){
			if($this->visit()) view('pages.public.home.web.index');
			else $this->welcome();
		}
		else view('pages.' . $this->own() . '.home.index');
	}
	public function image($base){
		$data = str_replace('@@@', '/', trim($base));
		$data = base64_decode($data);

		$im = imagecreatefromstring($data);
		if ($im !== false) {
		    header('Content-Type: image/jpeg');
		    imagejpeg($im);
		    imagedestroy($im);
		}
		else {
		    echo 'An error occurred.';
		}
	}
	public function test(){
		if($this->visit()) view('pages.public.home.web.test');
		else $this->welcome();
	}
	public function services($name = null, $name0 = null, $name1 = null){
		// if(is_null($name))
		// 	echo "string";
		// else
		// 	echo $name;
	}
	public function post(HttpRequest $req = null, $params = null){
		echo var_dump($req->all());
	}
}