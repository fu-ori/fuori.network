<!-- DEFAULTS -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="https://cdn.fcity.tech/images/favicon.png" type="image/png">

<!-- TAILWIND -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- FANCYBOX -->
<link rel="stylesheet" href="https://cdn.fcity.tech/fancybox/fancybox.css" />
<script src="https://cdn.fcity.tech/fancybox/fancybox.umd.js"></script>

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.fcity.tech/swiper-js/swiper11.1.14.css" />
<script src="https://cdn.fcity.tech/swiper-js/swiper11.1.14.min.js"></script>

<!-- ENGINE -->
<script src="https://cdn.fcity.tech/jquery/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/@phosphor-icons/web"></script>

<!-- SCROLL -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[href^="#"]').bind('click.smoothscroll',function (e) {
			e.preventDefault();
			var target = this.hash,
			$target = $(target);

			$('html, body').stop().animate( {
				'scrollTop': $target.offset().top-0
			}, 1200, function () {
				window.location.hash = target;
			} );
		} );
	} );
</script>