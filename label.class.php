<?php

	class label implements componente
	{
		public function __construct(private string $label = ""){}
		
		public function criar()
		{
			echo "<label>{$this->label}</label>";
		}
	}

?>