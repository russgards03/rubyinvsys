<div id="third-submenu">
    <a href="index.php?page=usersproducts&subpage=users">List Users</a> | <a href="index.php?page=usersproducts&subpage=users&action=create">Create User</a> 
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