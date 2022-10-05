<!-- dari head -->

<title><?php echo "Sistem Informasi Rumah Sakit" .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">


<!-- dari navbar -->


<a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo "Sistem Informasi Rumah Sakit" ?></a>