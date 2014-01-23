<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CADence</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<?php		
		    		$array = $this->session->all_userdata();
		    		if(isset($array['user_data'])){
						echo "<li><a href='/logout'>Logout</a></li>";
		    		}
		    	?>
		    </ul>
		</div>
	</div>
</div>