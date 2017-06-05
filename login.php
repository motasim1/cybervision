<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Staff Login &bull; CyberVision</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>"JavaScript"</script>
  </head>
  <body>
    <div class="header">
      <a href="index.php">Go back</a>
    </div>
    <h1>Staff Dashboard Login</h1>
    <script language="javascript">
    <!--//
    function pasuser(form) {
    if (form.id.value=="CyberVision") {
    if (form.pass.value=="Staff-Team") {
    location="dashboard.php"
    } else {
    alert("Invalid Password")
    }
  } else {  alert("Invalid Username")
    }
    }
    //-->
    </script>

    <center>
    <table bgcolor="white" cellpadding="12" border="1">
    <tr><td colspan="2"><center><h1><i><b>Login
    Area</b></i></h1></center></td></tr>
    <tr><td><h1><i><b>Username:</b></i></h1></td><td><form name="login"><input
    name="id" type="text"></td></tr>
    <tr><td><h1><i><b>Password:</b></i></h1></td><td><input name="pass"
    type="password"></td></tr>
    <tr><td><center><input type="button" value="Login"
    onClick="pasuser(this.form)"></center></td><td><center><br><input
    type="Reset"></form></td></tr></table></center>   </body>
</html>
