
		<p><br><br><?php
			printf("Generiert am %s CET durch <a href=\"%s\">Simplified Saaze</a>%s%s<br><br>\n",
				date('d.M Y H:i'), '/blog/2021/10-31-simplified-saaze',
				getenv('NON_NGINX') ? '' : ', Webserver <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", berechnet in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?>
		</p>
	</footer>

	<aside>
<h4>Verachtung nach unten</h4>
<a href="<?=$rbase?>/2024/01-in-eigener-sache-das-neue-buch-ist-da/"><img class=imgcenter src="https://www.publicomag.com/wp-content/uploads/2024/02/buch-alexander-wendt-verachtung.jpg" alt="Alexander Wendt: Verachtung nach unten"></a>
<p>Bestellbar <a href="https://live.tichyseinblick.shop/produkt/wendt-verachtung-nach-unten/">hier</a>
und <a href="https://www.lau-verlag.de/titel/verachtung-nach-unten/">hier</a></p>
<br>
<p class=grayhraside></p>
<h4>Buchempfehlung</h4>
<a href="https://amzn.eu/d/5ionTP4"><img class=imgcenter src="https://www.publicomag.com/wp-content/uploads/2024/02/Titus-Gebel-Freie-Privatstaedte.jpg" alt="Titus Gebel: Freie Privatstaedte"></a>

<p><a href="https://amzn.eu/d/5ionTP4">Freie Privatstädte von Titus Gebel </a></p>
	</aside>

	</div>
<script>
let chevronButton = document.getElementById("toTopBtn"); // Get the chevron-button
window.onscroll = function() {	// When the user scrolls down 20px from the top of the document, show the button
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		chevronButton.style.display = "block";
	} else {
		chevronButton.style.display = "none";
	}
};
function topFunction() {	// When the user clicks on the button, scroll to the top of the document
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
function navMenu() {
	var x = document.getElementById("myTopnav");
	x.className = (x.className === "") ? "responsive" : "";	// toggle
}
</script>

<?php if (!isset($pagination)) { ?>
<?php
	if (isset($entry['gallery_js'])) echo $entry['gallery_js'];
	if (isset($entry['markmap_js'])) echo $entry['markmap_js'];
?>
<?php if (isset($entry['MathJax'])) {
	// <script>window.MathJax = { loader: {load: ['[tex]/textmacros']}, tex: { inlineMath: [['$', '$'], ['\\(', '\\)']], packages: {'[+]': ['textmacros']} } };</script>
?>
	<script>window.MathJax = { tex: { inlineMath: [['$', '$'], ['\\(', '\\)']] } };</script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php } ?>
<?php if (isset($entry['TikTok'])) { ?>
	<script async src="https://www.tiktok.com/embed.js"></script>
<?php } ?>
<?php if (isset($entry['Twitter'])) { ?>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php } ?>
<?php if (isset($entry['Mermaid'])) { ?>
	<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
	<script>mermaid.initialize({startOnLoad:true});</script>
<?php } ?>
<?php } ?>


</body>
</html>
