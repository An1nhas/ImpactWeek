
	<div class="container">
		<div class="post-container row">
			<a href='profile'>About</a>
			<a href='my_friends'>Friends</a>
			<ul>
				<li><a href='friend_request_recieved'>Friend requests</a></li>
				<li><a href='friend_request_sent'>Friend requests sent</a></li>

		</div>
		<?php
			foreach($friends as $row) {
				echo 
				"<div>" . $row['first_name'] . " " . 
					$row['last_name'] . 
					"<img src='" . $row['picture_url'] . "' alt='profile_pic'>
				</div>" ;
			}
		?>



	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
