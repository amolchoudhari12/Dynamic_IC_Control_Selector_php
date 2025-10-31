// Assigned last tab's digit
               //  var lastTab = "lbl" .concat ($(".ui-state-active").text());
               //  var digitCustom = "dgtCustom" + $(".ui-state-active").text();
              //   $("#"+digitCustom+"").val( value);
         
             
            
               // End Amol Choudhari.*/
	
		$(document).ready(function () {
			
			
			
            $('#tabs').tabs({
    		    select: function(event, ui) {
            	   
            	
                var currentTab = $('.ui-tabs-selected a').text();             
                
              
            	var str1 = "tabs-";            	
            	var currentDIV = str1.concat(currentTab);  
            	var LeftSideDigit = "";
            	var RightSideDigit ="";
            	var SingleDigit = "";
            	var customDigitPrefix = "dgtCustom";
            	
            	
                var values_array =currentTab.split("-");
                          
                
                if(values_array.length ==2)
                {  
        		 var digitLeft = values_array[0];
        		 var digitRight = values_array[1];        		
        		 currentDIV = str1.concat(digitLeft)
        	  	}
             	
                
               
            	var value ="";  	
            	if( $("#"+currentDIV+" input:radio:checked").is(':checked'))
            		value = $("#"+currentDIV+" input:radio:checked").val();
            
            	
            	if(value =="Custom")
            	{      
            		var text = "";
            	    	// alert($('textarea').filter(':visible:first').val());
            	    	 text = $('textarea').filter(':visible:first').val();
            	    	
            	    	// text = $("#"+currentDIV+".textarea").filter(':visible:first').val().trim();
            	     
	            	text = "Custom__"+ text;
	            	
	            	var returnval = currentTab.indexOf("-");  
	    	    	if(returnval != -1)
	    	    	{
	    	    		
	    	    		LeftSideDigit = customDigitPrefix.concat(digitLeft);
        	    		RightSideDigit = customDigitPrefix.concat(digitRight);
        	    		  $("#"+LeftSideDigit+"").val( text);	
        	    		  $("#"+RightSideDigit+"").val( text);	
	    	    	      			
	    	    	}
	    	    	else
	    	    	{	
	    	    		var digitID = customDigitPrefix.concat(currentTab);
        	    	    $("#"+digitID+"").val( text);	          		
	    	    	}
	    	    	
	    	    
	            	
            	}
            	else if(value!="")
            	{  
            		var returnval = currentTab.indexOf("-");  
        	    	if(returnval != -1)
        	    	{
 
        	    		LeftSideDigit = customDigitPrefix.concat(digitLeft);
        	    		RightSideDigit = customDigitPrefix.concat(digitRight);
        	    	    $("#"+LeftSideDigit+"").val( value);	
        	    		$("#"+RightSideDigit+"").val( value);	        			
        	    	}
        	    	else
        	    	{	
        	    		var digitID = customDigitPrefix.concat(currentTab);
        	    	    $("#"+digitID+"").val( value);        	    			
        	    	}      		
            		
            	}
            	  return true;
            	
            	}   
          
    		});
            
            $( ".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *" )
			.removeClass( "ui-corner-all ui-corner-top" )
			.addClass( "ui-corner-bottom" );
		  
        });

		
		
		function AssignHiddenDigitsText(currentTab, text){		
		
			
			var returnval = currentTab.indexOf("-");  
	    	if(returnval != -1)
	    	{
	    		alert('slitted');
	    		
	    		document.getElementById('dgtCustom'+digitLeft).value = text;
	    		document.getElementById('dgtCustom'+digitRight).value = text;	            			
	    	}
	    	else
	    	{	            	
	    		alert('not');
	    		document.getElementById('dgtCustom'+currentTab).value = text;	            		
	    	}
		}
    	
    	
		function ErrorOfInput(){
		
		 document.getElementById("error_message").innerHTML ="Please select one option from the each tab.";
	
		$( "#dialog-message" ).dialog({
			 modal: true,  
             resizable: false,
            
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		}
	

        $(function () {
            $("button", ".demo").button();
            $("a", ".demo").click(function () { return false; });
        });

        function CheckLastTab(){
        	var digitIndex = $(".ui-state-active").text();
        	var lblName = "lbl".concat(digitIndex);
        	var digitCustom = "dgtCustom".concat(digitIndex);
        	var text ="";
        	
        	if($('textarea').filter(':visible:first').val() != null)
        		{
            text = $('textarea').filter(':visible:first').val();
            text = "Custom__"+ text;
        		}
        	var i = parseInt(digitIndex)-1;
        	x = document.getElementsByTagName('label');
        	if(i>0)
        	{
        		
        		
        		var lblText="";
        		
        		if(x.length == i)//check if combine has occured.
        			{
        		
        			var index = i-1;
        			lblText = x[index].childNodes[0].nodeValue;
        			}
        		else
        			{
        			
        			lblText = x[i].childNodes[0].nodeValue;
        			
        	}
	        
        		
        		
        		if(lblText =="Custom")
	        		$("#"+digitCustom+"").val(text);
	        	else
	        		$("#"+digitCustom+"").val(lblText);
        	}
         	
        	// document.getElementById(digitCustom).value = value;
            // $("#"+digitCustom+"").val( value);              	
        	// var lastTab = "lbl" .concat ($(".ui-state-active").text());
        	// var digitCustom = "dgtCustom" + $(".ui-state-active").text();
        	 
    
        	
        }
       
        function IsConfigDone() {        	
        	  CheckLastTab();  
        		
	           var no = document.getElementById('numberOfDigits').value;               
			   
	            for (var i = 1; i <= no; i++) {
	              var value = document.getElementById('dgt'+i).value;
	              if (value == '' || value == "") {			
					ErrorOfInput();
					return false;
	              }   
			    }			   
			    EnableDigitsText();     	
        }
       
        
        $(document).ready(function () {  
          // DisableDigitsText();
        });
        
        function ValidateTabs(){

           
        }
        
        function DisableDigitsText(){
        	 var no = document.getElementById('numberOfDigits').value;
 		    for (var i = 1; i <= no; i++) {
              document.getElementById('dgt'+i).disabled = "disabled";
              
           }        	
        }
        
        function EnableDigitsText(){
        
       	 var no = document.getElementById('numberOfDigits').value;
		    for (var i = 1; i <= no; i++) {
             document.getElementById('dgt'+i).disabled = false;
             
          }        	
       }
        function SetNoteTextBox(key, value, desc, digit) {
        	
        	//alert(key +"value :"+ value +" desc:"+  desc +" digit:"+  digit);
        	HideCustomTextBoxes();
        	var lblName = 'lbl' + value;
			var digitName = 'dgt' + digit;
			var customTxtCntrl =  value;
			customTxtCntrl = customTxtCntrl.replace(/\s/g, "")
			
			
        	var keywordCOMBINE = '';
        	var values_array =value.split("__");
        
        	if(values_array.length == 2)
        	{
        		keywordCOMBINE = values_array[0];  
        		
        		if(values_array[1]!="")
        		  value = values_array[1];
        		
        		lblName ='lbl' + keywordCOMBINE;
        	}       
        	
        	if(value =="COMBINE")
        		keywordCOMBINE = "COMBINE";
			SetDigitValue(key,keywordCOMBINE,digit);
			
			
            document.getElementById(value).innerHTML = "<textarea id='" + customTxtCntrl + "'  name='txtCustomText" + value + "' rows='2' cols='40'   onkeypress='validateXML(event)'  ></textarea>";
           // HideCustomTextBoxes(customTxtCntrl);
            document.getElementById(lblName).innerHTML =desc;   
        }
        
       
        function validateXML(evt) {

     	
       	  var theEvent = evt || window.event;    
       	
          var key = theEvent.keyCode || theEvent.which; 			
       	  key = String.fromCharCode( key );
      	  
     
       	
       	  if(theEvent.keyCode == 34 ||theEvent.keyCode == 38 ||theEvent.keyCode == 39 ||theEvent.keyCode == 60 ||theEvent.keyCode == 62  )
       	  { 
       		 
       			  theEvent.returnValue = null;
       			  alert('sfd');
          		  if(theEvent.preventDefault) theEvent.preventDefault();
          		
       	  } 
       	      	  
       
       	}

        function HideNoteTextBox(key, value, desc,digit) {  		    
        	
		  // alert(key +"value :"+ value +" desc:"+  desc +" digit:"+  digit);
        	var dgtTextID = 'dgtCustom' + digit;
    		var lblName = 'lbl' + value;
    		document.getElementById(lblName).innerHTML =desc;
    		document.getElementById(lblName).value = desc;
    		//document.getElementById(dgtTextID).value = desc;
    		
    		SetDigitValue(key,value,digit);
    		//setting digits code.
    		var cntrl = null;
    		var cntrl =document.getElementById(value);
    		if(cntrl!=null)
    		    document.getElementById(value).innerHTML = "";     
    		
    	
    		if(value=="COMBINE")
    		{
    			//alert(value);
    			HideCustomTextBoxes();
    		}  	
        }
        
       function HideCustomTextBoxes(){
    	   
    	   var $tabs = $('#tabs').tabs();
           var selected = $tabs.tabs('option', 'selected'); // => 0            	
        	
           var str1 = "tabs-";
           var str2 = String(selected+1);
       	
       	   var currentDIV = str1.concat(str2) ;       	 
       	   $("#"+currentDIV+" textarea").hide();
       	  
       	     
    	   
       }
         
       
       
        function SetDigitValue(k,type,digit)
		{	
        	var digitName = '';			
			
			if(type=="COMBINE")
			{
				var keytxt = new String(k);					
				
				if(keytxt.length==1)
				{					
					digitName = 'dgt' +  (digit).toString();	
					digitBoxName = 'dgtBox' +  (digit).toString();	
					document.getElementById(digitName).value=0;
					document.getElementById(digitBoxName).value=0;
					
					
					digitName = 'dgt' + (digit+1);
					digitBoxName = 'dgtBox' + (digit+1);
					document.getElementById(digitName).value=keytxt;
					document.getElementById(digitBoxName).value=keytxt;
				}
				if(keytxt.length ==2)
				{					
					digitName = 'dgt' + ''+ (digit).toString();
					digitBoxName = 'dgtBox' + ''+ (digit).toString();
					document.getElementById(digitName).value=keytxt.charAt(0);
					document.getElementById(digitBoxName).value=keytxt.charAt(0);
					
					
					digitName = 'dgt' + (digit+1);
					digitBoxName = 'dgtBox' + (digit+1);
					document.getElementById(digitName).value=keytxt.charAt(1);		
					document.getElementById(digitBoxName).value=keytxt.charAt(1);		
				}
			}
			else 
			{
				digitName = 'dgt' + digit;
				digitBoxName = 'dgtBox' + digit;
				document.getElementById(digitName).value=k;
				document.getElementById(digitBoxName).value=k;
			}			
		}

