<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br><small>(Lead Form)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'referral_code', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br><small>(Intelliapp)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'intelliapp_referral_code', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'intelliapp_referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Phone</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'phone_number', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'phone_number', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>