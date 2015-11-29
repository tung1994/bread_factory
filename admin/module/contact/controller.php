<?php
	$action = isset($_GET['action']) && $_GET['action'] != null ? $_GET['action'] : "";

	switch ($action) {
		case 'insert':
			require('insert.php');
			break;
		case 'update':
			require('update.php');
			break;
		case 'delete':
			require('delete.php');
			break;
		default:
			require('list.php');
			break;
	}
?>