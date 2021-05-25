<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no"/>

	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon-16x16.png')}}" sizes="16x16">
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon-32x32.png')}}" sizes="32x32">

	<title>Админ панел - Архангай</title>

	<!-- additional styles for plugins -->
	<!-- weather icons -->
	<link rel="stylesheet" href="{{asset('bower_components/weather-icons/css/weather-icons.min.css')}}" media="all">
	<!-- metrics graphics (charts) -->
	<link rel="stylesheet" href="{{asset('bower_components/metrics-graphics/dist/metricsgraphics.css')}}">
	<!-- chartist -->
	<link rel="stylesheet" href="{{asset('bower_components/chartist/dist/chartist.min.css')}}">

	<!-- uikit -->
	<link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

	<!-- flag icons -->
	<link rel="stylesheet" href="{{asset('assets/icons/flags/flags.min.css')}}" media="all">


	<!-- altair admin -->
	<link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" media="all">

	<!-- themes -->
	<link rel="stylesheet" href="{{asset('assets/css/themes/themes_combined.min.css')}}" media="all">
	<style>
		.menu_title, .menu_icon i {
			color: #fff;
		}
	</style>
</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
	<header id="header_main">
		<div class="header_main_content">
			<nav class="uk-navbar">
				<div class="uk-navbar-flip">
					<ul class="uk-navbar-nav user_actions">
						<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
							<a href="#" class="user_action_image"><img class="md-user-image" src="<?php echo Session::get('profile'); ?>" alt=""/></a>
							<div class="uk-dropdown uk-dropdown-small">
								<ul class="uk-nav js-uk-prevent">
									<li><a href="{{ asset('/profile') }}">Профайл</a></li>
									<li><a href="{{ asset('/logout') }}">Системээс гарах</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- main sidebar -->
	<aside id="sidebar_main" style="background-color: #0c6cb5;">
		<div class="sidebar_main_header">
			<div class="sidebar_logo">
				<a href="{{ asset('/') }}" class="sSidebar_hide sidebar_logo_large" style="margin-left: 65px; margin-top: 4px;">
					<img class="logo_regular" src="{{asset('assets/images/logo/arkhangai-logo.png')}}" alt="Arkhangai - Dashboard" width="90"/>
				</a>
			</div>
		</div>

		<?php $permission = Session::get('permission'); ?>

		<div class="menu_section">
			<ul>
				<li class="Home" title="Dashboard">
					<a href="{{asset('/')}}">
						<span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
						<span class="menu_title">Нүүр хуудас</span>
					</a>
				</li>

				<?php if ($permission['medee'] == 1) { ?>
					<li title="Мэдээ">
						<a href="{{asset('news')}}">
							<span class="menu_icon"><i class="material-icons">language</i></span>
							<span class="menu_title">Мэдээ</span>
						</a>
					</li>
					<li title="Мэдээний төрөл">
						<a href="{{asset('newscat-list')}}">
							<span class="menu_icon"><i class="material-icons">local_offer</i></span>
							<span class="menu_title">Мэдээний төрөл</span>
						</a>
					</li>
				<?php } ?>
				<?php if ($permission['tender'] == 1) { ?>
					<li title="Тендер">
						<a href="{{asset('tenderlist')}}">
							<span class="menu_icon"><i class="material-icons">work</i></span>
							<span class="menu_title">Тендер</span>
						</a>
					</li>
					<li title="Тендер төрөл">
						<a href="{{asset('tendertorol-list')}}">
							<span class="menu_icon"><i class="material-icons">turned_in</i></span>
							<span class="menu_title">Тендер төрөл</span>
						</a>
					</li>
				<?php } ?>
				<?php if ($permission['support'] == 1) { ?>
					<li title="Mailbox">
						<a href="{{asset('support')}}">
							<span class="menu_icon"><i class="material-icons">feedback</i></span>
							<span class="menu_title">Санал хүсэлт</span>
						</a>
					</li>
				<?php } ?>
				<?php if ($permission['q_and_a'] == 1) { ?>
					<li title="Mailbox">
						<a href="{{asset('votes')}}">
							<span class="menu_icon"><i class="material-icons">plus_one</i></span>
							<span class="menu_title">Санал асуулга</span>
						</a>
					</li>
				<?php } ?>
				<?php if ($permission['youtube'] == 1) { ?>
					<li title="Youtube">
						<a href="{{asset('youtube')}}">
							<span class="menu_icon"><i class="material-icons">web_asset</i></span>
							<span class="menu_title">Youtube</span>
						</a>
					</li>
				<?php } ?>
				<?php if ($permission['medeelel'] == 1) { ?>
					<li title="Medeelel">
						<a href="{{asset('medeelel-list')}}">
							<span class="menu_icon"><i class="material-icons">language</i></span>
							<span class="menu_title">Мэдээлэл</span>
						</a>
					</li>
				<?php } ?>
				<?php if (Session::get('userid') == 1) { ?>
					<li title="">
						<a href="{{asset('users')}}">
							<span class="menu_icon"><i class="material-icons">perm_identity</i></span>
							<span class="menu_title">Гишүүд</span>
						</a>
					</li>
				<?php } ?>

			</ul>
		</div>
	</aside>

	<div id="page_content">
		<div id="page_content_inner">

			@yield('content')

		</div>
	</div>

	<!-- secondary sidebar -->
	<!-- secondary sidebar end -->

	<!-- google web fonts -->
	
	<script>
		WebFontConfig = {
			google: {
				families: [
				'Source+Code+Pro:400,700:latin',
				'Roboto:400,300,500,700,400italic:latin'
				]
			}
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script><!-- google web fonts -->

	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugin/tinymce/tinymce.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugin/tinymce/init-tinymce.js')}}"></script>

	<!-- datatables -->
	<script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<!-- datatables buttons-->
	<script src="{{asset('bower_components/datatables-buttons/js/dataTables.buttons.js')}}"></script>

	<!--  form file input functions -->
	<script src="{{asset('assets/js/pages/forms_file_input.min.js')}}"></script>

	<!-- common functions -->
	<script src="{{asset('assets/js/common.min.js')}}"></script>
	<!-- uikit functions -->
	<script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
	<!-- altair common functions/helpers -->
	<script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>


	<!-- page specific plugins -->
	<!-- datatables -->
	<script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

	<!-- datatables custom integration -->
	<script src="{{asset('assets/js/custom/datatables/datatables.uikit.min.js')}}"></script>
	<!--  datatables functions -->
	<script src="{{asset('assets/js/pages/plugins_datatables.min.js')}}"></script>
	<!-- datatables buttons-->
	<script src="{{asset('bower_components/datatables-buttons/js/dataTables.buttons.js')}}"></script>
	<script src="{{asset('assets/js/custom/datatables/buttons.uikit.js')}}"></script>
	<script src="{{asset('bower_components/jszip/dist/jszip.min.js')}}"></script>
	<script src="{{asset('bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
	<script src="{{asset('bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
	<script src="{{asset('bower_components/datatables-buttons/js/buttons.colVis.js')}}"></script>
	<script src="{{asset('bower_components/datatables-buttons/js/buttons.html5.js')}}"></script>
	<script src="{{asset('bower_components/datatables-buttons/js/buttons.print.js')}}"></script>


	<!-- page specific plugins -->
	<!-- d3 -->
	<script src="{{asset('bower_components/d3/d3.min.js')}}"></script>
	<!-- metrics graphics (charts) -->
	<script src="{{asset('bower_components/metrics-graphics/dist/metricsgraphics.min.js')}}"></script>
	<!-- chartist (charts) -->
	<script src="{{asset('bower_components/chartist/dist/chartist.min.js')}}"></script>
	<!-- maplace (google maps) -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC2FodI8g-iCz1KHRFE7_4r8MFLA7Zbyhk"></script>
	<script src="{{asset('bower_components/maplace-js/dist/maplace.min.js')}}"></script>
	<!-- peity (small charts) -->
	<script src="{{asset('bower_components/peity/jquery.peity.min.js')}}"></script>
	<!-- easy-pie-chart (circular statistics) -->
	<script src="{{asset('bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
	<!-- countUp -->
	<script src="{{asset('bower_components/countUp.js/dist/countUp.min.js')}}"></script>
	<!-- handlebars.js -->
	<script src="{{asset('bower_components/handlebars/handlebars.min.js')}}"></script>
	<script src="{{asset('assets/js/custom/handlebars_helpers.min.js')}}"></script>
	<!-- CLNDR -->
	<script src="{{asset('bower_components/clndr/clndr.min.js')}}"></script>

	<!--  dashbord functions -->
	<script src="{{asset('assets/js/pages/dashboard.min.js')}}"></script>
	<script src="{{asset('assets/js/custom/uikit_fileinput.min.js')}}"></script>
	<script src="{{asset('assets/js/pages/page_user_edit.min.js')}}"></script>

	<script>
		$(function() {
			if(isHighDensity()) {
				$.getScript( "assets/js/custom/dense.min.js", function(data) {
					altair_helpers.retina_images();
				});
			}
			if(Modernizr.touch) {
				FastClick.attach(document.body);
			}
		});
		$window.load(function() {
			altair_helpers.ie_fix();
		});
	</script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-65191727-1', 'auto');
		ga('send', 'pageview');
	</script>


</body>
</html>