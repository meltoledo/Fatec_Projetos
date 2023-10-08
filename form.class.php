<?php

	class form implements componente
	{
		public function __construct(private string $action = "", private string $method = "",private array $forelementos = array()){}
		
		public function criar()
		{
		echo "<form action='{$this->action}' method='{$this->method}'>";
			
			foreach($this->forelementos as $dado)
			{
				$dado->criar();
			}
			
			echo "</form>";
		}
		
		public function setForelemento($forelemento)
		{
			$this->forelementos[] = $forelemento;
		}
	}

?>