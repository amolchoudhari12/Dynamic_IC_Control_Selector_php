<?php 
          						        class SelectControl 
								       {
								        
								        var $key ="";
								        var $value ="";
								        var $param = "";
										var $digit ="";
										var $optionName = "";
								       
								
								        function SelectControl($k, $v, $p, $d)
								        {
								        
								         $this->key = $k;
								         $this->value = $v;
								         $this->param = $p;
										 $this->digit = $d;
										
								        
								         
								        }
								        
								        function SelectControlOption($k, $v, $p, $o,  $d)
								        {
								        	 $this->key = $k;
									         $this->value = $v;
									         $this->param = $p;
											 $this->digit = $d;
											 $this->optionName = $o;	
								        }
								        
								       function GetDottedString($widthFactor,$k,$v )
									   {
									   	
									   	 $dottedCount = $widthFactor - (strlen($v)+2 );
										 $whiteSpcCount =  substr_count($v, ' ');
								        
										 $dotsk = "";
									  		 for ($k = 0; $k < $whiteSpcCount; $k++) {
													$dotsk .=" . ";
											}
										 $dottedCount = $dottedCount  ;

										 $dots ="";
										
											for ($i = 0; $i < $dottedCount; $i++) {
													$dots .=" . ";
											}
											 $valueText = $dots.$dotsk.$v;
												
											return $valueText;
										}
																		        
								        function GetSelectControl($widthFactor){	
											 $valueText = $this->GetDottedString($widthFactor, $this->key, $this->value);
								        	 
											 return "<input type= 'radio'  name='".$this->param."'  value='".$this->value ."' onclick='javascript:HideNoteTextBox(".'"'.$this->key.'"'.",".'"'.$this->param.'"'.",".'"'.$this->value.'"'.",".$this->digit.")' >".$this->key.$valueText."</input>";								        	
								        	 // return "<input type= 'radio'  name='".$this->param."'  value='".$this->value ."' onclick='javascript:HideNoteTextBox(".$this->key.",".  $this->param  .",". $this->value.",".$this->digit.")' >".$this->key.$valueText."</input>";
								        }
								        
								        function GetSelectControlForCustom($widthFactor)
								        {	
								        	 $valueText =  $this->GetDottedString($widthFactor, $this->key, $this->value);
								             return "<input type= 'radio'  name='".$this->param."'  value='".$this->value ."' onclick='javascript:SetNoteTextBox(".'"'.$this->key.'"'.",".'"'.$this->param.'"'.",".'"'.$this->value.'"'.",".$this->digit.")'>".$this->key.$valueText."</input>";
								      
								        }
								        
								       function GetSelectControlForCombineCustom($widthFactor)
								        {	
								        	 $valueText = $this->GetDottedString($widthFactor, $this->key, $this->value);								        	     	 						        	
								      		  return "<input type= 'radio'  name='".$this->param."'  value='".$this->value ."' onclick='javascript:SetNoteTextBox(".'"'.$this->key.'"'.",".'"COMBINE__'.$this->optionName.'"'.",".'"'.$this->value.'"'.",".$this->digit.")'>".$this->key.$valueText."</input>";
								      
								        }
								       }
								       
?>