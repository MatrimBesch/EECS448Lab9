function validateInput(){
  var username = document.getElementById("usernameText").value;
  var password = document.getElementById("passwordText").value;
  var product1Qty = document.getElementById("product1Qty").value;
  var product2Qty = document.getElementById("product2Qty").value;
  var product3Qty = document.getElementById("product3Qty").value;
  if(password.length ==0){
    alert("Password cannot be blank");
    return false;
  }
  if(product1Qty <0 || product2Qty < 0 || product3Qty < 0){
    alert("Quantities cannot be negative");
    return false;
  }
  if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)){//This is an email validation string I found online
  }
  else{
      alert("The username is not a valid email");
      return false;
  }
}
