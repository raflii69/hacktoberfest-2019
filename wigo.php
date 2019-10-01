<?php

function regist($email, $pwss, $nama, $no){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://wigo.wifi.id/api/account/register_tmoney"$
curl_setopt($ch, CURLOPT_POSTFIELDS,
"userName=$email&password=$pwss&accType=1&fullName=$nama&phoneNo=$no&terminal=MY$
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HEADER, $_server);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
$headers[] = "Host: wigo.wifi.id";
$headers[] = "Content-type: application/x-www-form-urlencoded";
$headers[] = "Content-length: 174";
$headers[] = "Connection: Keep-Alive";
$headers[] = "Accept-Encoding: gzip";
$headers[] = "User-Agent: okhttp/3.10.0";

$kacuk = curl_exec($ch);
curl_close($ch);
return $kacuk;
}
echo "CREATED BY RAF LII";
echo "Email :";
$email = trim(fgets(STDIN));
echo "Password :";
$pwss = trim(fgets(STDIN));
echo "Nama :";
$nama = trim(fgets(STDIN));
echo "No Hp :";
$no = trim(fgets(STDIN));

$submit = json_decode(regist($email,$pwss,$nama,$no));
$t = $submit->data->idTmoney;
$f = $submit->data->idFusion;

echo "[+] IdTmoney Anda (Copy & Paste Di File get.php): $t\n";
                                                                                $
echo "[+] IdFusion Anda (Copy & Paste Di File get.php): $f\n";
?>
