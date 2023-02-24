<div id="second-submenu">
    <a href="index.php?page=usersproducts&subpage=users">Users</a> |
    <a href="index.php?page=usersproducts&subpage=products">Products</a>
</div>
<div id="content">
    <?php
      switch($subpage){
                case 'users':
                    require_once 'users-module/index.php';
                break; 
                case 'products':
                    require_once 'products-module/index.php';
                break; 
                default:
                    require_once 'main.php';
                break; 
            }
    ?>
  </div>