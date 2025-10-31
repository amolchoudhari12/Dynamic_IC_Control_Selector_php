    
        function IsAllFieldsAreValidated() {
        	
        	var txtQuantities = $("#txtQuantities").val();
        	//var txtQuantities = document.getElementById('txtQuantities').value.trim();
        	
            var txtName = $("#txtName").val();
            var txtEmail = $("#txtEmail").val();   
            var txtPhone = $("#txtPhone").val();   
            var txtFax = $("#txtFax").val();   
            var txtCompany = $("#txtCompany").val();  
            var txtAddress = $("#txtAddress").val();   
            var txtCountry = $("#txtCountry").val();   
            var txtState = $("#txtState").val();    
            var txtCity = $("#txtCity").val();  
            var txtZipCode = $("#txtZipCode").val();             
            var txtEmailCC =  $("#txtemailcc").val(); 

         	if (txtQuantities =='' || txtName == '' || txtEmail =='' || txtPhone=='' ||  txtCompany =='' ||  txtAddress=='' || txtCountry =='' || txtState=='' || txtCity =='' || txtZipCode =='' ) {
         			ValidationError("Please fill all the fields.");
                    return false;
                }
         	
         
         	if(!IsNumeric(txtQuantities) || txtQuantities==0 )
         		{
         		
         			ValidationError("Please enter non-zero numeric value for quantities.");
         			return false;
         		}
           if(txtQuantities > 99999)
        	   {
        	    ValidationError("Please enter quantities less than 99999.");
    			return false;
        	   }
         	
       
           if(txtEmailCC.split(';').length > 5 || txtEmailCC.split(',').length > 1)
    	   {
    	   ValidationError("Multiple email should be separated by ;. And you can add max 5 email IDs.");
  			return false;
    	   }
           
           var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
           
           
           if( txtEmailCC !='')
           {
		           if(reg.test(txtEmailCC) == false && !(txtEmailCC.split(';').length >= 2 )   ) {
		        	   ValidationError("Please enter valid CC address.");
		   			return false;
		            
		           }
        	}
      
           if(reg.test(txtEmail) == false) {
        	   ValidationError("Please enter valid Email address.");
   			return false;
            
           }
         	
           
         
            
        	 EnableDigitsText();
        	// ClearFields();

        }

        function ClearFields(){
        	 

                  for (var i = 0; i < document.forms[0].elements.length; i++) {
                      element = document.forms[0].elements[i];

                      if (element.type == "text") {
                          element.value = '';
                      }

                      if (element.type == "radio") {
                          element.checked = false;
                      }
                  }


        }
        
        
        function IsNumeric(sText)
        {
           var ValidChars = "0123456789";
           var IsNumber=true;
           var Char;

         
           for (i = 0; i < sText.length && IsNumber == true; i++) 
              { 
              Char = sText.charAt(i); 
              if (ValidChars.indexOf(Char) == -1) 
                 {
                 IsNumber = false;
                 }
              }
           return IsNumber;
           
           }


        function ValidationError(msg) {

            document.getElementById("error_message").innerHTML = msg;


    		$( "#dialog-message" ).dialog({
    			 modal: true,  
                 resizable: false,
                 height: 200,
    			buttons: {
    				Ok: function() {
    					$( this ).dialog( "close" );
    				}
    			}
    		});
    		
        }
	