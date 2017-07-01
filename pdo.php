<?php

require_once "config.php";

try{
		return $bdd = new PDO ('mysql:host='.$config['host'].';dbname='.$config['database'], $config['username'],$config['password'],array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
	}
	catch (Exeption $e)
	{
		echo 'Error: '.$e->getMessage().'<br/>';
		echo 'N° :'.$e->getCode();
	}


  