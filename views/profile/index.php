<div id="profile-card-custom">
<div class="profile-card-wrap">
	<input id="check" type="checkbox" class="check"><label for="check" class="toggle"> + </label>
	<div class="content" data-text="Tiffany hwang">
		<p><?php Session::init(); //echo $_SESSION['loggedIn']?></p>

		<?php
			//Session::init();
			$employeeName = $_SESSION['loggedIn'];
			require 'models/Login_model.php';
			$model = new Login_model();
			$data = $model->getEmployeeCode($employeeName);
			//print_r($data);
			//echo $data[0][0];
			$empCode = $data[0][0];
			//echo $empCode;
			$data = $model->loadProfileDetails($empCode);
 			echo "<h3>" . $data[0][1] . " " . $data[0][2] . "</h3>";
			echo "<b> Type : " . $data[0][8] . "</b><br/>"; 			
			echo "<b> NIC : " . $data[0][4] . "</b><br/>"; 			
			echo "<b> Birthday : " . $data[0][6] . "</b><br/>"; 			
			//print_r($data);
			// echo $data[0][1];
		?>
	</div>
	<div class="link-info">
		<div class="social">
		<!--	<a class="link oc" href="https://openclassrooms.com/membres/igormarty" target="_blank"><i class="fa fa-graduation-cap"></i></a>
			<a class="link tw" href="https://twitter.com/igor_marty" target="_blank"><i class="fa fa-twitter"></i></a>
			<a class="link cp" href="http://codepen.io/IMarty/" target="_blank"><i class="fa fa-codepen"></i></a>
			<a class="link gh" href="https://github.com/IMarty" target="_blank"><i class="fa fa-github"></i></a>
			<a class="link li" href="https://fr.linkedin.com/in/igormarty" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a class="link gp" href="https://plus.google.com/u/0/+IgorMarty" target="_blank"><i class="fa fa-google-plus"></i></a>
		-->
		</div>
		<div class="photo"></div>
	</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$.getJSON('profile/loadProfileCode',function(data){
			console.log(data);
			//firstname = data[0].firstName;
			//lastname = data[0].lastName;
		});
		//$("#username").append(firstname + lastname);
	});

</script>