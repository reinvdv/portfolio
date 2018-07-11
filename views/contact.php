<div class="container">
  <div class="jumbotron" style="text-align:center;">
    <h1 class="fade-koptekst">Contact</h1>
    <p class="fade-koptekst">Reinier van der Velden | Media developer</p>
  </div>
</div>
<div class="wrapper">
  <div class="container">
  <div class="no-round-socials">
  <div class="row" style="text-align:center;">
  <div class="col-md-3">
    <div class="contact-round">
      <i class="far fa-envelope"></i>
    </div>
  <div class="algemeen-contact">
    <span class="name-contact">Email</span><br>
      <hr>
    <span class="info-contact"><a href="mailto:22810@ma-web.nl">info@reiniervdvelden.nl</a></span>
  </div>
  </div>
     <div class="col-md-3">
      <div class="contact-round">
        <i class="fas fa-mobile-alt"></i>
      </div>
      <div class="algemeen-contact">
        <span class="name-contact">Mobiel</span><br>
        <hr>
        <span class="info-contact">06-15163400</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="contact-round">
        <i class="fab fa-github"></i>
      </div>
      <div class="algemeen-contact">
        <span class="name-contact">GitHub</span><br>
        <hr>
        <span class="info-contact"><a href="https://github.com/reinvdv" target="_blank">Reinvdv | GitHub</a></span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="contact-round">
        <i class="fab fa-linkedin-in"></i>
      </div>
      <div class="algemeen-contact">
        <span class="name-contact">Linkedin</span><br>
        <hr>
        <span class="info-contact"><a href="https://www.linkedin.com/in/reinier-van-der-velden-914511152/" target="_blank">Reinier | Linkedin</a></span>
      </div>
    </div>
  </div>
 </div>
 <div class="contact-mobile">
   <h2>Contact informatie</h2>
   <ul>
     <li><i class="far fa-user"></i>Reinier van der Velden</li>
     <li><i class="far fa-envelope"></i><a href="mailto:22810@ma-web.nl">info@reiniervdvelden.nl</a></li>
     <li><i class="fas fa-mobile-alt"></i>06-15163400</li>
     <li><i class="fab fa-github"></i></i><a href="https://github.com/reinvdv">Reinvdv | GitHub</a></li>
     <li><i class="fab fa-linkedin-in"></i><a href="https://www.linkedin.com/in/reinier-van-der-velden-914511152/">Reinier | Linkedin</a></li>
   </ul>
 </div>
  <h2 style="margin-top:10vh; text-align:center;">Waar kan je mij vinden</h2><hr>
  <div id="map"></div>

  <h2 style="text-align:center; margin-top:10vh;">Neem gerust contact op</h2><hr>
  <div class="contact-form">
    <form  action="/contact" method="post" >
      <span><i class="far fa-user"></i><input type="text"  name="naam" placeholder="Naam" required /></span>
      <span><i class="far fa-envelope"></i><input type="email"  name="email" placeholder="E-mail" required /></span>
      <span><i class="far fa-edit"></i></i><input type="text"  name="onderwerp" placeholder="Onderwerp" /></span>
      <span><i style="float:left" class="far fa-comment"></i><textarea name="bericht" placeholder="Bericht" required></textarea></span>
      <br><br>
      <input type="submit" value="Verzenden" name="submit" class="send-knop" />
    </form>
  </div>
  </div>
  <?php
  if(isset($_POST['submit'])){
      $naam = htmlentities($_POST['naam']);
      $email = htmlentities($_POST['email']);
      $onderwerp = htmlentities($_POST['onderwerp']);
      $bericht = htmlentities($_POST['bericht']);
        $to = "22810@ma-web.nl";
        $subject = $onderwerp;
        $msg = '<table style=" background-color: #fcfcfc;width: 100%;border-collapse: collapse; font-family:arial; margin:0 auto;" cellspacing="0" cellpadding="10">
          <tr align="center">
            <table style=" background-color: white;width: 500px;border-collapse: collapse; font-family:arial; margin:0 auto;" cellspacing="0" cellpadding="10">
              <td><font style="font-size:25px">Reinier</font><br>
              Bekijk het bericht van <b>' . $naam .'</b><hr><br>
              <p>'.$bericht .'</p>
              <hr>
              Mail een reactie naar  <a href="mailto:'.$email.'">'.$email.'</a>.
            </td>
            </table>
          </tr>
        </table>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: info@reiniervdvelden.nl' . "\r\n";
        $headers .= '' . "\r\n";
        mail($to,$subject,$msg,$headers);
        echo '<script>alert("Ik heb het bericht ontvangen en zal zo snel mogelijk contact met u op nemen.");</script>';
  }
  ?>
</div>
</div>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTXqTTQsqCQg_3xuAAPz0EF5ZsAaE-M1c&callback=initMap">
</script>
