<h3>Product Details</h3>
<div id="form-block">
<form method="POST" action="processes/process.product.php?action=update">
        <div id="form-block-half">
            <label for="product_name">Product Name</label>
            <input type="text" id="pname" class="input" name="product_name" value="<?php echo $product->get_product_name($id);?>" placeholder="Name of product..">

            <label for="product_price">Product Price</label>
            <input type="text" id="pprice" class="input" name="product_price" value="<?php echo $product->get_product_price($id);?>" placeholder="Price of product..">

        </div>

        <div id="form-block-half">
            
            <div id="button-block">
            <input type="submit" value="Update">
            </div>
                
        </div>
        
        
</form>
</div>