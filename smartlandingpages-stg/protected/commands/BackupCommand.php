<?php

class BackupCommand extends CConsoleCommand {

    public function actionRun() {
    	$name = 'Dump' . date("Ymd") . $this->generateRandomString();
		exec("mysqldump.exe --result-file=\"C:\\Users\\laced\\Documents\\dumps\\$name.sql\" --password=\"y?H98D8ML!\" --user=db2774_admin --host=localhost --protocol=tcp --port=3306 --default-character-set=utf8 --skip-triggers \"swiftlp\"");
		//sleep(10);
		//exit();

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


//mysqldump.exe --result-file="C:\Users\laced\Documents\dumps\test.sql" --password="y?H98D8ML!" --user=db2774_admin --host=localhost --protocol=tcp --port=3306 --default-character-set=utf8 --skip-triggers "swiftlp"