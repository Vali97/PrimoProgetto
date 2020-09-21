

<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="ChangeForm.js" language="Javascript" type="text/javascript"></script>
</head>
<body>

<?php if (isset($_POST['form_submitted'])): ?>

        <?php if (!isset($_POST['agree'])): ?>

            <p>You have not accepted our terms of service</p>

            <?php else: ?>

                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>

                <p>You have been registered as
                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                </p>
                

            <?php endif; ?>
            <?php else: ?>
			
    <h2>Registration Form</h2>

    <form action="" id="form" method=""> 
	
	
        <label for="cars">Attivita:</label>
         <select name="cars" id="attivita">
                 <option value="sel"  >--Seleziona--</option>
                 <option value="sel1" >Azienda/Ente</option>
                 <option value="sel2" >Libero Professionista</option>
                 <option value="sel3" >Privato</option>
          </select> <br> 
		  </form>
		  
		  <form name="sel3" id="form1">
		  
		  <label for="cars">Attivita:</label>
         <select name="cars" id="attivita">
                 <option value="sel"  >--Seleziona--</option>
                 <option value="sel1" >Azienda/Ente</option>
                 <option value="sel2" >Libero Professionista</option>
                 <option value="sel3" >Privato</option>
          </select> <br> 
	
	    Nome:* <input type="text" name="nome"> <br>
		Cognome:*  <input type="text" name="cognome"> <br>
		Indirizzo:* <input type="text" name="indirizzo"> <br>
		Cap:* <input type="text" name="cap"> 
		Citta:* <input type="text" name="citta">
		Provincia:* <input type="text" name="provincia"> <br>
		Codice Fiscale:* <input type="text" name="cdfis"> <br>
		Telefono:* <input type="text" name="tel"> <br>
		Email:* <input type="email" name="email"> <br>
		Legge di Privacy:* <input type="text" name="provacy"> <br>
	              <input type="submit" value="Registra">				  
         </form>
		  <label for="cars">Attivita:</label>
         <select name="cars" id="attivita">
                 <option value="sel"  >--Seleziona--</option>
                 <option value="sel1" >Azienda/Ente</option>
                 <option value="sel2" >Libero Professionista</option>
                 <option value="sel3" >Privato</option>
          </select> <br> 
		 <form name="sel1" id="form2">
		 Ragione Sociale:* <input type="text" name="ragione"> <br>
		 Nome:* <input type="text" name="nome"> <br>
		Cognome:*  <input type="text" name="cognome"> <br>
		Indirizzo:* <input type="text" name="indirizzo"> <br>
		Cap:* <input type="text" name="cap"> 
		Citta:* <input type="text" name="citta">
		Provincia:* <input type="text" name="provincia"> <br>
		Partita Iva:* <input type="text" name="iva"> <br>
		Telefono:* <input type="text" name="tel"> <br>
		Email:* <input type="email" name="email"> <br>
		Legge di Privacy:* <input type="text" name="provacy"> <br>
	              <input type="submit" value="Registra">				  
         </form>
		
</body>
</html>