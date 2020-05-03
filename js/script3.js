(function () {
    var form = document.getElementById("regForm2");
    form.addEventListener('submit', checkForm);
    function checkForm(event) {
      event.preventDefault();
      console.log(event);
      myform = event.target.value;
      var mno = document.getElementById("cmno").value;

if (mno.toString().length != 10) {
  alert("Invalid contact number");
  return false;
}
else {
    event.target.submit();
   }
 }
})();
