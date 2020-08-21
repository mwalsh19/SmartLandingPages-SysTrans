<?php

class CleanCommand extends CConsoleCommand {

    public function actionRun() {
        
        $drop_table = Yii::app()->db->createCommand('TRUNCATE TABLE tbl_tenstreet_report');
        $drop_table->execute();
    }

}
