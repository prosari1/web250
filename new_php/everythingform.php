<div class="row content">
  <h2 style="text-align: center;">Module 7 Everything Form</h2>
  <form method="post" action="">
  <h3>Customer Service</h3>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="first_name"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="last_name"><br><br>
    
    
    
    <input type="radio" id="mr" name="pronoun" value="Mr">
    <label for="mr">Mr</label><br>

    <input type="radio" id="mrs" name="pronoun" value="Mrs">
    <label for="mrs">Mrs</label><br>

    <input type="radio" id="miss" name="pronoun" value="Miss">
    <label for="miss">Miss</label><br>
    
    
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email">

    
    <p>Area of complain: </p>
    <input type="checkbox" id="data" name="complain" value="Data">
    <label for="data">Data: issues accessing my data</label><br>
    <input type="checkbox" id="email" name="complain" value="Email">
    <label for="email">Email: issues accessing my email</label><br>
    <input type="checkbox" id="data" name="complain" value="Other">
    <label for="other">Others</label><br>

    
    <input type="submit" name="submit" value="Submit" />
  </form>

  <hr>

  <h3>Verify info entered:</h3>
  <?php
    if (isset($_POST["submit"])) 
    {
      $output = "<p>Name: {$_POST["pronoun"]} {$_POST["first_name"]} {$_POST["last_name"]}.</p>
      <p>Email: {$_POST["email"]}</p>
      <p>Area of complain: {$_POST["complain"]}</p>";
      echo $output;
      
    }
  ?>


</div>