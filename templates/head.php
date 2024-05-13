<!DOCTYPE html>
<html lang="<?= $entry['lang'] ?? 'de-DE' ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAByUlEQVRYR+2XW2rCUBCG/3gFEcEgVFTUF8UXLyAY0RXoVtoVtPStuIJ2Pz4Iiu5ARCKKsSCKPgomnklVSotNTjFJCw4MJJDMfGduhxE0TRMAPDK9ZxplSu9WisaML5i+MW0JDOCJPbxY6fEH288EoBxP7gTDggBUG8J+6XAaAVBOHJP/ATAej7Fer79FSRAEeDweBINBRCIRhEIh7kiaikC328VsNjM0Hg6HUSqVdBizwgVQLpcRjdKo+BAqn91uh+12qwPO53NQVKrVKhKJhCkGLoBarYZ4PH7R8HQ6Ra/X09PSbDbh9/sNIa4KQN5O6aJUZDIZ+wFkWcZgMEAqlUKlUrEfQFEUdDodxGIx1Ot1+wEmkwn6/T6SySQkSbIfgMJPacjn88jlcvYCLJdLtNttvRUbjQYCgYD1APv9HpvNBtSCo9EIqqqiWCwim80aOqcPuNrQ5XLpp/ssBHAS6vtCoYB0Om3KOTcAzXqfz3c2TjBer/d8F9CUdLvdpp1zAxhNQi7Px4+5UnADuEXAsQgMh0OsVit9uIii+Jtiv/iPqS64qscvxv4EgOOLieOrmePL6Wk9f2D1cUc3pJVFx2zTKvjO9JVp6wAyOk181mCx1QAAAABJRU5ErkJggg==" rel="icon" type="image/x-icon">

<?php
	$canonical = $url ?? '';
	if (strlen($canonical) > 10) $canonical = substr($canonical,0,8) . '/' . substr($canonical,9);
?>
	<link rel="canonical" href="https://www.publicomag.com<?=$canonical?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="https://eklausmeier.goip.de/wendt/feed.xml">
<?php if (isset($pagination)) { ?>
	<meta name="description" content="Alexander Wendt - Publico: Politik, Gesellschaft &amp; Übergänge">
<?php } else if (isset($entry['description'])) { ?>
	<meta name="description" content="<?=$entry['description']?>">
<?php } ?>
	<meta name="author" content="Alexander Wendt">
	<meta name="copyright" content="Alexander Wendt">
	<meta name="generator" content="Simplified Saaze">
