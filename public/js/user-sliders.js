$(document).ready(function() {

	$('#acid_pref').slider({
	    formatter: function(value) {
	        switch (value) {
	            case 0:
	                return 'Acidity: ' + value + ' (No Acid)';
	                break;
	            case 1:
	                return 'Acidity: ' + value;
	                break;
	            case 2:
	                return 'Acidity: ' + value;
	                break;
	            case 3:
	                return 'Acidity: ' + value;
	                break;
	            case 4:
	                return 'Acidity: ' + value;
	                break;
	            case 5:
	                return 'Acidity: ' + value + ' (Average)';
	                break;
	            case 6:
	                return 'Acidity: ' + value;
	                break;
	            case 7:
	                return 'Acidity: ' + value;
	                break;
	            case 8:
	                return 'Acidity: ' + value;
	                break;
	            case 9:
	                return 'Acidity: ' + value;
	                break;
	            case 10:
	                return 'Acidity: ' + value + ' (Most Acidic)';
	                break;
	        }
	        return 'Acidity: ' + value;
	    }
	});
	$('#roast_pref').slider({
        formatter: function(value) {
            switch (value) {
                case 0:
                    return 'Roast: ' + value + ' (Sour Peanuts)';
                    break;
                case 2:
                    return 'Roast: ' + value + ' (Hay)';
                    break;
                case 3:
                    return 'Roast: ' + value + ' (Grassy)';
                    break;
                case 5:
                    return 'Roast: ' + value + ' (Balanced)';
                    break;
                case 7:
                    return 'Roast: ' + value + ' (Toasty)';
                    break;
                case 8:
                    return 'Roast: ' + value + ' (Roasty)';
                    break;
                case 9:
                    return 'Roast: ' + value + ' (Burnt)';
                    break;
                case 10:
                    return 'Roast: ' + value + ' (Tire Fire)';
                    break;
                
            }
            return 'Roast: ' + value;
        }
    });

    $('#body_pref').slider({
        formatter: function(value) {
            switch (value) {
                case 0:
                    return 'Body: ' + value + ' (Watery)';
                    break;
                case 1:
                    return 'Body: ' + value + ' (Tea-like)';
                    break;
                case 2:
                    return 'Body: ' + value + ' (Silky)';
                    break;
                case 3:
                    return 'Body: ' + value + ' (Smooth)';
                    break;
                case 4:
                    return 'Body: ' + value + ' (2% Milk)';
                    break;
                case 5:
                    return 'Body: ' + value + ' (Balanced)';
                    break;
                case 6:
                    return 'Body: ' + value + ' (Syrupy)';
                    break;
                case 7:
                    return 'Body: ' + value + ' (Velvety)';
                    break;
                case 8:
                    return 'Body: ' + value + ' (Chewy)';
                    break;
                case 9:
                    return 'Body: ' + value + ' (Coating)';
                    break;
                case 10:
                    return 'Body: ' + value + ' (Viscous)';
                    break;
            }
            return 'Body: ' + value;
        }
    });
});