<?php require_once "includes/headder.php"; ?>

<section class="form signup">
    <header>
        Realtime chat
    </header>
    <form action="#" autocomplete="off" enctype="multipart/form-data" method="POST">
        <div class="error-txt">
            This is an error message
        </div>
        <div class="name-details">
            <div class="field input">
                <label for="">First name</label>
                <input type="text" placeholder="First name" name="fname" value="" required>
            </div>
            <div class="field input">
                <label for="">Last name</label>
                <input type="text" placeholder="Last name" name="lname" value="" required>
            </div>
        </div>
        <div class="field input">
            <label for="">Email</label>
            <input type="text" placeholder="Enter your email" name="email" value="" required>
        </div>
        <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter your password" name="password" value="" required>
            <i class="fa fa-eye"></i>

        </div>
        <div class="field image">
            <label for="">Select image</label>
            <input type="file" placeholder="First name" name="image" value="" required>
        </div>
        <div class="field button">
            <input type="submit" name="submit" value="Continue to chat">
        </div>
        <div class="link">
            Already signed up? <a href="login.php">Login now</a>
        </div>
    </form>
</section>
<?php require_once "includes/footer.php"; ?>
<script src="javascript/pass-show-hiden.js"></script>
<script src="javascript/signup.js"></script>
