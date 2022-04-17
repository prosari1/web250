<div class="row content">
  <h2 style="text-align: center;">Math, Dates & Strings</h2>
  <h3 style="text-align: center;">Clients Cases:</h3><br>
  <?php

    // String
    define("CONCEPT", "At Data Shop we wish you find the perfect service for your business. Below are some successfull client's cases!<br>");
    print CONCEPT;

    // Math 1 
    $ratingApproval = 97.777;
    echo "<br><h3>Rating approval: " . ceil($ratingApproval) . "</h3><br>";
    
    //Math 2
    $bestBusiness = 99.7667;
    echo "<h3>Business ranking: " . floor($bestBusiness) . "</h3><br>";

    //Math 3 & Date 1 
    $clients = 197.8;
    echo "<h3>Our clients: " . round($clients) . " (" . date("Y") . ")</h3><br>";

    //Math 4 / 5 / 6
    echo "<h3>Locations: " . rand(30, 100) . "</h3><br>";
    echo "<h3>New locations coming: " . ceil(pi()) . "</h3><br>";

    //Math 7
    echo "<h3>Expected growth: " . pow(4, 2) . " new locations</h3><br>";

    echo "<figure>"."<figcaption>"."Image courtesy of Pexels"."</figcaption>".
				"<img src = 'images/graphic.jpg' style='width:500px;' >" . "</figure>";

    //Math 7 & Date 2/ 3
    $date=date_create();
    date_date_set($date,2000,1,1);
    echo "<p>Since " . date_format($date,"Y/m/d") . " servicing businesses in Charlotte area!</p><br>";
    

    //Date 4/ 5
    $origin = date_create('2000-1-1');
    $target = date_create('2022-03-13');
    $interval = date_diff($origin, $target);
    echo "<p>Special sales for the " . $interval->format('%Y') . " years on business </p><br>"; 
    
    
    //Date 6/ 7
    $end_date = date_create('2022-12-12');
    $days_left = date_diff($date, $end_date);
    echo "<p>Sales go on for: " . $days_left->format('%a') . " days</p><br>";
    

  ?>

  

</div>