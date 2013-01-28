<?php

class Welcome {

	public function index(){
		echo '<p>Your <b>Welcome</b> controller inside your <b>demo_app</b> is succesfully loaded!</p>';

		$url = FEC_URL_DRIVER::anchor('index.php/my_action');

		echo "<p>Try loading a different <a href='". $url ."'>action</a></p>";
	}
	
	public function my_action(){
		echo '<p><b>my_action()</b> loaded!</p>';

		$url = FEC_URL_DRIVER::anchor('index.php/gimme_queries/query_1/query_2/query_3/');

		echo "<p>Next, try putting <a href='". $url . "'>queries</a>!</p>";
	}

	public function gimme_queries(){
		$queries = FEC_URL_DRIVER::queries();

		if(!empty($queries)){

			echo '<p>Cool eh?</p>';
			echo '<pre>';
			print_r($queries);
			echo '</pre>';

			$query = FEC_URL_DRIVER::query(0);

			echo "<p>The 1st query is so important that we need to emphasize it! <b style='font-size:1.5em'>". $query ."</b></p>";

			$url = FEC_URL_DRIVER::anchor('index.php/welcome/redirect_me');

			echo "<p>Next, this <a href='". $url . "'>link</a> will redirect you to the start</p>";

		} else {

			echo "<p>Cmon, at least put one query :(</p>";

		}
	}

	public function redirect_me(){
		FEC_URL_DRIVER::redirect('index.php/welcome/index');
	}
}

?>
