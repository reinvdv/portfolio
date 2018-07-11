<div class="container">
  <div class="jumbotron" style="text-align:center;">
    <h1 class="fade-koptekst">Projecten</h1>
    <p class="fade-koptekst">Reinier van der Velden</p>
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <div class="row">
      <?php
      
      $dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ('ERROR!');
      $query = "SELECT * FROM projects ORDER BY id";
      $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
          $foto = $row['foto'];
          $titel = $row['titel'];
          $beschrijving = $row['beschrijving'];
        echo '
          <div class="col-md-6">
            <div class="project">
              <div class="project-header-image" style="background-image: url(' . $foto . ')"></div>
              <div class="beschrijving">
              <h3>' . $titel . '</h3>
              <p>' . $beschrijving . '</p>
              <hr>
                <a href="/project/' . $id . '" class="btn-site">Bekijk dit project</a>
              </div>
            </div>
          </div>';
        }
      ?>
      </div>
    </div>
  </div>
</div>
