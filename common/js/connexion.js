
function valider(form){
  console.log("debut chekform");
  var login =  form.login.value;
  var pwd  = form.pwd.value;
  console.log("login : ",login);
  console.log("password : ", pwd);

  return true;
    

}


function verfiLogin(champ){

if(champ.value.length<2 || champ.value.length > 25){
    console.console.log("login ko");
      return false;
}
else {
    console.console.log("login ok");
    return true
}
}

function verfiPassword(champ){

s
}
