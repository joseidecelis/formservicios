<?php include_once 'header.php'; ?>

<div class="text-center">
    <form class="form-signin">
        <div class="col-4 mx-auto">
            <h1 class="h3 mb-3 font-weight-normal" >Login
            <spam> or <a href="signup.php" >SignUp</a></spam>
            </h1>
        </div>

        <div class="col-4 mx-auto">
            <input type="email" name="email" class="form-control" placeholder="Enter your mail" required autofocus>
        </div>
        <div class="col-4 mx-auto">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <div class="col-4 mx-auto">
            <input type="submit" value="Send">
        </div>
</div>
</form>
</div>
<!-- </div> -->


<?php include_once 'footer.php'; ?>