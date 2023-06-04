<?php
if($user -> get_user_access($user_id) == 'Staff' && $user_id_login != $id){
    header("location: index.php?page=users&subpage=users");
}
if ($user -> get_user_access($user_id) == 'Staff'){
?>

<div id="form-block">

    <div>
        <a href="index.php?page=products&subpage=products" id="cancel"></a>
    </div>

<h3>Product Details</h3>

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
        </div>

    </form>
</div>

<?php   
}else if ($user -> get_user_access($user_id) == 'Manager'){

?>

<div id="form-block">

    <div>
        <a href="index.php?page=products&subpage=products" id="cancel"></a>
    </div>

<h3>Product Details</h3>

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
        </div>

    </form>
</div>

<div id="button-center">   
    <form method="POST" action="processes/process.product.php?action=delete">

            <input type="hidden" id="product_name" class="input" name="product_name" value=
            "<?php echo $product->get_product_name($id);?>" placeholder="Name of product.." required>
            <input type="hidden" id="product_price" class="input" name="product_price" value=
            "<?php echo $product->get_product_price($id);?>" placeholder="Price of product.." required>

            <input type="hidden" id="product_id" class="input" name="product_id" value="<?php echo $id;?>">   

        <div>
            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this product?');">
        </div>

    </form>
</div>

<?php } ?>