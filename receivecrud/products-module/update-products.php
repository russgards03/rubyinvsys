<h3>Product Details</h3>
<div id="form-block">

    <form method="POST" action="processes/process.product.php?action=update">
        <div id="form-block-half">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" class="input" name="product_name" value="<?php echo $product->get_product_name($id);?>" placeholder="Name of product..">

            <label for="product_price">Product Type</label>
            <select id="type" name="type">
              <option value="bread" <?php if($product->get_product_type($id) == "bread"){ echo "selected";};?>>Bread</option>
            </select>

            <label for="product_price">Product Price</label>
            <input type="text" id="product_price" class="input" name="product_price" value="<?php echo $product->get_product_price($id);?>" placeholder="Price of product..">

            <input type="hidden" id="product_id" class="input" name="product_id" value="<?php echo $id;?>">

        </div>
            
            <div id="button-block">
            <input type="submit" value="Update">
                
        </div>
    </form> 

    <form method="POST" action="processes/process.product.php?action=delete">

        <input type="hidden" id="product_name" class="input" name="product_name" value="<?php echo $product->get_product_name($id);?>" placeholder="Name of product..">

        <input type="hidden" id="product_price" class="input" name="product_price" value="<?php echo $product->get_product_price($id);?>" placeholder="Price of product..">

        <input type="hidden" id="product_id" class="input" name="product_id" value="<?php echo $id;?>">
            
            <div id="button-block">
            <input type="submit" value="Delete">

    </form>



</div>