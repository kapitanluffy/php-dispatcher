<?php

class Welcome {

	public function index(){
		echo '<p>Your <b>Welcome</b> controller inside your <b>demo_app</b> is succesfully loaded!</p>';

		echo "<p>Try loading a different <a href='".BASEURL."/index.php/my_action' title='".BASEURL."/my_action'>action</a></p>";
	}
	
	public function my_action(){
		echo '<p><b>my_action()</b> loaded!</p>';

		$query = func_get_args();
		if(!empty($query)){
			echo '<p>Cool eh?</p>';
			echo '<pre>';
			print_r($query);
			echo '</pre>';
		} else {
			echo "<p>Next, try putting <a href='".BASEURL."/index.php/my_action/query_1/query_2/query_3'>queries</a>!</p>";
		}
	}
}

?>