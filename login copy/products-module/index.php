<div id="black">
    <h1>PRODUCTS</h1>
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
                case 'profile':
                    require_once 'products-module/update-products.php';
                break;
                default:
                    require_once 'products-module/read-products.php';
                break; 
            }
    ?>
    
</div>