<?php
return [
	'menu' => [
		[
			'icon' => 'ion-ios-home bg-gradient-green',
			'title' => 'Home',
			'label' => 'Dashboard',
			'url' => '/home'
		],
		[
			'icon' => 'ion-ios-color-filter bg-indigo',
			'title' => 'Slider',
			'url' => '/slider/create',
		],
		[
			'icon' => 'ion-ios-color-filter bg-indigo',
			'title' => 'Desain Inspirasi',
			'url' => '/desain_inspirasi',
		],
		[
			'icon' => 'ion-ios-color-filter bg-indigo',
			'title' => 'Produk Baru',
			'url' => '/produk_baru',
		],
		[
			'icon' => 'fab fa-simplybuilt bg-gradient-aqua',
			'title' => 'Brand',
			'url' => 'javascript:;',
			'caret' => true,
			'sub_menu' => [[
				'url' => '/brand',
				'title' => 'Data Grid'
			],
			[
				'url' => '/brand/create',
				'title' => 'Create'
			]]
		]
    ]
];