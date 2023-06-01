<div id="form-block">

<div>
    <a href="index.php?page=products&subpage=products" id="cancel"></a>
</div>

<h3>Product Details</h3>
<div id="button-block">
<a href="index.php?page=products&subpage=products&action=upload<?php echo $id ?>" class="btn-jsactive">Upload Image</a> 

</div>
    <form method="POST" action="processes/process.product.php?action=update">

        <div id="form-block-half">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" class="input" name="product_name" value=
            "<?php echo $product->get_product_name($id);?>" placeholder="Name of product.." required>

            <label for="product_price">Product Price</label>
            <input type="text" id="product_price" class="input" name="product_price" value=
            "<?php echo $product->get_product_price($id);?>" placeholder="Price of product.." required>

            <input type="hidden" id="product_id" class="input" name="product_id" value="<?php echo $id;?>">
        </div>     

            <div id="button-block"> 
                <input type="submit" value="Save" onClick=back()>
            <script>

            public function back() {
                <a href="index.php?page=products&subpage=products"></a>
            }
            </script>
            <div>

    </form>
    

</div>