<?php
Yii::app()->clientScript->registerPackage('flatbed');
$directory = Yii::app()->getBaseUrl(true) . '/vendor/flatbed/assets';
?>
<header>
    <img class="logo" src="<?php echo $directory ?>/img/flatbed/logo.png" />
</header>

<div class="top">
    <div class="top-left col-md-3 hidden-sm hidden-xs" style="background-image: url(<?php echo $directory ?>/img/flatbed/flatbed_topman.png)">
    </div>
    <div class="top-mid col-md-6 col-sm-6 col-xs-12">
        <h1 class="light blue">Flatbed drivers <br/>are a breed apart.</h1>
        <h2 class="bold navy">SO ARE WE.</h2>
        <div class="mid-mid">
            <hr>
            <h4 class="uppercase yellow medium">Increased mileage pay</h4>
            <p>Our Flatbed Truck Drivers are <br/>now earning more per mile!</p>
            <hr>
            <div class="hat"><img src="<?php echo $directory ?>/img/flatbed/hat.png" /></div>
        </div>
    </div>
    <div id="form" class="form col-md-3 col-sm-5 col-xs-12">
        <div class="content">
            <h2 class="bold uppercase">Ready to Apply?</h2>
            <p>Just fill out our short application below and a recruiter will call you.</p>
            <hr>
            <form action="" method="post" id="form1">
                <div class="form-group col-sm-6 col-xs-12">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" size="40" class="validate[required]"/>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" size="40" class="validate[required]"/>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label>Phone</label>
                    <input type="tel" name="phone" id="phone" size="40" class="validate[required]"/>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label>Email</label>
                    <input type="email" name="email" id="email" size="40" class="validate[required,custom[email]]"/>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label>City</label>
                    <input type="text" name="city" id="city" size="40" class="validate[required]" />
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label>State</label>
                    <input type="text" name="state" id="state" size="2" class="validate[required]" />
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label>Zip</label>
                    <input type="text" name="zip_code" id="zip_code" size="40" class="validate[required]" />
                </div>
                <div class="form-group col-xs-12">
                    <label>List any moving violations</label>
                    <textarea name="moving_violation" id="moving_violation" rows="2" cols="40" class=""> </textarea>
                </div>
                <div class="form-group col-xs-12">
                    <label>Do you have your Class A CDL?</label>
                    <select class="form-group col-xs-12 cdl validate[required]" name="cdl_valid" id="cdl_valid">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
        </div><!-- content -->
        <hr>
        <div class="form-group col-xs-12">
            <input name="submit" type="submit" value="SUBMIT" />
            <input type="hidden" name="form_type" value="T2">
            <input type="hidden" name="job_target" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
        </div>
        <div class="form-footer"><p>By submitting this form you are opting in to receive correspondence from Swift. For additional info see the Terms and Conditions below.</p></div>
        </form>
    </div><!-- form -->

</div><!-- top-->

<div class="middle">
    <div class="mid-left col-md-6 col-xs-12">
        <h3 class="medium">Great Opportunities for <br/>Experienced Flatbed Drivers!</h3><br/>
        <p>At Swift Transportation, we know that consistency is crucial for an experienced Class A CDL truck driver. With our Flatbed Division, truck drivers are rewarded with what matters most: consistent miles, freight, and pay. The home time is pretty good too!
        </p><br/>
        <h4 class="medium">If you are ready to start driving for the best,<span class="hidden-sm hidden-xs"><br/></span> call now to speak with a recruiter.</h4><br/>
        <h4 class="bold yellow"><?php echo $data->phone_number ?></h4>
    </div>
    <div class="mid-right col-md-6 hidden-sm hidden-xs" style="background-image: url(<?php echo $directory ?>/img/flatbed/flatbed_midtrucks.png)">
    </div>

</div><!-- middle -->
<div class="bottom">
    <div class="bottom-left col-md-3 hidden-sm hidden-xs" style="background-image: url(<?php echo $directory ?>/img/flatbed/swift_bestinclass.png)">
    </div>
    <div class="bottom-right col-md-9 col-xs-12">
        <h3 class="uppercase">Industry Leading <br/>Programs & Rewards</h3>
        <hr>
        <div class="bottom_icons"><ul class="col-md-4 col-sm-6 col-xs-12">
                <li><img src="<?php echo $directory ?>/img/flatbed/odometer.png" alt="" />
                    <p class="list-text">Great Miles =<br />
                        Great Pay</p>
                </li>
                <li><img src="<?php echo $directory ?>/img/flatbed/pyramid.png" alt="" />
                    <p class="list-text">Great Career<br />
                        Path</p>
                </li>
            </ul>
            <ul class="col-md-4 col-sm-6 col-xs-12">
                <li><img src="<?php echo $directory ?>/img/flatbed/heart.png" alt="" />
                    <p class="list-text">Excellent<br />
                        Benefits</p>
                </li>
                <li><img src="<?php echo $directory ?>/img/flatbed/calendar.png" alt="" />
                    <p class="list-text">Paid<br />
                        Vacation</p>
                </li>
            </ul>
            <ul class="col-md-4 col-sm-6 col-xs-12">
                <li><img src="<?php echo $directory ?>/img/flatbed/truck.png" alt="" />
                    <p class="list-text">Late-Model<br />
                        Equipment</p>
                </li>
            </ul>
        </div>
        <hr>
    </div>
    <div class="bottom-left-mobile col-xs-12 hidden-md hidden-lg">
        <div class=""><img src="<?php echo $directory ?>/img/flatbed/swift_bestinclass.png" /></div>
        <a href="#form" class="button">Apply Now</a>
    </div>
</div><!-- bottom -->

<!-- Footer
    ================================================== -->
<div class="container">
    <div class="footer">
        <div class="button"><a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Terms &amp; Conditions</a></div>
    </div>
</div>
<!-- JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php
Yii::app()->clientScript->registerScript('init', "
    $('#crst_swift').validationEngine('attach');

    $('input').placeholder();
        $(window).resize(function () {
            var _El = $('#important-number');
            if ($(window).width() < 768) {
                $('.listitem').prepend(_El.parent());
            } else {
                //alert('hi')
                $('.interchange').append(_El.parent());
            }
        }).trigger('resize');
", CClientScript::POS_END);
?>

