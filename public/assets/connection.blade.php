<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8"/>
	 <title>SENFORAGE</title>
</head>
<body>
    
	<form action="http://192.168.86.130/laravelApp/public/home" method="POST">
	  <fieldset>
       <legend>Connection</legend>
       <label>Login:</label>
       <input type="login" name="Login"/> <br> <br>

       <label>Password:</label>
       <input type="password" name="Password" maxlength="8" size="20" /> <br> <br>
       <input class=" btn btn-primary" type="submit" value="Valider" /> 
       <input class=" btn btn-danger" type="reset" value="Annuler" /> 
      </form>
    </body>
