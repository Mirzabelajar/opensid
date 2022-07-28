<div class="box box-primary">
	<div class="box-body box-profile">
		<img class="penduduk" id="foto" src="<?= AmbilFoto($foto, '', $id_sex); ?>" alt="Foto Penduduk">
		<br/>
		<div class="input-group input-group-sm text-center">
			<input type="file" class="hidden" id="file" name="foto">
			<input type="text" class="hidden" id="file_path" name="foto">
			<input type="hidden" name="old_foto" id="old_foto" value="<?= $foto; ?>">
			<span class="input-group-btn btn-group-vertical">
				<button type="button" class="btn btn-info btn-flat" style="margin-bottom:5px;" id="file_browser"><i class="fa fa-upload"></i> Unggah</button>
				<button type="button" class="btn btn-danger btn-flat" style="margin-bottom:5px;" onclick="kamera();"><i class="fa fa-camera"></i> Kamera</button>
				<?php if (! empty($penduduk['id'])) : ?>
                    <a href="<?= base_url("penduduk/foto_bawaan/{$penduduk['id']}") ?>" class="btn btn-warning btn-flat" role="button"><i class="fa fa-undo"></i> Kembalikan</a>
                <?php endif ?>
			</span>
		</div>
	</div>
</div>
