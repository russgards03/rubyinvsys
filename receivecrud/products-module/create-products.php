<h3>Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.product.php?action=create">
        <div id="form-block-half">
            <label for="fname">Product Name</label>
            <input type="text" id="product_name" class="input" name="product_name" placeholder="Product Name">

            <label for="product_type">Product Type</label>
            <select id="type" name="product_type" placeholder="   ">
              <option value="bread">     </option>
              <option value="bread">Bread</option>
              <option value="cake">Cake</option>
              <option value="manager">Manager</option>
            </select>

            <label for="lname">Product Price</label>
            <input type="text" id= "product_price" class="input" name="product_price" placeholder="Product Price">
            
        </div>
        <div id="button-block">
            <input type="submit" value="Save">
        </div>
  </form>
</div>