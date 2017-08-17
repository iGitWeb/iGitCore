<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>{ module->title }</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- BEGIN CORE CSS -->
	<link rel="stylesheet" href="{ module->path }/theme/assets/admin1/css/admin1.css">
	<link rel="stylesheet" href="{ module->path }/theme/assets/globals/css/elements.css">
	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->
	<!-- END PLUGINS CSS -->

	<!-- FIX PLUGINS -->
	<link rel="stylesheet" href="{ module->path }/theme/assets/globals/css/plugins.css">
	<!-- END FIX PLUGINS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="{ module->path }/theme/assets/globals/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="{ module->path }/theme/assets/globals/img/icons/apple-touch-icon.png">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="{ module->path }/theme/assets/globals/plugins/modernizr/modernizr.min.js"></script>
</head>
<body class="http-error-outside" style="background-color:#3e50b4;">

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>¡Ups! <small>Página no encontrada</small></h4></div>
                    </div>
                    <div class="panel-body">
                        <h1 style="text-align:center;font-size:10em;">404</h1>
                        <p style="text-align:center;">¡Lo sentimos! La página a la que intentas acceder no se encuentra disponible actualmente o nunca existió.</p>
                    </div>
                </div>

			</div>
		</div><!--.row-->
        <div class="footer-links margin-top-40">
            <div class="row no-gutters">
                <div class="col-xs-6 bg-orange">
                    <a href="#" onclick="window.history.back();">
                        <span class="state">Regresar</span>
                        <span>Ir hacia atrás</span>
                        <span class="icon"><i class="ion-android-arrow-back"></i></span>
                    </a>
                </div>
                <div class="col-xs-6 bg-orange">
                    <a href="{ module->path }/">
                        <span class="state">Inicio</span>
                        <span>Ir a página principal</span>
                        <span class="icon"><i class="ion-android-arrow-forward"></i></span>
                    </a>
                </div>
            </div>
        </div>
	</div><!--.container-->
    

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="{ module->path }/theme/assets/globals/js/global-vendors.js"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

	<!-- PLEASURE Initializer -->
	<script src="{ module->path }/theme/assets/globals/js/pleasure.js"></script>
	<!-- ADMIN 1 Layout Functions -->
	<script src="{ module->path }/theme/assets/admin1/js/layout.js"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>
	$(document).ready(function () {
		Pleasure.init();
		Layout.init();
	});
	</script>
	<!-- END INITIALIZATION-->

	<!-- BEGIN Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', Pleasure.settings.ga.urchin, Pleasure.settings.ga.url);
		ga('send', 'pageview');
	</script>
	<!-- END Google Analytics -->

</body>
</html>