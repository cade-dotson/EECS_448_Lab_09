function formChecker(){
  var username = document.getElementById("username");
  var password = document.getElementById("password");
  var doot1 = document.getElementById("doot1");
  var doot1 = document.getElementById("doot2");
  var doot1 = document.getElementById("doot3");
  //alert("script running");
  //alert(username.value);
  //alert(password.value);
   if(doot1.value === ''){
     doot1.value = 0;
   }
   if(doot2.value === ''){
     doot2.value = 0;
   }
   if(doot3.value === ''){
     doot3.value = 0;
   }
  //alert(doot1.value);
  //alert(doot2.value);
  //alert(doot3.value);
  if (username.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
  }else{
    alert("Error: Not a valid email address!");
    return false;
  }
  if (password.value === ''){
    alert("Error: Password field cannot be emtpy!");
    return false;
  }
  if(document.getElementById('free').checked) {
  }else if(document.getElementById('three').checked) {
  }else if(document.getElementById('overnight').checked) {
  }else{
    alert("Error: Please select shipping option!")
    return false;
  }
return true;
}
