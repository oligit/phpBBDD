<table>
	<tr>
		<td>Número de cuenta</td>
		<td>Saldo</td>
	</tr>
	<?php  
		$cuentas = new Cuenta($dbData);
		$cuentas->consultarSaldo();
	?>
</table>