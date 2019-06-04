<?php

class PathRules {

    public static $publishers = array(
        'simply-hired',
        'simplyhired',
        'craigslist',
        'yahoobing',
        'ziprecruiter',
        'google21',
        'google',
        'monster',
        'yahoo',
        'indeed',
        'linkup',
        'snagajob',
        'zip',
        'truckdrivingjobs',
        'truckjobseekers',
        'rhinolabs',
        'randallretargeting',
        'mas-lp',
        'juju',
        'jobsintrucks',
        'jobs2careers',
        'hire-veterans',
        'hireveterans',
        'adroll',
        'facebook',
        'employmentguide-lp',
        'employmentguide',
        'employment-network',
        'cdlcareernow',
        'cdlcareersnow',
        'careersingear',
        'careerbuilder',
        'appcast',
        'americandrivernetwork',
        'steelhousepilot',
        'rleadgen',
        'regionalhelpwanted',
        'findatruckerjob',
        'everytruckjob',
        'truckjobseekers',
        'alltruckjobs',
        'BubbaJunk',
        'CDLJobs',
        'ClassADrivers',
        'FindingATruckingJob',
        'FindTheRightJob',
        'FleetJobs',
        'HiringDriversNow',
        'JobsForTruckers',
        'truckersnews',
        'randallreilly',
        'bigrigjobs',
        'mobilebigrigjobs',
        'bestdriverjobs',
        'mobilebestdriverjobs',
        'hiringtruckdrivers',
        'mobilehiringtruckdrivers',
        'semileasepurchase',
        'smartphonetrucker',
        'topusajobs',
        'truckerjobsapp'
    );
    public static $types = array(
        'recent-grad',
        'recentgrad',
        'students',
        'student',
        'dedicated-intermodal',
        'dedicated-refrigerated',
        'dedicated-general',
        'dedicated',
        'flatbed',
        'experienced',
        'swiftrefrigerated',
        'experienced-canada',
        'jan2016newroadahead'
    );
    public static $states = array(
        'alabama',
        'alaska',
        'american samoa',
        'arizona',
        'arkansas',
        'california',
        'colorado',
        'connecticut',
        'delaware',
        'district of columbia',
        'federated states of micronesia',
        'florida',
        'georgia',
        'guam gu',
        'hawaii',
        'idaho',
        'illinois',
        'indiana',
        'iowa',
        'kansas',
        'kentucky',
        'louisiana',
        'maine',
        'marshall islands',
        'maryland',
        'massachusetts',
        'michigan',
        'minnesota',
        'mississippi',
        'missouri',
        'montana',
        'nebraska',
        'nevada',
        'new hampshire',
        'new jersey',
        'new mexico',
        'new york',
        'north carolina',
        'north dakota',
        'northern mariana islands',
        'ohio',
        'oklahoma',
        'oregon',
        'palau',
        'pennsylvania',
        'puerto rico',
        'rhode island',
        'south carolina',
        'south dakota',
        'tennessee',
        'texas',
        'utah',
        'vermont',
        'virgin islands',
        'virginia',
        'washington',
        'west virginia',
        'wisconsin',
        'wyoming',
        'armed forces africa \\ canada \\ europe \\ middl',
        'armed forces america (except canada)',
        'armed forces pacific',
        'new-york',
        'rhode-island',
        'washington-dc',
        'laredo',
    );
    public static $statesAbbr = array(
        'al',
        'ak',
        'as',
        'az',
        'ar',
        'ca',
        'co',
        'ct',
        'de',
        'dc',
        'fm',
        'fl',
        'ga',
        'gu',
        'hi',
        'id',
        'il',
        'in',
        'ia',
        'ks',
        'ky',
        'la',
        'me',
        'mh',
        'md',
        'ma',
        'mi',
        'mn',
        'ms',
        'mo',
        'mt',
        'ne',
        'nv',
        'nh',
        'nj',
        'nm',
        'ny',
        'nc',
        'nd',
        'mp',
        'oh',
        'ok',
        'or',
        'pw',
        'pa',
        'pr',
        'ri',
        'sc',
        'sd',
        'tn',
        'tx',
        'ut',
        'vt',
        'vi',
        'va',
        'wa',
        'wv',
        'wi',
        'wy',
        'ae',
        'aa',
        'ap',
    );

    public static function inPublisher($path) {
        foreach (PathRules::$publishers as $value) {
            //strpos(where, what)
            if (strpos(strtolower($path), $value) !== false) {
                return $value;
            }
        }

        return '';
    }

    public static function inType($path) {
        foreach (PathRules::$types as $value) {
            if (strpos(strtolower($path), $value) !== false) {
                return $value;
            }
        }

        return '';
    }

    public static function inState($path) {
        foreach (PathRules::$states as $value) {
            if (strpos(strtolower($path), $value) !== false || strpos(strtolower(Yii::app()->request->queryString), $value) !== false
            ) {
                return $value;
            }
        }

        foreach (PathRules::$statesAbbr as $value) {
            $q = explode('?', Yii::app()->request->getQuery('location'));
            if (!strcmp(substr(strtolower($q[0]), -2), $value)) {
                return $value;
            }
        }
//        echo count(PathRules::$states);
        foreach (PathRules::$statesAbbr as $value) {
            if (!strcmp($path, $value)) {
                return $value;
            }
        }

        return '';
    }

    public static function isIndeedPage($path) {
        
    }

}
