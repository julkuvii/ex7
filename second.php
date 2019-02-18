

    <h2>Second Page</h2>
    <p>
		This is the second page.
  </p>

  <h3>PHP variables</h3>
    <?php 
    
      $name = 'Garfield';
      $age = '5';
      echo 'Name of the cat is <b>'.$name.'</b> and it is <b>'.$age.'</b> years old.';

    ?>

  <h3>PHP array</h3>
  <p>Names from the array:</p>
  <?php 
  
    $names = array('Jim', 'Lisa', 'Bob');
    print_r($names);  
  
  ?>
<br>
  <?php echo 'The second name is: '.$names[1]; ?>

  <h3>PHP associative array</h3>
  <p>All persons</p>
  <?php 
  $persons = array(
    array("fn"=> 'Jim', "ln"=> 'Smith'),
    array("fn"=> 'Lisa', "ln"=> 'Simpson'),
    array("fn"=> 'Bob', "ln"=> 'Jones')
  );

  print_r($persons);
  ?>

  <p>Lastnames:</p>
  <?php foreach($persons as $lname){echo $lname["ln"].'<br>';} ?>
    

