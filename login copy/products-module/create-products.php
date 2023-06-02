<div id="third-submenu">
        <a href="index.php?page=products&subpage=products">Cancel</a> 
</div>

<div id="form-block">
<h3>Provide the Required Information</h3>
    <form method="POST" action="processes/process.product.php?action=create">

          
        <div id="form-block-half">

            <label for="fname">Product Name</label>
            <input type="text" id="product_name" class="input" name="product_name" placeholder="Product Name" required>

            <label for="product_type">Product Type</label>
            <select id="type" name="product_type" placeholder="Drink, Meal, etc...">
              <option value="Drink">Drink</option>
              <option value="Meal">Meal</option>
              <option value="Pastry">Pastry</option>
              <option value="Snack">Snack</option>
            </select>

            <label for="lname">Product Price</label>
            <input type="text" id= "product_price" class="input" name="product_price" placeholder="Product Price" required>

          </div>

            <div id="button-block">
              <input type="submit" value="Save">
            </div>
             
  </form>
</div>