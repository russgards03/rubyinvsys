<div id="third-submenu">
    <a href="index.php?page=products&subpage=read-products">List Batches</a> | <a href="index.php?page=products&subpage=products&action=create">Add Batch</a> | <a href="index.php?page=products&subpage=products&action=update">Update Batch</a> | <a href="index.php?page=products&subpage=products&action=delete">Delete Batch</a>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'products-module/create-products.php';
                break; 
                case 'read':
                    require_once 'products-module/read-products.php';
                break;
                case 'update':
                    require_once 'products-module/update-products.php';
                break; 
                case 'delete':
                    require_once 'products-module/delete-products.php';
                break;
                default:
                    require_once 'products-module/read-products.php';
                break; 
            }
    ?>
</div>