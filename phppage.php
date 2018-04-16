<?php require('config.php'); ?>
<body>
<script src="match.js"></script>


<script>
    <?php

    $query1="select id,fid from `form`";
    $res1=mysqli_query($db,$query1) or die(mysqli_error($db));
    while($row1=mysqli_fetch_assoc($res1)) {
     ?>    // fid from db
    matchScore(succMatch, failureFunc, '<?php echo $row1['fid']; ?>', 'Rk1SACAyMAAAAACWAAABLAGQAMUAxQEAAAA3FEC2ACaaAEC4ACwVAECiAEsRAEB7AE0VAECAAFKUAICzAGULAEBSAIYhAECNAKsbAEBKAL0fAEDYANiNAEDLAOMHAECUAOYcAEBTAQ2oAED4ARDqAEDEARMKAECfAR0cAEC3ATEQAEDRAVLAAEDYAVbHAIC4AV+4AAAA');

   <?php } ?>


</script>


</body>