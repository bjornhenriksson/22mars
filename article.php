<?php 

$xml = simplexml_load_file("http://www.aftonbladet.se/nyheter/rss.xml") or die("Error: Cannot create object");


foreach($xml->channel->item as $article) { 

	if(preg_match("/(kinberg|löfven|nyval)/i", $article->title)){

		include 'conn.php';

		$stmt = $db->prepare("INSERT INTO nyval (title, link, pubDate, image) VALUES (:title, :link, :pubDate, :description)");
		$stmt->bindParam(':title', $article->title);
		$stmt->bindParam(':link', $article->link);
		$stmt->bindParam(':pubDate', $article->pubDate);
		$stmt->bindParam(':description', $article->description);

		$stmt->execute();

	}

}

?>