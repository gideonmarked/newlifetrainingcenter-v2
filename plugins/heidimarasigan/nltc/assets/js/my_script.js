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
  });