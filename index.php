 <?php 

function delete_key($array,$key)
{
	unset($array[$key]);
	return $array;
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ssa</title>
 </head>
 <body>

<?php 

		$masiv = 
		[
			    "name" => "Software",
			    "properties" => 
			    [
			        "version" => "",
			        "size" => 195,
			        "param" => 30
			    ],
				    "author" => 
				    [
				    	[
			            "name" => "",
			            "email"=> ""
				        ],
				        [
					        "name" => "Ivan",
				            "email"=> "mail@example.com"
					    ]
				    ]
		];
function result ($example)
{
	foreach ($example as $key => $value)
		{
			if(is_array($value))
			{
				echo "arr ";
				$example[$key] = result($value);
			}
			elseif ($value == '')
			{
				echo "notOK ";
				 $example =delete_key($example,$key);
			}
			else 
			{
				echo "OK ";
			}
		}
		return $example;
}
		
 	
$result = result($masiv);

print_r($result);

?>
 
 </body>
 </html>
