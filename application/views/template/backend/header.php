<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . " - ".$web_title) : $web_title); ?></title>
    
    <!-- Meta Website -->
	<meta name="description" content="<?= $web_desc; ?>">
	<meta property="og:title" content="<?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . $web_title) : $web_title); ?>">
	<meta property="og:description" content="<?= $web_desc; ?>">
	<meta property="og:image" content="<?= base_url(); ?>assets/images/<?= $web_icon?>">
	<meta property="og:url" content="<?= base_url(uri_string()) ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/<?= $web_icon;?>">

    <!-- page css -->
    <link href="<?= base_url();?>assets/vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">

    <!-- Core css -->
    <link href="<?= base_url();?>assets/css/app.min.css" rel="stylesheet">

    <!-- stylesheet -->
    <link href="<?= base_url();?>assets/css/custom.css?<?= time();?>" rel="stylesheet">

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">