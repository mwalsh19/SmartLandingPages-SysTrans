<?php
if (strpos($slug, 'swiftrefrigerated') === false && !isset($_GET['no-track'])) {
    $ga_tracking_code = '';
    switch ($data_type) {
        case 'R':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-4' : 'UA-68200113-3';
            break;
        case 'RDT':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-4' : 'UA-68200113-3';
            break;
        case 'S':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-12' : 'UA-68200113-11';
            break;
        case 'SDT':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-12' : 'UA-68200113-11';
            break;
        case 'E':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-10' : 'UA-68200113-9';
            break;
        case 'EDT':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-10' : 'UA-68200113-9';
            break;
        case 'ECAN':
            $ga_tracking_code = 'UA-68200113-15';
            break;
        case 'NEWR':
            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-17' : 'UA-68200113-16';
            break;
//        case 'D':
//            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-6' : 'UA-68200113-6';
//            break;
//        case 'I':
//            $ga_tracking_code = (isset($isThankyou) && $isThankyou) ? 'UA-68200113-6' : 'UA-68200113-6';
//            break;
    }
    if (!empty($ga_tracking_code)) {
        ?>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async =
                        1;
                a.src =
                        g;
                m.parentNode.insertBefore(
                        a,
                        m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', '<?php echo $ga_tracking_code; ?>', 'auto');
            ga('send', 'pageview');
            
            function swiftEventTracking(category, action) {
                ga('send', {
                    hitType: 'event',
                    eventCategory: category,
                    eventAction: action,
                    eventLabel: window.location.pathname
                });
            }

        </script>

        <?php
    }
}