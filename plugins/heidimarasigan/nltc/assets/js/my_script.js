  $( document ).ready(function() {

    $(document).on('render',function (){
        $('[data-control="custom_picker"]').datepicker();

        $('#date_of_birth').datepicker({
            maxDate: "-14y",
            min: "-90y",
            default: "-14y"
        });      

        $('#scheduled_date .datepicker').datepicker({
            beforeShowDay: function(date) {
                var day = date.getDay();

                if (day != 4 && day != 3) {
                    return [false]; 
                } else{
                     return [true];
                     //changes
                }
            }
        }); 


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

  });	