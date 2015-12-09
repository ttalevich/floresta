<?php 
    $page = basename($_SERVER['SCRIPT_NAME']);
if ($page == 'index.php') {print 'Home';}
if ($page == 'about.php') {print 'About';}
if ($page == 'features.php') {print 'Features';}
    if ($page == 'features-floorplans.php') {print 'Floorplans';}
if ($page == 'location.php') {print 'Location';}
    if ($page == 'location-neighborhood.php') {print 'Neighborhood';}
    if ($page == 'location-activities.php') {print 'Activities';}
if ($page == 'availability.php') {print 'Availability';}
    if ($page == 'availability-timeframe.php') {print 'Timeframe';}
    if ($page == 'availability-pricing.php') {print 'Pricing';}
    if ($page == 'availability-registration.php') {print 'Registration';}
if ($page == 'contact.php') {print 'Contact';}
?>