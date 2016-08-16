<h1>Enviar email</h1>

<form action="<?php echo base_url('home/email/enviar'); ?>" method="post">
	<input type="email" placeholder="Destinatário.." name="txtTo" required>
	<textarea name="txtMsg" cols="30" rows="2" placeholder="Mensagem.." name="txtMsg" required></textarea>
	<input type="submit">
</form>