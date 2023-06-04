<div id="form-block">

<div>
    <a href="index.php?page=receive&subpage=receive" id="cancel"></a>
</div>

<h3>Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.receive.php?action=create">
        <div id="form-block-center">

            <label for="desc">Description</label>
            <textarea id="desc" class="input" name="desc" placeholder="Description.."></textarea>
            
            <label for="amount">Amount</label>
            <input type="text"id="amount" class="input" name="amount" placeholder="Amount.."/>
        
              </div>
        <div id="button-block">
        <input type="submit" value="Create">
        </div>
  </form>
</div>