<div class="container">
  <div class="jumbotron" style="text-align:center;">
    <h1 class="fade-koptekst">REINIER</h1>
    <p class="fade-koptekst">Media developer</p>
  </div>
</div>
<div class="wrapper">
	<div class="container">
    <div style="height:200px; width:200px; background: url('./img/reinier.jpg'); background-size: cover;border-radius:50%; border:5px solid white; margin:-99px auto;"></div>
    <div class="homepage-teskt">
      <p>Hallo, Mijn naam is Reinier van der Velden. Wat leuk dat u mijn site bezoekt.
      <br>Op deze site kunt u van alles zien zoals: wie ik ben, welke scholen & natuurlijk mijn werk</p>
    </div>
	<div class= "row">
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
  <a href="/projects" class="btn-site meer-projecten">Bekijk meer projecten</a>
</div>
