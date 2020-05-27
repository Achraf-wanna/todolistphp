window.addEventListener("load", function () {
  var npassword = document.getElementById(npassword);
  var confpassword = document.getElementById(confpassword);
  confpassword.addEventListener(
    "focus",
    function (event) {
      var confpassword = event.target.value;
      var span = event.target.nextElementSibling;
      if (confpassword != npassword) {
        span.innerHtml = "&cross; se n'est pas le nouvaux mot de passe";
        span.style.color = "red";
      } else {
        span.innerHtml = "&check;";
        span.style.color = "green";
      }
    },
    false
  );
});
