<?PHP 
session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}
?>
<html>
<head>
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript">
     function CallModelPricing(id)
     {
         parent.location='Model-Pricing.php?crid='+ id +'&type=onhold';
     }

    		 </script>
</head>
<body bgcolor="#000000" >

<div id="dialog-message" title="Error">
 <div id="error_message">
 </div>
</div>

	 <form name="FormOnHoldEnquiries" method="post"  >
	 
	 <?php 
	 
	 print "<input type='hidden'  name='onhold'  id='onhold' value='onhold'> "; 
	 ?>
    <div align="center">
        <div id="wrapper">
            <div id="top" align="center">
                <div id="top" align="center">
                    <table border="0" cellspacing="0" cellpadding="0" width="830">
                        <tr>
                            <td>
                                <img src="Images/logo2.png" valign="middle" width="445" height="143" border="0"></a>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2" >
                                <img src="Images/photobar.png" width="830" height="108" border="0">
                            </td>
                        </tr>
                         <tr>
                   <td colspan="2" align="right"> <a href='logout.php'>Log out</a>
                   </td>
                   </tr>
                        
                    </table>
                     <table border="0" cellspacing="0" cellpadding="0" width="830">
                    
                           <td style="background: #505050;" align="center">
                            
                                  
                           
                          
								    <INPUT TYPE="button" style="background-color: #123456"  value="Home"  onClick="parent.location='Enquiries.php'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                         
								<INPUT TYPE="button" style="background-color: #123456"  value="View Enquiries"  onClick="parent.location='Enquiries.php'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<INPUT TYPE="button" style="background-color: #123456"  value="View On-Hold Enquiries"  onClick="parent.location='on-Hold-Enquiries.php'">
							
                           
                        
                            </td>
                            </tr>
                          
                           
                    </table>
                </div>
            </div>          
                   <div id="content" align="center" >
                        <table border="0" width="830" cellspacing="0" cellpadding="0" bgcolor="383838">
                            <tr>
                                <td align="center" valign="top">
                                    
                                     <br/>
                                       <span style="color:#ffffff;font-size:Larger;font-weight:bold;"> OTEK Model Ordering Information
                                       </span> 
                                        <br />
                                </td>
                              
                            </tr>
                            
                            
                            <tr>
                            
                            <td align="center">
                                <div id="users-contain">
                             <table border="0" width="750"  id="userss" style="background: #000000; border-color: #666464">
                            
                               <tr>
					                <td class="ui-widget-header " >
					                   
					                    <span style="color:#ffffff;font-size:Larger;font-weight:bold;">   On Hold Enquiries:</span>
					                </td>
					            </tr>
					             <tr>
                                    <td >
                                    
                                     <table border="1" id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
				                                       <thead  class="ui-widget-header" >
                                                        <tr >
                                                            <th style='width: 50px;color:ffffff'>
                                                                Number
                                                            </th>
                                                            <th style='width: 300px ;color:ffffff'>
                                                                Model Name
                                                            </th>
                                                            <th style='width: 500px; color:ffffff'>
                                                                Customer Name
                                                            </th>
                                                            <th style='width: 500px; color:ffffff'>
                                                                RFQ Status
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                    
                                 					<?php include 'SQLs/Select-OnHold-Enquirires.php';
                                 					
                                 				$count =1;
												while($row = mysql_fetch_array($result))
											  	{
											  		print "<tr>";
											  		print  "<td> ".$count."</td>" ;
											  		print  "<td> ".$row['ModelName']."</td>" ;
											  		print  "<td> ".$row['CustomerName']."</td>" ;
											  		//print "<td>  <input type='button' name='Submit' value='Price it' style='background-color: #123456' onClick='parent.location='Home.php''></td>";
											  		print "<td><INPUT TYPE='button' onClick='CallModelPricing(".$row['Customer_RFQ_id'].")'  value='Price it' style='background-color: #123456'/></td>";
											  		$count++;
											  	}
												
                                 					
                                 					?>
                                 					</tbody>
                                 					</table>
                                        <br/>
                                        <br />
                                    

                                        
                                   
                                    </td>
                                </tr>
                            </table>
                            </div>
                            </td>
                            
                            </tr>
                           <tr>
                           <td>
                           <br/>
                           </td>
                           </tr>
                        </table>
                        
                       
                    </div>
                    </form>
                    <div id="col2">
                        <center>
                            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>
                        </center>
                    </div>
               
            <div id="foot">
            </div>
        </div>
    </div>
