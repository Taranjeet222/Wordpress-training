<a href="<?php echo $user->html_url; ?>" class="card">
    <div class="user">
        <div class="userdata">
            <?php echo $user->login; ?><br>
            <?php echo $user->contributions;?> contributions
        </div>
        <img src="<?php echo $user->avatar_url; ?>" class="image" alt="">
    </div>
</a>
