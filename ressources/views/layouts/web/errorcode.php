<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title><?= $datas['code'] . ' ' . $datas['message']; ?></title>
			<style type="text/css">
				*, ::before, ::after { box-sizing: border-box; }
				html { -moz-tab-size: 4; -o-tab-size: 4; tab-size: 4; }
				html { line-height: 1.15; /* 1 */ -webkit-text-size-adjust: 100%; /* 2 */ }
				body { margin: 0; }
				body { font-family: system-ui, -apple-system, /* Firefox supports this but not yet `system-ui` */ 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji'; }
				html { font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 1 */ line-height: 1.5; /* 2 */ }
				body { font-family: inherit; line-height: inherit; }
				*,
				::before,
				::after { box-sizing: border-box; /* 1 */ border-width: 0; /* 2 */ border-style: solid; /* 2 */ border-color: currentColor; /* 2 */ }
				button,
				[role="button"] { cursor: pointer; }
				a { color: inherit; text-decoration: inherit; }
				img, video { max-width: 100%; height: auto; }
				*, ::before, ::after { --tw-border-opacity: 1; border-color: rgba(229, 231, 235, var(--tw-border-opacity)); }

				.dfje{}
				.dfje > span:nth-child(2){border-left: 1px solid red;}
				.jnhe-fekef{width: 0;opacity: 0;animation: idwhn 3s infinite;height: 0.08em;}
				@keyframes idwhn {
					0%{opacity: 0;width: 0%;transform: translateX(0px);}
					10%{width: 45%;opacity: .4;}
					90%{width: 0%;}
					100%{transform: translateX(-180px);}
				}
				/*Color -- START*/
				.text-black{ color: black; }
				.jnhe-fekef{background: black;}
				html{background: rgb(190,190,190);}
				@media (prefers-color-scheme: dark) {html{background: rgb(10,10,10);}.text-black{color: white;border-color: white}.jnhe-fekef{background: white;}}
				/*Color -- STOP*/
				.opacity-40{ opacity: .4; }

				.pb-e9u2{ padding-bottom: 0.5rem; padding-right: 0.5rem; }
				.text-sm-e2u9e { font-size: 0.875rem; line-height: 1.25rem; }
				@media (min-width: 640px) { /* SM */
					.pb-e9u2{ padding-bottom: 2.5rem; padding-right: 2.5rem; }
					.text-sm-e2u9e{ font-size: 1.125rem; line-height: 1.75rem; }
				}
				@media (min-width: 768px) { /* MD */
					.pb-e9u2{ padding-bottom: 5rem; padding-right: 5rem; }
				}
			</style>
		</head>
		<body>
			<div class="pb-e9u2" style="display: flex; justify-content: end; height: 100vh; width: 100vw; align-items:  flex-end;">
				<div align="right" style="flex-direction: column;font-family: 'Lemon Milk Light', 'Lemon Milk', 'Segoe UI Light', arial, sans-serif;letter-spacing: 15px;word-spacing: 21px;">
					<div class="text-sm-e2u9e text-black opacity-40"><?= $datas['code']; ?></div>
					<div class="jnhe-fekef bg-black opacity-40 my-7" style="border-radius: 8px;"></div>
					<div class="text-sm-e2u9e text-black opacity-40" style="text-transform: uppercase; line-height: 2.5rem;"><?= $datas['message']; ?></div>
				</div>
			</div>
		</body>
	</html>