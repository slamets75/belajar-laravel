<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Selamat datang di Blog ini!</h1>

	<h2>Link Artikel disini - <?php echo e($blog); ?> !!</h2>

	

	<h4>Our Team </h4>

	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <li> <?php echo e($user); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>