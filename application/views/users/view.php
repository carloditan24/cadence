<html>
<?php
    include('include/styles.html');
?>
<body>
	<p>
		<a href='/'>Login</a>
		<a href='/user/add'>Add users</a>
	</p>
	<p>
		<?php
		if($this->session->flashdata('data')) echo $this->session->flashdata('data')->message;
		?>
	</p>
	<p>
		<h3>Users</h3>
	</p>
	<table>
		<?php
		foreach($users as $user){
		?>
			<tr>
				<td>
					<a href="<?php echo 'user/edit?id='.$user->id;?>"> 
					<?php echo $user->username;?>
					</a>
				</td>
				<td>
					<a href="<?php echo 'user/delete?id='.$user->id;?>">
						<button>Delete</button>
					</a>
				</td>
			</tr>
				<?php
		}
		?>
	</table>
</body>
</html>
