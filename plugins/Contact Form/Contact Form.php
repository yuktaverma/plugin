<?php
/** 
 * Plugin Name: Contact Form
 * Plugin Uri: https://youtu.be/1MvoIRXxM8A?list=LL
 * Author: Yukta
 * Author Uri:https://intellipaat.com/
 * Version: 1.0
 * Description: This is my Contact form 7 given by my new organisation as a project. I am so glad to complete this project as a beginner.
 * Tags:Yukta, contact form, Contact Form.
 * Lisence: GPL v2+. 
*/
// if (!defined('ABS path'));
// die("You can't access this file directly");
// endif;

function example_form_plugin()
{
    
$html = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>';


$auth_token = "zcXbR1NoE0zoozyuqAa75s5gBATbeiUsbkGhvb5toGiNWUdDjIUkAU5XgDwCRTet";
$action = "https://api.staging.myhippo.io/v1/herd/quote";


$html .= '<div>
<div class="mb-3">
<label for="zipcode" class="form-label">Please Enter Api Token</label>
<input type="text" required id="my_token" value="'.$auth_token .'"    style="border-color: white;border-bottom: revert;">

</div>
<div class="mb-3">
<label for="zipcode" class="form-label" >Please Enter Api URL</label>

<input type="text" required id="api_url" value="'.$action .'"     style="border-color: white;border-bottom: revert;">
</div>
';
$html .= '<h5 style="text-align:center">Contact Form </h5><br><br>';
$html .= ' <div class="row">
<div class="col">

<form  id="details" action="'.$action.'" method="get" >
  <input type="hidden" name="auth_token" value="'.$auth_token.'">
    <div class="mb-3">
        <label for="firstname" class="form-label">FIRST NAME*</label>
        <input type="text" name="first_name" class="form-control " id="firstname" aria-describedby="emailHelp"
            required style="border-color: white;border-bottom: revert;">

    </div>
</div>
<div class="col">
    <div class="mb-3">
        <label for="middlename" class="form-label">MIDDLE NAME</label>
        <input type="text" name="" class="form-control" id="middlename" aria-describedby="emailHelp"
            required style="border-color: white;border-bottom: revert;">

    </div>
</div>
<div class="col">
    <div class="mb-3">
        <label for="lastname"  class="form-label">LAST NAME* </labe l>
        <input type="text" name="last_name" class="form-control" id="lastname" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">

    </div>
</div>
</div>';

$html .= ' <div class="row">
<div class="col-9">
    <div class="mb-3">
        <label for="streetaddress"  class="form-label">STREET ADDRESS* </label>
        <input type="text" name="street" class="form-control" id="streetaddress" aria-describedby="emailHelp"
            required style="border-color: white;border-bottom: revert;">

    </div>
</div>
<div class="col-3">
    <div class="mb-3">
        <label for="unit" class="form-label">UNIT </label>
        <input type="text" class="form-control" id="unit" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">

    </div>
</div>
</div>';

$html .= ' <div class="row">
<div class="col">
    <div class="mb-3">
        <label for="city"  class="form-label">CITY* </label>
        <input type="text" name="city" class="form-control" id="city" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">

    </div>
</div>
<div class="col">
    <div class="mb-3">
        <label for="state"  class="form-label">STATE* </label>
        <select  name="state" class="form-control" id="unit" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">
            <option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
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
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>

            </select>
    </div>

</div>
<div class="col">
    <div class="mb-3">
        <label for="zipcode" class="form-label">ZIP CODE* </label>
        <input type="text" name="zip" class="form-control" id="zipcode" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">
    </div>
</div>
</div>';

$html .= ' <div class="row">
<div class="col">
    <div class="mb-3">
        <label for="dob"  class="form-label">DATE OF BIRTH* </label>
        <input type="text" name="date_of_birth" class="form-control" id="dob" aria-describedby="emailHelp" required placeholder="DDMMYYYY"
            style="border-color: white;border-bottom: revert;">
    </div>
</div>

</div>';

$html .= ' <div class="row">
<div class="col">
    <div class="mb-3">
        <label for="phone"  class="form-label">PHONE NUMBER* </label>
        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">
    </div>
</div>
<div class="col">
    <div class="mb-3">
        <label for="email"  class="form-label">EMAIL ADDRESS* </label>
        <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" required
            style="border-color: white;border-bottom: revert;">
    </div>
</div>
</div>
';

$html .= ' <div>
IS THIS A HOUSE, CONDO OR HO5?*
</div>';

$html .= '  <div class="row">
<div class="col">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-house-user text-primary"
                        style="font-size: xxx-large;margin-top: 30%;"></i>
                </div>
                <div class="col-9">
                    <h5 style="float: left; margin-left: 1%;" class="card-title text-primary">
                        H05
                    </h5>
                    <div>
                        <input class="form-check-input " type="radio" name=""
                            id="radioNoLabel1" value="" aria-label="..."
                            style="margin-left: 40%;">
                    </div>

                    <p class="card-text" style="float: right;">Some quick example text to build
                        on the
                        card title and make up
                        the bulk of the cards content.</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-building text-danger"
                        style="font-size: xxx-large;margin-top: 30%;"></i>
                </div>
                <div class="col-9">
                    <h5 style="float: left; margin-left: 1%;" class="card-title text-danger">
                        Condo
                    </h5>
                    <div>
                        <input class="form-check-input " type="radio" name=""
                            id="radioNoLabel1" value="" aria-label="..."
                            style="margin-left: 40%;">
                    </div>

                    <p class="card-text" style="float: right;">Some quick example text to build
                        on the
                        card title and make up
                        the bulk of the cards content.</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-store-alt"
                        style="font-size: xxx-large;margin-top: 30%;color: darkorchid;"></i>
                </div>
                <div class="col-9">
                    <h5 style="float: left; margin-left: 1%;color: darkorchid;"
                        class="card-title">
                        House
                    </h5>
                    <div>
                        <input class="form-check-input " type="radio" name=""
                            id="radioNoLabel1" value="" aria-label="..."
                            style="margin-left: 40%;">
                    </div>

                    <p class="card-text" style="float: right;">Some quick example text to build
                        on the
                        card title and make up
                        the bulk of the cards content.</p>
                </div>

            </div>
        </div>
    </div>
</div>

</div>';
$html .= ' <div style="text-align: center; margin-top: 5%;">
<button type="submit" class="btn btn-primary ">Submit</button>
</div>
</form> 

<script>
// $(document).ready( ()=> {
//     $("#details").submit(function (event) {     
  
//       $.ajax({
//         type: "GET",
//         url: $("#api_url").value,
//         data: $("#details").serializeArray(),        
//         encode: true,
//       }).done(function (data) {
//         alert(data);
//       });
  
//       event.preventDefault();
//     });
//   });
</script>
';

$html .= '</div>';
return $html;    
}
add_shortcode('example_form','example_form_plugin');



