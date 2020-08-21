<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author Juan Maceda <jjmaceda at gmail.com>
 */
class Utils {

    public static function getUnitedStates() {
        return array(
            'AL' => 'ALABAMA',
            'AK' => 'ALASKA',
            'AS' => 'AMERICAN SAMOA',
            'AZ' => 'ARIZONA',
            'AR' => 'ARKANSAS',
            'CA' => 'CALIFORNIA',
            'CO' => 'COLORADO',
            'CT' => 'CONNECTICUT',
            'DE' => 'DELAWARE',
            'DC' => 'DISTRICT OF COLUMBIA',
            'FM' => 'FEDERATED STATES OF MICRONESIA',
            'FL' => 'FLORIDA',
            'GA' => 'GEORGIA',
            'GU' => 'GUAM GU',
            'HI' => 'HAWAII',
            'ID' => 'IDAHO',
            'IL' => 'ILLINOIS',
            'IN' => 'INDIANA',
            'IA' => 'IOWA',
            'KS' => 'KANSAS',
            'KY' => 'KENTUCKY',
            'LA' => 'LOUISIANA',
            'ME' => 'MAINE',
            'MH' => 'MARSHALL ISLANDS',
            'MD' => 'MARYLAND',
            'MA' => 'MASSACHUSETTS',
            'MI' => 'MICHIGAN',
            'MN' => 'MINNESOTA',
            'MS' => 'MISSISSIPPI',
            'MO' => 'MISSOURI',
            'MT' => 'MONTANA',
            'NE' => 'NEBRASKA',
            'NV' => 'NEVADA',
            'NH' => 'NEW HAMPSHIRE',
            'NJ' => 'NEW JERSEY',
            'NM' => 'NEW MEXICO',
            'NY' => 'NEW YORK',
            'NC' => 'NORTH CAROLINA',
            'ND' => 'NORTH DAKOTA',
            'MP' => 'NORTHERN MARIANA ISLANDS',
            'OH' => 'OHIO',
            'OK' => 'OKLAHOMA',
            'OR' => 'OREGON',
            'PW' => 'PALAU',
            'PA' => 'PENNSYLVANIA',
            'PR' => 'PUERTO RICO',
            'RI' => 'RHODE ISLAND',
            'SC' => 'SOUTH CAROLINA',
            'SD' => 'SOUTH DAKOTA',
            'TN' => 'TENNESSEE',
            'TX' => 'TEXAS',
            'UT' => 'UTAH',
            'VT' => 'VERMONT',
            'VI' => 'VIRGIN ISLANDS',
            'VA' => 'VIRGINIA',
            'WA' => 'WASHINGTON',
            'WV' => 'WEST VIRGINIA',
            'WI' => 'WISCONSIN',
            'WY' => 'WYOMING',
            'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
            'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
            'AP' => 'ARMED FORCES PACIFIC'
        );
    }

    public static function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    public static function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds') {
        $sets = array();
        if (strpos($available_sets, 'l') !== false)
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        if (strpos($available_sets, 'u') !== false)
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        if (strpos($available_sets, 'd') !== false)
            $sets[] = '23456789';
        if (strpos($available_sets, 's') !== false)
            $sets[] = '!@#$%&*?';

        $all = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++)
            $password .= $all[array_rand($all)];

        $password = str_shuffle($password);

        if (!$add_dashes)
            return $password;

        $dash_len = floor(sqrt($length));
        $dash_str = '';
        while (strlen($password) > $dash_len) {
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;
        return $dash_str;
    }

    public static function getUID() {
        $UID = Utils::generateRandomString(15);
        $exists = MUrlPosting::model()->findByAttributes(array('UID' => $UID));
        if (empty($exists)) {
            return $UID;
        }
        Utils::getUID();
    }

    public static function getMonths() {
        $current_year = date('Y');
        return array(
            'January' => '01-' . $current_year,
            'February' => '02-' . $current_year,
            'March' => '03-' . $current_year,
            'April' => '04-' . $current_year,
            'May' => '05-' . $current_year,
            'June' => '06-' . $current_year,
            'July' => '07-' . $current_year,
            'August' => '08-' . $current_year,
            'September' => '09-' . $current_year,
            'October' => '10-' . $current_year,
            'November' => '11-' . $current_year,
            'December' => '12-' . $current_year,
        );
    }

    public static function getToolbarStyles() {
        return array(
            array('name' => 'document', 'items' => array('Source')),
            array('name' => 'styles', 'items' => array('FontSize', 'Format', 'TextColor')),
            array('name' => 'paragraph', 'items' => array('NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter',
                    'JustifyRight', 'JustifyBlock', 'Outdent', 'Indent'
                )),
            array('name' => 'basicstyles', 'items' => array('Bold', 'Italic', 'Strike', '-',
                    'RemoveFormat'
                )),
            array('name' => 'insert', 'items' => array('Image',
                    'Table',
                    'HorizontalRule',
                    'SpecialChar'
                ))
        );
    }

    public static function getToolbarStyles2() {
        return array(
            array('name' => 'document', 'items' => array('Source')),
            array('name' => 'styles', 'items' => array('FontSize', 'TextColor')),
            array('name' => 'basicstyles', 'items' => array('Bold', 'Italic', 'Strike', '-',
                    'RemoveFormat'
                ))
        );
    }

    public static function saveImage($model = '', $property = '', $originalDir = '', $removeFiles = array()) {
        $file = Utils::generateRandomString(32) . '.' . $model->$property->getExtensionName();
        $file_path = $originalDir . DIRECTORY_SEPARATOR . $file;

        if ($model->$property->saveAs($file_path)) {

            if (!empty($removeFiles)) {
                Utils::deleteFileFromRecord($originalDir, $removeFiles);
            }

            return $file;
        } else {
            $model->addError("{$property}", 'An error has occurred, please try again');
            return false;
        }
    }

    public static function deleteFileFromRecord($baseDir, $files) {
        $di = new RecursiveDirectoryIterator($baseDir);
        foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
            if (in_array($file->getFilename(), $files)) {
                unlink($file->getPathName());
            }
        }
    }

    public static function getOrderLink($sort, $attr, $label) {
        $baseUrl = Yii::app()->getBaseUrl(true) . '/images/';
        $direction = $sort->getDirection($attr);
        $directionIcon = '';

        if ($direction == CSort::SORT_ASC && isset($_GET[$sort->sortVar]) && $_GET[$sort->sortVar] == $attr) {
            $directionIcon = "<img src='{$baseUrl}sort_asc.png'>";
        } else if ($direction == CSort::SORT_DESC && isset($_GET[$sort->sortVar]) && $_GET[$sort->sortVar] == $attr . '.desc') {
            $directionIcon = "<img src='{$baseUrl}sort_desc.png'>";
        } else {
            $directionIcon = "<img src='{$baseUrl}sort_both.png'>";
        }

        return $sort->link($attr, $label) . " " . $directionIcon;
    }

    public static function dateRange($range) {

        $startDate = '';
        $endDate = '';
        switch ($range) {
            case 'Today':
                $startDate = strtotime('now');
                $endDate = strtotime('now');
                break;
            case 'Yesterday':
                $startDate = strtotime('yesterday');
                $endDate = strtotime('yesterday');
                break;
            case 'Last 7 Days + Today':
                $startDate = strtotime('-7 day');
                $endDate = strtotime('now');
                break;
            case 'Last 7 Days':
                $startDate = strtotime('-7 day');
                $endDate = strtotime('yesterday');
                break;
            case 'Last 30 Days + today':
                $startDate = strtotime('-30 day');
                $endDate = strtotime('now');
                break;
            case 'Last 30 Days':
                $startDate = strtotime('-30 day');
                $endDate = strtotime('yesterday');
                break;
            case 'This Month':
                $startDate = strtotime('first day of this month');
                $endDate = strtotime('last day of this month');
                break;
            case 'This Year':
                $startDate = strtotime('first day of january');
                $endDate = strtotime('last day of december');
                break;
            case 'Last Month':
                $startDate = strtotime('first day of previous month');
                $endDate = strtotime('last day of previous month');
                break;
            case 'Last Quarter':
                $startDate = strtotime('first day of', strtotime('-4 month'));
                $endDate = strtotime('last day of', strtotime('-1 month'));
                break;
        }

        return date('Y-m-d', $startDate) . " - " . date('Y-m-d', $endDate);
    }

}
