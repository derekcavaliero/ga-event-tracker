<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 cover-bg"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 cover-bg"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 cover-bg"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js cover-bg">
<!--<![endif]-->

<head>
    <title><?php echo $page['title']; ?> | jquery.ga-events.js</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/bootstrap-docs.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">

    <?php include_once( dirname(__FILE__) . '/analytics.php' ); ?>
</head>

<body>
    <header id="site-head">
        <div class="container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><a href="/">jquery.ga-events.js</a></h3><?php include_once( dirname(__FILE__) . '/nav.php' ); ?>
                </div>
            </div>
        </div>
    </header>

	<div id="banner">
		<div class="container">
	        <div class="row">
	            <div class="col-md-8">

					<div class="banner-content">
			            <h1><?php echo $page['title']; ?></h1>
						<p class="lead"><?php echo $page['lead']; ?></p>
					</div>

	            </div>
	            <div class="col-md-4 text-center">
					<div class="table">
						<div class="vertical-center">
							<a href="#"
								data-ga-track
								data-ga-category="Downloads"
								data-ga-action="v1.2"
								data-ga-delay="false"
								data-ga-nonint="true"
								class="btn btn-lg btn-outline btn-outline-white download-button" download><i class="glyphicon glyphicon-cloud-download"></i> jquery.ga-events.js <small>v1.2</small></a>
						</div>
					</div>

	            </div>
	        </div>
		</div>
	</div>