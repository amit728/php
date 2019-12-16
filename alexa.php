<?php
	function get_rank($domain){
		$url = "http://data.alexa.com/data?cli=10&dat=snbamz&url=".$domain;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($ch, CURLOPT_URL, $url);
		$data = curl_exec($ch);
		curl_close($ch);
		$xml = new SimpleXMLElement($data);
		if($popularity = @$xml->xpath("//POPULARITY"))
		{
			$rank = number_format((string)$popularity[0]['TEXT']);
		}else
		{
			$rank = 'N/A';
		}
		return $rank;
	}
	echo '
		<form method="post">
 		<table>
 		<tr><td>Domain name <br/><textarea name="url" rows="20" cols="30"></textarea></td></tr>
 		<tr><td ><input type="submit" value="Submit" name="submit" /></td></tr>';
	echo '</table></form>';
	if (isset($_POST['submit']))
	{
		$list=$_POST['url'];
		$array=explode("\n",$list);
		print_r(count($array).'<br/>');
		for($i=0;$i<count($array);$i++)
		{
			$A=get_rank($array[$i]);
			echo $array[$i].' --> '.$A.'<br/>';
		}
	}
?>