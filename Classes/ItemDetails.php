<?php
class ItemDetails{
	var $itemDigit = "";
	var $displayedDigit = "";
	var $itemParameter = "";
	var $itemKey = "";
	
	var $type = "";
	var $itemValue = "";
	var $instruction = "";

	function ItemDetails($dgt,$disDgt, $param, $key,$value){

		$this->itemDigit = $dgt;
		$this->displayedDigit = $disDgt;
		$this->itemParameter = $param;
		$this->itemKey = $key;
		$this->itemValue = $value;	

	}

	function GetItemDetails(){
		  return $this;
	}

}
?>