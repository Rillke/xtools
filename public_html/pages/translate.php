<?php

include('../common/header.php');
include('./i18n.php');

?>

<div id="content">
<table class="cont_table" style="width:100%;">
<tr>
<td class="cont_td" style="width:75%;">
<h2 class="table">Translation</h2>

If you want to help with translation, please copy the following to a text editor:
<pre>
<?php

foreach ($messages['en'] as $msg) {
	echo "*".htmlspecialchars($msg)."\n";
}

?>
</pre>

To translate, all you need to do is replace the text in quotes with the translated version. 

A separate note, w, d, h, m, and s are shortened versions of "week", "day", "hour", "minute", and "second". Translate the whole words and only include the first letter. 

Once done translating, all you need to do is <a href="//en.wikipedia.org/w/index.php?title=User_talk:Cyberpower678&action=edit&section=new&preloadtitle=Finished translation for Pages Created tool">post it</a> to my english talk page, and I'll put it in soon!

<?php

include('../common/footer.php');

?>