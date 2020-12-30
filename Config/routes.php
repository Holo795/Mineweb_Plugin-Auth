<?php
Router::connect('/auth', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));
Router::connect('/auth/start', array('controller' => 'Auth', 'action' => 'auth', 'plugin' => 'Auth'));
Router::connect('/reauth/start', array('controller' => 'Auth', 'action' => 'reauth', 'plugin' => 'Auth'));
Router::connect('/auth/getDataLauncher', array('controller' => 'Auth', 'action' => 'getDataLauncher', 'plugin' => 'Auth'));
Router::connect('/auth/getDataIngame', array('controller' => 'Auth', 'action' => 'getDataIngame', 'plugin' => 'Auth'));
Router::connect('/auth/v', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));
Router::connect('/auth/version', array('controller' => 'Auth', 'action' => 'version', 'plugin' => 'Auth'));
