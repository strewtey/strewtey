<?php
	Route::get('/@file', function (){
		if (isset($_GET['url'])) {
			$h = get_headers($_GET['url'], 1);
			if(!((bool) preg_match('/404/', $h[0]))){
				isset($h['Content-Length']) ? header('Content-Length: ' . $h['Content-Length']) : null;
				isset($h['Content-Type']) ? header('Content-Type: ' . $h['Content-Type']) : null;
				readfile($_GET['url']);
			}
			else
				http_response_code(404);
		}
		// echo cdn('hhh');
	})->name('external-url');