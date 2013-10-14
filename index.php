<?php
	ob_start();
	session_start();

	include('files/core/settings.php');		 // załadowanie ustawień gry
	require_once('files/core/main.php');
	$main = new mainClass;	// załadowanie połączenia z bazą danych
	$main->connect_base();
	//if (@mysqli_connect_errno() != 0) include('files/include/off.php');			// sprawdzenie połączenia z bazą danych
//	else {	
	//	if($settings['inclusion_page'] == "YES") { 		// sprawdzenie czy strona została włączona
	//		include('files/core/main.php'); 		// załadowanie funckji
	//		$page = (isset($_GET['page']) ? $_GET['page'] : 'start');		// wykrycie strony
		//	if (isset($_SESSION['player'])) {		// wykrycie czy gracz ma sesje		
		//		$player = session($_SESSION['player']); 		// wysłanie sesji do funckji
		//		if(isset($page)){
		//			if(file_exists('files/page/'.$page.'.php'))		include('files/page/'.$page.'.php');
		//			else										include('files/page/error.php');
		//		} else include('files/page/start.php');	
		//		require('files/system/style_before.php');			
		//	} else {	
		//		if(isset($page)){
		//			if(file_exists('files/page/'.$page.'.php'))		include('files/page/'.$page.'.php');
		//			else										include('files/page/error.php');
		//		} else include('files/page/start.php');					
	//			require('files/system/style_on.php');	
	//	}	
	//	} else include('files/system/off.php');
//	}
//	$db->close();

	ob_end_flush();
?>