$(function() {
    $( "#CustomDatePicker-formInterviewDate-input-interview_date" ).datepicker(
		 {
		 	beforeShowDay: DisableSpecificDates
		 }
    	);

    function DisableSpecificDates(date) {
 
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
  });