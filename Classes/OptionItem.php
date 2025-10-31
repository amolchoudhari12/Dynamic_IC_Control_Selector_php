<?php
class OptionItem{
	var $paramaterName = "";
	var $itemKey = "";
	var $itemValue = "";
	var $price = "";
	var $optionName ="";
	var $position ="";

	function OptionItem1($id,$value,$price,$parameter,$optName){

		$this->itemKey = $id;
		$this->itemValue = $value;
		$this->parameterName = $parameter;
		$this->price = $price;
		$this->optionName = $optName;

	}
	
	function OptionItem($id,$value,$price,$parameter,$optName,$pos){

		$this->itemKey = $id;
		$this->itemValue = $value;
		$this->parameterName = $parameter;
		$this->price = $price;
		$this->optionName = $optName;
		$this->position = $pos;

	}

	function GetOptionItem(){
		  return $this;
	}

}
?>