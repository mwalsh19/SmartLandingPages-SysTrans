<?php
if ($type == 'student') {
    ?>
    <!-- Facebook Conversion Code for Swift Student Conversion Code -->
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6025522190329', {'value': '0.00', 'currency': 'USD'}]);</script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025522190329&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <?php
} else if ($type == 'experienced' && $slug_path != 'experienced/facebook') {
    ?>
    <!-- Facebook Conversion Code for Swift Experienced Conversion Code -->
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6025522257729', {'value': '0.00', 'currency': 'USD'}]);</script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025522257729&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <?php
}