<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Room Management System - Edit</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>

  </head>
  <style media="screen">
  /* MODAL STARTS HERE */
  .bg-modal-edit {
  background-color: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  }

  .modal-contents {
  height: 300px;
  width: 500px;
  background-color: white;
  text-align: center;
  padding: 20px;
  position: relative;
  border-radius: 4px;
  }

  input {
  margin: 15px auto;
  display: block;
  width: 50%;
  padding: 8px;
  border: 1px solid gray;
  }

  .close-edit {
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 42px;
  color: #333;
  transform: rotate(45deg);
  cursor: pointer;
  &:hover {
    color: #666;
    }
  }
  .close-add {
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 42px;
  color: #333;
  transform: rotate(45deg);
  cursor: pointer;
  &:hover {
    color: #666;
    }
  }

  .zindex {
    z-index: 1;
  }
  </style>
  <body>
    <div class="uk-container uk-position-top-left uk-margin-medium-top zindex">
      <p class="uk-button uk-button-secondary uk-border-rounded"><a href="index.php">Back</a></p>
    </div>
    <div class="bg-modal-edit">
    	<div class="modal-contents">
        <!-- Image
    		<img src="https://s.gravatar.com/avatar/cfe128a2b747c12a7bc719be85d20a40?s=80" alt="" class="uk-margin-bottom uk-border-circle">
        -->
        <h1 class="uk-text-bold uk-h1">Edit Room's</h1>
    		<form method="POST">
          <div class="uk-margin-bottom">
            <select name="selectnotebook"class="uk-select uk-text-center uk-border-rounded uk-margin-small-bottom">
              <?php
              include 'db.php';

              $notebooks_sql = "SELECT * FROM raume";
              $notebooks = mysqli_query($con, $notebooks_sql);
              while ($row = mysqli_fetch_assoc($notebooks)) {
                echo "<option value='". $row['Name'] ."'>". $row['Name'] ."</option>";
              }
               ?>
            </select>
          </div>
          <p>Ist der Raum Belegt ?</p>
          <select class="uk-select uk-text-center uk-border-rounded uk-margin-medium-bottom" name="infochange">
            <option value="1">Ja</option>
            <option value="0">Nein</option>
          </select>
    			<input type="submit" name="submit" class="uk-button-primary uk-button uk-border-rounded" value="Ändern">
    		</form>

    	</div>
    </div>
  </body>
  <?php

  $notebookname = $_POST['selectnotebook'];
  $InfoChange = $_POST['infochange'];

$sql_changes = "UPDATE `raume` SET `belegt` = '$InfoChange' WHERE `raume`.`Name` = '$notebookname'";

if(isset($_POST['submit'])) {
  $sql_datachange = mysqli_query($con, $sql_changes);

  if ($sql_datachange) {
    header('Location: index.php');
  }
}

include 'footer.php';
?>
