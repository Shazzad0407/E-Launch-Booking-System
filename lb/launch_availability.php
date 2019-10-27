

<script type="text/javascript">
    
    var dateToday = new Date();
    var dates = $("#from, #to").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        minDate: dateToday,
        onSelect: function(selectedDate) {
            var option = this.id == "j_date" ? "minDate" : "maxDate",
                instance = $(this).data("datepicker"),
                date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
    
    </script>

<?php
	    include("dbconnection.php");
        
		$start=$_SESSION['start'];
		$destination=$_SESSION['destination'];
        $j_date=$_SESSION['j_date'];
       // $_SESSION['j_date']= $j_date;
		//$p_username = $_SESSION['p_name']; 
?>
