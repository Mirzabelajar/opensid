<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengelolaan Data <?= ucwords($this->setting->sebutan_dusun)?></h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid'); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('sid_core'); ?>"> Daftar <?= ucwords($this->setting->sebutan_dusun)?></a></li>
			<li class="active">Data <?= ucwords($this->setting->sebutan_dusun)?></li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="box box-info">
			<div class="box-header with-border">
				<a href="<?= site_url("sid_core")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Wilayah">
					<i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar <?= ucwords($this->setting->sebutan_dusun)?>
				</a>
			</div>
			<form id="validasi" action="<?= $form_action; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="dusun">Nama <?= ucwords($this->setting->sebutan_dusun); ?></label>
						<div class="col-sm-7">
							<input class="form-control input-sm nama_terbatas required" id="dusun" name="dusun" maxlength="50" type="text" placeholder="Nama <?= ucwords($this->setting->sebutan_dusun)?>" value="<?= $dusun?>">
						</div>
					</div>
					<?php if ($dusun): ?>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="kepala_lama">Kepala <?= ucwords($this->setting->sebutan_dusun)?> Sebelumnya</label>
							<div class="col-sm-7">
								<p class="text-muted well well-sm no-shadow">
									<strong><?= $individu["nama"]; ?></strong> - <?= $individu["nik"]; ?>
								</p>
							</div>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="id_kepala">NIK / Nama Kepala <?= ucwords($this->setting->sebutan_dusun)?></label>
						<div class="col-sm-7">
							<select class="form-control select2" id="id_kepala" name="id_kepala">
								<option selected="selected">-- Silakan Masukan NIK / Nama --</option>
								<?php foreach ($penduduk as $data): ?>
									<option value="<?= $data['id']; ?>">NIK : <?= $data['nik'] . " - " . $data['nama'] . " - " . $data['dusun']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class='box-footer'>
					<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
					<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
				</div>
			</form>
		</div>
	</section>
</div>
<?php $this->load->view('global/js_validasi'); ?>

