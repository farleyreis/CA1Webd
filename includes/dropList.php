<link rel="stylesheet" href="style.css">
<head>
    
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Associative Array - Cities</title>
</head>
 
<body>
<h2>if you cound not find, try enter with the capital here<br /></h2>
 
<?php

  $cities=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens",
  "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", "Spain"=>"Madrid",
  "Sweden"=>"Stockholm", "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
  "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
  "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
  "Austria" => "Vienna", "Poland"=>"Warsaw", "Sorry, coud not be find"=>"Other",);

  if(!isset($_POST['submit'])){
?>

 
<form method="post" action="">
    <div  class="form-inline" >
    <p > Please choose a city   :</p>
<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="city">
    
 
<?php

  foreach($cities as $c){
    echo "<option value=\"$c\">$c</option>\n";
  }
?>
 
</select>
<div class="col-auto my-1" >
<input class="btn btn-primary mb-2" type="submit" name="submit" value="Submit" >


</div>
</div>
</form>

  

 
<?php
 
  }else{
 
    $city=$_POST['city'];

    $country=array_search($city, $cities);

    echo "<p>$city is capital of $country.</p>" ;
 
  }
?>
 
</body>
</html>