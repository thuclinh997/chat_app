<?php require_once "includes/headder.php"; ?>
<section class="form login">
    <header>
        Realtime chat
    </header>
    <form action="" autocapitalize="off" autocomplete="off">
        <div class="error-txt">
            This is an error message
        </div>
        <div class="field input">
            <label for="">Email</label>
            <input type="text" placeholder="Enter your email" name="email" value="">
        </div>
        <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter your password" name="password" value="">
            <i class="fa fa-eye"></i>
        </div>
        <div class="field button">
            <input type="submit" name="" value="Continue to chat">
        </div>
        <div class="link">
            Not yet signed up? <a href="index.php">Signup now</a>
        </div>
    </form>
</section>
<?php require_once "includes/footer.php"; ?>
<script src="javascript/pass-show-hiden.js"></script>
<script src="javascript/login.js"></script>
