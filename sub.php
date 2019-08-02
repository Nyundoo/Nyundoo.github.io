<?php require_once("config.php"); ?>
  <?php include(phppage . DS . "login.php") ?>
 <?php include(phppage . DS . "header.php") ?>
 <?php include(phppage . DS . "top_nav.php") ?>
 

 <div class="container marketing"> 

<?php


   if (isset($_POST['delete']) && isset($_POST['type']))
  {
    $isbn   = get_post($connection, 'type');
    $query  = "DELETE FROM user WHERE type='$type'";
    $result = $connection->query($query);

    if (!$result) echo "DELETE failed: $query<br>" .
      $connection->error . "<br><br>";
  }

  if (isset($_POST['name'])   &&
      isset($_POST['email'])    &&
      isset($_POST['tel']) &&
      isset($_POST['subdate']) &&
      isset($_POST['subtime']) &&
      isset($_POST['sub']) &&
      isset($_POST['type']) &&   
     isset($_POST['location']))
  {
    $name   = get_post($connection, 'name');
    $email    = get_post($connection, 'email');
    $tel     = get_post($connection, 'tel');
    $subdate     = get_post($connection, 'subdate');
    $subtime     = get_post($connection, 'subtime');
    $sub     = get_post($connection, 'sub');
    $type     = get_post($connection, 'type');
    $location = get_post($connection, 'location');
    $mysqlDate = date("y-m-d", strtotime($subdate));
    $mysqlTime = date("hh [.:] MM[.:]||", strtotime($subtime));
    
    $query    = "INSERT INTO user VALUES" .
     "('$name', '$email', '$tel','$subdate', '$subtime', '$sub','$type', '$location')";
    $result   = $connection->query($query);

    if (!$result) echo "INSERT failed: $query<br>" .
      $connection->error . "<br><br>";
  }

  echo <<<_END
    <div class="sub">
    <form action="sub.php" method="post">
       
    <legend>Register your subscription</legend>          
    <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div> 
    <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Telephone number</label>
    <input type="text" class="form-control"  name="tel" placeholder="07123456789">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Prefered car wash date</label>
    <input type="date" class="form-control"  name="subdate" placeholder="">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Prefered car wash time</label>
    <input type="time" class="form-control" name="subtime" placeholder="">
    </div>  
    <div class="form-group">
    <label for="exampleFormControlSelect1">Subscription type</label>
    <select class="form-control" name="type">
      <option>Weekly</option>
      <option>Monthly</option>      
    </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Car wash</label>
    <select class="form-control" name="sub">
      <option>Once every week</option>
      <option>2 times every week</option>
      <option>3 times every week</option>      
    </select>
    </div> 
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Residence</label>
    <textarea class="form-control" name="location" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Subscribe</button></form>    
    </div>                      
          
      
    
    _END;

    
  echo longdate(time());

  function longdate($timestamp)
  {
    return  date("Y m d", $timestamp); 
  }

 
  

 
  $connection->close();

  function get_post($connection, $var)
  {
    return $connection->real_escape_string($_POST[$var]);
  }
?>
</div>
<?php include(phppage . DS . "footer.php") ?>