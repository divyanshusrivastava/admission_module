// validation script
function validateForm() {
	// check if name is not null
	var x;
	x = document.forms["main_form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	x = document.forms["main_form"]["phno"].value;
	if (x == "") {
		alert("Phone number must be filled out");
		return false;
	}
	x = document.forms["main_form"]["address"].value;
	if (x == "") {
		alert("Phone number must be filled out");
		return false;
	}
}