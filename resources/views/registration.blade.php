<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    </head>
	<body>
		<h2>Laravel Authentication - Registration</h2>
	    <?php $messages = $errors->all('<p styles="color: red">:message</p>') ?>
	    <?php foreach ($message as $msg): ?>
	    	<?= $msg ?>
	    <?php endforeach; ?>

	    <?= forem::open () ?>
	    	<?= Form::label('email', 'Email address: ') ?>
	    	<?= Form::text('email', Input::old('email')) ?>
	    	<br>
	    	<?= Form::label('password', 'Password: ') ?>
	    	<?= Form::password('password') ?>
	    	<br>
	    	<?= Form::label('password_confirm', 'Retype Password: ') ?>
	    	<?= Form::password('password_confirm') ?>
	    	<br>
	    	<?= Form::label('name', 'Name: ') ?>
	    	<?= Form::text('name', Input::old('name')) ?>
	    	<br>
	    	<?= Form::label('admin', 'Admin?: ')?>
	    	<?= Form::checkbox('admin', 'true', Input::old('admin')) ?>
	    	<br>
	    	<?= Form::submit('Register!') ?>
	    	<?= Form::close() ?>
	</body>
</html>