<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../global.css">
  <link rel="stylesheet" href="../reserveringen/reserveringspage.css">
  <link rel="stylesheet" href="../header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Covered+By+Your+Grace&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <script src="../header.js"></script>  
  <title>Afspraak maken</title>
</head>
<body>

  <div class='headerback'>
      
    <div id="wrapper">
  

        <div class="topnav" id="mytopnav">
          <ul>
            <p style="color: var(--Paars)">Marjolein de Kapper</p>
            <li><a href="../home/home.html">Home</a></li>
            <li><a href="#">Modellen</a></li>
            <li><a href="../contact/contact.html">Contact</a></li>
            <li><a href="../reserveringen/reserveringspage.php"><button>Afspraak maken</button></a></li>
            <a><i onclick="Dropdown()" class="fa-solid fa-bars fa-2x"></i></a>
          </ul>
        </div>

    </div>
</div>

<div class="dropdown" id="mydropdown">
          <ul>
     
            <a href="../home/home.html"><li>Home</li></a>
            <a href="#"><li>Modellen</li></a>
           <a href="../contact/contact.html"> <li>Contact</li></a>
            <a href="../reserveringen/reserveringspage.php"><li>Afspraak maken</li></a>
         
          </ul>
        </div>

 <div id="wrapper">
  <div class="reserveringspage">

   
<div>  
      <form action="../bevestiging/bevestigen.html" method="post">
        <p>1. Kies je behandeling</p>
        <h3>Behandeling</h3>
        <input type="radio" id="puntjes knippen" name="keuzebehandeling" value="Puntjes knippen,30,10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="puntjes knippen">
          <div>Puntjes knippen</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="kort haar" name="keuzebehandeling" value="Kort haar,30,15" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="kort haar">
          <div>Kort haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>15 eur</div>
          </div>
        </label><br>
        <input type="radio" id="haar tot schouders" name="keuzebehandeling" value="Haar tot schouders,30,20" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="haar tot schouders">
          <div>Haar tot schouders</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>20 eur</div>
          </div>
        </label><br>
        <input type="radio" id="lang haar" name="keuzebehandeling" value="Lang haar,30,25" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="lang haar">
          <div>Lang haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>25 eur</div>
          </div>
        </label><br>  

     
        <h3>Extra</h3>
        <input type="radio" id="baard trimmen" name="keuzebehandelingoverig" value="Baard trimmen,15,10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="baard trimmen">
          <div>Baard trimmen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="geen" name="keuzebehandelingoverig" value="Geen,0,0" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="geen">
          <div>Geen</div>
          <div class="infoforbutton">
          </div>
        </label><br>

      
        <h3>Verzorging en styling</h3>
        <input type="radio" id="wassen" name="keuzefinish" value="Wassen,15,10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="wassen">
          <div>Wassen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>


        <input type="radio" id="f??hnen" name="keuzefinish" value="F??hnen,15,10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="f??hnen">
          <div>F??hnen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>



        <input type="radio" id="wassen en f??hnen" name="keuzefinish" value="Wassen en f??hnen,30,20" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="wassen en f??hnen">
          <div>Wassen en f??hnen</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>20 eur</div>
          </div>
        </label><br>

        <input type="radio" id="geen " name="keuzefinish" value="Geen,0,0" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="geen ">
          <div>Geen</div>
          <div class="infoforbutton">
            <div></div>
            <div></div>
          </div>
        </label><br><br>
        

        <p>2. Kies een moment</p>
          <label for="afspraakdatum"><h3>Datum afspraak</h3></label>
          <input type="date" id="afspraakdatum" name="afspraakdatum"
          value=" <?php echo date('Y-m-d');?> "
          min="<?php echo date('Y-m-d');?>" max="2024-11-011" required/><br><br>
          <input type="button" id="buttondatum" value="Vind beschikbare tijden"><br><br>

        <h3>Beschikbare tijden voor geselecteerde datum</h3>
        <input type="radio" id="8:00-8:30" name="keuzetijd" value="8:00-8:30,0,0" required onclick="myFunction()">
        <label class="labelforbuttonshort" for="8:00-8:30">Van 8:00-8:30</label><br>
        <input type="radio" id="8:30-9:00" name="keuzetijd" value="8:30-9:00,0,0"  onclick="myFunction()">
        <label class="labelforbuttonshort" for="8:30-9:00">Van 8:30-9:00</label><br><br>

        <p>3. Vul je gegevens in</p>
        <h5>Naam</h5>
        <label for="fname"><i class="fa fa-user"></i></label>
        <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>

        <h5>Email</h5>
        <label for="email"><i class="fa fa-envelope"></i></label>
        <input type="text" id="email" name="email" placeholder="john@example.com" required>

        <h5>Telefoon nummer</h5>
        <label for="phone"> <i class="fa-solid fa-phone"></i></label>
        <input type="text" id="phone" name="address" placeholder="06 12345678" required>

        <h5>Wil je graag 24 uur van tevoren een reminder ontvangen van de afspraak?</h5>
          <input type="radio" id="via mail" name="keuzereminder" value="Via mail,0,0" onclick="myFunction()">
          <label class="labelforbuttonshort" for="via mail">Ja, via mail</label><br>
          <input type="radio" id="via sms" name="keuzereminder" value="Via SMS,0,0" onclick="myFunction()">
          <label class="labelforbuttonshort" for="via sms">Ja, via SMS</label><br>
        <input type="radio" id="nee" name="keuzereminder" value="Nee,0,0" onclick="myFunction()">
        <label class="labelforbuttonshort" for="nee">Nee, bedankt</label><br><br>

        <h5>Opmerkingen</h5>
        <textarea id="note" name="opmerkingen" placeholder="Kan ik mijn hond meenemen?" rows="4" cols="35"></textarea><br>

        <input type="submit" id="submit" value="Bevestigen"><br><br>

      </form>
</div>   

 

 </div>
 
 <div class="overview">
  <div class="firstbox">
 <p style="font-size: 30px">Mijn afspraak</p>
 <h3>Behandeling</h3>
  <p id="kb"></p>
  <h3>Overig</h3>
  <p id="ov"></p>
  <h3>Finish</h3>
  <p id="fi"></p>
  <h3>Reminder</h3>
  <p id="re"></p>
  <h3>Totaal</h3>
  <p id="total"></p>
</div>


<div class="secondbox">

  <p><i class="fa-solid fa-calendar"></i></p>
  <p id="output"></p>
  <p id="ti"></p>
 
</div>
</div>
  


</div>   


</div>

</body>

<script src="overview.js"></script>  

</html>