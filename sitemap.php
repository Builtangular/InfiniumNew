<?php 
// echo"  welcome----->";
// $mysqli=mysqli_connect('localhost','infinium_global','Global@159','infinium_igr_database') or die("Database Error");
$mysqli=mysqli_connect('localhost','root','','infinium_igr_database') or die("Database Error");

/* Industry Report */
$sql="SELECT * FROM igr_report_details";
$result = mysqli_query($mysqli,$sql) or die(mysqli_error());	
	
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
		 //echo"----Url_path-----".$row['Category_id']."------".$counter."-------<br>";
		if($row['Category_id']== 1)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/chemical-material/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 2)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/energy-mining-infra/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 3)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/food-beverage/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 4)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/healthcare-medical-devices/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 5)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/ict-semiconductor/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 6)
		{
				$Url_path[]="https://www.infiniumglobalresearch.com/consumer-goods-packaging/".rtrim($row['Url_path']);
				$counter++;
		}
		if($row['Category_id']== 7)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/africa/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 8)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/brazil/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 9)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/china/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 10)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/france/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 11)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/germany/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 12)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/india/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 13)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/ireland/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 14)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/united-states/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 15)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/others/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 16)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/russia/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 17)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/automotive/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 18)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/industry-automation/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 19)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/saudi-arabia/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 20)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/agriculture/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 21)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/vietnam/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 23)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/japan/".rtrim($row['Url_path']);
				$counter++;
				}
		if($row['Category_id']== 24)
				{
				$Url_path[]="https://www.infiniumglobalresearch.com/south-korea/".rtrim($row['Url_path']);
				$counter++;
				}
		
	}		
	
	/* portfolio reports */
	$sql="SELECT * FROM igr_tb_portfolio_reports";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());	
	
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
		$Url_path[]="https://www.infiniumglobalresearch.com/portfolio-reports/".rtrim($row['path']);
		$counter++;
	}
	
	/* survey reports */
	$sql="SELECT * FROM igr_tb_survey_reports";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());	
	
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
		$Url_path[]="https://www.infiniumglobalresearch.com/survey-reports/".rtrim($row['url_path']);
		$counter++;
	}
	
	/* Infographics */
	$sql="SELECT title, url_path, image_path FROM igr_infographics_data";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());	
	
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
		$Url_path[]="https://www.infiniumglobalresearch.com/infographics/".rtrim($row['url_path']);
		$counter++;
	}
	
	/* Press Releases */
	$sql="SELECT * FROM igr_blog_data";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());	
	
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
		$Url_path[]="https://www.infiniumglobalresearch.com/press-release/".rtrim($row['Url_path']);
		$counter++;
	}


$employees = array();
$count_url=count($Url_path);
for($i=0; $i<$count_url; $i++)
{
  $employees [] = array(
  
  'loc' => $Url_path[$i],
  'lastmod' => date('Y-m-d'),
  'priority' => '0.2',
  'changefreq' => "daily"
  );
}
  
 /*  $employees [] = array(
  'loc' => 'Claud',
  'lastmod' => '20',
  'priority' => '22',
  'changefreq' => "$2000"
  ); */
  
  $doc = new DOMDocument();
  $doc->formatOutput = true;
  
  $r = $doc->createElement( "urlset" );
  $doc->appendChild( $r );
  
  foreach( $employees as $employee )
  {
	  $b = $doc->createElement( "url" );	  
		  $name = $doc->createElement( "loc" );
		  $name->appendChild(
			$doc->createTextNode( $employee['loc'] )
		  );
	  $b->appendChild( $name );	 
	  
	  $age = $doc->createElement( "lastmod" );
	  $age->appendChild(
		$doc->createTextNode( $employee['lastmod'] )
	  );
	  $b->appendChild( $age );
	  
	  $salary = $doc->createElement( "changefreq" );
	  $salary->appendChild(
		$doc->createTextNode( $employee['changefreq'] )
	  );
	  $b->appendChild( $salary );
	  
	  $priority = $doc->createElement( "priority" );
	  $priority->appendChild(
		$doc->createTextNode( $employee['priority'] )
	  );
	  $b->appendChild( $priority );		  
	  $r->appendChild( $b );
  }  
  // echo $doc->saveXML()."<br>";
  $doc->save("sitemap.xml") 


	
?>