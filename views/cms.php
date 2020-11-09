<?=$this->header?><!--load header-->
<h1>Welcome <?=$this->oCurUser->username?></h1>
<a href="index.php?controller=user&action=clients">Our Clients</a>
<?=$this->clientlist?>
<!--End of cms-->