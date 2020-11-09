<?=$this->header?><!--load header-->
<div class="margins">
    <div class="cmsmenu">
    <h1>Welcome <?=$this->oCurUser->username?></h1>
    <a href="index.php?controller=user&action=clients">Our Clients</a>
    <?=$this->clientlist?>
    </div>
</div>
<!--End of cms-->