<?php require SAAZE_PATH . "/templates/head.php"; ?>
	<title><?= strip_tags($title) ?? "Saaze" ?></title>

<style>
<?php require SAAZE_PATH . "/public/wendt.css" ?>
</style>
<?php
$authorDir = array(
	'Alexander Wendt' => 'alexander',
	'Archi W. Bechlenberg' => 'archi-bechlenberg',
	'Cora Stephan' => 'cora-stephan',
	'Bernd Zeller' => 'bernd-zeller',
	'David Berger' => 'david-berger',
	'Hansjörg Müller' => 'hansjoerg-mueller',
	'Jörg Friedrich' => 'joerg-friedrich',
	'Matthias Matussek' => 'matthias-matussek',
	'Redaktion' => 'redaktion',
	'Samuel Horn' => 'samuel-horn',
	'Wolfram Ackner' => 'wolfram-ackner'
);
if (!isset($pagination)) {
	if (isset($entry['gallery_css'])) echo $entry['gallery_css'];
	if (isset($entry['markmap_css'])) echo $entry['markmap_css'];
} ?>

<link href="<?=$rbase?>/pagefind/pagefind-ui.css" rel="stylesheet">
<script src="<?=$rbase?>/pagefind/pagefind-ui.js"></script>
<script>
	window.addEventListener('DOMContentLoaded', (event) => {
		new PagefindUI({ element: "#search", showSubResults: true });
	});
</script>

</head>

<body>
	<div class="grid-container">

	<header>&ndash; Publico &ndash;<br>Politik, Gesellschaft <span class=playfair>&amp;</span> Übergänge
	<button onclick="topFunction()" id="toTopBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/></svg></button>

<nav id=myTopnav>
	<a href="<?=$rbase?>/" class=active>Home</a>
	<a href="<?=$rbase?>/about">Über</a>
	<div class="dropdown">
		<button class="dropbtn">Autoren</button>
		<div class="dropdown-content">
			<a href="<?=$rbase?>/author/alexander">Alexander Wendt</a>
			<a href="<?=$rbase?>/author/archi-bechlenberg">Archi W. Bechlenberg</a>
			<a href="<?=$rbase?>/author/bernd-zeller">Bernd Zeller</a>
			<a href="<?=$rbase?>/author/david-berger">David Berger</a>
			<a href="<?=$rbase?>/author/hansjoerg-mueller">Hansjörg Müller</a>
			<a href="<?=$rbase?>/author/joerg-friedrich">Jörg Friedrich</a>
			<a href="<?=$rbase?>/author/matthias-matussek">Matthias Matussek</a>
			<a href="<?=$rbase?>/author/redaktion">Redaktion</a>
			<a href="<?=$rbase?>/author/samuel-horn">Samuel Horn</a>
			<a href="<?=$rbase?>/author/wolfram-ackner">Wolfram Ackner</a>
		</div>
	</div> 
	<div class="dropdown">
		<button class="dropbtn">Kategorien</button>
		<div class="dropdown-content">
			<a href="<?=$rbase?>/alte-weise">Alte &amp; Weise</a>
			<a href="<?=$rbase?>/politik-gesellschaft">Politik &amp; Gesellschaft</a>
			<a href="<?=$rbase?>/medien-kritik">Medien &amp; Kritik</a>
			<a href="<?=$rbase?>/spreu-weizen">Spreu &amp; Weizen</a>
			<a href="<?=$rbase?>/hausbesuch">Hausbesuch</a>
			<a href="<?=$rbase?>/fake-news">Fake News</a>
			<a href="<?=$rbase?>/film">Film</a>
		</div>
	</div> 
	<div class="dropdown">
		<button class="dropbtn">Rechtliches</button>
		<div class="dropdown-content">
			<a href="<?=$rbase?>/impressum">Impressum</a>
			<a href="<?=$rbase?>/datenschutz">Datenschutz</a>
			<a href="<?=$rbase?>/kontakt">Kontakt</a>
		</div>
	</div>
	<a href="<?=$rbase?>/jahresueberblick" aria-label="Year Overview"><svg id="yearOverviewIcon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height=22 width=22 viewBox="0 0 122.88 121"><defs><style>.cls-1{fill:#ef4136;}.cls-1,.cls-3,.cls-5{fill-rule:evenodd;}.cls-2{fill:gray;}.cls-3{fill:#e6e6e6;}.cls-4{fill:#1a1a1a;}.cls-5{fill:#c72b20;}</style></defs><title>Year Overview</title><path class="cls-1" d="M11.52,6.67h99.84a11.57,11.57,0,0,1,11.52,11.52V44.94H0V18.19A11.56,11.56,0,0,1,11.52,6.67Zm24.79,9.75A9.31,9.31,0,1,1,27,25.73a9.31,9.31,0,0,1,9.31-9.31Zm49.79,0a9.31,9.31,0,1,1-9.31,9.31,9.31,9.31,0,0,1,9.31-9.31Z"/><path class="cls-2" d="M111.36,121H11.52A11.57,11.57,0,0,1,0,109.48V40H122.88v69.46A11.56,11.56,0,0,1,111.36,121Z"/><path class="cls-3" d="M12.75,117.31h97.38a9.1,9.1,0,0,0,9.06-9.06V40H3.69v68.23a9.09,9.09,0,0,0,9.06,9.06Z"/><path class="cls-4" d="M39.54,100.77V66H32.29V58.42l8.6-3.69H51.47v46Zm19.46,0V91.31L73.2,76.8a28.28,28.28,0,0,0,2.27-2.52A11.27,11.27,0,0,0,76.91,72a5.21,5.21,0,0,0,.53-2.27A4.18,4.18,0,0,0,77,67.61a2.82,2.82,0,0,0-1.51-1.2A7.94,7.94,0,0,0,72.83,66H59.73V56.58q3-.69,6.73-1.26a56.19,56.19,0,0,1,8.64-.59,20.11,20.11,0,0,1,8.52,1.48A8.86,8.86,0,0,1,88,60.57a17,17,0,0,1,1.32,7.07,16.89,16.89,0,0,1-3.1,10.08A31.85,31.85,0,0,1,82.6,82l-7.87,8.06H90.59v10.69Z"/><path class="cls-5" d="M86.1,14.63a11.11,11.11,0,1,1-7.85,3.26l.11-.1a11.06,11.06,0,0,1,7.74-3.16Zm0,1.79a9.31,9.31,0,1,1-9.31,9.31,9.31,9.31,0,0,1,9.31-9.31Z"/><path class="cls-5" d="M36.31,14.63a11.11,11.11,0,1,1-7.85,3.26l.11-.1a11.08,11.08,0,0,1,7.74-3.16Zm0,1.79A9.31,9.31,0,1,1,27,25.73a9.31,9.31,0,0,1,9.31-9.31Z"/><path class="cls-4" d="M80.54,4.56C80.54,2,83,0,86.1,0s5.56,2,5.56,4.56V25.77c0,2.51-2.48,4.56-5.56,4.56s-5.56-2-5.56-4.56V4.56Z"/><path class="cls-4" d="M30.75,4.56C30.75,2,33.24,0,36.31,0s5.56,2,5.56,4.56V25.77c0,2.51-2.48,4.56-5.56,4.56s-5.56-2-5.56-4.56V4.56Z"/></svg></a>
	<a href="<?=$rbase?>/sitemap.html" aria-label="Sitemap"><svg id="sitemapIcon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height=22 width=22 viewBox="0 0 113.84 122.88"><defs><style>.cls-2{fill:Gold; fill-rule:evenodd;}</style></defs><title>Sitemap</title><path class="cls-2" d="M1.78,4,.18,7.55H44.23L42.61,4H23a1.17,1.17,0,0,1-1.18-1.17V0H5.05V2.81A1.17,1.17,0,0,1,3.87,4Zm67.7,95.21,2.88,22.22a1.49,1.49,0,0,0,1.36,1.47h35c.81,0,1.26-.78,1.36-1.5l3.73-22.19Zm1.78-5.77L69.66,97h44l-1.62-3.57H92.44a1.17,1.17,0,0,1-1.18-1.17V89.44H74.52v2.81a1.17,1.17,0,0,1-1.17,1.17ZM66.87,55.49l2.89,22.22a1.48,1.48,0,0,0,1.35,1.47h35c.81,0,1.26-.78,1.36-1.5l3.73-22.19Zm1.78-5.77-1.6,3.57H111.1l-1.62-3.57H89.83a1.17,1.17,0,0,1-1.17-1.18v-2.8H71.92v2.81a1.18,1.18,0,0,1-1.18,1.17ZM25.18,62.65H58.7v6H25.18v42H58.37v6H19.18V37.71h6V62.65ZM0,9.75,2.88,32a1.5,1.5,0,0,0,1.36,1.47h35c.81,0,1.26-.78,1.36-1.5L44.36,9.75Z" fill="Gold"/></svg></a>
	<a href="<?=$rbase?>/feed.xml" aria-label="RSS Feed"><svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 -960 960 960" width="32"><path d="M200-120q-33 0-56.5-23.5T120-200q0-33 23.5-56.5T200-280q33 0 56.5 23.5T280-200q0 33-23.5 56.5T200-120Zm480 0q0-117-44-218.5T516-516q-76-76-177.5-120T120-680v-120q142 0 265 53t216 146q93 93 146 216t53 265H680Zm-240 0q0-67-25-124.5T346-346q-44-44-101.5-69T120-440v-120q92 0 171.5 34.5T431-431q60 60 94.5 139.5T560-120H440Z" fill="orange"/></svg></a>
	<a href="javascript:void(0);" style="font-size:15px" class="navicon" onclick="navMenu()">&#9776;</a>
</nav>
	</header>

	<main>
<div id="search"></div>

