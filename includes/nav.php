<?php 
$page = basename($_SERVER['SCRIPT_NAME']);
?>
<!--begin nav styling -->
<!--you might need a if not statement below-->
<div id="nav-mobile-logo">
    <img src="../images/logo-mobile.png">
</div>
<div id="red"></div>
<div id="green"></div>
<div id="nav-mobile-header"></div>
<div id="nav-mobile">
    <ul>
        <li>
            <a href="about.php" <?php if ($page == 'about.php'){print 'class="nav-current"';}?>>About</a>
        </li>
        <li <?php if ($page=='features.php' || 'features-floorplans.php'){print 'class="nav-current"';}?>>
            <a href="features.php">Features</a>
            <ul class="sub-menu">
                <li><a href="features-floorplans.php">Floorplans</a></li>
            </ul>
        </li>
        <li <?php if ($page=='location.php' || 'location-neighborhood.php' || 'location-activites.php'){print 'class="nav-current"';}?>>
            <a href="location.php">Location</a>
            <ul class="sub-menu">
                <li><a href="location-neighborhood.php">Neighborhood</a></li>
                <li><a href="location-activities.php">Activities</a></li>
            </ul>
        </li>
        <li <?php if ($page=='availability.php' || 'availability-timeframe.php' || 'availability-pricing.php' || 'availability-registration.php'){print 'class="nav-current"';}?>>
            <a href="availability.php">Availability</a>
            <ul class="sub-menu">
                <li><a href="availability-timeframe.php">Timeframe</a></li>
                <li><a href="availability-pricing.php">Pricing</a></li>
                <li><a href="availability-registration.php">Registration</a></li>
            </ul>
        </li>
        <li <?php if ($page=='contact.php'){ print 'class="nav-current"';} ?>><a href="contact.php">Contact</a></li>
    </ul>
</div>
   
<div id="nav" class="nav">
    <div <?php if ($page == "index.php"){print 'style="display:none;"';}?> class="inner-nav">
        <a href="index.php"><img class="logo-inner" src="images/floresta-logo-inner.png" alt="Floresta logo"/></a>
    </div>
    <div id="nav-wrapper" class="nav-wrapper">
        <ul class="clearfix">
            <li>
                <a <?php if ($page=='about.php'){print 'class="nav-current"';}?> href="about.php">About</a>
            </li>
            <li>
                <a <?php if ($page=='features.php' || $page == 'features-floorplans.php'){print 'class="nav-current"';}?> href="features.php">Features</a>
                <ul class="sub-menu">
                    <li><a href="features-floorplans.php">Floorplans</a></li>
                </ul>
            </li>
            <li>
                <a <?php if ($page=='location.php' || $page ==  'location-neighborhood.php' || $page ==   'location-activites.php'){print 'class="nav-current"';}?> href="location.php">Location</a>
                <ul class="sub-menu">
                    <li><a href="location-neighborhood.php">Neighborhood</a></li>
                    <li><a href="location-activities.php">Activities</a></li>
                </ul>
            </li>
            <li>
                <a <?php if ($page=='availability.php' || $page ==   'availability-timeframe.php' || $page ==   'availability-pricing.php' || $page ==   'availability-registration.php'){print 'class="nav-current"';}?> href="availability.php">Availability</a>
                <ul class="sub-menu">
                    <li><a href="availability-timeframe.php">Timeframe</a></li>
                    <li><a href="availability-pricing.php">Pricing</a></li>
                    <li><a href="availability-registration.php">Registration</a></li>
                </ul>
            </li>
            <li><a <?php if ($page=='contact.php'){ print 'class="nav-current"';} ?> href="contact.php">Contact</a></li>

        </ul>
    </div>
</div>
<!--end nav styling -->
