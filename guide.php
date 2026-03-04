<?php
$ext = (!empty($_DYNSTAT) ? "" : (substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : ""));
?>
<script>location.pathname="client-setup<?=$ext;?>";</script>