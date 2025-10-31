<?php

class OtekModel{
	var $modelName = "";
	var $notes = "";
	
	function OtekModel($name,$note){
		$this->modelName = $name;
		$this->notes = $note ;
	}

	function GetOtekModel(){
		  return $this;
	}

}
?>