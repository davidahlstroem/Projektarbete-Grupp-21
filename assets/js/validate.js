function test() {
	alert("test");
	return false;
}

function trimSpace(input) {
	return input.replace(/^\s+|\s+$/g, '');
}

function isEmpty(inputName, formIndex){
  //let input = trimSpace(document.getElementById(inputID)).value;
  let input = trimSpace(document.forms[formIndex][inputName].value);

  if (input === "") {
    alert("Enter " + inputID + "...");
    return true;
  } else {
    return false;
  }
}

function isEmail(inputName, formIndex) {
	let email = trimSpace(document.forms[formIndex][inputName].value);

	if (email === "") {
		alert("Enter email...");
		return false;
	}
	if (email.includes("@")) {
		if(email.substring(email.indexOf("@"),email.length).includes(".")) {
			return true;
		} else {
				alert("Enter email...");
				return false;
		}
	}
	return false;
}

function isPassword(inputName, formIndex){
	let pass = trimSpace(document.forms[formIndex][inputName].value);

	if(pass.length < 6) {
		alert("Enter password with correct length...");
		return false;
	} return true;
}

function confirmPass(){
	let pass = trimSpace(document.forms[0]["pwd"].value);
	let passConfirm = trimSpace(document.forms[0]["confirmPwd"].value);

	if(pass === "" || passConfirm === "") {
		alert("Enter password with correct lenght...");
		return false;
	} else if(pass !== passConfirm){
  		alert("confirm pass failed...");
  		return false;
	  } else return true;
}

function validLogin(){
	return isEmail("email",0) && isPassword("pwd", 0);
}

function validRegistration(){
	return !isEmpty("firstName", 0) && !isEmpty("lastName", 0) && isEmail("email", 0)
          && isPassword("pwd", 0) && confirmPass();
}

function validComment(){
	return isEmpty("cmt", 0);
}
