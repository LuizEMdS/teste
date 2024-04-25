<pre>
<?php

$frase = "bom trabalho";
$palavra = "mal";

$novoNome = substr($frase, 0, strpos($frase, "t")) . "$palavra";

echo $novoNome;
?>
</pre>