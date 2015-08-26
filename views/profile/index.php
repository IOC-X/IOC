<div id="profile-card-custom">
<div class="profile-card-wrap">
	<input id="check" type="checkbox" class="check"><label for="check" class="toggle"> + </label>
	<div class="content" data-text="Tiffany hwang">
		<p></p>
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
			firstname = data[0].firstName;
			lastname = data[0].lastName;
		});
		$("#username").append(firstname + lastname);
	});

</script>