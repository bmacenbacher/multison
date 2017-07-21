<?php

require_once __DIR__ . '/cenik.php';

$pl = new PriceList();

?>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
    <?php

    foreach ($pl->columnNames as $key => $value) {
    	print('<th>' . $value . '</th>');
    }

    ?>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($pl->rows as $key => $value) { ?>

  	<tr>
  		<td><?php print($value['A']); ?></td>
  		<td><?php print($value['B']); ?></td>
  		<td><?php print($value['C']); ?></td>
  		<td><img src="<?php print(PriceList::$imagePath . '/' . $value['D']); ?>" /></td>
  		<td align=right><?php print($value['E']); ?></td>
  		<td><?php print($value['F']); ?></td>
  		<td><?php print($value['G']); ?></td>
  		<td align=right><?php print($value['H']); ?></td>
  		<td align=right><?php print($value['I']); ?></td>
  		<td align=right><?php print($value['J']); ?></td>
  	</tr>

  	<?php }; ?>
  </tbody>
</table>