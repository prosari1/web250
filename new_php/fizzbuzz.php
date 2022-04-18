<div class="row content">
  <h2 style="text-align: center;">FizzBuzzBang Everything!</h2>
  <form id="fizzbuzz_form" action="" method="POST">
  <table>
      <tr>
          <td>Name :</td>
          <td>
            <input name="user_name" type="text" value="Patricia" required/>
          </td>
      </tr>
      <tr>
          <td>Beginning Number :</td>
          <td>
            <input name="beginNum" type="text" value="1" required/>
          </td>
      </tr>
      <tr>
          <td>Ending Number :</td>
          <td>
            <input name="endNum" type="text" value="130" required/>
          </td>
      </tr>
      <tr>
          <td>First Word :</td>
          <td>
            <input name="fizz" type="text" value="Fizz" required/>
          </td>
      </tr>
      <tr>
          <td>First Word's Number:</td>
          <td>
            <input name="fizzNumber" type="text" value="3" required/>
          </td>
      </tr>
      <tr>
          <td>Second Word :</td>
          <td>
            <input name="buzz" type="text" value="Buzz" required/>
          </td>
      </tr>
      <tr>
          <td>Second Word's Number:</td>
          <td>
            <input name="buzzNumber" type="text" value="5" required/>
          </td>
      </tr>
      <tr>
          <td>Third Word :</td>
          <td>
            <input name="bang" type="text" value="Bang" required/>
          </td>
      </tr>
      <tr>
          <td>Third Word's Number:</td>
          <td>
            <input name="bangNumber" type="text" value="7" required/>
          </td>
      </tr>
      <tr>
          <td>
            <input name="submit" type="submit" value="Submit"/>
            <input type=reset name="r" value="Reset">
          </td>
      </tr>
  </table>
</form>

<?php
  if (isset($_POST["submit"])) {
      echo "<p>Hello {$_POST["user_name"]}, welcome to Data Shop!</p>";

      for ($i = $_POST["beginNum"]; $i <= $_POST["endNum"]; $i++) {
          $word = "";
          if (isDivisible($i, $_POST["fizzNumber"])) {
              $word .= "{$_POST["fizz"]}";
          }

          if (isDivisible($i, $_POST["buzzNumber"])) {
              $word .= "{$_POST["buzz"]}";
          }

          if (isDivisible($i, $_POST["bangNumber"])) {
              $word .= "{$_POST["bang"]}";
          }

          if ($word === '') {
              $word = $i;
          }
          echo "<li>$word</li>";
      }
      echo "</ul>";
  }

  function isDivisible($number, $divisor)
  {
      if ($number % $divisor === 0) {
          return true;
      } else {
          return false;
      }
  }
  ?>
</div>