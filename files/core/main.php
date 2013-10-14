<?php

class mainClass {

	function connect_base() {
		$db = new mysqli($settings['server'], $settings['user'], $settings['password'], $settings['base']);
		if (@mysqli_connect_errno() != 0) include('files/core/off.php');
		else $this->managment_pages();
		$db -> query("SET NAMES 'utf8'");
	}

	function managment_pages() {
		if($settings['inclusion_page'] == "YES") { 
			$page = (isset($_GET['page']) ? $_GET['page'] : 'start');
			if (isset($_SESSION['player'])) {
				//$player = session($_SESSION['player']);
				if(isset($page)){
					if(file_exists('files/page/'.$page.'.php'))		include('files/page/'.$page.'.php');
				else										include('files/page/error.php');
			} else include('files/page/start.php');	
				require('files/system/style_before.php');			
			} else {	
				if(isset($page)){
					if(file_exists('files/page/'.$page.'.php'))		include('files/page/'.$page.'.php');
					else										include('files/page/error.php');
			} else include('files/page/start.php');					
				require('files/system/style_on.php');	
		}	
		} else include('files/system/off.php');

	}
	// funkcja odpowiadająca za sesję
	//function session($player = 0) {
	//	$player = (int)$player;
//
	//	if ($_SESSION['time'] < time()) {
	//		header('Location: files/include/logout.php'); 
	//		exit;
	//	} elseif ($_SESSION['protect'] != md5(true_ip(true))) {
	//		header('Location: files/include/logout.php'); 
	//		exit; 
	//	} elseif ($_SESSION['prev'] > 12) {
	//		session_regenerate_id();
	//		$_SESSION['player'] = $_SESSION['player'];
	//		$_SESSION['time'] = time()+2400;
	//		$_SESSION['prev'] = 1;
	//	} else {
	//		$_SESSION['player'] = $_SESSION['player'];
	//		$_SESSION['time'] = time()+2400;
	//		$_SESSION['prev']++;
	//	}
	//	$player = mysqli_fetch_array($db->query("select * from players where player = ".$_SESSION['player']));
//
	//	return $player;
	//}

}

?>