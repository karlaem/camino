<?php
if(isset($this->oClient)){
    foreach ($this->oClient as $client){
    ?>
    <a href="#"><?=$client->first_name?></a>
    <?php
    }
}
?>
<!--End of clients-->