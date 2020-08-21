
<?php
$user = Yii::app()->user;
if ($user->hasFlash('success')) {
    ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> <?php echo $user->getFlash('success') ?>
    </div>
    <?php
}
if ($user->hasFlash('error')) {
    ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Ups!</strong> <?php echo $user->getFlash('error') ?>
    </div>
    <?php
}
?>
