
  $(function() {
    $( "#startDate" ).datepicker({
      defaultDate: "+1d",
      changeMonth: true,
      numberOfMonths: 1,
      dateFormat: 'yy-mm-dd',
      onClose: function( selectedDate ) {
        $( "#startDate" ).datepicker( "option", "minDate", selectedDate );
      }
    });
  });