<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pegawai/add') ?>"><i class="fas fa-plus"></i>Tambah Pegawai</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Jabatan</th>
										<th>Jenis Kelamin</th>
										<th>Poli</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pegawai as $pegawai): ?>
									<tr>
										<td width="150">
											<?php echo $pegawai->nama_pegawai ?>
										</td>
										<td class="small">
											<?php echo substr($product->alamat, 0, 120) ?>...</td>
                                        <td>
											<?php echo $pegawai->jabatan ?>
										</td>
                                        <td>
											<?php echo $pegawai->jenis_kelamin ?>
										</td>
                                        <td>
											<?php echo $pegawai->poli ?>
										</td>
                                       
										<td width="250">
											<a href="<?php echo site_url('admin/pegawai/edit/'.$pegawai->nip) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$pegawai->nip) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>

	</div>


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>