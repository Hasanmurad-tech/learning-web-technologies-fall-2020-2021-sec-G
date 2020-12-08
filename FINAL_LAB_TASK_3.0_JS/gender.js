function validation(){
	let user = document.getElementById('gender').value

	if(user ==""){
		document.getElementById('gendertype').innerHTML="At least one of them has to be selected";
		return false;
    }
}