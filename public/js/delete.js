"use strict";
$(document).ready(function() {	
	$('#delete').click(function() {
    var onConfirm = confirm('Are you sure you want to delete this? This action cannot be undone.');
    
	    if(onConfirm) {
	        $('#formDelete').submit();
	    }
	});
});