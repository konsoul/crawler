<html>
<body>
<?php 

include("simple_html_dom.php");

$url = 'http://www.terrifehlberg.com/';
// Create DOM from URL or file
$html = file_get_html($url);


// Finds the links on the site
foreach($html->find('a') as $element){

	//Only returns URL's that are part of the site
	if (strpos($element->href, $url) !== FALSE){

	echo "<h1>For page:".$element->href." You have...</h1><p>";
	
	$pageHtml = file_get_html($element->href);
	
	 //Now to show what DIV elements are on the page
	foreach($pageHtml ->find('a') as $element){
	
	if (strpos($element->href, 'idxco') !== FALSE){
	     
	     
	 echo $element-> href . '<br>'; 
	     }
	      
	}

    
}
}


?>
</body>
</html>

//This is to test git.....
