$(document).ready(function() {
	$('#registration_form').validate({
		rules: {
			fname: 'required',
		    lname: 'required',
		    donor_email: {
		    	required: true,
      	    	email: true,
			},
		    donor_password: {
	 	        required: true,
		        minlength: 6,
			},
			gender: 'required',
            donor_phoneNo: {
                required: true,
		        length: 10,
            },
			date_of_birth:'required',
		},
		messages: {
		    fname: 'This field is required!',
		    lname: 'This field is required!',
		    donor_email: 'Enter a valid email!',
		    donor_password: {
		    	minlength: 'Password must be at least 6 characters long!'
		    },
		    gender: 'Select atleast one!',
			donor_phoneNo: 'This field should have 10 numbers!',
			date_of_birth: 'This field is required!'
		}
	});
	$('#hospital_reg_form').validate({
		rules: {
			hospital_name: 'required',
		    hospital_email: {
		    	required: true,
      	    	email: true,
			},
		    hospital_password: {
	 	        required: true,
		        minlength: 6,
			},
            hospital_phoneNo: {
                required: true,
		        length: 10,
            },
		},
		messages: {
		    hospital_name: 'This field is required!',
		    hospital_email: 'Enter a valid email!',
		    hospital_password: {
		    	minlength: 'Password must be at least 6 characters long!'
		    },
			hospital_phoneNo: 'This field should have 10 numbers!',
		}
	});

	$('#login_form').validate({
		rules: {
		    email: {
		    	required: true,
	     	    email: true,
			},
			password: {
			    required: true,
			    minlength: 6,
			}
		},

		messages: {
			email: 'Enter a valid email!',
			password: {
		    	minlength: 'Password must be at least 6 characters long!'
			}
		}
	});
});