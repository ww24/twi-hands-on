<?php
header('Content-type: text/xml');
?>
<Response>
<Dial callerId="+815031596741"><?php echo htmlspecialchars($_REQUEST["tocall"]); ?></Dial>
</Response>
