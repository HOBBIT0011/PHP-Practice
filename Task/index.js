function validateForm() {
    var returnval = true;
    var phone = document.forms["myForm"]["phone"].value;
    if (!/^[0-9]{1,12}$/.test(phone)) {
      seterror("phone", "");
      returnval = false;
    } else {
      seterror("phone", "");
    }}
  

  function validateForm() {
    var returnval = true;
  
    var phone = document.forms["myForm"]["phone"].value;
    if (!/^[0-9]{1,12}$/.test(phone)) {
      seterror("phone", "");
      returnval = false;
    } else {
      seterror("phone", "");
    }
  }