<div id="black">
    <h1>SALES</h1>
</div>

<div id="subcontent">
    <?php
      switch($action){

                case 'create':
                    require_once 'sales-module/create-sale.php';
                break; 
                case 'receive':
                    require_once 'sales-module/receive-products.php';
                break; 
                case 'profile':
                    require_once 'sales-module/view-product.php';
                break;
                case 'types':
                    require_once 'sales-module/list-product-types.php';
                break;
                case 'upload':
                    require_once 'sales-module/imageupload.php';
                break;
                default:
                    require_once 'sales-module/read-sales.php';
                break; 
            }
    ?>
  </div>