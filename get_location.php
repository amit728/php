
<?php
    if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
        //Send request and receive latitude and longitude
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if($status=="OK"){
            $location = $data->results[0]->formatted_address;
        }else{
            $location =  'No location found.';
        }
        echo $location; 
    } 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<!--  <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
 

  <script language="Javascript">
    document.write("Welcome to our visitors from "+geoplugin_city()+", "+geoplugin_countryName());
  </script>
-->
</body>
</html>
