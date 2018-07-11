<?php
$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ('ERROR!');

$id = $_GET['id'];

if ($id == '3' || $id == '4') {
  echo "
    <style>
      .projectlink-section{
        color:black;
        text-shadow: 0px 0px 20px rgba(255, 255, 255, 0.9);
      }
    </style>
  ";
}
if ($id == '4') {
  echo "
    <style>
      .btn{
        color:#aaa;
      }
    </style>
  ";
}

$query = 'SELECT foto, titel, text, link, github, samenwerking FROM projects WHERE id='.$id;
$result = mysqli_query($dbc, $query);

  while($row = mysqli_fetch_array($result)) {
    $foto = $row['foto'];
    $titel = $row['titel'];
    $text = $row['text'];
    $link = $row['link'];
    $github = $row['github'];
    $samenwerking = $row['samenwerking'];


    echo '

    <div class="wrapper">
    <div class="project-img-big" style="background-image: url('. $foto .'); background-size :cover;"></div>
    <div class="project-info">
      <div class="project-info-tekst">
        <h1 style="border-bottom:2px solid black; padding-bottom:3vh; font-size: 40px;"><b>'. $titel .'</b></h1>
        <p> '. $text .'</p><hr>
        <p>
        <h3>Technieken</h3>
        We hebben tot nu toe de volgende technieken gebruikt:<br><br>
        <code>HTML5</code>
        <code>SASS</code>
        <code>JQUERY</code>
        <code>PHP</code>
        <code>MYSQL</code>
        </p>
        <div>
          <hr>
          <h3>Mede developers</h3>
          personen die hebben mee geholpen aan dit project:<br>
          '.$samenwerking.'
        </div>
      </div>
    </div>
    <div class="projectlink-section" style="">
      <div class="projectlink">
        <p>Klik hier onder voor de link naar de site:</p>
        <a href=" '. $link .' " target="_blank" class="btn">Site&nbsp;<i class="fas fa-globe"></i></a>
        ';
        if ($id == '3' || $id == '2') {
          echo '<a href="#" class="btn geen-github">GitHub&nbsp;<i class="fas fa-times"></i></a>';
        } else {
          echo '<a href=" '. $github . ' " target="_blank" class="btn">Github&nbsp;<i class="fab fa-github"></i></a>';
        }

        echo'
      </div>
    </div>
  </div.

    ';
  }

?>
