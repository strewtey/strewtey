<script type="text/javascript" src="<?= route('external-url', ['url' => cdn('js/jquery-3.6.0.js')]); ?>"></script>
<?= generate('js', null, null, true); ?>
<?php
	if(is_array(entity('js_head'))){
		foreach (entity('js_head') as $value)
			echo $value;
	}
	else echo entity('js_head');
?>