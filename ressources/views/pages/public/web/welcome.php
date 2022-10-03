<!DOCTYPE html>
	<html lang="<?= lang(); ?>" data-mobile="<?= config('mobile') === true ? 'mobile' : 'none'; ?>" data-animation-css="<?= isset($_GET['css']) ? $_GET['css'] : 'auto' ?>" data-animation-js="1" data-theme="<?= isset($_GET['theme']) ? $_GET['theme'] : 'auto'; ?>">
		<head>
			<!-- META -->
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">

			<!-- TITLE -->
			<title><?= response('public:web')['welcome']['title']; ?></title>

			<!-- ICON -->
			<link href="<?php $a = route('external-url', ['url' => cdn('icon/svg-modify/icons8_send_to_back.svg')]); echo $a ? $a : cdn('icon/svg-modify/icons8_send_to_back.svg') ?>" rel="icon" type="image/svg">

			<!-- STYLESHEET -->
			<link rel="stylesheet" type="text/css" href="<?= assets('css/excepts/public/web/welcome.css'); ?>">
			<link rel="stylesheet" type="text/css" href="<?php $a = route('external-url', ['url' => cdn('css/font.min.css')]); echo $a ? $a : cdn('css/font.min.css'); ?>">
		</head>
		<body class="w-full-29u2 h-full-ej2 overflow-hidden-w19" style="z-index: 10;">
			<div class="back w-full-29u2 h-full-ej2 overflow-hidden-w19" style="position: fixed;">
				<div class="back-image-dheje h-full-ej2 w-full-29u2 absolute-329u bg-dyh82" style="background-image: url(<?= assets('img/ash-edmonds-0aWZdK8nK2I-unsplash.jpg'); ?>);"></div>
				<div class="back-color-dheje h-full-ej2 w-full-29u2 absolute-329u"></div>
			</div>
			<main class="main-w2181 flex-eu29 items-center-ewu29">
				<div class="flex-eu29">
					<div class="parent-bdwjdw h-full-ej2 w-full-29u2 overflow-hidden-w19" style="border-radius: 1.5rem;position: relative;">
						<div class="zo-sjbwdw absolute-329u w-full-29u2 h-full-ej2 z-1-"></div>
						<div class="fleco-2u92">
							<div class="page-title-eu92"><?= response('public:web')['welcome']['page_title']; ?></div>
							<a href="<?= url(''); ?>" class="link-w29">
								<div class="flex-eu29 items-center-ewu29">
									<span style="font-family: 'Nunito Light', 'Segoe Semilight', 'Segoe UI Semilight', 'Cocogoose UltraLight', arial, sans-serif;text-align: left; font-size: 0.875rem; line-height: 1.25rem;"><?= config("name"); ?></span>
									<span style="width: 1.25rem; height: 1.25rem; display: inline-block;">
										<svg style="fill:currentColor;" class="svg-right_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"><path d="M21.1875 9.28125L19.78125 10.71875L24.0625 15L4 15L4 17L24.0625 17L19.78125 21.28125L21.1875 22.71875L27.90625 16Z"></path></svg>
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</main>
		</body>
	</html>