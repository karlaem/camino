<div class="clientmenu">
<?php
if(isset($this->oClients)){
    foreach ($this->oClients as $client){
    ?>
    <a href="index.php?controller=user&action=clients&clientid=<?=$client->id?>"><?=$client->first_name?></a>
    <?php
    }
}
?>
</div>
<!--End of clients-->