<?php
/**
 * Created by PhpStorm.
 * User: Durai
 * Date: 16-04-2018
 * Time: 02:19 PM
 */
require('config.php');



Rk1SACAyMAAAAACWAAABLAGQAMUAxQEAAAA3FEC2ACaaAEC4ACwVAECiAEsRAEB7AE0VAECAAFKUAICzAGULAEBSAIYhAECNAKsbAEBKAL0fAEDYANiNAEDLAOMHAECUAOYcAEBTAQ2oAED4ARDqAEDEARMKAECfAR0cAEC3ATEQAEDRAVLAAEDYAVbHAIC4AV+4AAAA



function getfid($fid)
{
    $maxscore=0;
    $id=0;
    $query1="select id,fid from `form`";
    $res1=mysqli_query($db,$query1) or die(mysqli_error($db));
    while($row1=mysqli_fetch_assoc($res1)) {
        echo $row1['fid']; // fid from db
        //javascript function
        //get match score
        $score = null; // pass value from js variable
        if ($maxscore < $score) {
            $maxscore = $score;
            $id = $row1['id'];
        }
        return $id;
    }
}
?>