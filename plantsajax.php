<?php 
	$server="localhost";
			$user="id6462985_shreyagarg10";
			$pass="shreyagarg10";
			$db="id6462985_websitedata";
			$t="";
			$conn=mysqli_connect($server,$user,$pass,$db);

if(!empty($_GET['q']))
{
	
	$q=$_GET['q'];
	$output='';
	$query="SELECT * FROM maindata WHERE plantsName like '%$q%'";
	$result1=mysqli_query($conn,$query);
	$count1=mysqli_num_rows($result1);
	
	
	$output .='<div class="list-group">';
	if($count1==0)
	{
		$output.='<a class="list-group-item">No searches found</a>';
	}
	else
	{
	
	while($row1=mysqli_fetch_assoc($result1))
	{
		$c=$row1['id'];
		
		$output .= '
		
  <a class="list-group-item" href="plantspage.php?po='.$c.'">'.$row1['plantsName'].'</a>
  </br> ';
		
	}
	}
	$output .='</div>';
	
	echo $output;
		
	
		
				
				
}
?>