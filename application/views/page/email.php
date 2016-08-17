<h1>Enviar email / com ajax</h1>

<form id="sendEmail" action="<?php echo base_url('home/email/enviar'); ?>" method="post">
	<input type="email" placeholder="Destinatário.." name="txtTo" required>
	<textarea name="txtMsg" cols="30" rows="2" placeholder="Mensagem.." name="txtMsg" required></textarea>
	<input type="submit">
	<span class="icon-giant">
		<i class="fa fa-spinner aic_spin ms-1000 infinite visibility-hidden" aria-hidden="true"></i>
	</span>
</form>