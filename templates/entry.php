<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>
<?php
	$mtitle = $title ?? 'Ohne Titel';
	$urlEncoded = urlencode('https://eklausmeier.goip.de') . $url;
	$titleEncoded = urlencode($mtitle);
	$dfmt = datefmt_create('de-DE',IntlDateFormatter::FULL,IntlDateFormatter::FULL,'Europe/Berlin',IntlDateFormatter::GREGORIAN  ,"d. MMMM yyyy");
	$entryDate = $entry['date'] ?? null;
?>

	<article>
<h1><?= $mtitle ?></h1>
<?php
	if (getenv('NON_NGINX')) printf("<p>Original post is here <a href=\"https://eklausmeier.goip.de/wendt%s\">eklausmeier.goip.de/wendt%s</a>.</p>\n<br>\n",$url,$url);
	if (isset($entry['subtitle'])) echo "\t<p class=subtitle>" . $entry['subtitle'] . "</p>\n\n";
?>

	<p class=dimmedColor>Von <a href="<?=$rbase.'/'.($authorDir[$entry['author']]??'redaktion')?>"><?=$entry['author']??'Unbekannt'?></a>
	/ <?php if (isset($entryDate)) echo '<time datetime="'.$entryDate.'">'. datefmt_format($dfmt,strtotime($entryDate)) ."</time>\n"; ?>
		/ <?=count($entry['categories']??Array()) > 0 ? implode( ', ',
			array_map( fn($x):string => "<a href=$rbase/$x>$x</a>", (array)($entry['categories']) )
			) : ''?>
		/ <?=$entry['minutes_read']?> min Lesezeit</p>

<?php	/* <?= $entry['content'] ?> */
	$s = str_replace('*%3C?','<?',$entry['content']);
	$s = str_replace('?%3E*','?>',$s);
	require 'data:text/plain;base64,'.base64_encode($s);
?>

<?php if ($entry['donate'] ?? true) { ?>
	<p></p><p>Original: <a href="https://www.publicomag.com<?=$canonical?>"><?=$mtitle?></a></p>
<?php if ($entry['wordcount'] < 200) { ?>
<br>
<p style="background-color:LightYellow">Publico ist werbe- und kostenfrei. Es kostet allerdings Geld und Arbeit, unabhängigen Journalismus anzubieten. Mit Ihrem Beitrag können Sie helfen, die Existenz von Publico zu sichern und seine Reichweite stetig auszubauen. Danke!
<br><br>
Sie können auch gern einen Betrag Ihrer Wahl auf ein Konto überweisen. Weitere Informationen über Publico und eine Bankverbindung finden Sie unter dem Punkt <a href="<?=$rbase?>/about">Über</a>.</p>
<?php } else { ?>
<p class=grayhr></p>
<p class=slanted><em>Liebe Leser von Publico: Dieses Onlinemagazin erfüllt wie eine Reihe von anderen Medien, die in den letzten Jahren entstanden sind, eine zentrale und früher auch allgemein selbstverständliche publizistische Aufgabe:
Es konzentriert sich auf Regierungs- und Gesellschaftskritik.
Offensichtlich besteht ein großes Interesse an Essays und Recherchen, die diesen Anspruch erfüllen.
Das jedenfalls zeigen die steigenden Zugriffszahlen.<br>
Kritik und Streit gehören zur Essenz einer offenen Gesellschaft.
Für einen zivilisierten Streit braucht es gut begründete Argumente und Meinungen, Informationen und Dokumentationen von Fakten.
Publico versucht das mit seinen sehr bescheidenen Mitteln Woche für Woche aufs Neue zu bieten.
Dafür erhält dieses Magazin selbstverständlich kein Steuergeld aus dem Medienförderungstopf der Kulturstaatsministerin Claudia Roth, kein Geld aus dem Fonds der Bundeszentrale für politische Bildung (obwohl Publico zur politischen Bildung beiträgt) und auch keine Überweisungen von Stiftungen, hinter denen wohlmeinende Milliardäre stehen.
Ganz im Vertrauen: Publico möchte dieses Geld auch nicht.
Die einzige Verbindung zu diesen staatlichen Fördergeldern besteht darin, dass der Gründer des Magazins genauso wie seine Autoren mit seinen Steuern dazu beiträgt, dass ganz bestimmte Anbieter auf dem Medien- und Meinungsmarkt keine Geldsorgen kennen.
Es gibt nur eine Instanz, von der Publico Unterstützung annimmt, und der dieses Medium überhaupt seine Existenz verdankt: die Leserschaft.
Alle Leser von Publico, die uns mit ihren Beiträgen unterstützen, machen es uns möglich, immer wieder ausführliche Recherchen, Dossiers und Widerlegungen von Falschbehauptungen anzubieten, Reportagen und Rezensionen.
Außerdem noch den montäglichen Cartoon von Bernd Zeller. Und das alles ohne Bezahlschranke und Abo-Modell. Wer unterstützt, sorgt also auch für die (wachsende) Reichweite dieses Mediums.<br>
Publico kann dadurch seinen Autoren Honorare zahlen, die sich nicht wesentlich von denen großer Konzernmedien unterscheiden (und wir würden gern noch besser zahlen, wenn wir könnten, auch der unersetzlichen Redakteurin, die Titelgrafiken entwirft, Fehler ausmerzt, Leserzuschriften durchsieht und vieles mehr).<br>
Jeder Beitrag hilft.
Sie sind vermutlich weder Claudia Roth noch Milliardär.
Trotzdem können Sie die Medienlandschaft in Deutschland beeinflussen.
Und das schon mit kleinem Einsatz.
Der Betrag Ihrer Wahl findet seinen Weg via <a href="https://www.paypal.com/paypalme/PublicoMag">PayPal</a> – oder per Überweisung auf das Konto  (Achtung, neue Bankverbindung!)
A. Wendt/Publico
DE88 7004 0045 0890 5366 00,
BIC: COBADEFFXXX<br>
Dafür herzlichen Dank.
<br><br>
Die Redaktion
</em></p>
<?php } ?>
<?php } ?>
	</article>
	</main>

	<br><br>
	<footer>
	<p>Beitrag teilen:<br>
	<a style="background-color:Navy; color:white" href="https://www.facebook.com/sharer/sharer.php?u=<?=$urlEncoded?>" title="Teilen auf Facebook" target=_blank>&nbsp;&nbsp;<b>f</b>&nbsp;&nbsp;Facebook&nbsp;&nbsp;</a> &nbsp; 
	<a style="background-color:black; color:white" href="https://twitter.com/intent/tweet?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Teilen auf Twitter" target=_blank>&nbsp;&nbsp;Twitter/&Xopf;&nbsp;&nbsp;</a> &nbsp;
	<a style="background-color:LimeGreen; color:white" href="whatsapp://send?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Teilen auf WhatsApp">&nbsp;✆&nbsp;WhatsApp&nbsp;</a> &nbsp;
	<a style="background-color:SlateGray; color:white" href="mailto:?subject=<?=$titleEncoded?>&amp;body=<?=$urlEncoded?>" title="Teilen via e-mail">&nbsp;&nbsp;<span class=symbols>&#x1F582;</span>&nbsp;E-Mail&nbsp;&nbsp;</a> &nbsp;
	<a style="background-color:Navy; color:white" href="https://www.paypal.com/paypalme/PublicoMag" title="Spenden via Paypal" target=_blank>&nbsp;Paypal&nbsp;spenden&nbsp;</a> &nbsp;
	<a style="background-color:SlateGray; color:white" href="javascript:window.print()" title="Drucken">&nbsp;<span class=symbols>&#x1F5A8;</span>&nbsp;Drucken&nbsp;</a> &nbsp;
	<a style="background-color:Teal; color:white" href="https://www.xing.com/spi/shares/new?url=<?=$urlEncoded?>" title="Teilen auf Xing" target=_blank>&nbsp;&nbsp;Xing&nbsp;&nbsp;</a> &nbsp;
	<a style="background-color:SkyBlue; color:white" href="https://telegram.me/share/url?url=<?=$urlEncoded?>&text=<?=$titleEncoded?>" title="Teilen auf Telegram" target=_blank>&nbsp;<span class=symbols>&#x01fbb0;</span>&nbsp;Telegram&nbsp;</a>
	</p>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
