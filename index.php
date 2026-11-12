<?php
$nasabah = $_POST['nasabah'];
$saldo = $_POST['saldo'];
$deposito =($saldo - ($saldo * 0.03)*11);

echo "<p>nama nasabah bank anda adalah ".$nasabah."<p>";
echo "<p>saldo awal anda adalah ".$saldo."<p>";
echo "<p>Hasil deposito anda adalah ".$deposito."<p>";
?>



