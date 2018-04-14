<div class="row">
	<div class="col-md-12">
		<h4><?php echo $text_cryptocurrency; ?></h4>
		<?php $cryptos = ['bitcoin', 'ethereum', 'ethereum_classic', 'litecoin', 'bitcoin_cash']; ?>
		<?php foreach ($cryptos as $crypto) { ?>
			<?php if ($module_config->{$crypto}) { ?>
				<hr class="separator-2column" />
				<div class="row">
					<div class="col-md-3 col-sm-3 title-2column"><?php echo ${'text_'.$crypto}; ?>:</div>
					<div class="col-md-9 col-sm-9 ">
						<strong><?php echo $module_config->{$crypto}; ?></strong>
						<?php if (!empty(${'text_'.$crypto.'_note'})) { ?>
							<br /><br />
							<p class="<?php echo 'text-'.$crypto.'-note'; ?>"><?php echo ${'text_'.$crypto.'_note'}; ?></p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>
