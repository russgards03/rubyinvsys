<div id="black">
    <h1>SALES</h1>
</div>

<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'release-module/create-transaction.php';
                break; 
                case 'release':
                    require_once 'release-module/release-products.php';
                break; 
                default:
                    require_once 'release-module/main.php';
                break; 
            }
    ?>
  </div>