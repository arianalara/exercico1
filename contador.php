<?php
	session_start ();
	if (empty ($_SESSION ['Cont'])){
		$_SESSION["Cont"] = 1;
		$Cont = 1;
	}
	
	else {
		$Cont = $_SESSION["Cont"] + 1;
		$_SESSION ["Cont"] = $Cont;
	}
?>
<html>
	<head>
		<title> contador </title>
	</head>
	
	<body>
	
		<?php
           if(!empty ($Cont)){
			   echo "Voce esteve aqui $Cont vezes!!!";
			   }
		 ?>
	</body>
</html>