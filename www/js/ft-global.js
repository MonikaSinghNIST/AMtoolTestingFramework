// ft-global.js -- page for any JavaScript functions we need for the Federated Testing GUI

// formatyourthumb.php and testinterface.php both call get_common.py viewform 
// to generate and display a list of attached devices. We use the 
// get_common_get_view_check_selection() function to do some checks on a user's
// selection when they select a device based on the page they're on.
function get_common_get_view_check_selection(id){

	var page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
	
	if (page == "formatyourthumb.php"){ // do formatyourthumb.php checks
		// When the user selects the device they want to format as their log drive on 
		// formatyourthumb.php, we want to do a quick check to see if the device they
		// selected might be their OS drive or a drive w/ user data -- Warn the user!
		var contains_parts = false;
		var is_part = false;

		// check: is the device the user selected a partition itself?
		if (id.search(/sd[a-z][0-9]/) != -1){ 
			contains_parts = true;
			is_part = true;
		} else { // case: user selected a device (vs a partition)
			// Query to see if there are any html elements with ids representing
			// partitions, e.g., sda1. Check: does the device the user selected 
			// have any partitions?
			if (document.getElementById(id+"1")){
				contains_parts = true;
			}		
		}

		// the selected device is a partition itself or contains 1 or more partitions
		if (contains_parts){
			// construct our warning message...
			var msg = "CAUTION!!! The device you selected, "+id+", contains one or more partitions/file systems, e.g., ";
			if (is_part){
				msg += id;
			} else {
				msg += id+"1";
			}
			msg += ". These may contain an OS or data. Continuing with this selection will format this device AND ANY DATA ON THE DEVICE WILL BE LOST! Select 'OK' to keep your selection, 'Cancel' to cancel it.";

			// print our warning and give user chance to undo their selection
			var answer = confirm(msg);
			// if the user selected 'Cancel', undo their selection
			if (!answer) document.getElementById(id).checked = false;
		}		
	} else if (page == "testinterface.php"){  // do testinterface.php checks
		// We want to do some checks on the testinterface.php page. 1st, we want to warn
		// and make it so the user can't try to select/run the test on a partition 
		// (e.g., sda1) vs a device (e.g., sda). 2nd, if the user has selected a device 
		// (vs a partition), we want to check if that device has 1+ partitions on it. 
		// If it does, we want to allow, but warn them off testing w/ that device as 
		// it may contain an OS/user data.
		if (id.search(/sd[a-z][0-9]/) != -1){ // case: user selected a partition, e.g., sda1
			// Tell the user we can't run tests on partitions, only the devices themselves.
			alert("The test cannot be run on partitions, e.g., "+id+". Please make a different selection.");
			// Deselect their selection.
			document.getElementById(id).checked = false;
		} else { // case: user selected a device, e.g., sda
			// Query to see if there are any html elements with ids representing
			// partitions, e.g., sda1. Does the device the user selected have any
			// partitions?
			if (document.getElementById(id+"1")){
				// warn the user
				var answer = confirm("WARNING!!! The device you selected, "+id+", contains one or more partitions/file systems, e.g., "+id+"1. These may contain an OS or data. In case of the event that the blocker you are testing fails, please only run this test on a device that does not contain user data. Select 'OK' to keep your selection, 'Cancel' to cancel it.");
				// if the user selected 'Cancel', undo their selection
				if (!answer) document.getElementById(id).checked = false;			
			}
		}				
	}
}


/* Legacy */
function formatyourthumb_js_checks(id){ // id is the device the user selected

}

function testinterface_js_checks(id){ // id is the device the user selected

}

