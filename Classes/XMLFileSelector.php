<?php
class XMLFileSelector{

	
	

	function GetXMLFileName($inputModelName){
		
		$xml = simplexml_load_file("XML\ModelSeries_XMLFileName.xml");

		foreach($xml->InstrumentSeries  as $Series)

		{
			foreach($Series->Model  as $model)
			{
				$modelName = $model->attributes()->name;
				
				if($modelName == $inputModelName )
				{
					return $model->attributes()->ModelSeriesXMLFileName;
				}
			}
		}

	
	}
}
?>