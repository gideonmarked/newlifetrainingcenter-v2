  $(function() {
    $( "#datepicker input.form-control" ).datepicker(); 
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
    $('#life_group').click(function() {
    
    	if ( this.value == ('leader').checked) {
    		$("#date_leader").show();
    	}
    	else if ( this.value == ('member').checked) {  
    		$("#date_member").show();
    	}
    	// else if ( this.value == ('leader').checked) && ( this.value == ('member').checked) {
    	// 	$("#date_leader").show();
    	// 	$("#date_member").show();
    	// }
    });
  });	