<div class="clientinfo">
    <?php
    if(isset($this->oClient)){
        foreach ($this->oClient as $client){
        ?>
        <p><?=$client->first_name?></p>
        <p><?=$client->last_name?></p>
        <p><?=$client->email?></p>
        <p><?=$client->age?></p>
        <p><?=$client->country?></p>
        <p><?=$client->image?></p>
        <?php
        }
    }
    ?>
</div>
<!--End of client-->