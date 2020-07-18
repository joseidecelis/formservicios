<?php include_once 'header.php'; ?>

<div class="text-center">
    <form class="form-signin">
    <div class="col-4 mx-auto">
            <h1 class="h3 mb-3 font-weight-normal" >Signup
            <spam> or <a href="login.php" >Login</a></spam>
            </h1>
        </div>
        <div class="col-4 mx-auto">
            <input type="text" name="email" class="form-control" placeholder="Enter your mail" required autofocus>
        </div>
        <div class="col-4 mx-auto">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required >
        </div>
        <div class="col-4 mx-auto">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password" required >
        </div>
        <div class="col-4 mx-auto">
            <input type="submit" value="Send">
        </div>  

    </form>
</div>
<?php include_once 'footer.php'; ?>