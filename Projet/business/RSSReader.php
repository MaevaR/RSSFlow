<?php

include __DIR__ . '/IReader.php';
include __DIR__ . '/../model/Feed.php';

class RSSReader implements IReader
{
	
	private $data;
	
	public function read()
	{
		//$feed = new SimpleXMLElement($url);
		
		$feed = new SimpleXMLElement("http://feeds.betacie.com/viedemerde",NULL,true);
		
		print "printing ... \n";
		
		$role = $feed->attributes();
		foreach($feed as $key => $value) {
           
           
           
            echo("[".$key ."] ".$value . "<br />");
			if ($key == "entry")
				foreach($feed->Entry[0] as $subKey => $subValue) {
					
					echo("[".$subKey ."] ".$subValue . "<br />");
					
				}
        }
		
		
		echo "success";
		

		
	}
	
	public function update($feed){}
	
	
	
}