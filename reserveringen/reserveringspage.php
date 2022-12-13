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

   
<div>  
   <div id="wrapper">
      <form action="./get.php" method="post">
        <p>1. Kies je behandeling</p>
        <h3>Behandeling</h3>
        <input type="radio" id="puntjesbijwerken" name="keuzebehandeling" value="10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="puntjesbijwerken">
          <div>Puntjes knippen</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="korthaar" name="keuzebehandeling" value="15" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="korthaar">
          <div>Kort haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>15 eur</div>
          </div>
        </label><br>
        <input type="radio" id="middenlanghaar" name="keuzebehandeling" value="20" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="middenlanghaar">
          <div>Haar tot schouders</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>20 eur</div>
          </div>
        </label><br>
        <input type="radio" id="langhaar" name="keuzebehandeling" value="25" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="langhaar">
          <div>Lang haar</div>
          <div class="infoforbutton">
            <div>30 min</div>
            <div>25 eur</div>
          </div>
        </label><br>  

     
        <h3>Overig</h3>
        <input type="radio" id="baard" name="keuzebehandelingoverig" value="10" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="baard">
          <div>Baard trimmen</div>
          <div class="infoforbutton">
            <div>10? min</div>
            <div>10 eur</div>
          </div>
        </label><br>
        <input type="radio" id="geen" name="keuzebehandelingoverig" value="0" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="geen">
          <div>Geen</div>
          <div class="infoforbutton">
          </div>
        </label><br>

      
        <h3>Finish</h3>
        <input type="radio" id="wassen" name="keuzefinish" value="10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="wassen">
          <div>Wassen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>


        <input type="radio" id="fohn" name="keuzefinish" value="10" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="fohn">
          <div>Föhnen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>10 eur</div>
          </div>
        </label><br>



        <input type="radio" id="wassenfohn" name="keuzefinish" value="20" onclick="myFunction(); calc();">
        <label class="labelforbutton" for="wassenfohn">
          <div>Wassen en föhnen</div>
          <div class="infoforbutton">
            <div>15 min</div>
            <div>20 eur</div>
          </div>
        </label><br>

        <input type="radio" id="geen2" name="keuzefinish" value="0" required onclick="myFunction(); calc();">
        <label class="labelforbutton" for="geen2">
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
          <input type="button" id="buttondatum" value="vind beschikbare tijden"><br><br>

        <h3>Beschikbare tijden voor geselecteerde datum</h3>
        <input type="radio" id="tijd1" name="keuzetijd" value="tijd1" required onclick="myFunction()">
        <label class="labelforbuttonshort" for="tijd1">Van 8:00-8:30</label><br>
        <input type="radio" id="tijd2" name="keuzetijd" value="tijd2"  onclick="myFunction()">
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
          <input type="radio" id="viamail" name="keuzereminder" value="viamail" onclick="myFunction()">
          <label class="labelforbuttonshort" for="viamail">Ja, via mail</label><br>
          <input type="radio" id="viasms" name="keuzereminder" value="viasms" onclick="myFunction()">
          <label class="labelforbuttonshort" for="viasms">Ja, via SMS</label><br>
        <input type="radio" id="nee" name="keuzereminder" value="nee" onclick="myFunction()">
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
  <p id="pb" style="display: none;">Puntjes knippen</p>
  <p id="kh" style="display: none;">Kort haar</p>
  <p id="hs" style="display: none;">Haar tot schouders</p>
  <p id="lh" style="display: none;">Lang haar</p>
  <h3>Overig</h3>
  <p id="bt" style="display: none;">Baard trimmen</p>
  <p id="ge" style="display: none;">Geen</p>
  <h3>Finish</h3>
  <p id="wa" style="display: none;">Wassen</p>
  <p id="fo" style="display: none;">Föhnen</p>
  <p id="wf" style="display: none;">Wassen en föhnen</p>
  <p id="ge2" style="display: none;">Geen</p>
  <h3>Reminder</h3>
  <p id="ma" style="display: none;">Via mail</p>
  <p id="sm" style="display: none;">Via SMS</p>
  <p id="ne" style="display: none;">Nee</p>
  <h3>Totaalprijs</h3>
  <p id="total"></p>
</div>


<div class="secondbox">

  <p><i class="fa-solid fa-calendar"></i></p>
  <p id="output"></p>
  <p id="ti1" style="display: none;">8:00-8:30</p>
  <p id="ti2" style="display: none;">8:30-9:00</p>

</div>
</div>
  
  



  <?php
  echo'
  <script>


  document.getElementById("afspraakdatum").onchange=function(){

    updateValue();
  }

  function updateValue(){

    var input = document.getElementById("afspraakdatum").value;
    document.getElementById("output").innerHTML= input;

  }

  



   function myFunction() {
  
  if (document.getElementById("puntjesbijwerken").checked == true){
    document.getElementById("pb").style.display = "block";
  } else {
    document.getElementById("pb").style.display = "none";
  }

  if (document.getElementById("korthaar").checked == true){
    document.getElementById("kh").style.display = "block";
  } else {
    document.getElementById("kh").style.display = "none";
  }

  if (document.getElementById("middenlanghaar").checked == true){
    document.getElementById("hs").style.display = "block";
  } else {
    document.getElementById("hs").style.display = "none";
  }

  if (document.getElementById("langhaar").checked == true){
    document.getElementById("lh").style.display = "block";
  } else {
    document.getElementById("lh").style.display = "none";
  }

  if (document.getElementById("baard").checked == true){
    document.getElementById("bt").style.display = "block";
  } else {
    document.getElementById("bt").style.display = "none";
  }

  if (document.getElementById("geen").checked == true){
    document.getElementById("ge").style.display = "block";
  } else {
    document.getElementById("ge").style.display = "none";
  }

  if (document.getElementById("wassen").checked == true){
    document.getElementById("wa").style.display = "block";
  } else {
    document.getElementById("wa").style.display = "none";
  }

  if (document.getElementById("fohn").checked == true){
    document.getElementById("fo").style.display = "block";
  } else {
    document.getElementById("fo").style.display = "none";
  }

  if (document.getElementById("wassenfohn").checked == true){
    document.getElementById("wf").style.display = "block";
  } else {
    document.getElementById("wf").style.display = "none";
  }

  if (document.getElementById("geen2").checked == true){
    document.getElementById("ge2").style.display = "block";
  } else {
    document.getElementById("ge2").style.display = "none";
  }


  // tijdsloten

  if (document.getElementById("tijd1").checked == true){
    document.getElementById("ti1").style.display = "block";
  } else {
    document.getElementById("ti1").style.display = "none";
  }

  if (document.getElementById("tijd2").checked == true){
    document.getElementById("ti2").style.display = "block";
  } else {
    document.getElementById("ti2").style.display = "none";
  }


  // reminder afspraak

  if (document.getElementById("viamail").checked == true){
    document.getElementById("ma").style.display = "block";
  } else {
    document.getElementById("ma").style.display = "none";
  }

  if (document.getElementById("viasms").checked == true){
    document.getElementById("sm").style.display = "block";
  } else {
    document.getElementById("sm").style.display = "none";
  }

  if (document.getElementById("nee").checked == true){
    document.getElementById("ne").style.display = "block";
  } else {
    document.getElementById("ne").style.display = "none";
  }

}


  // calculate totaal
  function calc(){
    let totaal=0;

    var rates = document.getElementsByTagName("input");
    var rate_value=0;
    for(var i = 0; i < rates.length; i++){
        if(rates[i].checked){
            rate_value = rates[i].value;
            console.log(rate_value);
            
             totaal+=parseInt(rate_value);

        }
        
    }
    

    document.getElementById("total").innerHTML = totaal;
  }

</script>';
?>

</div>   


</div>

</body>
</html>