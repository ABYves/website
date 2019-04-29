<?php
include "dbconnect.php";

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query("SELECT * FROM house WHERE town LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $town = $row ['town'];
        $street = $row ['street'];
        $bedrooms = $row ['bedrooms'];
        $bathroom = $row ['bathrooms'];

        $output .='<div> '.$town.''.$street.''.$bedrooms.''.$bathrooms.'</div>';

      }

    }
  }
?>