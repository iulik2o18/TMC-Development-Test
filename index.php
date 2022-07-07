<?php
require_once("header.php");

?>

<section class="content">
	<article class="content__block">
		<h2 class="content__head">Developer Tech Test</h2>
		<p class="content__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae sem at
			nulla ultrices blandit
			non ut nulla. Duis volutpat mattis quam, nec tincidunt sem faucibus ut. Praesent malesuada tortor sit
			amet efficitur pulvinar. Fusce feugiat rhoncus magna et semper. Pellentesque facilisis risus et pulvinar
			placerat.</p>
	</article>
</section>

<section class="content">
	<article class="content__media">
		<img src="media/stock-1.svg" class="content__image" alt="">
		<header class="content__head">
			<h2>This block has copy, an image and an optional button</h2>
		</header>
		<p class="content__text">Vivamus orci lorem, pharetra nec tristique eu, blandit vel nibh. Fusce vehicula
			tincidunt dolor.
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec malesuada,
			augue cursus scelerisque tempor, velit ipsum tempus mi, euismod laoreet mi erat a lectus. Ut ac quam
			vulputate, vehicula metus eu, ultrices arcu. Etiam ut libero in diam sagittis condimentum at vel augue.
		</p>
	</article>
</section>
<section class="content">
	<article class="content__video">
		<video poster="media/stock-2.svg" class="content__player" controls playsinline>
			<source src="media/stock-video.mp4" type="video/mp4">
		</video>
		<header class="content__head">
			<h2>This block has copy and a video that plays inline</h2>
		</header>
		<p class="content__text">Vivamus orci lorem, pharetra nec tristique eu, blandit vel nibh. Fusce vehicula
			tincidunt dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
			Donec malesuada, augue cursus scelerisque tempor, velit ipsum tempus mi, euismod laoreet mi erat a
			lectus. Ut ac quam vulputate, vehicula metus eu, ultrices arcu. Etiam ut libero in diam sagittis
			condimentum at vel augue.</p>
	</article>
</section>

</section>
<button class="scroll" id="scroll" onclick='window.scrollTo({top: 0, behavior: "smooth"});'><i class="fa-solid fa-angle-up"></i></button>
<?php
require_once("footer.php")
?>