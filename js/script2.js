(function () {
    var form = document.getElementById("regForm1");
    form.addEventListener('submit', checkForm);
    function checkForm(event) {
      event.preventDefault();
      console.log(event);
      myform = event.target.value;
      var pno = document.getElementById("epno").value;
      var mno = document.getElementById("emno").value;

if (pno.toString().length != 6) {
  alert("Invalid pno");
  return false;
}
if (mno.toString().length != 10) {
  alert("Invalid contact number");
  return false;
}
else {
    event.target.submit();
   }
 }
})();
