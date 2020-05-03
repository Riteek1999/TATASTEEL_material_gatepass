(function () {
    var form1 = document.getElementById("regForm1");
    form1.addEventListener('submit', checkForm);
    function checkForm(event) {
      event.preventDefault();
      console.log(event);
      myform = event.target.value;
  

      var dlocation = document.getElementById("dlocation").value;
      var slocation = document.getElementById("slocation").value;
  

  
     if (dlocation == slocation) {
        alert("Destination and Source cannot be same");
      } else {
       event.target.submit();
      }
    }
  })();
// function checkForm(myform){
//     var dlocation=myform.dlocation.value;
//     var slocation=myform.slocation.value;

// if(dlocation==slocation){
//     alert("Same destination and source");
//     return false;
// }
// else{
// return true;
// }
// }