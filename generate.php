<?php
require_once 'bdd.php';
require_once 'phpqrcode/qrlib.php';
$lalana = 'images/';
$qrcode = $lalana.time().".png";
$qrimage = time().".png";

if (isset($_REQUEST['btn'])) {
    
$qrnom = $_REQUEST['nom'];
$qrprenom = $_REQUEST['prenom'];
$qrposte = $_REQUEST['poste'];
if(!empty($qrnom)&&!empty($qrprenom)&&!empty($qrposte)) {
$query = mysqli_query($connection,"insert into membre set nom='$qrnom', prenom='$qrprenom', poste='$qrposte', QR='$qrimage'");
if ($query) {
/* ?>
<script>
    alert('le nouveau membre a ete ajouter');
    </script>
    <?php */
}

QRcode :: png($qrnom, $qrcode, 'T', 7, 7);
/* echo'voici votre qr code, veillez le garder et ne le partager pas avec autruit';
echo "<img src='".$qrcode."'>"; */
}else {
    ?>
<script>
    alert('veuillez remplir touts les champs');
    </script>
    <?php
}

}