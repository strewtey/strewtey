<?= generate('css'); ?>
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/tailwind.min-2.2.2.css')], false); ?>">
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/font.min.css')], false); ?>">
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/f-family.min.css')], false); ?>">
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/keyframe.min.css')], false); ?>">
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/color.min.css')], false); ?>">
<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => 'http://color.net/generate/200,0,0/min/routes'], false); ?>">

<?= area('css'); ?>
<?php
	if(is_array(entity('css'))){
		foreach (entity('css') as $value)
			echo $value;
	}
	else echo entity('css');
?>

