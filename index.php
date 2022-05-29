<?php
include 'header.php';
include 'db.php';
?>

<main>
  <div class="container uk-margin-xlarge-top">
    <div class="row">
      <div class="col">
            <p class="uk-text-bold uk-text-large">Freie Räume</p>
            <div class="uk-flex uk-flex-wrap uk-text-center">
              <?php

              $notebooks_sql = "SELECT *  FROM `raume` WHERE `belegt` = 0";
              $notebooks = mysqli_query($con, $notebooks_sql);

              while ($row = mysqli_fetch_assoc($notebooks)) {
                $roomname = $row['Name'];
                $roomebene = $row['Ebene'];
                echo "<div class='cardcolorgreen uk-card uk-card-body uk-card-default uk-margin-left uk-margin-bottom uk-border-rounded'>". $row['Name'] ."<br>". $row['Ebene'] ."</div>";
              }
              ?>
              </div>
    </div>
  </div>
    <div class="row">
      <div class="col">
        <div class="">
          <p class="uk-text-bold uk-text-large">Belegte Räume</p>
          <div class="uk-flex uk-text-center">
            <?php

            $notebooks_sql = "SELECT *  FROM `raume` WHERE `belegt` = 1";
            $notebooks = mysqli_query($con, $notebooks_sql);

            while ($row = mysqli_fetch_assoc($notebooks)) {
              $roomname = $row['Name'];
              $roomebene = $row['Ebene'];
              echo "<div class='cardcolorred uk-card uk-card-body uk-card-default uk-margin-left uk-border-rounded'>". $row['Name'] ."<br>". $row['Ebene'] ."</div>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</main>

<?php
include 'footer.php';
?>
