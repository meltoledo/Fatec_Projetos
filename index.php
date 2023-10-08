<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form Curso</title>
	</head>
	
	<body>
	
		<?php
			require_once "componente.php";
			require_once "div.class.php";
			require_once "h1.class.php";
			require_once "form.class.php";
			require_once "label.class.php";
			require_once "input.class.php";
			require_once "br.class.php";
			
			$h1 = new h1("Curso");
			
			$label = new label("Nome: ");
			$ipt_texto = new input("text", "nome", "");
			$br1 = new br();
			$br2 = new br();
			$ipt_submit = new input("submit", "", "enviar");
			
			$form = new form("#", "get");
			$form->setForelemento($label);
			$form->setForelemento($ipt_texto);
			$form->setForelemento($br1);
			$form->setForelemento($br2);
			$form->setForelemento($ipt_submit);
			
			$div = new div();
			$div->setElemento($h1);
			$div->setElemento($form);
			
			$div->criar();
			
		?>
	
	</body>
</html>