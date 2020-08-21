<?php Yii::app()->clientScript->registerScriptFile('', CClientScript::POS_END); ?>
<div class="form-wrap">
    <div class="form-heading">
        <h1>GET STARTED!</h1>
        <?php
        if (empty($swifttransForm)) {
            ?>
            <p>
                Just fill out our short application below and a recruiter will call you. It's that simple.
            </p>
            <?php
        } else {
            echo "<hr><br>";
        }
        ?>
    </div>
    <form action="" method="post" id="leadForm" novalidate="novalidate">
        <div class="namefields clearfix">
            <div class="firstname-container">
                <input type="text" name="first_name" placeholder="First Name" class="form-control">
            </div>
            <div class="lastname-container">
                <input type="text" name="last_name" placeholder="Last Name" class="form-control">
            </div>
        </div>
        <input type="text" name="phone" placeholder="Phone Number" class="form-control">
        <input type="text" name="email" placeholder="Email Address" class="form-control">
        <input type="text" name="street_address" placeholder="Street Address" class="form-control">
        <input type="text" name="city" placeholder="City" class="form-control">
        <select name="state" id="state" class="form-control">
            <option value="">Select a state</option>
            <option value="AL">Alabama</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>

        <input type="text" name="zip_code" placeholder="Zip code" class="form-control">
        <input type="text" name="moving_violation" placeholder="List any moving violations" class="form-control">
        <select name="cdl_valid" id="class_cdl" class="form-control">
            <option value="">Do you have a Class A CDL?</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <input type="hidden" name="form_type" value="T3">
        <?php if(!empty($data)){ ?>
        <input type="hidden" name="variant" value="<?php echo $data->type; ?>">
        <?php } ?>
        <input type="submit" value="submit" class="form-control-btn">
    </form>
</div>