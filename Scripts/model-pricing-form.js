
      function LoadPreviewDetails()
      {
    	 
    	  var TotalDigitsOnForm = 0;
    	  TotalDigitsOnForm = document.getElementById('numberOfDigits').value ;
      	
    	 
    	  for (var i = 1; i <= TotalDigitsOnForm; i++) 
    	  {
        	  
    		 if(document.getElementById('dgtFinalPrice'+i) != null)
    		  {       		
    			  if(document.getElementById('dgtFinalPrice'+i).value != "")
    			  {
        			  $("#lblPreviewPrice"+i+"").text(document.getElementById('dgtFinalPrice'+i).value);
        			
    			  }
    		  }
    		  
    	  }

    	  document.getElementById('txtTotalPreview').value =document.getElementById('txtTotal').value;
    	  document.getElementById('txtQuantitiesPreview').value =document.getElementById('txtQuantities').value;
    	  document.getElementById('txtGrantTotalPreview').value =document.getElementById('txtGrantTotal').value;


    	 
      }



      function preview(){
    	   LoadPreviewDetails();

    	  
  		$( "#dialog-form" ).dialog({
  			 modal: true,  
             resizable: false,
            width:800,
         
              
             buttons: {
 				"Proceed": function() {
  					 document.getElementById('generate').disabled = false;
  					document.getElementById('txtEmailCC').disabled = false;
  					
  					$( this ).dialog( "close" );
 				},
 				Cancel: function() {
 					$( this ).dialog( "close" );
 				}
 			}
 			
  		});
  		
  		
  		return false;
      }
      
      $(document).ready(function () {  
    	 
    	 document.getElementById('dialog-form'). style.display = "none";
         DisableDigitsText();
      
         if(document.getElementById('generate') != null)
         	document.getElementById('generate').disabled = "disabled";

         if(document.getElementById('preview') != null)
         	document.getElementById('preview').disabled = "disabled";
        
         ApplyWaterMarks();     
       
         DisableTotalSummary();
         
      });


      function DisableTotalSummary()     {  
    	 
          
    	  document.getElementById('txtTotal').disabled = "disabled";
          document.getElementById('txtQuantities').disabled = "disabled";
          document.getElementById('txtGrantTotal').disabled = "disabled";
    	  document.getElementById('txtTotalPreview').disabled = "disabled";
          document.getElementById('txtQuantitiesPreview').disabled = "disabled";
          document.getElementById('txtGrantTotalPreview').disabled = "disabled";
          document.getElementById('txtEmailCC').disabled = "disabled";
        
      }


      function EnableTotalSummary()
      {
    	  document.getElementById('txtTotal').disabled = false;
          document.getElementById('txtQuantities').disabled = false;
          document.getElementById('txtGrantTotal').disabled = false;
    	 
      }
      function ConfirmQuote(){
  		
 		document.getElementById("warning_message").innerHTML ="Are you sure ? <br/>On clicking 'Confirm' quote will generate and sent to Customer via Email.";
 		
 		$( "#dialog-message" ).dialog({
 			 modal: true,  
              resizable: false,
              height : 200,
             
              buttons: {
   				"Confirm": function() {
				     $( this ).dialog( "close" );

				   
				   	  EnableDigitsText();
				   	 
				   	  EnableTotalSummary();
				   	  document.forms["formPricing"].submit();
				   	  
    					
   				},
   				Cancel: function() {
   	   					
   					$( this ).dialog( "close" );
   					return false;
   					
   				}
   			}
 		});
 		return false;


 
 		}


    

      function ValidateQuotation()
      {
        
         
           ConfirmQuote();      
             
            	  return false;
      }