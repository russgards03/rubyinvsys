<h3>Provide the Required Information</h3>
<div id="form-block">
<form method="POST" action="processes/process.products.php?action=update">
        <div id="form-block-half">
            <label for="productname">Product Name</label>
            <input type="text" id="productname" class="input" name="productname" value="<?php echo $product->get_product_name($id);?>" placeholder="Name of product..">

            <label for="productprice">Product Price</label>
            <input type="text" id="productprice" class="input" name="productprice" value="<?php echo $product->get_product_price($id);?>" placeholder="Price of product">

        </div>
        <div id="form-block-half">
           
            
            
            <input type="hidden" id="productid" name="productid" value="<?php echo $id;?>"/>
            <a href="#">Change Name</a> | 
            <a href="#">Change Price</a>
            
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div id="button-block">
        <input type="submit" value="Update">
        </div>
</form>
</div>