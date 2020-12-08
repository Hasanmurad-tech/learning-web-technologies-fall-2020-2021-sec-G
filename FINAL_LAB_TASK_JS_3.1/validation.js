function validation(){
	let user = document.getElementById('name').value

	if(user ==""){
		document.getElementById('username').innerHTML="Please write your name";
		return false;
	}
	if(user.length <=2) {
		document.getElementById('username').innerHTML="Please write minimun 3 digit";
		return false;
	}
	if(!isNaN(user)){
		document.getElementById('username').innerHTML="Please don't write a number";
		return false;
	}
	
	if(user =='.' || user == '-'){
		document.getElementById('username').innerHTML="Please  write a-z or A-Z or dot(.) or dash(-)	";
	
		return false;

    }
    


    let user = document.getElementById('email').value

	if(user ==""){
		document.getElementById('useremail').innerHTML="Please write your mail";
		return false;
    }
    if(user.indexOf('@')<=0){
        document.getElementById('useremail').innerHTML="@ invalid";
		return false;

    }
    if((user.charAt(user.length-4)!='.') && (user.charAt(user.length-3)!='.')){

      document.getElementById('useremail').innerHTML=" . invalid";
		return false;
    }
}