<!-- Perubahan script coding untuk bisa menampilkan modal bootstrap edit password pengguna login -->
<div class="modal-body">
	<div class="row">
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="<?= AmbilFoto($main['foto']); ?>" alt="Foto">
				</div>
			</div>
			<?php if ($main['email_verified_at'] === null): ?>
			<form action="<?= site_url('user_setting/kirim_verifikasi') ?>" method="POST">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-sm btn-warning btn-flat btn-block"><i class="fa fa-share-square"></i> Verifikasi Email</button>
				</span>
			</form>
			<?php endif; ?>
		</div>
		<div class="col-sm-9">
			<div class="box box-danger">
				<form action="<?= site_url("user_setting/update/{$main['id']}") ?>" method="POST" id="validasi" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="tgl_peristiwa">Username</label>
							<input name="nama" type="hidden" value="<?= $main['nama'] ?>" />
							<input class="form-control input-sm" type="text" value="<?= $main['username'] ?>" disabled=""></input>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control input-sm" type="text" value="<?= $main['email'] ?>" readonly></input>
						</div>
						<div class="form-group">
							<label for="catatan">Nama Lengkap</label>
							<input class="form-control input-sm" type="text" name="nama" value="<?= $main['nama'] ?>"></input>
						</div>
						<div class="form-group">
							<label for="catatan">Kata Sandi Lama</label>
							<input class="form-control input-sm required" type="password" name="pass_lama"></input>
						</div>
						<div class="form-group">
							<label for="catatan">Kata Sandi Baru</label>
							<input class="form-control input-sm required pwdLengthNist" type="password" id="pass_baru" name="pass_baru"></input>
						</div>
						<div class="form-group">
							<label for="catatan">Kata Sandi Baru (Ulangi)</label>
							<input class="form-control input-sm required pwdLengthNist" type="password" id="pass_baru1" name="pass_baru1"></input>
						</div>
						<div class="form-group">
							<label for="catatan">Ganti Foto</label>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" id="file_path" name="foto">
								<input type="file" class="hidden" id="file" name="foto">
								<input type="hidden" name="old_foto" value="<?= $pamong['foto'] ?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
						<div class="form-group">
		                    <label for="notif_telegram" class="control-label">Notifikasi Telegram</label>
		                    <div class="btn-group col-xs-12 col-sm-8 input-group" data-toggle="buttons">
		                      <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= compared_return($main['notif_telegram'], '1') ?>">
		                        <input type="radio" name="notif_telegram" class="form-check-input" value="1" autocomplete="off" <?= selected($main['notif_telegram'], 1) ?>> Aktif
		                      </label>
		                      <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= compared_return($auth['notif_telegram'], '0') ?>">
		                        <input type="radio" name="notif_telegram" class="form-check-input" value="0" autocomplete="off" <?= selected($auth['notif_telegram'], 0) ?> > Matikan
		                      </label>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="catatan">User ID Telegram</label>
		                    <input class="form-control input-sm" type="text" id="id_telegram" name="id_telegram" value="<?= $main['id_telegram'] ?>" />
		                </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
						<button id="btnSubmit" type="submit" class="btn btn-social btn-flat btn-info btn-sm"><i class='fa fa-check'></i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/js/validasi.js"></script>
<script src="<?= base_url() ?>assets/js/localization/messages_id.js"></script>
<script>
	$('document').ready(function() {
		setTimeout(function() {
			$('#pass_baru1').rules('add', {
				equalTo: '#pass_baru'
			})
		}, 500);

		$('#file_browser').click(function(e) {
			e.preventDefault();
			$('#file').click();
		});
		$('#file').change(function() {
			$('#file_path').val($(this).val());
		});
		$('#file_path').click(function() {
			$('#file_browser').click();
		});
	});
</script>