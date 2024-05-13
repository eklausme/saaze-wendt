<?php
$title = "{$collection['title']} (Seite {$pagination['currentPage']})";
$dfmt = datefmt_create('de-DE',IntlDateFormatter::FULL, IntlDateFormatter::FULL,'Europe/Berlin',IntlDateFormatter::GREGORIAN  ,"d. MMMM yyyy");
require SAAZE_PATH . "/templates/top-layout.php";
?>

<?php
if (isset($collection['subtitle'])) echo "\t<section><p>" . $collection['subtitle'] . "</p></section>\n";
?>

<?php foreach ($pagination['entries'] as $entry) { ?>
	<article><p class=symbols style="text-align:right">&#x01f5cf; &nbsp; </p>
	<h2><a href="<?= $rbase . $entry['url']?>"><?= $entry['title'] ?? 'Ohne Titel' ?></a></h2>
	<p><?=$entry['subtitle']??''?></p>
	<p class=dimmedColor>Von <a href="<?=$rbase.'/author/'.$authorDir[$entry['author']??'redaktion']?>"><?=$entry['author']?></a>
		/ <time datetime="<?=$entry['date']?>"><?=datefmt_format($dfmt,strtotime($entry['date']))?></time>
		/ <?=implode( ', ',
			array_map( fn($x):string => "<a href=$rbase/$x>$x</a>", (array)($entry['categories']) )
			)?>
		/ <?=$entry['minutes_read']?> min Lesezeit</p>
	<?= $entry['excerpt'] ?? '---' ?>
	<p/><p class=centeri><a href="<?= $rbase . $entry['url']?>">weiterlesen</a></p>
	</article>
<?php } ?>
</main>

	<footer>
	<?php if ($pagination['nextUrl']) { ?>
	<a href="<?= $rbase . $pagination['nextUrl'] ?>">&larr; Älter</a> &nbsp; &nbsp; &nbsp;
	<?php } ?>
	<?php if ($pagination['prevUrl']) { ?>
	<a href="<?= $rbase . $pagination['prevUrl'] ?>">Jünger &rarr;</a>
	<?php } ?>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
