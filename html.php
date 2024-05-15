<select>
<option value="">Selecione o Ano</option>
<?php

//echo "<select>";

for ($i=date("Y"); $i > date("Y")-100 ; $i--) {

    echo '<option value="'.$i.'">a - '.$i.'</option>';

}

//echo "</select>";

?>
</select>