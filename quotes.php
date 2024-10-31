<?php

/*
Plugin Name: Quotes for you
Plugin URI: https://wordpress.org/plugins/quotes-for-you/
Description: The "Quotes" give us a little mouse of trust, hope, encourages us to dream, to work more and therefore with "Quotes" we may have more.
Author: Aalouane Soufiane
Version: 1.0
Author URI: http://soufiane.al/
Prefix:	saq_
*/

	

function saq_quotes()
{
	$saq_quotes="Always be yourself, express yourself, have faith in yourself, do not go out and look for a successful personality and duplicate it
If you spend too much time thinking about a thing, you'll never get it done
Knowledge will give you power, but character respect
Success is a lousy teacher. It seduces smart people into thinking they can't lose
Software is a great combination between artistry and engineering.
Initiative is doing the right thing without being told.
There is nothing like a dream to create the future.
A good head and a good heart are always a formidable combination.
If you find it in your heart to care for somebody else, you will have succeeded.
A good painting to me has always been like a friend. It keeps me company, comforts and inspires.
Don't stay in bed, unless you can make money in bed.
Art is magic delivered from the lie of being truth.
Great artists suffer for the people.
Fashion fades, only style remains the same.
Man is a creative retrospection of nature upon itself.
Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.
Hope is a waking dream.
There is no substitute for hard work.
Success is not final, failure is not fatal: it is the courage to continue that counts.
Success consists of going from failure to failure without loss of enthusiasm.
The starting point of all achievement is desire.
The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will.
All you need in this life is ignorance and confidence, and then success is sure.
Logic will get you from A to B. Imagination will take you everywhere.
You can't depend on your eyes when your imagination is out of focus.
The man who has no imagination has no wings.
Imagination rules the world.
If you can imagine it, you can achieve it. If you can dream it, you can become it.
To invent, you need a good imagination and a pile of junk.";

	// split the quotes with explode
	$saq_quotes=explode("\n",$saq_quotes);

	//	Chosen a value random
	echo "<p id='samq_id'style='float:right;font-size:11px;'>".wptexturize($saq_quotes[ mt_rand(0, count($saq_quotes) - 1)])."</p>";
}


add_action( 'admin_notices', 'saq_quotes' );

?>
