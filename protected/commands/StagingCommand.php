<?php

class StagingCommand extends CConsoleCommand {

    public function actionRun() {
    	//$name = 'Dump' . date("Ymd") . $this->generateRandomString();
                exec("mysql.exe --protocol=tcp --host=localhost --user=db2774_admin --password=\"y?H98D8ML!\" --port=3306 --default-character-set=utf8 --comments --database=swiftlp_staging < \"C:\\Users\\laced\\Documents\\dumps\\lastBackup.sql\"");

    }

    private function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

}
