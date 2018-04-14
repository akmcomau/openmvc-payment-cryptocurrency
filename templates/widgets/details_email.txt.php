<?php echo $text_cryptocurrency; ?>

<?php echo $text_deposit_description; ?>: <?php echo $deposit_description;  ?>

<?php $cryptos = ['bitcoin', 'ethereum', 'ethereum_classic', 'litecoin', 'bitcoin_cash']; ?>
<?php foreach ($cryptos as $crypto) { ?>
<?php if ($module_config->{$crypto}) { ?>
<?php echo ${'text_'.$crypto}; ?>: <?php echo $module_config->{$crypto}; ?>
<?php if (!empty(${'text_'.$crypto.'_note'})) { ?>

<?php echo ${'text_'.$crypto.'_note'}; ?>
<?php } ?>


<?php } ?>
<?php } ?>
