(function () {
    var form = document.getElementById("evaForm");
    form.addEventListener('submit', checkForm);
    function checkForm(event) {
      event.preventDefault();
      console.log(event);
      myform = event.target.value;
  

      var enteredqty = document.getElementById("qty").value;
      var totalqty = JSON.parse(document.getElementById("enteredqty").innerHTML);
      var tqty= parseInt(totalqty);
      console.log(totalqty);
    // var totalqty=<?php $row['quantity'] ?>

     if (enteredqty > tqty) {
        alert("Please check the limit of quantity");
      } else {
       event.target.submit();
      }
    }
  })();