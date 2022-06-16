var today = new Date();
var day = today.getDate();
var month = today.getMonth();
var year = today.getFullYear();

$(document).ready(function(){
    $('#date_of_birth').datepicker({
        changeMonth: true,
        changeYear: true,
        showOtherMonths:true,
        yearRange : '1950:c',
        maxDate: new Date(year,month,day)
    });
});
