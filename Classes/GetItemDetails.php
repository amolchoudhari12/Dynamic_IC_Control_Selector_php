<?php
class GetItemDetails
{
	

	public function GetCustomerItemSelections($var)
	{			$itemColl = array();
				$parametersCount = 0;
			  	$isModelExists = false;	
			  	$modelNotes = "";
			  	$fileName ="";


								
								///lookup all hints from array if length of q>0
								if (strlen($var) > 0)
								{
							 		$xmlFileSelector = new XMLFileSelector();									
									$xmlSeriesName =  $xmlFileSelector->GetXMLFileName($var);
									
								  
									$xml = simplexml_load_file("XML"."\\".$xmlSeriesName);

									foreach($xml->InstrumentSeries  as $Series)
									{
										foreach($Series->Model  as $model)
										{
		 									$modelName = $model->attributes()->name;
		 									
		 									if($modelName == $var )
		 									{
		 										$isModelExists = true;
		 										
		 									//	print "Model Name :- ".$model->attributes()->name. "<Br/>";
		 										foreach($model->Parameter as $parameter)
		 										{
		 											$parameterName =  $parameter->attributes()->name;
		 											$parameters[] = $parameterName;
		 											$parametersCount += 1;
		 											
		 											
		 											foreach($parameter->options as $Currentitem )
		 											{		 												
		 												$optName =  $Currentitem->attributes()->name;		 												
		 												$options[] = $optName;		 											
		 												
		 												foreach($Currentitem->option as $item )
		 												{
		 													$itemName = $item ->attributes()->value;
		 													$items[] =$itemName;
		 													
		 														if( count($parameter->options) >1)
		 													 	{
		 													 		$thisItem = new OptionItem($item ->attributes()->key, $item ->attributes()->value, $item ->attributes()->price ,$parameterName , $optName);
		 													 	}
		 													 	else {
															 		$thisItem = new OptionItem($item ->attributes()->key, $item ->attributes()->value, $item ->attributes()->price ,$parameterName, null);
		 													 	} 
																array_push($itemColl, $thisItem);
		 													
		 													}
				 											$itemsArray []= $items;
				 											$items =null;
		 												}
		 											} 											
		 										
		 									     }
		 									 
		 										
		 										$otekModel = new OtekModel($modelName, $modelNotes);
		 									     
		 								}
										}
									}
									
							return $itemColl;
								
}	
}?>