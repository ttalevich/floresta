<?php 
$page = basename($_SERVER['SCRIPT_NAME']);
if ($page == "features.php"){
    print '<ul><li><a href="features-floorplans.php">Floorplans</a></li></ul>';} else if ($page == 'features-floorplans.php'){
    print '<ul><li><a class="current-aside" href="features-floorplans.php">Floorplans</a></li><li><a class="return" href="features.php">Features</a></li></ul>';
}

if ($page == "location.php"){
    print '<ul><li><a href="location-neighborhood.php">Neighborhood</a></li><li><a href="location-activites.php">Activites</a></li></ul>';} 
else if ($page == 'location-neighborhood.php'){
    print '<ul>
            <li><a class="current-aside" href="location-neighborhood.php">Neighborhood</a></li>
            <li><a href="location-activities.php">Activites</a></li>
            <li><a class="return" href="location.php">Location</a></li></ul>';
}
else if ($page == 'location-activties.php'){
    print '<ul>
            <li><a href="location-neighborhood.php">Floorplans</a></li>
            <li><a class="current-aside" href="location-activities.php">Activites</a></li>
            <li><a class="return" href="location.php">Location</a></li></ul>';
}
?>