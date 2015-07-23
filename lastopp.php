<?php include("php/topp.php"); ?>

<p>Velg tur for opplasting</p>

<form action="opplastet.php" method="post" enctype="multipart/form-data">
    <p><input class="lastopp-filvelger" type="file" name="fileToUpload" id="fileToUpload"></p>
    <p><input class="lastopp-knapp" type="submit" value="Last opp tur" name="submit"></p>
</form>

<?php include("php/bunn.php"); ?>