<div id="wrap">
    <div id="logo2"></div>
    
        <div id="name">
            <p>Logged in as:</p>
            
            <td><a id="white" href="index.php?page=users&subpage=users&action=profile&id=
            <?php echo $user_id;?>">
            <?php echo $user->get_user_firstname($user_id).', '.$user->get_user_lastname($user_id);?></a></td> 
            <br>
            
            (<?php echo $user->get_user_access($user_id);?>)
 
        </div> 
</div> 