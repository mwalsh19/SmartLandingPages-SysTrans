<?php

class LandingpagesController extends Controller {

    public $layout = '//layouts/landing_pages';
    public $slug_path = null;
    public $publisher = null;
    public $type = null;
    public $formHasSend = false;

    public function actions() {
        return array(
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
    
//    public function filters() {
//        parent::filters();
//    }

    public function actionIndex($slug = '') {

        //$url = Yii::app()->request->pathInfo;
        //$url = Yii::app()->request->requestUri;
        //$path = str_replace('/landing-pages/', '', $url);
        //echo $slug . '<br>';
        //echo Yii::app()->request->pathInfo . '<br>';
        //echo Yii::app()->request->queryString . '<br>';
        //echo count($_GET);
        //var_dump($slug);
        //




        $trim_slug = trim($slug, '/');

//        echo $trim_slug;
        //TODO do we need to use strpos or an exact evaluation??
        if ($trim_slug != 'swifttrans') {
            $slug_path = explode('/', $trim_slug);
            $publisher = '';
            $type = '';
            $state = '';
            $publisher_pos = 0;
            $type_pos = 0;
            $state_pos = 0;
            $total_slug_count = count($slug_path);

            for ($i = 0; $i < $total_slug_count; $i++) {
                if (empty($publisher)) {
                    $publisher = PathRules::inPublisher($slug_path[$i]);
                    if (!empty($publisher)) {
                        $publisher_pos = $i;
                    }
                }

                if (empty($type)) {
                    $type = PathRules::inType($slug_path[$i]);
                    if (!empty($type)) {
                        $type_pos = $i;
                    }
                }

                if (empty($state)) {
                    $state = PathRules::inState($slug_path[$i]);
                    if (!empty($state)) {
                        $state_pos = $i;
                    }
                }
            }

//        var_dump($slug_path);
            //do track
//        echo 'the state is ' . $state . '<br>';
//        echo 'the type is ' . $type . '<br>';
//        echo 'the publisher is ' . $publisher . '<br>';
//            only when we have params

            $specific_match = false;
            if ($publisher == 'indeed' && $publisher_pos == 1 && $state_pos == 2 && $type == 'experienced' && $slug_path[2] != 'laredo-lp') {
                $landing_page = 'experienced/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $type == 'experienced') {
                $landing_page = 'experienced/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 1 && $state_pos == 2 && $type == 'students' && $slug_path[2] != 'laredo-lp') {
                $landing_page = 'students/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 1 && $state_pos == 2 && $type == 'student' && $slug_path[2] != 'laredo-lp') {
                $landing_page = 'student/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $type == 'student') {
                $landing_page = 'student/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 1 && $state_pos == 2 && $type == 'recent-grad' && $slug_path[2] != 'laredo-lp') {
                $landing_page = 'recentgrad/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 1 && $state_pos == 2 && $type == 'recentgrad' && $slug_path[2] != 'laredo-lp') {
                $landing_page = 'recentgrad/indeed';
                $specific_match = true;
            }
            
            if ($publisher == 'indeed' && $type == 'recentgrad') {
                $landing_page = 'recentgrad/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 0 && $slug_path[1] == 'students-lp') {
                $landing_page = 'indeed/students-lp';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $publisher_pos == 1 && $slug_path[0] == 'recentgrad') {
                $landing_page = 'recentgrad/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $type == 'experienced-canada') {
                $landing_page = 'experienced-canada/indeed';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && $type == 'swiftrefrigerated') {
                $landing_page = 'swiftrefrigerated/indeed';
                $specific_match = true;
            }


            //http://joinswift.com/landing-pages/DR/Exp/Indeed/Fall2015SignOnBonus/wahpeton/north_dakota/219
            if ($publisher == 'indeed' && strpos($trim_slug, 'DR/Exp/Indeed/Fall2015SignOnBonus') !== false) {
                $landing_page = 'DR/Exp/Indeed/Fall2015SignOnBonus';
                $specific_match = true;
            }

            if ($publisher == 'indeed' && strpos($trim_slug, 'DR/Jan2016NewRoadAhead/General/Indeed') !== false) {
                $landing_page = 'DR/Jan2016NewRoadAhead/General/Indeed';
                $specific_match = true;
            }

            // if ($publisher == 'indeed' && preg_match("/\/DR\/Exp\/Indeed\/Fall2015SignOnBonus.*/us", $trim_slug) !== false) {
            //     $landing_page = 'DR/Exp/Indeed/Fall2015SignOnBonus';
            //     $specific_match = true;
            // }



            if ($publisher == 'simplyhired' && $type == 'student' && $type_pos == 0 && $publisher_pos == 1 && $state_pos == 2) {
                $landing_page = 'student/simplyhired';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'student') {
                $landing_page = 'student/simplyhired';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'experienced' && $type_pos == 0 && $publisher_pos == 2 && $state_pos == 1) {
                $landing_page = 'experienced';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'experienced') {
                $landing_page = 'experienced/simplyhired';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'recentgrad' && $type_pos == 0 && $publisher_pos == 2 && $state_pos == 1) {
                $landing_page = 'recentgrad';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'recentgrad') {
                $landing_page = 'recentgrad/simplyhired';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && $type == 'experienced-canada') {
                $landing_page = 'experienced-canada/simplyhired';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && strpos($trim_slug, 'DR/Exp/SimplyHired/Fall2015SignOnBonus') !== false) {
                $landing_page = 'DR/Exp/SimplyHired/Fall2015SignOnBonus';
                $specific_match = true;
            }

            if ($publisher == 'simplyhired' && strpos($trim_slug, 'DR/Jan2016NewRoadAhead/General/SimplyHired') !== false) {
                $landing_page = 'DR/Jan2016NewRoadAhead/General/SimplyHired';
                $specific_match = true;
            }

            /* Craiglist conditions */
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'experienced' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/experienced';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'student' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/student';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'student' && $publisher_pos == 1 && $type_pos == 3) {
                $landing_page = 'l/craigslist/j/student';
                $specific_match = true;
            }

            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'recentgrad' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/recentgrad';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'dedicated-general' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/dedicated-general';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'dedicated-refrigerated' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/dedicated-refrigerated';
                $specific_match = true;
            }

            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'dedicated' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/dedicated-general';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'flatbed' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/flatbed';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'swiftrefrigerated' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/swiftrefrigerated';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'jan2016newroadahead' && $publisher_pos == 1 && $type_pos == 2) {
                $landing_page = 'l/craigslist/Jan2016NewRoadAhead';
                $specific_match = true;
            }
            if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'jan2016newroadahead' && $publisher_pos == 1 && $type_pos == 3) {
                $landing_page = 'l/craigslist/j/Jan2016NewRoadAhead';
                $specific_match = true;
            }
            if (!empty($slug_path[3])) {
                if ($slug_path[0] == 'l' && $publisher == 'craigslist' && $type == 'experienced' && $publisher_pos == 1 && $type_pos == 2 && $slug_path[3] == 'signonbonus') {
                    $landing_page = 'l/craigslist/experienced/signonbonus';
                    $specific_match = true;
                }
            }
            

            //findatruckerjob
            if ($slug_path[0] == 'experienced' && $publisher == 'findatruckerjob' && $type == 'experienced' && $publisher_pos == 1 && $type_pos == 0) {
                $landing_page = 'experienced/findatruckerjob';
                $specific_match = true;
            }
            if ($slug_path[0] == 'recentgrad' && $publisher == 'findatruckerjob' && $type == 'recentgrad' && $publisher_pos == 1 && $type_pos == 0) {
                $landing_page = 'recentgrad/findatruckerjob';
                $specific_match = true;
            }


            //jobsintrucks
            // if ($slug_path[0] == 'l' && $publisher == 'jobsintrucks' && $type == 'dedicated-refrigerated' && $publisher_pos == 1 && $type_pos == 2) {
            //     $landing_page = 'l/jobsintrucks/dedicated-refrigerated';
            //     $specific_match = true;
            // }
            // if ($slug_path[0] == 'l' && $publisher == 'jobsintrucks' && $type == 'dedicated' && $publisher_pos == 1 && $type_pos == 2) {
            //     $landing_page = 'l/jobsintrucks/dedicated-general';
            //     $specific_match = true;
            // }
        }

        //checking state and city by ip address
        // $ip = $_SERVER['REMOTE_ADDR'];
        // $result = Yii::app()->db->createCommand("SELECT * FROM ip2location_db3 where INET_ATON('{$ip}') <= ip_to limit 1")->queryRow();

        $city = '';
        // if (!empty($result)) {
        //     $state = empty($result['region_name']) ? $state : $result['region_name'];
        //     $city = empty($result['city_name']) ? '' : $result['city_name'];
        // }

        if ($trim_slug == 'swifttrans') {
            $this->setPageTitle('Swift Transportation');
        } else {
            $template = '';
            $data = '';

            if ($specific_match) {
                //CACHE
                $query = MMaster::model()->cache(43200)->findByAttributes(array('path' => $landing_page, 'status' => isset($_GET['archived']) ? 0 : 1));
            } else {
                //CACHE
                $query = MMaster::model()->cache(43200)->findByAttributes(array('path' => $trim_slug, 'status' => isset($_GET['archived']) ? 0 : 1));
            }


            if (empty($query)) {
                $is_file_request = strpos($trim_slug, '.');
                if (!$is_file_request) {
                    //$if_exists = MPageMissing::model()->findByAttributes(array('path' => $trim_slug));
                    //if (empty($if_exists)) {
                        //$page_missing = new MPageMissing();
                        //$page_missing->path = $trim_slug;
                        //$page_missing->save(false);
                    //}
                    $trim_slug = 'l/generic';
                    //CACHE
                    $query = MMaster::model()->cache(43200)->findByAttributes(array('path' => $trim_slug));
                }
            }

            $model = '';
            $phone = '';
            $data_type = '';
            switch ($query->template_type) {
                case 'tbl_apply':
                    $template = 'apply';
                    $page_title = $query->title . ' | Swift - Tenstreet';
                    $data = $query->tblApplies;
                    $model = $data[0];
                    $phone = $model->phone_number_1;
                    break;
                case 'tbl_dedicated':
                    $template = 'dedicated';
                    $page_title = $query->title . ' | Swift - Tenstreet';
                    $data = $query->tblDedicateds;
                    $model = $data[0];
                    $phone = $model->phone_number;
                    break;
                case 'tbl_flatbed':
                    $template = 'flatbed';
                    $page_title = $query->title . ' | Swift - Tenstreet';
                    $data = $query->tblFlatbeds;
                    $model = $data[0];
                    $phone = $model->phone_number;
                    break;
                case 'tbl_truckdriver':
                    $template = 'truckdriver';
                    $page_title = $query->title;
                    $data = $query->tblTruckdrivers;
                    $model = $data[0];
                    $phone = $model->phone_number_1;
                    break;
                case 'tbl_truckjob':
                    $template = 'truckjob';
                    $page_title = $query->title . ' | Swift - Tenstreet';
                    $data = $query->tblTruckjobs;
                    $model = $data[0];
                    $phone = $model->phone_number;
                    break;
                case 'tbl_recent_student':
                    $template = 'recent_student';
                    $page_title = $query->title;
                    $data = $query->tblRecentstudent;
                    $model = $data[0];
                    $phone = $model->phone;
                    $data_type = $model->type;
                    break;
                case 'tbl_intermodal':
                    $template = 'intermodal';
                    $page_title = $query->title;
                    $data = $query->tblIntermodals;
                    $model = $data[0];
                    $phone = $model->phone;
                    $data_type = $model->type;
                    break;
                case 'tbl_dr_january':
                    $template = 'dr_january';
                    $page_title = $query->title;
                    $data = $query->tblDrJanuary;
                    $model = $data[0];
                    $phone = $model->phone;
                    $data_type = $model->type;
                    break;
            }

            $this->setPageTitle($page_title);

            //Conditions drivernetwork
            $this->slug_path = $trim_slug;
            $this->publisher = $publisher;
            $this->type = $type;
        }

        if ($trim_slug == 'swifttrans') {
            $template = 'swifttrans';
            $model = '';
            $publisher = 'swifttrans';
            $type = '';
            $phone = '';
        }

        if (empty($_POST['form_type'])) {
            $driver_network_param = Yii::app()->request->getParam('status');
            if (!empty($driver_network_param)) {
                $view = 'thankyou' . Yii::app()->request->getParam('target');
                $this->render($view, array('publisher' => $publisher, 'type' => $type, 'email' => ''));
            } else {
                //if (!isset($_GET['no-track'])) {
                    // $record = Yii::app()->db->createCommand()
                    //         ->select('clicks')
                    //         ->from('tbl_click_landingpage')
                    //         ->where('path_crc=CRC32(:path) AND state=:state AND city=:city AND publisher=:publisher AND type=:type', array(
                    //             ':path' => $trim_slug, ':state' => $state, ':city' => $city, ':publisher' => $publisher,
                    //             ':type' => $type))
                    //         ->limit(1)
                    //         ->queryRow();
                    // if (!empty($record)) {
                    //     $clicks = intval($record['clicks']) + 1;
                    //     $result = Yii::app()->db->createCommand()
                    //             ->update('tbl_click_landingpage', array('clicks' => $clicks), 'path_crc=CRC32(:slug) AND state=:state AND city=:city AND publisher=:publisher AND type=:type', array(
                    //         ':slug' => $trim_slug, ':state' => $state, ':city' => $city, ':publisher' => $publisher,
                    //         ':type' => $type));
                    // } else {
                    //     $sql = "INSERT INTO tbl_click_landingpage (path, path_crc, publisher, type, state, city, clicks) VALUES('{$trim_slug}', CRC32('{$trim_slug}'), '{$publisher}', '{$type}', '{$state}', '{$city}', 1);";
                    //     $result = Yii::app()->db->createCommand($sql)
                    //             ->execute();
                    // }
                //}
                $this->render($template, array('data' => $model, 'slug' => $trim_slug, 'publisher' => $publisher));
            }
        } else {
            $this->swiftDoCapture($trim_slug, $model, $publisher, $type, $phone, !empty($data_type) ? $data_type : false);
        }
    }

    private function swiftDoCapture($trim_slug = '', $model = '', $publisher = '', $type = '', $phone = '', $data_type = '') {

        $isDev = false;
        $need_redirect = false;

        if ($_POST['form_type'] && !empty($trim_slug)) {
            $clientID = '247';
            $password = 'sb*V6*0!DacfveNbVgb9';
            $service = 'subject_upload';
            $mode = $isDev ? 'DEV' : 'PROD';

            $source = 'LACED Lead';
            $companyID = $isDev ? '15' : '806';
            $companyName = $isDev ? 'Laced Agency' : 'TransSystem';
            $post_address = $isDev ? 'https://devdashboard.tenstreet.com/post/' : 'https://dashboard.tenstreet.com/post/';
            $appReferrer = $model->referral_code; //REFERRAL CODE


            /*if (strpos($trim_slug, 'swiftrefrigerated') !== false) {
                $source = 'LACED LeadSR';
                $companyID = $isDev ? '15' : '1010';
            }*/

            $givenName = $_POST['first_name'];
            $familyName = $_POST['last_name'];
            $municipality = $_POST['city'];
            $region = $_POST['state'];
            $postalCode = $_POST['zip_code'];
            $email = $_POST['email'];
            $primaryPhone = $_POST['phone'];
            $years_experience = $_POST['years_experience'];
            $cdl_valid = $_POST['cdl_valid'];
            $template_type = $_POST['template_type'];

            if ($trim_slug != 'swifttrans') {
                switch ($_POST['form_type']) {
                    case 'T1':
                        $address1 = !empty($_POST['street_address']) ? $_POST['street_address'] : '';
                        $view = 'thankyou1';
                        $target = 1;
                        break;
                    case 'T2':
                        $address1 = !empty($_POST['street_address']) ? $_POST['street_address'] : '';
                        $view = 'thankyou2';
                        $target = 2;
                        break;
                    case 'T3':
                        $address1 = !empty($_POST['street_address']) ? $_POST['street_address'] : '';
                        $view = 'thankyou3';
                        $target = 3;
                        break;
                }
            } else {
                $address1 = $_POST['street_address'];
                $view = 'thankyou4';
                $target = 1;
            }

            $xml_data = '
            <TenstreetData>
                <Authentication>
                    <ClientId>' . $clientID . '</ClientId>
                    <Password>' . $password . '</Password>
                    <Service>' . $service . '</Service>
                </Authentication>
                <Mode>' . $mode . '</Mode>
                <Source>' . $source . '</Source>
                <CompanyId>' . $companyID . '</CompanyId>
                <CompanyName>' . $companyName . '</CompanyName>
                <PersonalData>
                    <PersonName>
                        <GivenName>' . $givenName . '</GivenName>
                        <FamilyName>' . $familyName . '</FamilyName>
                    </PersonName>
                    <PostalAddress>
                        <CountryCode>US</CountryCode>
                        <Municipality>' . $municipality . '</Municipality>
                        <Region>' . $region . '</Region>
                        <PostalCode>' . $postalCode . '</PostalCode>
                        <Address1>' . $address1 . '</Address1>
                    </PostalAddress>
                    <ContactData PreferredMethod="PrimaryPhone">
                        <InternetEmailAddress>' . $email . '</InternetEmailAddress>
                        <PrimaryPhone>' . $primaryPhone . '</PrimaryPhone>
                    </ContactData>
                </PersonalData>
                <ApplicationData>
                    <AppReferrer>' . $appReferrer . '</AppReferrer>
                    <DisplayFields>
                        <DisplayField>
                            <DisplayPrompt>Years Experience:</DisplayPrompt>
                            <DisplayValue>' . $years_experience . '</DisplayValue>
                        </DisplayField>
                        <DisplayField>
                            <DisplayPrompt>Do you have your class A CDL?</DisplayPrompt>
                            <DisplayValue>' . $cdl_valid . '</DisplayValue>
                        </DisplayField>
                    </DisplayFields>
                </ApplicationData>
            </TenstreetData>';

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $post_address);
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:text/xml;charset=uft-8'));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);

            $response_xml = curl_exec($ch);
            curl_close($ch);


            $responseObject = simplexml_load_string($response_xml);

            //Steelhousepilot
            if ($trim_slug == 'steelhousepilot') {
                $publisher = 'steelhousepilot';
            }

            //American driver network customized
            if ($publisher == 'americandrivernetwork') {
                $need_redirect = true;
            }

            $user = Yii::app()->user;
            $user->setFlash('phone', $phone);
            $user->setFlash('intelliapp_referral_code', $model->intelliapp_referral_code);
            $user->setFlash('first_name', $givenName);
            $user->setFlash('template_type', $template_type);

            // we will know if this works if we get this working

            //var_dump($responseObject->Status);
            // die();

            if ($responseObject->Status == 'Accepted') {
                // SAVING XML RESPONSE TO LOCAL STORAGE 
                $model_for_save = new MOutputXml();
                $model_for_save->tenstreet_xml = $response_xml;
                $model_for_save->save(false);

                /* SAVING FORM DATA ONLY FOR RHINOLABS */
                if ($publisher == 'rhinolabs') {
                    $newRhinolabsFormModel = new MRhinolabsForm();
                    $newRhinolabsFormModel->referral_code = $appReferrer;
                    $newRhinolabsFormModel->first_name = $givenName;
                    $newRhinolabsFormModel->last_name = $familyName;
                    $newRhinolabsFormModel->phone = $primaryPhone;
                    $newRhinolabsFormModel->email = $email;
                    $newRhinolabsFormModel->street_address = !empty($_POST['street_address']) ? $_POST['street_address'] : 'N/A';
                    $newRhinolabsFormModel->city = $municipality;
                    $newRhinolabsFormModel->state = $region;
                    $newRhinolabsFormModel->zipcode = $postalCode;
                    $newRhinolabsFormModel->moving_violation = $moving_violation;
                    $newRhinolabsFormModel->cdl_valid = $cdl_valid;
                    $newRhinolabsFormModel->save(false);
                }

                /* LEADS COUNTER */
                $currentDate = date('Y-m-d');
                $lead = MLeads::model()->find('referral_code=:referral_code AND state=:state AND city=:city AND date=:date', array(
                    ':referral_code' => $appReferrer,
                    ':state' => $region,
                    ':city' => $municipality,
                    ':date' => $currentDate)
                );

                if (!empty($lead)) {
                    $lead->leads = $lead->leads + 1;
                    $lead->save(false);
                } else {
                    $new_lead = new MLeads();
                    $new_lead->referral_code = $appReferrer;
                    $new_lead->state = strtolower($region);
                    $new_lead->city = strtolower($municipality);
                    $new_lead->leads = 1;
                    $new_lead->date = $currentDate;
                    $new_lead->save(false);
                }

                $this->formHasSend = true;

                if ($need_redirect) {
                    $params = '?target=' . $target;
                    $params.= '&status=applied';
                    $params.= '&phone=' . $phone;
                    $params.= '&intelliapp_referral_code=' . $model->intelliapp_referral_code;
                    $params.= '&first_name=' . $givenName;
                    $params.= '&publisher=' . $publisher;
                    $params.= '&type=' . $type;
                    $params.= '&data_type=' . !empty($data_type) ? $data_type : false;
                    $params.= '&email=' . $email;
                    $params.= '&ga_tp=' . !empty($model->ga_tp) ? $model->ga_tp : false; 

                    $this->redirect(Yii::app()->request->urlReferrer . $params);
                } else {
                    $this->render($view, array(
                        'publisher' => $publisher,
                        'type' => $type,
                        'email' => $email,
                        'data_type' => !empty($data_type) ? $data_type : false,
                        'slug' => $this->slug_path,
                        'ga_tp' => !empty($model->ga_tp) ? $model->ga_tp : false
                            )
                    );
                } 
            } else {
                Yii::app()->user->setFlash('status', 'rejected');
                $this->redirect(Yii::app()->request->urlReferrer);
            }
        }
    }

    public function actionIndeedIndex() {
        $this->render('ideedIndex');
    }

    public function actionIndeedIndexSr() {
        $this->render('ideedIndex_sr');
    }

    public function actionIndeedCanadaIndex() {
        $this->render('indeedCanadaIndex');
    }

    public function actionSimplyhiredCanadaIndex() {
        $this->render('simplyhiredCanadaIndex');
    }

    public function actionSimplyhiredIndex() {
        $this->render('simplyhiredIndex');
    }

    public function actionPrivacypolicy() {
        $this->render('privacypolicy');
    }

}
