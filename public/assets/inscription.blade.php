<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8"/>
	 <title>SENFORAGE</title>
</head>
<body>
    
	<form action="http://192.168.86.130/laravelApp/public/home" method="POST">
	  <fieldset>
       <legend>Inscription</legend>
	  <label>Nom:</label>
       <input type="text" name="nom"/> <br> <br>
   	<label>Prenom:</label>
   	   <input type="text" name="prenom"/> <br> <br>
    <label>Mot de Passe:</label>
   	    <input type="password" name="motpasse" maxlength="8" size="20" /> <br> <br>
    <label>Address:</label>
        <input type="text" name="address"/> <br> <br>
    <label>Sexe:</label> 
        <input type="radio" name="sexe" value="Homme" checked /> Homme
        <input type="radio" name="sexe" value="Femme" checked /> Femme<br>
	  <label>Situation matrimonial:</label> 
        <input type="radio" name="sitmat" value="M" checked /> Marié(e)
        <input type="radio" name="sitmat" value="C" checked /> Celibataire <br> <br>
    <label>Nationalité:</label> 
         <select name="Nationalité">
           <option value="senegal">Senegalais</option>
           <option value="mali">Malien</option>
           <option value="Cote d'Ivoire">Ivoirien</option>
           <option value="Maroc">Marocain</option>
         </select><br><br>
         <textarea name="commentaire" cols="50" rows="5" onclick="this.value='' ">
            Inserer votre commentaire
          </textarea>
      </fieldset>
      <fieldset>
     <input class=" btn btn-primary" type="submit" value="Valider" /> 
     <input class=" btn btn-danger" type="reset" value="Annuler" /> <br>
      </fieldset>
      
      </body>
       </html>
       

