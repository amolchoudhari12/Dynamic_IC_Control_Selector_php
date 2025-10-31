<?php




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script type="text/javascript">
     function setvalue() {
         document.getElementById("dgt1").innerHTML = "1";
     }

     </script>


<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
.nodes {
	width:18px;
	background:url(1.gif) no-repeat;
}

.nodeText
{
	white-space:nowrap;
	color:#000000;

}

.nodes_right {
	width:18px;
	background:url(1_right.gif) no-repeat top right;
}
.box {
	background:url(box.gif) no-repeat top right;
	width:30px;
	height:24px;
}
.box_right {
	background:url(box.gif) no-repeat top left;
	width:30px;
	height:24px;
}
  .box1{

  width:auto;
	height:auto;
  		

	border-color: black black black #000000;

	border-style: solid;

	border-top-width: 1px;

	border-right-width: 1px;

	border-bottom-width: 1px;

	border-left-width: 1px;

	font-size : 10px;
	margin-left :110px;

	

}     
.blank_vertical_line {
	width:18px;
	background:url(2.gif) repeat-y;
}
.blank_vertical_line_right {
	background:url(2_right.gif) repeat-y;
}

.box_number {
	text-align:right;
	padding-right:10px;
}


.box_number_right {
	padding-left:10px;
}
.nodeTitle_left {
	font-weight:bold;
	vertical-align:bottom
}
</style>
</head>
<body onload="setvalue();">

<div style="width:900px; margin-left:auto; margin-right:auto;" >
  <table cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td><!-- first node starts here -->
       





<?php 


$LeftSideOptionValue = 
 "<div style='position:absolute; margin-left: [#MARIGN_LEFFT#]px '>
          <!-- padding between 1st and 2nd nodes starts here -->
          <div style='float:left; width:20px;'>&nbsp;</div>
          <!-- padding between 1st and 2nd nodes ends here -->
          <div style='float:right;'>
            <table cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='box_number'>[#DIGIT_NO#]</td>
              </tr>
              <tr>
                <td align='right'><input type='text' value='' style='color:#000000;width:20px' maxlength='4'  style='width:20px; padding: 2px' id='Text2'  name='dgtbox1' /></td>
              </tr>
              <tr>
                <td><table cellpadding='0' cellspacing='0' border='0'>
                     <tr>
                      <td class='nodeTitle_left' style='width:[#TD_WIDTH#]px'>[#TD_PARAM_NAME#]</td>
                      <td class='blank_vertical_line' style='height:[#TD_HEIGHT#]px'>&nbsp;</td>
                     </tr>
                  
                    [#ROW_OPTION_VALUES#]
                  </table>
               </td>
              </tr>
            </table>
          </div>
        </div>";


$RightSideOptionValue = " <div style='position:absolute; margin-left:[#MARIGN_LEFFT#]px'>
          <!-- padding between 2nd and 3rd nodes starts here -->
          <div style='float:left; width:20px;'>&nbsp;</div>
          <!-- padding between 2nd and 3rd nodes ends here -->
          <div style='float:right'>
            <table cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='box_number_right'>[#DIGIT_NO#]</td>
              </tr>
              <tr>
                <td align='left'><input type='text' value='' style='color:#000000;width:20px' maxlength='4'  style='width:20px; padding: 2px' id='Text6'  name='dgtbox1' /></td>
              </tr>
              <tr>
                <td><table cellpadding='0' cellspacing='0' border='0'>
                    
                    <tr>
                      
                      <td class='blank_vertical_line_right' style='height:[#TD_HEIGHT#]px'>&nbsp;</td>
                      <td class='nodeTitle_left'>[#TD_PARAM_NAME#]</td>
                    </tr>
                    
                    [#ROW_OPTION_VALUES#]
                  </table></td>
              </tr>
            </table>
          </div>
        </div> ";



function GetDots($count)
{
	$dots ="";

	for ($i = 0; $i < $count; $i++) {
			$dots .=" . ";
	}
	
		
	return $dots;
}
$items = array();
$itemsdotted = array();

array_push($items,"4-20 Amol");
array_push($items,"3-6VDC Priya");
array_push($items,"4-16VDC 999999");
array_push($items,"+-1VDC Vilasreao");
  array_push($items,"+-10 Anita");
  array_push($items,"+-100 VDCExternal");
  array_push($items,"+ DCExasdfaternal");
  
  array_push($items,"+-19mADC External");
  array_push($items,"+-100 mADC Ext ernal");
  
  $length = 0;
  $width = 100;


									foreach($items as $item1)
									{	
									  if(strlen($item1) > $length)
									   $length = strlen($item1);
									}
  
								
									if($length <30)
									{
										$count =1;
										
										foreach($items as $item1)
										{	
										   $dottedCount = 20 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
									}
									else 
									{
										$width +=30;
										
									}
   
                    
                   
                                          
                       $trActual = "";
                    
                  				  foreach($itemsdotted as $item2)
										{	
											
											$temp ="<tr>
                      <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  
									  
                    
									     
									      $tr =  $trActual;
									      $itemsdotted1 =  array();
									      foreach($items as $item1)
										{	
										   $dottedCount = 24 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted1,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActual = "";
                    
                  				  foreach($itemsdotted1 as $item2)
										{	
											
											$temp ="<tr>
                   <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  
									  
                    
     
      $tr1 =  $trActual;
   
      
       $itemsdotted2 =  array();
      foreach($items as $item1)
										{	
										   $dottedCount = 30 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted2,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActual = "";
                    
                  				  foreach($itemsdotted2 as $item2)
										{	
											
											$temp ="<tr>
                    <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  

$tr2 = $trActual;




  
       $itemsdotted3 =  array();
      foreach($items as $item1)
										{	
										   $dottedCount = 30 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted3,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActualRight = "";
                    
                  				  foreach($itemsdotted2 as $item2)
										{	
											
											$temp =" <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td class='nodeText'>$item2</td>
                    </tr>
                    <tr>";
											$trActualRight .=$temp; 
										  
										}  

$right = $trActualRight;

$rightsss = "     
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>kfdlfkdfd dfdfdfdf...............1</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfd  fdfd dfddf......2</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfdfdf dfdfd dfdfdfdfdf...3</td>
                    </tr>";

$right1 = "     
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>kfdlfkdfd dfdfdfdf...............1</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfd  fdfd dfddf......2</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap '>dfdfdfdfdfdf dfdfd dfdfdfdfdf...3</td>
                    </tr>";
//Left Side Values

$Width = 00;

$bodyOfItem = str_replace("[#DIGIT_NO#]", "1", $LeftSideOptionValue);
$bodyOfItem = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem);
$bodyOfItem = str_replace("[#TD_PARAM_NAME#]", "Amol Choudhari", $bodyOfItem);
$bodyOfItem = str_replace("[#TD_WIDTH#]", $Width, $bodyOfItem);
$bodyOfItem = str_replace("[#TD_HEIGHT#]", "0", $bodyOfItem);
$bodyOfItem = str_replace("[#ROW_OPTION_VALUES#]", $tr, $bodyOfItem);

$Width += 20;
$height = (17* 10) + 30;

$bodyOfItem1 = str_replace("[#DIGIT_NO#]", "2", $LeftSideOptionValue);
$bodyOfItem1 = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_PARAM_NAME#]", "Pramod Choudhari", $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_WIDTH#]",$Width, $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_HEIGHT#]",$height, $bodyOfItem1);
$bodyOfItem1 = str_replace("[#ROW_OPTION_VALUES#]", $tr1, $bodyOfItem1);

$Width += 40;
$height = $height + (17*10);

$bodyOfItem2 = str_replace("[#DIGIT_NO#]", "3", $LeftSideOptionValue);
$bodyOfItem2 = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_PARAM_NAME#]", "Priya Choudhari", $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_WIDTH#]", $Width, $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_HEIGHT#]", $height, $bodyOfItem2);
$bodyOfItem2 = str_replace("[#ROW_OPTION_VALUES#]", $tr2, $bodyOfItem2);




$Width += 40;

print $Width;
//Right Side Values
$bodyOfItem3 = str_replace("[#DIGIT_NO#]", "4", $RightSideOptionValue);
$bodyOfItem3 = str_replace("[#MARIGN_LEFFT#]", $Width, $bodyOfItem3);
$bodyOfItem3 = str_replace("[#TD_PARAM_NAME#]", "Mayur Choudhari", $bodyOfItem3);
$bodyOfItem3 = str_replace("[#TD_HEIGHT#]", $height, $bodyOfItem3);
$bodyOfItem3 = str_replace("[#ROW_OPTION_VALUES#]", $right, $bodyOfItem3);


$bodyOfItem4 = str_replace("[#DIGIT_NO#]", "5", $RightSideOptionValue);
$bodyOfItem4 = str_replace("[#MARIGN_LEFFT#]", "280", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#TD_PARAM_NAME#]", "Mayur Choudhari", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#TD_HEIGHT#]", "100", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#ROW_OPTION_VALUES#]", $right1, $bodyOfItem4);


print $bodyOfItem;
print $bodyOfItem1;
print $bodyOfItem2;
print $bodyOfItem3;
print $bodyOfItem4;

?>

</td>

</tr>

</table>

</div>


</body>
</html>
