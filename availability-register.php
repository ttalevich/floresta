<?php 
include('includes/header.php');
include('includes/nav.php');
?>
<!--begin page content area -->
<div id="content">
    <div id="aside">
        <?php include('includes/aside.php')?>
    </div>
<div id="main" class="inner">
        <h1>Register &amp; Reserve</h1>
        <p>At this time -  any registration is an inquiry, not a promise.</p>
        <div id="contact-form">
            <form action="form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name">

                <label for="email">Email:</label>
                <input type="email" name="email">

                <label for="move-in">Move in date:</label>
                <input type="date" name="move-in">
                
                <label for="comments">Comments</label>
                <textarea name="comments"></textarea>
                <button type="submit" name="sumbit">SUBMIT</button>
            </form>
        </div>
        
        <p class="lower">If you have any questions or concerns please  <a href="contact.php">Contact</a> us.</p>
    </div>
</div>
<!--end page content area -->
<?php 
include('includes/footer.php');
?>