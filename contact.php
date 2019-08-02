<?php require_once("config.php"); ?>
  <?php include(phppage . DS . "login.php") ?>
 <?php include(phppage . DS . "header.php") ?>
 <?php include(phppage . DS . "top_nav.php") ?>

 <div class="container marketing"> 
  <div class="sub">
<form>
  <div class="form-group">
  <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Massage</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div>
    <button type="submit" class="btn btn-primary">Send</button></form>    
  </div>
</form>
<?php include(phppage . DS . "footer.php") ?>
</div>

</div>