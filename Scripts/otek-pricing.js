 
     /*
      function validate1(evt) {

         // var elementID = evt.target.id;
		 // var elementValue = document.getElementById(elementID).value;
		
                   
    	  var theEvent = evt || window.event;
    	
    	  var key = theEvent.keyCode || theEvent.which;
			
    	  key = String.fromCharCode( key );

    	  if(key != '%')
    	  {
        	  return false;
        	  if(theEvent.preventDefault) theEvent.preventDefault();
        	 // if(elementValue =='CF' || elementValue == 'NC')
            	//  return false;
        	 // return true;
    	  }
    	   var regex = /[0-9]|\./ ;
    	  if( !regex.test(key) ) {
    		// if(theEvent.keyCode !=8 ){
    	   			 theEvent.returnValue = false;
    	    		 if(theEvent.preventDefault) theEvent.preventDefault();
    		 // }
    	  }

    	 
    	 
    	}
*/

      function validate(evt,cost,count) {

    	  
     	  var theEvent = evt || window.event;    
     	
       	  var key = theEvent.keyCode || theEvent.which;
       	  
       	 if(theEvent.keyCode == 8)
       		 return true;
       	 
       	 
     	  key = String.fromCharCode( key );

     	  var regex = /[0-9]|\./ ;     
        	  
     	  if( !regex.test(key) ) 
          {   
     		  theEvent.returnValue = false;
     		  if(theEvent.preventDefault) theEvent.preventDefault();     	

          }  
     	  
     	
       	  if(theEvent.keyCode ==13)
     	  {
         	  CalculateTotal(cost,count);
     	  } 	 
     	 
     	}

      function CalculateTotal(evt, cost,digitCount)
      {
    	  /*var theEvent = evt || window.event;    
         	

       	  var key = theEvent.keyCode || theEvent.which; 			
     	  key = String.fromCharCode( key );

    	  alert(key);
    	  alert(document.getElementById('dgtChangePrice' + digitCount).value)
    	 */
      }

      function CalculateTotal(cost,digitCount )
      {
    	 var chnagePriceTxtCntrl = 'dgtChangePrice' + digitCount;
    	 var finalPriceTxtCntrl = 'dgtFinalPrice' + digitCount;
    	 var TotalDigitsOnForm = 0;

    	 var chkPercntControlName = 'chkChangeByPercnt' +digitCount;     	
    	 var isChecked = document.getElementById(chkPercntControlName).checked;

    	 
    	 var ManualChangedPrice = document.getElementById(chnagePriceTxtCntrl).value;
    	 
    	
    	 if(isChecked && ManualChangedPrice>=0)
    	 {   		
    		 var finalPriceByPercentage = parseFloat(cost) + ((parseFloat(ManualChangedPrice)/100) * parseFloat(cost)) ;
    		 document.getElementById(finalPriceTxtCntrl).value = Math.round(parseFloat(finalPriceByPercentage));
    		
    	 }
    	 else if(ManualChangedPrice>=0)
    	 {   		
    		 document.getElementById(finalPriceTxtCntrl).value = Math.round(ManualChangedPrice)
    	 }
    	 
    		
    	
    	CalculateGrantTotal();
    	 
      }
      
      function CalculateGrantTotal()
      {
    	  
    	  var TotalDigitsOnForm = 0;
    	  TotalDigitsOnForm = document.getElementById('numberOfDigits').value ;
    
    	  
    	  var TotalPrice = 0;
    	  var GrantTotal = 0;
    	  var Quantities = document.getElementById('txtQuantities').value;
    	 
    	  for (var i = 1; i <= TotalDigitsOnForm; i++) 
    	  {
    		  if(document.getElementById('dgtFinalPrice'+i) != null)
    		  {
    			  if(document.getElementById('dgtFinalPrice'+i).value != "")
    				    TotalPrice += parseFloat(document.getElementById('dgtFinalPrice'+i).value)
    		  }
    		  
    	  }
    	  
    	  
    	  
    	  var grantTotal = parseFloat (parseFloat(Quantities) * parseFloat(TotalPrice));
    	  
    	  document.getElementById('txtTotal').value = Math.round(TotalPrice) ; 
    	 // document.getElementById('txtQuantities').value = Quantities;
    	  document.getElementById('txtGrantTotal').value =Math.round(grantTotal);
    	   
    	  
    	  CheckGenerateQuoteButtonStatus(TotalDigitsOnForm);
    	  
    	 
      }
      
      function  CheckGenerateQuoteButtonStatus(TotalDigitsOnForm)
      {
    	  if(CheckIfPricingIsDone(TotalDigitsOnForm))
    	  {
    		  document.getElementById('preview').disabled = false;
    	    		  
    	  }
    	  else
    	  {
    		  document.getElementById('preview').disabled = "disabled";
    		 
    	  }
      }
      
      
      function  CheckIfPricingIsDone(TotalDigitsOnForm)
      {
    	  for (var i = 1; i <= TotalDigitsOnForm; i++) 
    	  {
    		  if(document.getElementById('dgtFinalPrice'+i) != null)
    		  {
    			  if(document.getElementById('dgtFinalPrice'+i).value == "")
    				   return false;
    		  }
    	  }
    	  return true;
      }

      function DisableDigitsText(){     	
		    for (var i = 1; i <= 15; i++) {
		    	   if(document.getElementById('dgtFinalPrice'+i) != null)
			    	document.getElementById('dgtFinalPrice'+i).disabled = "disabled";          
        }        	
     }

      function ApplyWaterMarks(){
    	  for (var i = 1; i <= 15; i++) {
        	  var controlName = 'dgtChangePrice'+i;
	    	   if(document.getElementById(controlName) != null)
	    	   {

	    	$("#"+controlName+"").addClass("watermarkOn").val("Enter price");
	    	
	    	   $("#"+controlName+"").focus(function() {


	    	        $(this).filter(function() {

	    	            // We only want this to apply if there's not 
	    	            // something actually entered
	    	            return $(this).val() == "" || $(this).val() == "Enter price"

	    	        }).removeClass("watermarkOn").val("");

 		      });


	    	   $("#"+controlName+"").blur(function() {

    			   $(this).filter(function() {

    		            // We only want this to apply if there's not
    		            // something actually entered
    		            return $(this).val() == ""

    		        }).addClass("watermarkOn").val("Enter price");
    		      });
    		      }
	    	   }
     
   }

      

     
     
     function EnableDigitsText(){
     
    	 var no = document.getElementById('numberOfDigits').value;
		    for (var i = 1; i <= no; i++) {
		    	 if(document.getElementById('dgtFinalPrice'+i) != null)
		    		 	document.getElementById('dgtFinalPrice'+i).disabled = false;
          
		    		
       }        
		    
		    document.getElementById('txtTotal').disabled = false;
    		document.getElementById('txtGrantTotal').disabled = false;
    		document.getElementById('txtQuantities').disabled = false;
    	 
    	 
    	 
    }
     
     
     
     