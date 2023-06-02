<h3>Which Product to Delete?</h3>

<div id="form-block">
    <form method="POST" action="processes/process.products.php?action=delete">
        <div id="form-block-half">
            <input type="hidden" id="product_id" class="input" name="product_id" value="<?php echo $product_id;?>">
        </div>
        
        <div id="button-block">
        <input type="submit" value="Delete">
        </div>
  </form>
</div>