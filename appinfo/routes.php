<?php

$this->create('helloapp_index', '/')->action(
	function($params) {
		require __DIR__ . '/../index.php';
	}
);