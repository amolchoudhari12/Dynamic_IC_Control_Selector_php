
<html>
<head>

<?php 


if (!isset($_POST['modelName'])) {
  header('Location: URL-Error.php'); 
}

if(isset($_POST['thankyou']))
	print "This page is redirected from Thank you....";




?>
    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/otek-validations.js" type="text/javascript"></script>
      <script src="Scripts/otek-common.js" type="text/javascript"></script>
      
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
    <style type="text/css">
        #foot
        {
            text-align: center;
        }
        
    </style>
    <script  type="text/javascript">

    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
    
  		
</script>
</head>


<body bgcolor="#000000">

<font color="#FFFFFF">

</font>

<div class="demo">

<div id="dialog-message" title="Error">
 <div id="error_message">
 </div>
</div>

	 <form name="form1" method="post" action="Thank-you.php" onsubmit="return IsAllFieldsAreValidated()" >
			
								

        <div id="top" align="center">
            <div id="top" align="center">
                <table border="0" cellspacing="0" cellpadding="0" width="839">
                    <tr>
                        <td>
                            <img src="Images/logo2.png" valign="middle" width="445" height="143" border="0"></a>
                        </td>
                        <td height="146" width="394">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" height="95">
                            <img src="Images/photobar.png" width="839" height="108" border="0">
                        </td>
                    </tr>
                   <tr>
                   <td colspan="2" align="right"><a href='Home.php' onclick="history.go(-1);return true;">Home</a>
                   </td>
                   </tr>
                                            
                </table>
            </div>
        </div>
		
		              
        <div id="content" align="center">

            <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838">
                <tr>
				<td align="center">
				
				<div id="users-contain" class="ui-widget">
				        <span style="color:#ffffff;font-size:Larger;font-weight:bold;">
                                       Ordering Info of : <?php print $_POST['modelName'];
                                        	print "<input type='hidden'  name='modelName'  id='modelName' value='". $_POST['modelName']."'> "?></span>
                                                <table border="1"  style="border-color: #666464;" class="ui-widget-content">
								            <div aling="center"> </div>                                                      <thead align='center'>
                                                        <tr class="ui-widget-header" >
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															   
															  for ($i = $initializer; $i < $_POST['numberOfDigits']; $i++) 
															 {
															  print "<th align='center'>".$count."</th>";
															  
																$count +=1;
															 }
																$count -=1;
																print "<input type='hidden' name ='numberOfDigits' id='numberOfDigits' value='".$count."'> "
															  
															  ?>
                                                        </tr>
														
														 <tr  >
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															
															  for ($i = $initializer; $i < $_POST['numberOfDigits']; $i++) 
															 {
															    $digitName = 'dgt'.$count;
															    $digitCustomName = 'dgtCustom'.$count;
															   	print " <td > <input type='text'  value='$_POST[$digitName]' maxlength='2' name='dgt".$count."' id='dgt".$count."' class='text ui-widget-content ui-corner-all'> 										  
															   	<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='$_POST[$digitCustomName]'></td>";
															   	$count +=1;
															 }	
															  ?>
                                                        </tr>
                                                                                                           
                                                                                                        
                                       
                                                    </thead>
                                                  
                                                </table>
			  
                                            </div>
                                            
                                           
				</td>
				</tr>
				
				
				 <tr>
				<td align="center">
				<div id="users-contain" >
                                                <table border="1" id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
									
									                                 
                                                    <thead >
                                                        <tr class="ui-widget-header" >
                                                         <th colspan="2">
                                                          <span style="color:#ffffff;font-size:14px">
                                       Required Quantities                                        	</span>
                                                         </th>
                                                        </tr>
														
														 <tr>
                                            <td>
                                                <td style="width: 30% ">
                                                    <label for="name">
                                                        * indicates required fields</label>
                                                </td>
                                               
                                            </tr>
                                            
                                            
                                                       
                                                               <tr>
                                                               
                                                               <td style="width: 30% ;">
                                            
                                                                <label  for="quanitites">
                                                                 Required Quantities</label>
                                                       </td><td style="width: 70% ;">
                                                              *  <input type="text" name="quantities" id="txtQuantities" value="" class="text ui-widget-content ui-corner-all" />
                                           </td>
                                           </tr>
                                           
                                       
                                                    </thead>
                                            
                                                </table>
			  
                                            </div>
                                            
                                           
				</td>
				</tr>
				
				
               
                <tr>
                    <td>
                        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838" style="border-color: #666464">
                            <tr>
                                <td align="center" valign="top">
                                    <div id="users-contain" class="ui-widget">
                                        <table id="userss" style="background: #000000">
                                            <tr class="ui-widget-header">
                                                <td colspan="2" style="width: 30% ;">
                                                    <span style="color:#ffffff;font-size:14px">
                                      Enter User Details:                                 	</span> 
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                            <td>
                                                <td style="width: 30% ;" ">
                                                    <label for="name">
                                                        * indicates required fields</label>
                                                </td>
                                               
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td style="width: 30% ;">
                                                    <label for="name">
                                                        Name</label>
                                                </td>
                                                <td style="width: 70% ;">
                                                    *<input type="text" name="name" id="txtName" class="text ui-widget-content ui-corner-all textboxwidth" />
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                    <label for="email">
                                                        Email</label>
                                                </td>
                                                <td>
                                                    *<input type="text" name="email" id="txtEmail" value="" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <label for="email">
                                                       Add CC </label>
                                                </td>
                                                <td>
                     
                                                    &nbsp;&nbsp;<input type="text" name="emailcc" id="txtemailcc" value="" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="phone">
                                                        Telephone</label>
                                                </td>
                                                <td>
                                                   *<input type="text" name="phone" id="txtPhone" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="fax">
                                                        Fax</label>
                                                </td>
                                                <td>&nbsp;
                                                    <input type="text" name="fax" id="txtFax" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="company">
                                                        Company</label>
                                                </td>
                                                <td>
                                                    *<input type="text" name="company" id="txtCompany" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="address">
                                                        Address</label>
                                                </td>
                                                <td>
                                                    *<input type="text" name="address" id="txtAddress" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Country">
                                                        Country</label>
                                                </td>
                                                <td>
                                                   *<input type="text" name="country" id="txtCountry" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="state">
                                                        State</label>
                                                </td>
                                                <td>
                                                    *<input type="text" name="state" id="txtState" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="city">
                                                        City</label>
                                                </td>
                                                <td>
                                                  *<input type="text" name="city" id="txtCity" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="zipcode">
                                                        Zip Code</label>
                                                </td>
                                                <td>
                                                   *<input type="text" name="zip" id="txtZipCode" class="text ui-widget-content ui-corner-all" />
                                                </td>
                                            </tr>
                                            
                                            
                                           
                                        </table>
                                        <div>
                                     	  <!--  <input TYPE="button" VALUE="Back" onclick="history.go(-1);return true;" style="background-color: #123456">-->                          
                                            <input type="submit" name="Submit" value="Submit" style="background-color: #123456">
                                            
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div id="col2">  
          <center>  
            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>  
		  </center> 
		  </div>
        </form>
    </div>
    <!-- End demo -->
    
    
    
</body>
</html>
