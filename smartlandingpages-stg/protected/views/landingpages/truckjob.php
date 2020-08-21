<?php

$default_layout = 'truckjob_layout2';
if ($data->background == 'background_1.jpg') {
    $default_layout = 'truckjob_layout1';
}

$this->renderPartial($default_layout, array('data' => $data, 'publisher' => $publisher, 'slug' => $slug));


