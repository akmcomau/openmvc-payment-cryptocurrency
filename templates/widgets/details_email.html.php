<table style="background-color: #FFF;width: 100%;padding: 20px; max-width: 500px;">
<thead>
<tr>
<th colspan="2" style="text-align: left;"><?php echo $text_cryptocurrency; ?></th>
</tr>
</thead>
<?php $cryptos = ['bitcoin', 'ethereum', 'ethereum_classic', 'litecoin', 'bitcoin_cash']; ?>
<?php foreach ($cryptos as $crypto) { ?>
<?php if ($module_config->{$crypto}) { ?>
<tr>
<th style="text-align: right;border-top: 1px solid #ddd;"><?php echo ${'text_'.$crypto}; ?>: </th>
<td style="border-top: 1px solid #ddd;">
<strong><?php echo $module_config->{$crypto}; ?></strong>
<?php if (!empty(${'text_'.$crypto.'_note'})) { ?>
<br /><br />
<p class="<?php echo 'text-'.$crypto.'-note'; ?>"><?php echo nl2br(${'text_'.$crypto.'_note'}); ?></p>
<br />
<?php } ?>
</td>
</tr>
<?php } ?>
<?php } ?>
<tr>
<th style="text-align: right;border-top: 1px solid #ddd;"><?php echo $text_deposit_description; ?>: </th>
<td style="border-top: 1px solid #ddd;"><?php echo $deposit_description;  ?></td>
</tr>
</table>
