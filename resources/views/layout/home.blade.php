<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>NairacoinXchange</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/nairacoinr.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/nairacoinr.png" style="width: 80px; height: 95px;"  alt="Nairacoinxchange">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Home</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/howtobuy">How To Buy</a></li>
								<li><a href="/howtosell">How To Sell</a></li>
								<li>
									<div class="header-icons">
											@if (Route::has('login'))
												@auth
													<a class="cart-btn mt-3" href="{{ route('dashboard') }}">Dashboard</a>
													@else
													<a class="cart-btn mt-3" href="{{ route('login') }}">Login</a>
														@if (Route::has('register'))
														<a class="cart-btn mt-3" href="{{ route('register') }}">Register</a>
														@endif
												@endauth
											@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

      <!-- hero area -->
	<div class="hero-area hero-bg" >
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							
							<h1>We Buy and Sell Crypto</h1>
							<div class="hero-btns">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <main class="py-4">
        <!-- start whatstapp widget section -->
        <div id="whatswidget-pre-wrapper" class="">
            <div id="whatswidget-widget-wrapper" class="whatswidget-widget-wrapper" style="all:revert;">
            <div id="whatswidget-conversation" class="whatswidget-conversation" style="color: revert; font: revert; font-feature-settings: revert; font-kerning: revert; font-optical-sizing: revert; font-variation-settings: revert; text-orientation: revert; text-rendering: revert; -webkit-font-smoothing: revert; -webkit-locale: revert; -webkit-text-orientation: revert; -webkit-writing-mode: revert; writing-mode: revert; zoom: revert; place-content: revert; place-items: revert; place-self: revert; alignment-baseline: revert; animation: revert; appearance: revert; backdrop-filter: revert; backface-visibility: revert; background: revert; background-blend-mode: revert; baseline-shift: revert; block-size: revert; border-block: revert; border: revert; border-radius: revert; border-collapse: revert; border-inline: revert; inset: revert; box-shadow: revert; box-sizing: revert; break-after: revert; break-before: revert; break-inside: revert; buffered-rendering: revert; caption-side: revert; caret-color: revert; clear: revert; clip: revert; clip-path: revert; clip-rule: revert; color-interpolation: revert; color-interpolation-filters: revert; color-rendering: revert; color-scheme: revert; columns: revert; column-fill: revert; gap: revert; column-rule: revert; column-span: revert; contain: revert; contain-intrinsic-size: revert; content: revert; content-visibility: revert; counter-increment: revert; counter-reset: revert; counter-set: revert; cursor: revert; cx: revert; cy: revert; d: revert; display: none; dominant-baseline: revert; empty-cells: revert; fill: revert; fill-opacity: revert; fill-rule: revert; filter: revert; flex: revert; flex-flow: revert; float: revert; flood-color: revert; flood-opacity: revert; grid: revert; grid-area: revert; height: revert; hyphens: revert; image-orientation: revert; image-rendering: revert; inline-size: revert; inset-block: revert; inset-inline: revert; isolation: revert; letter-spacing: revert; lighting-color: revert; line-break: revert; list-style: revert; margin-block: revert; margin: revert; margin-inline: revert; marker: revert; mask: revert; mask-type: revert; max-block-size: revert; max-height: revert; max-inline-size: revert; max-width: revert; min-block-size: revert; min-height: revert; min-inline-size: revert; min-width: revert; mix-blend-mode: revert; object-fit: revert; object-position: revert; offset: revert; opacity: 0; order: revert; origin-trial-test-property: revert; orphans: revert; outline: revert; outline-offset: revert; overflow-anchor: revert; overflow-wrap: revert; overflow: revert; overscroll-behavior-block: revert; overscroll-behavior-inline: revert; overscroll-behavior: revert; padding-block: revert; padding: revert; padding-inline: revert; page: revert; page-orientation: revert; paint-order: revert; perspective: revert; perspective-origin: revert; pointer-events: revert; position: revert; quotes: revert; r: revert; resize: revert; ruby-position: revert; rx: revert; ry: revert; scroll-behavior: revert; scroll-margin-block: revert; scroll-margin: revert; scroll-margin-inline: revert; scroll-padding-block: revert; scroll-padding: revert; scroll-padding-inline: revert; scroll-snap-align: revert; scroll-snap-stop: revert; scroll-snap-type: revert; shape-image-threshold: revert; shape-margin: revert; shape-outside: revert; shape-rendering: revert; size: revert; speak: revert; stop-color: revert; stop-opacity: revert; stroke: revert; stroke-dasharray: revert; stroke-dashoffset: revert; stroke-linecap: revert; stroke-linejoin: revert; stroke-miterlimit: revert; stroke-opacity: revert; stroke-width: revert; tab-size: revert; table-layout: revert; text-align: revert; text-align-last: revert; text-anchor: revert; text-combine-upright: revert; text-decoration: revert; text-decoration-skip-ink: revert; text-indent: revert; text-overflow: revert; text-shadow: revert; text-size-adjust: revert; text-transform: revert; text-underline-offset: revert; text-underline-position: revert; touch-action: revert; transform: revert; transform-box: revert; transform-origin: revert; transform-style: revert; transition: revert; user-select: revert; vector-effect: revert; vertical-align: revert; visibility: revert; -webkit-app-region: revert; border-spacing: revert; -webkit-border-image: revert; -webkit-box-align: revert; -webkit-box-decoration-break: revert; -webkit-box-direction: revert; -webkit-box-flex: revert; -webkit-box-ordinal-group: revert; -webkit-box-orient: revert; -webkit-box-pack: revert; -webkit-box-reflect: revert; -webkit-highlight: revert; -webkit-hyphenate-character: revert; -webkit-line-break: revert; -webkit-line-clamp: revert; -webkit-mask-box-image: revert; -webkit-mask: revert; -webkit-mask-composite: revert; -webkit-perspective-origin-x: revert; -webkit-perspective-origin-y: revert; -webkit-print-color-adjust: revert; -webkit-rtl-ordering: revert; -webkit-ruby-position: revert; -webkit-tap-highlight-color: revert; -webkit-text-combine: revert; -webkit-text-decorations-in-effect: revert; -webkit-text-emphasis: revert; -webkit-text-emphasis-position: revert; -webkit-text-fill-color: revert; -webkit-text-security: revert; -webkit-text-stroke: revert; -webkit-transform-origin-x: revert; -webkit-transform-origin-y: revert; -webkit-transform-origin-z: revert; -webkit-user-drag: revert; -webkit-user-modify: revert; white-space: revert; widows: revert; width: revert; will-change: revert; word-break: revert; word-spacing: revert; x: revert; y: revert; z-index: revert;"><div class="whatswidget-conversation-header" style="all:revert;">
            <div id="whatswidget-conversation-title" class="whatswidget-conversation-title" style="all:revert;">NairacoinXchange </div></div><div id="whatswidget-conversation-message" class="whatswidget-conversation-message " style="all:revert;">Welcome to our website. Ask us anything</div><div class="whatswidget-conversation-cta" style="all:revert;"> <a style="all:revert;" id="whatswidget-phone-desktop" target="_blank" href="https://wa.me/message/7ESEQ5BIV7H7I1" class="whatswidget-cta whatswidget-cta-desktop">Send message</a> <a id="whatswidget-phone-mobile" target="_blank" href="https://wa.me/message/7ESEQ5BIV7H7I1" class="whatswidget-cta whatswidget-cta-mobile" style="all:revert;">Send message</a>
            </div><a target="_blank" class="whatswidget-link" href="https://www.oflox.com" title="Feito no WhatsWidget" style="all:revert;"><img src="" width="16px" style="all:revert;"></a></div>
            <div id="whatswidget-conversation-message-outer" class="whatswidget-conversation-message-outer" style="all:revert;"> <span id="whatswidget-text-header-outer" class="whatswidget-text-header-outer" style="all:revert;">NairacoinXchange </span><br> <div id="whatswidget-text-message-outer" class="whatswidget-text-message-outer" style="all:revert;">Hi</div></div><div class="whatswidget-button-wrapper" style="all:revert;"><div class="whatswidget-button" id="whatswidget-button" style="all:revert;"><div style="margin:0 auto;width:38.5px;all:revert;"> <img class="whatswidget-icon" style="all:revert;" src=" https://www.oflox.com/blog/wp-content/uploads/2021/01/wpwhite.png"></div></div></div>
            <script id="whatswidget-script" type="text/javascript">document.getElementById("whatswidget-conversation").style.display="none";document.getElementById("whatswidget-conversation").style.opacity="0"; var button=document.getElementById("whatswidget-button");button.addEventListener("click",openChat);var conversationMessageOuter=document.getElementById("whatswidget-conversation-message-outer");conversationMessageOuter.addEventListener("click",openChat);var chatOpen=!1;function openChat(){0==chatOpen?(document.getElementById("whatswidget-conversation").style.display="block",document.getElementById("whatswidget-conversation").style.opacity=100,chatOpen=!0,document.getElementById("whatswidget-conversation-message-outer").style.display="none"):(document.getElementById("whatswidget-conversation").style.opacity=0,document.getElementById("whatswidget-conversation").style.display="none",chatOpen=!1)}</script></div>
            <style id="whatswidget-style">.whatswidget-widget-wrapper{font-family:"Helvetica Neue","Apple Color Emoji",Helvetica,Arial,sans-serif !important;font-size:16px !important;position:fixed !important;bottom:20px !important;right:30px !important;z-index:1001 !important}.whatswidget-conversation{background-color:#e4dcd4 !important;background-image:url('https://www.oflox.com/blog/wp-content/uploads/2021/01/wpbg.png') !important;background-repeat:repeat !important;box-shadow:rgba(0, 0, 0, 0.16) 0px 5px 40px !important;width:250px !important;height:300px !important;border-radius:10px !important;transition-duration:0.5s !important;margin-bottom:80px !important}.whatswidget-conversation-header{background-color:white !important;padding:10px !important;padding-left:25px !important;box-shadow:0px 1px #00000029 !important;font-weight:600 !important;border-top-left-radius:10px !important;border-top-right-radius:10px !important}.whatswidget-conversation-message{line-height: 1.2em !important;background-color:white !important;padding:10px !important;margin:10px !important;margin-left:15px !important;border-radius:5px !important}.whatswidget-conversation-message-outer{background-color:#FFF !important;padding:10px !important;margin:10px !important;margin-left:0px !important;border-radius:5px !important;box-shadow:rgba(0, 0, 0, 0.342) 0px 2.5px 10px !important;cursor:pointer !important;animation:nudge 2s linear infinite !important;margin-bottom:70px !important}.whatswidget-text-header-outer{font-weight:bold !important;font-size:90% !important}.whatswidget-text-message-outer{font-size:90% !important}.whatswidget-conversation-cta{border-radius:25px !important;width:175px !important;font-size:110% !important;padding:10px !important;margin:0 auto !important;text-align:center !important;background-color:#23b123 !important;color:white !important;font-weight:bold !important;box-shadow:rgba(0, 0, 0, 0.16) 0px 2.5px 10px !important;transition:1s !important;position:absolute !important;top:62% !important;left:10% !important}.whatswidget-conversation-cta:hover{transform:scale(1.1) !important;filter:brightness(1.3) !important}.whatswidget-cta{text-decoration:none !important;color:white !important}.whatswidget-cta-desktop{display:none !important}.whatswidget-cta-mobile{display:inherit !important}@media (min-width: 48em){.whatswidget-cta-desktop{display:inherit !important}
            .whatswidget-cta-mobile{display:none !important}}.whatswidget-button-wrapper{position:fixed !important;bottom:15px !important;right:15px !important}.whatswidget-button{position:relative !important;right:0px !important;background-color:#31d831 !important;border-radius:100% !important;width:60px !important;height:60px !important;box-shadow:2px 1px #0d630d63 !important;transition:1s !important}.whatswidget-icon{width:42px !important;height:42px !important;position:absolute !important; bottom:10px !important; left:10px !important;}.whatswidget-button:hover{filter:brightness(115%) !important;transform:rotate(15deg) scale(1.15) !important;cursor:pointer !important}@keyframes nudge{20%,100%{transform:translate(0,0)}0%{transform:translate(0,5px);transform:rotate(2deg)}10%{transform:translate(0,-5px);transform:rotate(-2deg)}}.whatswidget-link{position:absolute !important;bottom:90px !important;right:5px !important;opacity:0.5 !important}</style>
            </div>
              <!-- end whatstapp widget section -->
        @yield('content')
    </main>

	
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">We Accept</h2>
						<img src="assets/img/payments.png" style="width: 200px ; height: 50px ;"  >
						<img src="assets/img/payments2.png" style="width: 200px ; height: 50px ;"  >
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Help</h2>
						<ul>
							<li><a href="/howtobuy">How To Buy</a></li>
							<li><a href="/howtosell">How To Sell</a></li>
							<li><a href="/terms">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="text-center col-md-12">
					<p>Copyright © <script>
						var CurrentYear = new Date().getFullYear()
						document.write(CurrentYear)
					</script>. All Rights Reserved By <a href="https://imransdesign.com/">Nairacoinxchange</a> </p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>