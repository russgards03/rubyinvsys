<div id="third-submenu">
    <a href="index.php?page=users&subpage=users">List Users</a> | <a href="index.php?page=users&subpage=users&action=create">Create User</a> | <a href="index.php?page=users&subpage=users&action=update">Update Users</a> | <a href="index.php?page=users&subpage=users&action=delete">Delete Users</a>
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
                default:
                    require_once 'users-module/read-user.php';
                break; 
            }
    ?>
  </div>