<?php
function clearAllWhiteSpace($buffer) {
	return preg_replace('/(\>)\s*(\<)/m', '$1$2', $buffer);
}
ob_start('clearAllWhiteSpace');
?>
<h1>Lorem Ipsum</h1>
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac
turpis egestas. <a href="#">Donec non enim</a> in turpis pulvinar facilisis.</p>
<h2>Header Level 2</h2>
<ol>
 <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
 <li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<p>
	<strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac
</p>
<?php
/* Output will be flushed and processed when script ends or call*/
ob_end_flush();

?>
