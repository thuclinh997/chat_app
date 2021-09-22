<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location:login.php");
}
?>
<?php require_once "includes/headder.php"; ?>
<section class="chat-area">
    <header>
        <?php
        require_once "php/config.php";
        $user_id = mysqli_real_escape_string($conn, $_GET['unique_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <a href="users.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
        <img src="<?php echo "php/images/" . $row['image']; ?>" alt="">
        <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
        </div>
    </header>
    <div class="chat-box">
        
    </div>
    <form action="" method="POST" class="typing-area" autocomplete="off">
        <input type="hidden" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>">
        <input type="hidden" name="incoming_id" value="<?php echo $user_id; ?>">
        <input type="text" class="input-field" placeholder="Type message here..." name="message" value="">
        <button type=""><i class="fab fa-telegram-plane"></i></button>
    </form>
</section>
<?php require_once "includes/footer.php"; ?>
<script src="javascript/chat1.js"></script>