<div class="row content">
  <h2 style="text-align: center;">Module 6 Forms</h2>

  <h3>Form using POST method</h3>
    <form action="" method="post" >
      <table>
        <tr>
          <td>First Name: </td>
          <td>
            <input type="text" name="first_name">
          </td>
        </tr>
        <tr>
        <td>Last Name: </td>
          <td>
            <input type="text" name="last_name">
          </td>
        </tr>
        <tr">
          <td>
            <input type="submit" name="submit_names" value="Submit" />
          </td>
        </tr>
      </table>
    <?php
      if (isset($_POST["submit_names"])) 
      {
        echo "<p>Hello, {$_POST["first_name"]} {$_POST["last_name"]}!</p>";
      }
    ?>

  <br>
  <hr>
  <br>

    <h3>Form using GET method</h3>
    <form action="" method="get" >
    <table>
        <tr>
          <td>First Name: </td>
          <td>
            <input type="text" name="first_name2">
          </td>
        </tr>
        <tr>
        <td>Last Name: </td>
          <td>
            <input type="text" name="last_name2">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit_names2" value="Submit" />
          </td>
        </tr>
      </table>
    </form>
        <br>
      <?php
        if (isset($_GET["submit_names2"])) 
        {
          echo "<p>Hello again, {$_GET["first_name2"]} {$_GET["last_name2"]}!</p>";
        }
      ?>
      
</div>