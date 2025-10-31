<html>
<head>
    <style>
        .tdKey
        {
            width: 30%;
        }
        
        .tdValue
        {
            width: 70%;
        }
        .watermarkOn {
        color: #CCCCCC;
        font-style: italic;
    }
    </style>

    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <link href="Styles/style_wizard.css" rel="stylesheet" type="text/css" />
    
    <script language="javascript">
 function printpage()
  {
   window.print();
  }

 function close()
 {
	 alert('asdf');
	 window.close()
 }

 
 function Approve(id)
 {
	  		
	 		document.getElementById("warning_message").innerHTML ="Are you sure ? <br/>On pressing 'Confirm', quote will be approved.";
	 		
	 		$( "#dialog-message" ).dialog({
	 			 modal: true,  
	              resizable: false,
	              height : 200,
	             
	              buttons: {
	   				"Confirm": function() {
					     $( this ).dialog( "close" );
					     parent.location='my-quote-approved.php?qid='+ id ;
					   	  
	    					
	   				},
	   				Cancel: function() {
	   	   					
	   					$( this ).dialog( "close" );
	   					return false;
	   					
	   				}
	   			}
	 		});
	 		return false;


	 
	 	
		 
 }
</script>
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
</head>
<body bgcolor="#000000">
    <form name="form1" method="post" >
    
     <div id="dialog-message" title="Confirm">
   
        <div id="warning_message">
        </div>
    </div>
    
    <div align="center">
        <div id="wrapper">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="content" align="center" >
        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838" style="border-color: #666464;">
           
            <tr>
                <td align="center" valign="top" style="background: #000000">
                    <div class="ui-widget ui-widget-content">
                        <div id="users-contain">
                            <table border="1" id="userss" style="background: #000000; border-color: #666464">
                               <tr>
					                <td class="ui-widget-header ">
					                    <h1>
					                        Otek Quotation Details </h1>
					                </td>
					            </tr>
					            
					            <tr>
					            
					            <td>
					            
					            <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="000000" style="border-color: #666464;">
		<thead class="ui-widget-header " >
		
										<?php  
										include 'SQLs/Get-Customer-Quote.php';										 
										 $row = mysql_fetch_array($result); 
										?>
                                <tr >
                                    <td align="center" valign="top">
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Selected Model  
                                        </span>
                                        <br />
                                    </td>
                                   
                                
                                   <td align="center" valign="top">
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Customer Name  
                                        	
                                        </span>
                                        <br />
                                    </td>
                               
                                    <td align="center" valign="top" >  
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Required Quantities 
                                        </span>
                                        <br />
                                    </td>
                                </tr>
                                </thead>
                                <tr>
                                <td align="center">
                                <?php print "<label id='modelname' value='".$row['ModelName']."'>".$row['ModelName']." </label>";?>
                                </td>
                                
                               <td align="center">
                                <?php print "<label id='customername' value='".$row['CustomerName']."'>".$row['CustomerName']." </label>"; ?>
                                </td>
                                
                                <td align="center">
                                <?php print "<label id='quantities' value='".$row['Quantities']."'>".$row['Quantities']." </label>";?>
                                </td>
                                </tr>
                            </table>
					            
					            </td>
					            </tr>
					             <tr>
                                    <td>
                                      
                                       <table border="0" id="users-contain" style="border-color: #666464;" class="ui-widget-content">
										
                                    <thead class="ui-widget-header">
                                        <tr>
                                            <th style='width: 30px; color: ffffff'>
                                                Digit
                                            </th>
                                            <th style='width: 150px; color: ffffff'>
                                                Description
                                            </th>
                                            <th style='width: 30px; color: ffffff'>
                                               Selected option
                                            </th>
                                            <th style='width: 200px; color: ffffff'>
                                                Option value
                                            </th>
                                            <th style='width: 100px; color: ffffff'>
                                                Price
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php 
                                  		include 'SQLs/Get-Customer-Quote.php';	
                                  		$row = "";
										 while($row = mysql_fetch_array($result))
									  	{
									  		print "<tr><td>".$row['SequenceDigit']."</td>" ;
									  		print  "<td>".$row['ModelName']."</td>" ;
									  		print  "<td>".$row['DigitSelectedValue']."</td>" ;
									  		print  "<td>".$row['SelectedValue']."</td>" ;
									  		print  "<td>".$row['FinalPrice']."</td></tr>" ;
									  	
									  			  		
									  	}   

									  
										?>   
										
									
                                   
                                
                                    </tbody>
                                    </table>
                                      
                                      
                                                                        
                                     </td>
                                </tr>
                                
                                
                                <tr>
                                
                                
                                <td align="right">
                                
                                
                                 <table border="0" >
                                           <tr>
                                          <td align="right" width="20%">
                                           <b>Total:</b> 
                                           </td>
                                          
                                           <td align="left" width="80%">
                                         <?php include 'SQLs/Get-Customer-Quote.php';	
                                         $row = mysql_fetch_array($result);
                                          print $row['TotalPrice'];?>
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                         <td align="right">
                                           <b>Quantities:</b> 
                                           </td>
                                          
                                           <td align="left">
                                          
                                          <?php print $row['Quantities']	;?>
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                          <td align="right">
                                          <b>Grant Total:</b> 
                                           </td>
                                          
                                           <td align="left">
                                          <?php 
                                           print $row['GrantTotal'];?>
                                           </td>
                                           </tr>
                                           <tr>
                                           
                                           <td>
                                           
                                           
                                           <br/>
                                           <br/>
                                           </td>
                                           </tr>
                                           </table>
                                </td>
                                
                                </tr>
                                
                                
                               
                            </table>
                            <!-- <input type="button" id="cancel" name="cancel" value="Cancel Quote"  style="background-color: #123456" onclick="close()"> --> 
                             <?php $qid = ""; if(isset($_GET['cid']))
                             					 $qid= $_GET['cid'];
                             					 print "<input type='button' id='approve' name='approve' value='Approve Quote'  style='background-color: #123456' onClick='Approve(".$qid.")' >";
                                         ?>
                   				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   				   <input type="button" value="Print" onclick="printpage();" style="background-color: #123456">
            			
                             <br/>
                             <br/>
                        </div>
                    </div>
                    
                  
                </td>
            </tr>
            
           
        </table>
    </div>
    <div id="foot">
        <center>
            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>
        </center>
    </div>
    </form>
</body>
</html>
