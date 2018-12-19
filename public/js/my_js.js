function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


  function change_order_tyep(value)
  {
  
    if(value == 'Monthly')
    {
        document.getElementById("monthly_order_div").style.display = "block";
        document.getElementById("instantly_order_div").style.display = "none";
    }
    else
    {
       document.getElementById("monthly_order_div").style.display = "none";
       document.getElementById("instantly_order_div").style.display = "block";
    }

  }