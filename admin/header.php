<?php

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}

?>


<div class="admin-section-header">
    <div class="admin-logo">
        <a href="./addmovie.php"><img src="img/UIT.png" alt="" width="90" height="62"></a>
    </div>
    <div class="admin-login-info">
        <div style="padding: 0 20px;">
            <h2><a href="#">UIT cinema</a></h2>
        </div>
        <form method='post' action=""class="">
            <input type="submit" value="Log out" name="but_logout">
        </form>
        <img class="admin-user-avatar" src="../img/avatar.png" alt="">
    </div>
</div>