<?php 
include('includes/header.php');
include('includes/nav.php');
?>
<!--begin page content area -->
<div id="content">
    <div id="main" class="inner">
        <h1>Contact</h1>
        <p>Please voice any questions or concerns below.</p>
        <p> Just understand that your email is going no where and no one is listening.</p>
        <div id="contact-form">
            <form action="form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name">

                <label for="email">Email:</label>
                <input type="email" name="email">
                
                <label for="comments">Comments</label>
                <textarea name="comments"></textarea>
                <button type="submit" name="sumbit">SUBMIT</button>
            </form>
        </div>
        
        <p class="lower">If you have registation inquiries please view the  <a href="register.html">Register</a> page.</p>
    </div>
</div>
<!--end page content area -->
<?php 
include('includes/footer.php');
?>