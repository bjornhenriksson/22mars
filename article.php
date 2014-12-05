<?php 

$xml = simplexml_load_file("https://news.google.se/?output=rss") or die("Error: Cannot create object");

//print_r($xml);


foreach($xml->channel->item as $article) { 

	if(preg_match("/(kinberg|löfven|nyval|sd|väljare)/i", $article->title)){

		include 'conn.php';

		$stmt = $db->prepare("INSERT INTO nyval (title, link, guid, pubDate) VALUES (:title, :link, :guid, :pubDate)");
		$stmt->bindParam(':title', $article->title);
		$stmt->bindParam(':link', $article->link);
		$stmt->bindParam(':guid', $article->guid);
		$stmt->bindParam(':pubDate', $article->pubDate);

		$stmt->execute();

	}

}


?>