(function () {
  var form = document.getElementById("regForm");
  form.addEventListener('submit', checkForm);
  function checkForm(event) {
    event.preventDefault();
    console.log(event);
    myform = event.target.value;

    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    var pno = document.getElementById("pno").value;
    var mno = document.getElementById("mno").value;

    if (pno.toString().length != 6) {
      alert("Invalid pno");
      return false;
    }
    if (mno.toString().length != 10) {
      alert("Invalid contact number");
      return false;
    }

    if (password.length < 8) {
      alert("Password should be greater than or equal to 8");
      return false;
    } else if (password.length > 20) {
      alert("Password should be less than 12");
      return false;
    } else if (password.search(/[0-9]/) == -1) {
      alert("Please should have a number");
      return false;
    } else if (password.search(/[a-z]/) == -1) {
      alert("Password should have a lower case letter");
      return false;
    } else if (password.search(/[A-Z]/) == -1) {
      alert("Password should have a upper case letter");
      return false;
    } else if (password.search(/[!\@\#\$\%\^\&\(\)\_\+\.\,\;\:]/) == -1) {
      alert("Password should have a special character except ~ ` * ");
      return false;
    } else if (password != confirmpassword) {
      alert("Please check password and confirmpassword");
      return false;
    } else {
     event.target.submit();
    }
  }
})();
