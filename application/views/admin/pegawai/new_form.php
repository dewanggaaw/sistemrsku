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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pegawai/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/pegawai/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama_pegawai">Nama*</label>
								<input class="form-control <?php echo form_error('nama_pegawai') ? 'is-invalid':'' ?>"
								 type="text" name="nama_pegawai" placeholder="Nama Pegawai" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_pegawai') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="alamat">Alamat*</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan*</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
								 type="text" name="jabatan" min="0" placeholder="Jabatan" />
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="jenis_kelamin">Jenis kelamin*</label>
								<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_kelamin" min="0" placeholder="Jenis Kelamin" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="poli">Poli*</label>
								<input class="form-control <?php echo form_error('poli') ? 'is-invalid':'' ?>"
								 type="text" name="poli" min="0" placeholder="Poli" />
								<div class="invalid-feedback">
									<?php echo form_error('poli') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>

		</div>

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>