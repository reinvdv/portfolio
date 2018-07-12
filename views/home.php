<div class="container">
  <div class="jumbotron" style="text-align:center;">
    <h1 class="fade-koptekst">REINIER</h1>
    <p class="fade-koptekst">Media developer</p>
  </div>
</div>
<div class="wrapper">
	<div class="container">
    <div style="height:200px; width:200px; background: url('./img/reinier.jpg'); background-size: cover;border-radius:50%; border:5px solid white; margin:-99px auto;"></div>


	<div class= "row" style="margin-top:12vh;">
	 <?php
    $dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ('ERROR!');
    $query = "SELECT * FROM projects  ORDER BY RAND() LIMIT 2;";
    $result = mysqli_query($dbc, $query);

      while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $foto = $row['foto'];
        $titel = $row['titel'];
        $link = $row['link'];
      echo '
        <div class="col-md-6">
          <div class="project">
            <div class="project-header-image" style="background-image: url(' . $foto . ')"></div>
            <div class="beschrijving">
              <h2 style="text-align:center;">'. $titel . '</h2>
              <hr>
              <a href="/project/' . $id . '" class="btn-site homepage-btn">Bekijk dit project</a>
            </div>
          </div>
        </div>';
      }
    ?>
	</div>
  <div class="row">

    <div class="col-md-4">
      <div class="last-project">
        <h3>Mijn laatste project</h3>
        <hr>
        <p style="margin:5px;">Mijn laaste project was Dagje Bij De Boer Dag. Ik heb dit project moeten maken in opdracht van beemster, naar mijn mening heb ik het met succes afgerond</p>
        <p>Klik op bekijk dit project voor meer informatie</p>
      </div>
    </div>
    <div class="col-md-8">
      <div class="project">
        <div class="project-header-image" style="background-image: url('/img/projects-img/dbdbd.jpg')"></div>
        <div class="beschrijving">
        <!-- <h3>Dagje bij de boerdag</h3>
        <p>Dagje Bij De Boer Dag is een stage project die ik heb gedaan bij Touch Creative</p> -->
        <hr>
          <a href="/project/3" class="btn-site">Bekijk dit project</a>
        </div>
      </div>
    </div>
  </div>
  <a href="/projects" class="btn-site meer-projecten">Bekijk meer projecten</a>
</div>
