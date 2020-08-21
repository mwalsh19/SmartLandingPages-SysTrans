<?php

class LeadsCommand extends CConsoleCommand {

    public function actionRun() {
        $transaction = Yii::app()->db->beginTransaction();
        try {
            $copy_views = Yii::app()->db->createCommand('INSERT INTO tbl_leads_archive (referral_code, state, city, leads, date) SELECT referral_code, state, city, leads, date FROM tbl_leads');

            if ($copy_views->execute()) {
                $drop_table = Yii::app()->db->createCommand('TRUNCATE TABLE tbl_leads');
                if ($drop_table->execute()) {
                    echo "\r\n";
                    echo 'Success';
                    echo "\r\n";
                }
            }
            $transaction->commit();
        } catch (Exception $e) {
            $transaction->rollback();
        }
    }

}
