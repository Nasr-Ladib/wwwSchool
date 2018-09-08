<html>
<body>
	<h1>Activate account for <?php echo $identity;
	echo $user_id.'hello';
	?></h1>
	<p>Please click this link to <?php echo anchor('auth/activate_account/'. $user_id .'/'. $activation_token, 'Activate Your Account');?>.</p>
</body>
</html>