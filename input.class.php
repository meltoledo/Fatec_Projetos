<?php

	class input implements componente
	{
		public function __construct(private string $type = "", private string $name = "", private string $value = ""){}
		
		public function criar()
		{
			if($this->type == "submit")
				echo "<input type='{$this->type}' value='{$this->value}'>";
			else
				echo "<input type='{$this->type}' name='{$this->name}'>";
		}
	}

?>