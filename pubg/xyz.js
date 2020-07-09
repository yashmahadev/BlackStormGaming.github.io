function msg() {
  var C = document.getElementById("Crew").value;
  var P1 = document.getElementById("P1").value;
  var P2 = document.getElementById("P2").value;
  var P3 = document.getElementById("P3").value;
  var P4 = document.getElementById("P4").value;
  var mail = document.getElementById("Email").value;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (C == "") {
    alert("Enter Valid Crew Name !");
    document.form1.Crew.focus();
    return false;
  }if (P1 == "") {
    alert("Enter Valid Player 1 Name !");
    document.form1.P1.focus();
    return false;
  }if (P2 == "") {
    alert("Enter Valid Player 2 Name !");
    document.form1.P2.focus();
    return false;
  }if (P3 == "") {
    alert("Enter Valid Player 3 Name !");
    document.form1.P3.focus();
    return false;
  }if (P4 == "") {
    alert("Enter Valid Player 4 Name !");
    document.form1.P4.focus();
    return false;
  }
  if (mail == "") {
    alert("Enter Valid Email !");
    document.form1.Email.focus();
    return false;
  }
  if (mail.indexOf("@") <= 0) {
    alert("Invalid Email !");
    document.form1.Email.focus();
    return false;
  }if ((mail.charAt(mail.length - 4) != ".") && (mail.charAt(mail.length - 3) != ".")){
    alert("Invalid Email !");
    document.form1.Email.focus();
    return false;
  }else {
    alert("Submit Is Completed :)");
    return true;
  }
}
