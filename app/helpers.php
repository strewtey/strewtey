<?php 
if (!function_exists('windows_os')) {
	function windows_os(){
		return PHP_OS_FAMILY === 'Windows';
	}
}