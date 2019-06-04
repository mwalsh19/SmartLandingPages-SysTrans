<?php

$ClienteScript = Yii::app()->clientScript;
switch ($publisher) {
    case 'snagajob':
        if ($type == 'recentgrad') {
            echo '<img src="http://www.snagajob.com/appcomplete?note=swift-cdl&billingid=284231”/>';
        } else if ($type == 'student') {
            echo '<img src="http://www.snagajob.com/appcomplete?note=swift-student&billingid=284231”/>';
        }
        break;
    case 'jobs2careers':
        echo '<img src="//www.jobs2careers.com/conversion2.php?p=1536" width="1" height="1" />';
        break;
    case 'simplyhired':
        echo '<img height="1" width="1" style="border-style:none;" alt="" src="//www.simplyhired.com/a/track/conversion/?u=V11HQQk%3D"/>';
        break;
    case 'simply-hired':
        echo '<img height="1" width="1" style="border-style:none;" alt="" src="//www.simplyhired.com/a/track/conversion/?u=V11HQQk%3D"/>';
        break;
    case 'indeed':
        $this->renderPartial('partials/_indeed');
        break;
    case 'linkup':
        if(strpos($slug_path, 'swiftrefrigerated') !== false) {
            echo " <script type=\"text/javascript\">/* <![CDATA[ */
            var linkup_conversion_id = '8nf57ghu';
            /* ]]> */</script>";
            echo "<script type=\"text/javascript\" src=\"//www.linkup.com/employers/track/conversion.js\"></script>";
            echo "<noscript><img height=1 width=1 border=0 src=\"//www.linkup.com/employers/track/conversion.gif?id=8nf57ghu&noscript=1\"></noscript>";
        } else {
            echo " <script type=\"text/javascript\">/* <![CDATA[ */
            var linkup_conversion_id = 'p8eddkb1'; /* ]]>
            */</script>";
            echo "<script type=\"text/javascript\" src=\"//www.linkup.com/employers/track/conversion.js\"></script>";
            echo "<noscript><img height=1 width=1 border=0 src=\"//www.linkup.com/employers/track/conversion.gif?id=p8eddkb1&noscript=1\"></noscript>";
        }
        break;
    case 'facebook':
        $this->renderPartial('partials/_facebook', array('type' => $type, 'slug_path' => $slug_path));
        break;
    case 'truckdrivingjobs':
        echo '<img height=1 width=1 border=0 src="//www.truckdrivingjobs.com/conversion/swift-transportation" /> ';
        break;
    case 'juju':
        $ClienteScript->registerScriptFile('http://www.juju.com/ctracker/conversion.js?site_id=f1ec11826072477a70cc1c284cebbb4f', CClientScript::POS_END);
        break;
    case 'rhinolabs':
        $leadid = isset($_GET['leadid']) ? '&leadid=' . $_GET['leadid'] : '';
        $nid = isset($_GET['nid']) ? '&nid=' . $_GET['nid'] : '';
        $agent_id = isset($_GET['agent_id']) ? '&agent_id=' . $_GET['agent_id'] : '';

        echo '<img src="http://www.rhinotrk.com/submission?email=' . $email . $nid . $leadid . $agent_id . '" height="1px" width="1px" />';

        // if ($type == 'student') {
        //     echo '<img src="http://www.rhinotrk.com/submission?nid=175&email=' . $email . $leadid . $subid . $subid2 . '" height="1px" width="1px" />';
        // } else if ($type == 'recentgrad') {
        //     echo '<img src="http://www.rhinotrk.com/submission?nid=176&email=' . $email . $leadid . $subid . $subid2 . '" height="1px" width="1px" />';
        // } else if ($slug_path == "DR/Exp/RhinoLabs/Fall2015SignOnBonus") {
        //     echo '<img src="http://www.rhinotrk.com/submission?nid=177&email=' . $email . $leadid . $subid . $subid2 . '" height="1px" width="1px" />';
        // }
        break;
    case 'google21':
        $this->renderPartial('partials/_google');
        break;
    case 'google':
        $this->renderPartial('partials/_google');
        break;
    case 'yahoo':
        $this->renderPartial('partials/_yahoo');
        $this->renderPartial('partials/_yahoobing');
        break;
    case 'yahoobing':
        $this->renderPartial('partials/_yahoo');
        $this->renderPartial('partials/_yahoobing');
        break;
    case 'steelhousepilot':
        $this->renderPartial('partials/_steelhousepilot_thank');
        break;
    case 'ziprecruiter':
        if ($type == 'student') {
            echo '<img src="https://track.ziprecruiter.com/conversion?board=laced_swift_jobads" width="1" height="1"/>';
        }
        break;
}
