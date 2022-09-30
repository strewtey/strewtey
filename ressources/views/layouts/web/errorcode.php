<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title><?= $datas['code']; ?> <?= $datas['message']; ?></title>
			<link rel="stylesheet" type="text/css" href="http://cdn.net/css/font.min.css">
			<link rel="stylesheet" type="text/css" href="http://cdn.net/css/tailwind.min-2.2.2.css">
			<style type="text/css">
				.dfje{}
				.dfje > span:nth-child(2){border-left: 1px solid red;}
				.jnhe-fekef{width: 0;opacity: 0;animation: idwhn 3s infinite;height: 0.156em;}
				@keyframes idwhn {
					0%{opacity: 0;width: 0%;transform: translateX(0px);}
					10%{width: 45%;opacity: .4;}
					90%{width: 0%;}
					100%{transform: translateX(-180px);}
				}
				/*Color*/
				@media (prefers-color-scheme: dark) {html{background: rgb(10,10,10);}.text-black{color: white;border-color: white}.jnhe-fekef{background: white;}}
			</style>
		</head>
		<body>
			<div class="h-screen w-screen flex justify-end items-end align-items-center pb-2 pr-2 sm:pb-10 sm:pr-10 md:pb-20 md:pr-20">
				<div class="flex-col" align="right" style="font-family: 'Lemon Milk Light';letter-spacing: 15px;word-spacing: 21px;">
					<div class="text-sm sm:text-lg text-black opacity-40"><?= $datas['code']; ?></div>
					<div class="jnhe-fekef rounded-full bg-black opacity-40 my-7"></div>
					<div class="text-sm leading-10 sm:text-lg text-black opacity-40 uppercase"><?= $datas['message']; ?></div>
				</div>
				<!-- <div class="flex items-center pt-8 sm:justify-start sm:pt-0" style="font-family: Nunito;letter-spacing: 15px;word-spacing: 21px;">
                    <div class="px-9 text-lg text-black opacity-40 border-r border-black"><?= $datas['code']; ?></div>
					<div class="ml-9 text-lg text-black opacity-40 uppercase"><?= $datas['message']; ?></div>
                </div> -->
			</div>
		</body>
	</html>