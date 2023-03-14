<?php include('re-skinning_config/config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php echo $reskinning_website_name ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="<?php echo $reskinning_website_description ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="icon" type="image/ico" href="img/favicon.ico">
		<link rel="stylesheet" href="free/1.0.0/icon-font.min.css">
		<link rel="stylesheet" href="ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">
        <style> :root { --main-bg-color: #<?php echo $reskinning_website_color ?>; } </style>
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	</head>
	<body class="single-offer-page" onload="create()">
		<header>
			<div class="container">
				<div class="header-content">
					<div class="logo-wrapper">
						<a href="index.php"><img src="img/logo.png" class="img-fluid logo-img" alt="<?php echo $reskinning_website_name ?>"></a>
					</div>
					<div class="search-wrapper">
						<div class="search-form-wrapper">
							<form id="search-form-subpage" action="index.php" method="GET">
								<div class="search-input-wrapper">
									<i class="fa fa-search"></i>
									<input type="text" name="search-term" class="search" id="search" value="" placeholder="Search Deals...">
								</div>
							</form>
						</div>
					</div>
					<div class="header-nav-wrapper">
						<ul id="header-nav">
							<li>Log In</li>
							<li class="nav-button">Join for Free</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</header>