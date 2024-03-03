<html>
    <body>
    <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
          <form action="chgpw.php" method="post">
          
            <input type="text" required placeholder="Mail ID" name="mail">
            <input type="password" required placeholder="Old Password" name="opass">
            <input type="password" required placeholder="New Password" name="npass">
            <button type="submit" name='pw'>Change Password</button>
          </form>
    </body></html>