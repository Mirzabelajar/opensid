<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		<?=$this->setting->login_title
		. ' ' . ucwords($this->setting->sebutan_desa)
		. (($header['nama_desa']) ? ' ' . $header['nama_desa']: '')
		. get_dynamic_title_page_from_path();
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/login-style.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/login-form-elements.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.bar.css" media="screen" type="text/css" />
	<?php if (is_file("desa/css/siteman.css")): ?>
		<link type='text/css' href="<?= base_url()?>desa/css/siteman.css" rel='Stylesheet' />
	<?php endif; ?>
	<?php if (is_file(LOKASI_LOGO_DESA ."favicon.ico")): ?>
		<link rel="shortcut icon" href="<?= base_url()?><?=LOKASI_LOGO_DESA?>favicon.ico" />
	<?php else: ?>
		<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
	<?php endif; ?>
	<script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
	<?php require __DIR__ .'/head_tags.php' ?>
</head>
<body class="login">
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4 form-box">
						<div class="form-top">
							<a href="<?=site_url(); ?>first/"><img src="<?=gambar_desa($header['logo']);?>" alt="<?=$header['nama_desa']?>" class="img-responsive" /></a>
							<div class="login-footer-top"><h1><?=ucwords($this->setting->sebutan_desa)?> <?=$header['nama_desa']?></h1>
								<h3>
									<br /><?=$header['alamat_kantor']?><br />Kodepos <?=$header['kode_pos']?>
									<br /><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$header['nama_kecamatan']?><br /><?=ucwords($this->setting->sebutan_kabupaten)?> <?=$header['nama_kabupaten']?>
								</h3>
							</div>
							<hr />
						</div>
						<div class="form-bottom">
							<form action="<?=site_url("setting/update_key/$main[id]")?>" method="POST" id="validasi" enctype="multipart/form-data">
								<div class="form-group">
									<div class="form-group">
										<div class="input-group">
											<input class="form-control input-sm required pwdLength" type="password" id="pass_baru" name="pass_baru" placeholder="File Manager Key Baru"></input>
											<span class="input-group-btn">
												<button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
											</span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input class="form-control input-sm required pwdLength" type="password" id="pass_baru1" name="pass_baru1" placeholder="FM Key Baru (Ulangi)"></input>
											<span class="input-group-btn">
												<button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
											</span>
										</div>
									</div>
								</div>
								<hr />
								<button type="submit" id="btnSubmit" class="btn btn-social btn-flat btn-info btn-sm"><i class='fa fa-check'></i> Simpan File Manager Key</button>
							</form>
							<hr/>
							<div class="login-footer-bottom"><a href="https://github.com/OpenSID/OpenSID" target="_blank">OpenSID</a> <?= substr(AmbilVersi(), 0, 11)?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/validasi.js"></script>
<script>
$('document').ready(function()
{

	$(".reveal").on('click',function() {
		var $pwd = $(".input-sm");
		if ($pwd.attr('type') === 'password') {
			$pwd.attr('type', 'text');
		} else {
			$pwd.attr('type', 'password');
		}
	});

	$(function () {
		$("#btnSubmit").click(function () {
			var password = $("#pass_baru").val();
			var confirmPassword = $("#pass_baru1").val();
			if (password != confirmPassword) {
				alert("File Manager Key Baru dan FMK Baru (Ulangi) Tidak Sama.");
				return false;
			}
			return true;
		});
	});


});
</script>
<style>
span.input-group-btn {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  z-index: 2;
}
</style>
