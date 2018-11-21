<?php?>
<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124740773-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-124740773-1');
	</script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="//kada-lab.jp">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta property="og:title" content="Fujimoto Rio" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="fujirio75" />
	<meta property="og:url" content="http://fujirio75.com/" />
	<meta property="og:site_name" content="Fujimoto Rio" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/ogp.png" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<link rel="canonical" href="//kada-lab.jp">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/common.css">
	<script>
	var wp_path = "<?php echo get_template_directory_uri();?>";//script.jsへの受け渡し
  (function(d) {
    var config = {
      kitId: 'acj7byu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);

	// (function(win, doc) {
	// 	var canvasWave = doc.getElementsByClassName("bg-wave");
	// 	for (var i = 0; i < classCount; i++) {
	//     ctxWave[i] = canvasWave[i].getContext("2d");
	//     console.log(i);
	//     canvasWave[i].width = 675;
	//     canvasWave[i].height = 379;
	//   }
	// 	function _draw() {
	//     // イメージの描画
	//       ctxWave[1].globalCompositeOperation = 'xor';
	//       ctxWave[1].drawImage("http://localhost:8888/fujirio75/wp-content/themes/fujirio75/assets/img/canvas-wave/wave-394.svg", 0, 0);
	// 			console.log("test");
	//   }
	//
	//   _draw();
	// })(this, document);

  </script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/script.js"></script>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="header-wrapper">
			<div class="header-logo-wrapper">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/name.svg" alt="logo"></a>
			</div>
			<nav>
				<ul>
					<li>about</li>
					<li>works</li>
					<li>contact</li>
				</ul>
			</nav>
		</div>
	</header>


	<main>
