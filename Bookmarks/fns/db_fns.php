<?php
	function db_connect() {
		$host = 'localhost';
		$user = 'root';
		$password = 'apmsetup';
		$dbname = 'bookmarks';
		$db = mysql_connect($host, $user, $password);
		if(!$db) {
			die("���ӽ��� : ".mysql_error());
		} //else {
		//	echo "DB ���� ����<br />";
		//}
		
		$db_selected = mysql_select_db($dbname, $db);
		if(!$db_selected) {
			die("Can\'t use dbname : ".mysql_error());
		}// else {
		//	echo "DB ���� ����<br />";
		//}
	}
?>