<?php

class ViewsCommand extends CConsoleCommand {

    public function actionRun() {
        $transaction = Yii::app()->db->beginTransaction();
        try {
            $copy_views = Yii::app()->db->createCommand('INSERT INTO tbl_views_archive (path, path_crc, publisher, type, state, city, clicks) SELECT path, path_crc, publisher, type, state, city, clicks FROM tbl_click_landingpage');

            if ($copy_views->execute()) {
                $drop_table = Yii::app()->db->createCommand('TRUNCATE TABLE tbl_click_landingpage');
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
