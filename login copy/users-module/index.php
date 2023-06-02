<div id="black">
    <h1>USERS</h1>
</div>

<div id="subcontent">

    <?php
      switch($action){
                case 'create':
                    require_once 'users-module/create-user.php';
                break; 
                case 'read':
                    require_once 'users-module/read-user.php';
                break;
                case 'update':
                    require_once 'users-module/update-user.php';
                break; 
                case 'delete':
                    require_once 'users-module/delete-user.php';
                break;
                case 'profile':
                    require_once 'users-module/update-user.php';
                break;
                default:
                    require_once 'users-module/read-user.php';
                break; 
            }
    ?>
</div>