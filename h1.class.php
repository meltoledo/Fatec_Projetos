<?php

	class h1 implements componente
	{
		public function __construct(private string $texto = ""){}
		
		public function criar()
		{	
			echo "<h1>{$this->texto}</h1>";
		}
	}

?>