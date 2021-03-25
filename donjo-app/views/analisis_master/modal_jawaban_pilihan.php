<script>
	$('#file_browser2').click(function(e)
	{
			e.preventDefault();
			$('#file2').click();
	});

	$('#file2').change(function()
	{
			$('#file_path2').val($(this).val());
	});

	$('#file_path2').click(function()
	{
			$('#file_browser2').click();
	});
</script>
<div class="modal fade" id="modalJawaban" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class='modal-dialog modal-dialog-scrollable'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
				<h4 class='modal-title' id='myModalLabel'> Modal Jawaban Pilihan</h4>
			</div>
			<form id="validasi" action="<?= $form_action ?>" method="POST" enctype="multipart/form-data">
				<div class='modal-body'>
					<div class="row">
						<div class="col-sm-12">
							<div class="box box-info">
								<div class="box-body">
									<?php foreach ($data_import['pertanyaan'] as $data){ ?>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<label class="control-label">Jawaban untuk kategori <span><?= $data['pertanyaan'] ?></span></label>
												<div class="table-responsive">
													<table class="table table-bordered table-striped dataTable table-hover">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th>Kode</th>
																<th>Jawaban</th>
																<th>Nilai/Ukuran</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($data['unique_value'] as $key => $unique_value){ ?>
															<tr>
																<td><?= $key+1 ?></td>
																<td><?= $unique_value ?></td>
																<td><input type="number" class="form-control input-sm"></td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-social btn-flat btn-danger btn-sm pull-left" id="btn-prev-jawaban"><i class='fa fa-arrow-left'></i> Kembali</button>
									<button type="submit" class="btn btn-social btn-flat btn-info btn-sm" id="btn-next-jawaban"><i class='fa fa-arrow-right'></i> Lanjutkan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

