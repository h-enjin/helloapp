<?php

OCP\App::addNavigationEntry(array(
	'id' => 'helloapp',
	'order' => 10,
	'href' => OCP\Util::linkToRoute('helloapp_index'),
	// 'icon' => OCP\Util::imagePath('helloapp', 'apps/helloapp/img/nav-icon.png'),
	'icon' => OCP\Util::linkTo('helloapp', 'img/nav-icon.svg'),
	'name' => 'HelloApp'
	)
);