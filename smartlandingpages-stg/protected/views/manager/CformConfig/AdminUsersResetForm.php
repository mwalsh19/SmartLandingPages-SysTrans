<?php

return array(
    'elements' => array(
        'password' => array(
            'type' => 'password',
            'class' => 'form-control',
        ),
        'password_repeat' => array(
            'type' => 'password',
            'class' => 'form-control',
        ),
    ),
    'buttons' => array(
        'save' => array(
            'type' => 'submit',
            'label' => 'Save',
            'class' => 'btn btn-primary'
        ),
        'link' => array(
            'type' => 'htmlButton',
            'label' => 'Cancel',
            'class' => 'btn btn-default',
            'onclick' => 'window.location=\'' . Yii::app()->createUrl('manager/users') . '\'',
        ),
    ),
);
