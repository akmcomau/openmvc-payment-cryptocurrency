<div class="<?php echo $page_class; ?>">
	<div class="row">
		<div class="col-md-5">
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
								<p class="<?php echo 'text-'.$crypto.'-note'; ?>"><?php echo nl2br(${'text_'.$crypto.'_note'}); ?>)</p>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<hr class="separator-2column" />
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<p style="color: darkred;"><strong><?php echo $text_deposit_description_note; ?></strong></p>
				</div>
			</div>
			<div class="align-center">
				<form id="form-dd" action="<?php echo $this->url->getUrl('PaymentCryptocurrency', 'payment'); ?>" method="post">
					<input type="hidden" name="confirm" value="1" />
					<button name="form-dd-submit" class="btn btn-lg btn-primary">Confirm Purchase</button>
				</form>
			</div>
		</div>
		<div class="col-md-7">
			<h4><?php echo $text_cart; ?></h4>
			<table class="table">
				<tr>
					<th><?php echo $text_name; ?></th>
					<th class="hidden-xs"><?php echo $text_price; ?></th>
					<th><?php echo $text_quantity; ?></th>
					<th><?php echo $text_total; ?></th>
				</tr>
				<?php foreach ($contents as $item) { ?>
					<tr>
						<td><?php echo $item->getName(); ?></td>
						<td class="hidden-xs"><?php echo money_format('%n', $item->getSellPrice()); ?></td>
						<td>
							<?php echo $item->getQuantity(); ?>
						</td>
						<td><?php echo money_format('%n', $item->getSellTotal()); ?></td>
					</tr>
				<?php } ?>
				<tr>
					<th class="visible-xs"></th>
					<th class="hidden-xs" colspan="2"></th>
					<th><?php echo $text_total; ?></th>
					<th><?php echo money_format('%n', $total); ?></th>
				</tr>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
</script>

