<table style="background-color: #FFF;width: 100%;">
<thead>
<tr>
<th colspan="2" style="text-align: left;"><?php echo $text_cryptocurrency; ?></th>
</tr>
</thead>
<tr style="background-color: pink;">
<th><?php echo $text_deposit_description; ?>: </th>
<td><?php echo $deposit_description;  ?></td>
</tr>
<tr>
<th colspan="2">&nbsp;</th>
</tr>
<?php $cryptos = ['bitcoin', 'ethereum', 'ethereum_classic', 'litecoin', 'bitcoin_cash']; ?>
<?php foreach ($cryptos as $crypto) { ?>
<?php if ($module_config->{$crypto}) { ?>
<tr>
<th><?php echo ${'text_'.$crypto}; ?>: </th>
<td>
<?php echo $module_config->{$crypto}; ?>
<?php if (!empty(${'text_'.$crypto.'_note'})) { ?>
<br /><br />
<p class="<?php echo 'text-'.$crypto.'-note'; ?>"><?php echo nl2br(${'text_'.$crypto.'_note'}); ?></p>
<br />
<?php } ?>
</td>
</tr>
<?php } ?>
<?php } ?>
</table>
