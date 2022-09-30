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
			<link href="<?= route('external-url', ['url' => cdn('icon/svg-modify/icons8_send_to_back.svg')]); ?>" rel="icon" type="image/svg">

			<!-- STYLESHEET -->
			<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/font.min.css')]); ?>">
			<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/keyframe.min.css')]); ?>">
			<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/f-family.css')]); ?>">
			<link rel="stylesheet" type="text/css" href="<?= route('external-url', ['url' => cdn('css/tailwind.min-2.2.2.css')]); ?>">
			<style type="text/css">
				.z-1-{z-index: -1;}
				.back-image-dheje{filter: blur(30px);}
				@keyframes kkio {0%{filter: blur(0px);}100%{filter: blur(30px);}}
				.back-color-dheje{background-color: white;opacity: .6;animation: opacity-10 1.3s, opacity-10-6 4s 1.3s;}
				@keyframes jdwi {0%{opacity: .4;}100%{opacity: .6;}}
				.back{z-index: -1;}

				/* --- Color ---  */
				.zo-sjbwdw{background-image: linear-gradient(35deg, rgba(255, 255, 255, .4) 30%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));}
				.parent-bdwjdw{animation: opacity-0 4.3s, opacity-0-10 4.5s 4s ease-in, translate-x-30 4.5s 4s ease-in reverse;}
				@media (prefers-color-scheme: dark) {
					*{color: white;}
					html{background: rgb(10,10,10);}
					.back-image-dheje{filter: blur(20px);}
					@keyframes kkio {0%{filter: blur(0px);}100%{filter: blur(20px);}}
					.back-color-dheje{background-color: black;opacity: .9;animation: opacity-10 1.3s, opacity-10-9 4s 1.3s;}
					@keyframes jdwi {0%{opacity: .4;}100%{opacity: .9;}}
					/*.zo-sjbwdw{background-color: rgba(0, 0, 0, .6);}*/
					.zo-sjbwdw{background-image: linear-gradient(45deg, rgba(0, 0, 0, .6) 45%, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));}
				}
			</style>
			<script type="text/javascript" src="<?= route('external-url', ['url' => cdn('js/jquery-3.6.0.js')]); ?>"></script>
		</head>
		<body class="z-10 w-full h-full">
			<div class="back fixed left-0 top-0 w-full h-full m-auto overflow-hidden">
				<div class="back-image-dheje h-full w-full absolute bg-no-repeat bg-center bg-cover" style="background-image: url(<?= route('external-url', ['url' => cdn('image/10/' . random_int(0, 32))]); ?>);"></div>
				<div class="back-color-dheje h-full w-full absolute z-10"></div>
			</div>
			<main class="h-screen w-screen flex justify-center items-center">
				<div class="flex w-1/2">
					<div class="parent-bdwjdw h-full w-full overflow-hidden rounded-3xl relative">
						<div class="zo-sjbwdw absolute w-full h-full z-1-"></div>
						<div class="flex-col p-10 space-y-9">
							<div class="ff-Nunito-Bold text-5xl"><?= response('public:web')['welcome']['page_message']; ?></div>
							<a href="<?= route('home') ? route('home') : route('chat'); ?>" class="inline-block ml-8">
								<div class="flex items-center space-x-2">
									<span class="ff-Nunito-Light text-sm text-left"><?= config("name"); ?></span>
									<span class="w-5 h-5 inline-block"><?php include cdn('icon/svg/icons8_right_arrow.svg'); ?></span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</main>
		</body>
	</html>