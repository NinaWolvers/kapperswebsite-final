<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../global.css">
  <link rel="stylesheet" href="reserveringspage.css">
  <link rel="stylesheet" href="../header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Covered+By+Your+Grace&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <title>Afspraak maken</title>
</head>
<body>

  <div class='headerback'>
      
    <div id="wrapper">
  
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Modellen</a></li>
        <li><a href="../contact/contact.html">Contact</a></li>
        <a href="../reserveringen/reserveringspage.php"><li><button>Afspraak maken</button></li></a>
        <i class="fa-solid fa-bars fa-2x"></i>
      </ul>

    </div>
</div>

  <div class="reserveringspage">

    <div id="wrapper">
<div>  
      <form action="/action_page.php">
        <p>1. Kies je behandeling</p>
        <h3>Dames</h3>
        <input type="radio" id="puntjesbijwerkendames" name="keuzebehandeling" value="puntjesbijwerkendames"
        checked="checked"required>
        <label class="labelforbutton" for="puntjesbijwerkendames">
          <div>Puntjes bijwerken</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="korthaardames" name="keuzebehandeling" value="korthaardames">
        <label class="labelforbutton" for="korthaardames">
          <div>Kort haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>15 eur</div>
          </div>
        </label><br>
        <input type="radio" id="middenlanghaardames" name="keuzebehandeling" value="middenlanghaardames">
        <label class="labelforbutton" for="middenlanghaardames">
          <div>Haar tot schouders</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>20 eur</div>
          </div>
        </label><br>
        <input type="radio" id="langhaardames" name="keuzebehandeling" value="langhaardames">
        <label class="labelforbutton" for="langhaardames">
          <div>Lang haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>25 eur</div>
          </div>
        </label><br>  

        <h3>Heren</h3>
        <input type="radio" id="korthaarheren" name="keuzebehandeling" value="korthaarheren">
        <label class="labelforbutton" for="korthaarheren">
          <div>Kort haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="langhaarheren" name="keuzebehandeling" value="langhaarheren">
        <label class="labelforbutton" for="langhaarheren">
          <div>Lang haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>".." eur</div>
          </div>
        </label><br>
        <input type="radio" id="korthaartrimheren" name="keuzebehandeling" value="korthaartrimheren">
        <label class="labelforbutton" for="korthaartrimheren">
          <div>Kort haar & baard</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>20 eur</div>
          </div>
        </label><br>
        <input type="radio" id="langhaartrimheren" name="keuzebehandeling" value="langhaartrimheren">
        <label class="labelforbutton" for="langhaartrimheren">
          <div>Lang haar & baard</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>".." eur</div>
          </div>
        </label><br>  
      
        <h3>Finish</h3>
        <input type="radio" id="wassen" name="keuzefinish" value="wassen" required>
        <label class="labelforbutton" for="wassen">
          <div>Wassen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="wassenfohn" name="keuzefinish" value="wassenfohn">
        <label class="labelforbutton" for="wassenfohn">
          <div>Wassen en föhnen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>20 eur</div>
          </div>
        </label><br><br>
        

        <p>2. Kies een moment</p>
          <label for="afspraakdatum"><h3>Datum afspraak</h3></label>
          <input type="date" id="afspraakdatum" name="afspraakdatum"
          value=" <?php echo date('Y-m-d');?> "
          min="<?php echo date('Y-m-d');?>" max="2024-11-011" required/><br><br>

        <h3>Beschikbare tijden voor geselecteerde datum</h3>
        <input type="radio" id="tijd1" name="keuzetijd" value="tijd1" required>
        <label class="labelforbuttonshort" for="tijd1">Van 8:00-8:30</label><br>
        <input type="radio" id="tijd2" name="keuzetijd" value="tijd2">
        <label class="labelforbuttonshort" for="tijd2">Van 8:30-9:00</label><br><br>

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
          <input type="radio" id="viamail" name="keuzereminder" value="viamail">
          <label class="labelforbuttonshort" for="viamail">Ja, via mail</label><br>
          <input type="radio" id="viasms" name="keuzereminder" value="viasms">
          <label class="labelforbuttonshort" for="viasms">Ja, via SMS</label><br>
        <input type="radio" id="nee" name="keuzereminder" value="nee">
        <label class="labelforbuttonshort" for="nee">Nee, bedankt</label><br><br>

        <h5>Opmerkingen</h5>
        <textarea id="note" name="opmerkingen" placeholder="Kan ik mijn hond meenemen?" rows="4" cols="35"></textarea><br>

        <input type="submit" id="submit" value="Submit"><br><br>

      </form>
</div>    
<div>
  
</div>      

    </div>
  </div>  

</body>
</html>