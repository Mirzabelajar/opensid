<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Error</title>
	<<link rel="stylesheet" type="text/css" href="<?php echo '../../assets/bootstrap/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo '../../assets/css/font-awesome.min.css' ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo '../../assets/css/errors.css' ?>" />
</head>
<body>
<div class="container">
	<div class="error-page">
		<h2 class="headline text-danger"> 500</h2>

		<div class="error-content">
			<h3><i class="fa fa-warning text-danger"></i> <?php echo strip_tags($heading); ?></h3>
			<?php error_log(strip_tags($message)); ?>
			<p>
				<?php echo $message; ?>

				Harap laporkan masalah ini, agar kami dapat mencarikan solusinya.
				Untuk sementara Anda dapat kembali ke halaman <a href="../../index.php">awal</a>.
			</p>
		</div>

	</div>
</div>
</body>
</html>