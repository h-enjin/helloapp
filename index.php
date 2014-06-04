<?php

OCP\User::checkLoggedIn();
OCP\App::checkAppEnabled('helloapp');
OCP\App::setActiveNavigationEntry('helloapp_index');

$tpl = new OCP\Template('helloapp', 'main', 'user');
$tpl->assign('msg', 'はろーわーるど');
$tpl->printPage();