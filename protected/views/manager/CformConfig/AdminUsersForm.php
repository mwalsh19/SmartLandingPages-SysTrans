<?php

return array(
    'elements' => array(
        'first_name' => array(
            'type' => 'text',
            'class' => 'form-control',
        ),
        'last_name' => array(
            'type' => 'text',
            'class' => 'form-control',
        ),
        'username' => array(
            'type' => 'text',
            'class' => 'form-control',
        ),
        'password' => array(
            'type' => 'password',
            'class' => 'form-control',
        ),
        'email' => array(
            'type' => 'text',
            'class' => 'form-control',
        ),
        'role' => array(
            'type' => 'dropdownlist',
            'items' => array('A' => 'Administrator', 'U' => 'User'),
            'prompt' => 'Please select:',
            'class' => 'form-control',
        ),
        'state' => array(
            'type' => 'dropdownlist',
            'items' => array('E' => 'Enabled', 'D' => 'Disabled'),
            'prompt' => 'Please select:',
            'class' => 'form-control',
        )
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
