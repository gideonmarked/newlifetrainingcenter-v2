  $( document ).ready(function() {
    

    $(document).on('focus',"#datepicker", function(){
        $(this).datepicker();
    });​

    $( "#scheduled_date .datepicker" ).datepicker(
         {
                   beforeShowDay: function(date){
                     var d = date.getDay();
                     var disableddays = [0,1,2,5,6];
                     
                     // First convert the date in to the mm-dd-yyyy format 
                     // Take note that we will increment the month count by 1 
                     
                      // We will now check if the date belongs to disableddates array 

                         if ( d == 0 || d == 1 || d == 2 || d == 5 || d == 6) {
                            return [false];
                         } else {
                            return [true];
                        }
                   }
         }
        ); 


    $('#church').change(function() { 
    	 if( this.value == 'non_new_life' )	{
    	 	$("#NonNewLifeChurches").show();
    	 	$("#NewLifeChurches").hide();
    	 	$("#church_hide").show();    	 	
    	 } else if( this.value == 'new_life' ) {

    	 	$("#NewLifeChurches").show();
    	 	$("#NonNewLifeChurches").hide();
    	 	$("#church_hide").show();
    	 	
    	 }
    });

    $('#life_group #lg_leader').click(function() {
    
    	if ( this.checked ) {
            $("#date_leader").show();
        }
        else {
            $("#date_leader").hide();
        }
    });

    $('#life_group #lg_member').click(function() {
    
        if ( this.checked ) {
            $("#date_member").show();
        }
        else {
            $("#date_member").hide();
        }
    });

  });	