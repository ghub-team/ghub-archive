const badWords = ["nigga", "cunt", "nigger", "nigtard", "kill yourself", "kys", "sex", "stupid", "nosense", "get rekt"];
const input = document.getElementById("field");

input.addEventListener("keyup", function(){
	let gdps = input.value;
  for(const badWord of badWords) 
  	gdps = newUserName.split(badWord).join("no");
  input.value = gdps;
});