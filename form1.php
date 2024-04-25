<?php
// if(isset($_POST['submitform'])){
//     echo '<pre>';
//     print_r($_POST);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/form1.css">

    <!-- jquery link -->
    <link rel="stylesheet" href="./jqueryf/jquery-ui.css">
    <script src="./jqueryf/jquery-ui.js"></script>

    <!-- 3 -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!--  -->

</head>

<body>

    <div class=" container-fluid rounded">
        <!--  -->
        <div class="f-outer">

            <form action="" method="POST" class="needs-validation rounded form1" name="myForm" novalidate id="form">

                <!--  -->
                <div class="col coll1">
                    <div class="row">
                        <!-- pages1 -->
                        <div class="word">Panjabi/TEENS CLASSES (11 TO 19 YEARS OLD) <br> <span>Student Details</span>
                        </div>
                        <div class="col-md-6 first">
                            <label for="validationCustom01" class="form-label" id="validationCustom01">First
                                name</label>
                            <input type="text" class="form-control inpt1 " id="validationCustom01"
                                placeholder="Enter First Name" required name="fname" pattern="^[^0-9]+$" minlength="3"
                                maxlength="30" />
                            <div class="invalid-feedback if">
                                Please enter currect firstname
                            </div>
                        </div>

                        <div class="col-md-6 first">
                            <label for="validationCustom02" class="form-label">surname</label>
                            <input type="text" class="form-control inpt2 " id="validationCustom02"
                                placeholder="Enter SurName" required name="sname" pattern="^[^0-9]+$" minlength="3"
                                maxlength="30" />
                            <div class="invalid-feedback if">
                                please enter correct surname.
                            </div>
                        </div>
                    </div>


                    <!--  -->

                    <!-- radio -->
                    <div class="wd form-label">You Are</div>
                    <div class="radio" id="firstRadio">
                        <div id="sradio">
                            <input type="radio" class="radio-btn1" id="student" name="student" value="New Student"
                                checked />
                            <label for="student" class="wpform-label">New Student</label><br>
                        </div>
                        <div id="sradio">
                            <input type="radio" class="radio-btn2" id="students" name="student"
                                value="Existing Student" /><label for="students" class="wpform-label">Existing
                                Student</label>
                            <br>
                        </div>
                    </div>
                    <!--  -->

                    <div class="rbox">
                        <hr style="margin-top:0;">
                        <p class="pw form-label"> What terms have you bought already ?</p>

                        <input class="inck" type="checkbox" id="check_1" name="check_1" value="check_1" checked />
                        <label class="labck" for="check_1">Team 1</label>

                        <input class="inck" type="checkbox" id="check_2" name="check_2" value="check_2" />
                        <label class="labck" for="check_2">Team 2</label>

                        <input class="inck" type="checkbox" id="check_3" name="check_3" value="check_3" />
                        <label class="labck" for="check_3">Team 3</label>

                        <input class="inck" type="checkbox" id="check_4" name="check_4" value="check_4" />
                        <label class="labck" for="check_4">Team 4</label>

                        <input class="inck" type="checkbox" id="check_5" name="check_5" value="check_5" />
                        <label class="labck" for="check_5">Team 5</label>

                        <input class="inck" type="checkbox" id="check_6" name="check_6" value="check_6" />
                        <label class="labck" for="check_6">Team 6</label>

                        <input class="inck" type="checkbox" id="check_7" name="check_7" value="check_7" />
                        <label class="labck" for="check_7">Team 7</label>

                        <input class="inck" type="checkbox" id="check_8" name="check_8" value="check_8" />
                        <label class="labck" for="check_8">Team 8</label>

                        <input class="inck" type="checkbox" id="check_9" name="check_9" value="check_9" />
                        <label class="labck" for="check_9">Team 9</label>

                        <input class="inck" type="checkbox" id="check_10" name="check_10" value="check_10" />
                        <label class="labck" for="check_10">Team 10</label>

                        <input class="inck" type="checkbox" id="check_11" name="check_11" value="check_11" />
                        <label class="labck" for="check_11">Team 11</label>

                        <input class="inck" type="checkbox" id="check_12" name="check_12" value="check_12" />
                        <label class="labck" for="check_12">Team 12</label>
                    </div>
                    <!--  -->
                    <!-- date picker -->
                    <div class="row">

                        <!--  -->
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Date of Birth</label>
                            <input type="text" id="datepicker" class="form-control inptt" name="DOB" required />
                            <div class="invalid-feedback if">
                                please pick your date of birth.
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <div class="Radio" id="secondRedio">
                        <div class="form-label">Select Child Category</div>
                        <!--  -->
                        <input class="rinput" type="radio" id="radio_1" name="type" value="first child" />
                        <label class="inputL" for="radio_1"> first child</label>

                        <input class="rinput" type="radio" id="radio_2" name="type" value="second child" />
                        <label class="inputL" for="radio_2"> second child</label>

                        <input class="rinput" type="radio" id="radio_3" name="type" value="D of E" />
                        <label class="inputL" for="radio_3"> D of E</label>
                        <hr>
                    </div>
                    <!--  radio-->
                    <div class="gender_Radio">
                        <p class="p form-label">Gender</p>
                        <div class="gradios" id="gradios">
                            <div id="radios">
                                <input class="ginput1" type="radio" id="radiobtn1" name="gradio" value="Male" />
                                <label class="input" for="radiobtn1">Male</label>
                            </div>
                            <div id="radios">
                                <input class="ginput2" type="radio" id="radiobtn2" name="gradio" value="Female" />
                                <label class="input" for="radiobtn2">Female</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 sub1">
                        <button class="btn btn1 nextbtn1" type="button">Next</button>
                    </div>

                </div>

                <!-- SECOND -->

                <div class="col coll2">
                    <!-- pages2 -->
                    <div class="row">
                        <div class="word1">Panjabi/TEENS CLASSES (11 TO 19 YEARS OLD)<br> <span>Parent
                                Details</span>
                        </div>
                        <div class="col-md-6 first1">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control inpt3" id="validationCustom01"
                                placeholder="Enter First Name" name="fname2" pattern="^[^0-9]+$" minlength="3"
                                maxlength="30" required />
                            <div class="invalid-feedback if">
                                please enter correct firstname.
                            </div>
                        </div>
                        <div class="col-md-6 first1">
                            <label for="validationCustom02" class="form-label">surname</label>
                            <input type="text" class="form-control inpt4" id="validationCustom02"
                                placeholder="Enter SurName" name="sname2" pattern="^[^0-9]+$" minlength="3"
                                maxlength="30" required />
                            <div class="invalid-feedback if">
                                please enter correct surname.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Address</label>
                        <textarea class="form-control " minlength="10" maxlength="40" id="validationTextarea"
                            placeholder="Enter your recent address" name="textArea" required></textarea>
                        <div class="invalid-feedback if">
                            Enter your recent address.
                        </div>
                    </div>


                    <!--  -->

                    <div class="form-label">Email Address</div>

                    <div class="form-group">
                        <input type="email" class="form-control emaill" placeholder="enter Email" name="emails"
                            id="emails" maxlength="25" required />
                        <div class="invalid-feedback if">
                            please enter correct email.
                        </div>
                    </div>

                    <!--  -->

                    <div class="form-group">

                        <label for="phone_no">Phone Number</label>
                        <!--  -->
                        <input type="text" name="number1" data-validation="number"
                            data-validation-allowing="negative,number" input name="color" datavalidation-ignore="$"
                            required="required" class="form-control numbers" id="phone_no" minlength="10" maxlength="10"
                            pattern="^[^a-z]+$" placeholder="Enter Phone Number" required />
                        <div class="invalid-feedback if">
                            please enter Phone Number.
                        </div>
                        <!--  -->
                    </div>


                    <!--  -->
                    <div class="col-12 sub2">
                        <button class="btn pre_btn1" type="button">Previous</button>
                        <button class="btn btn2 nextbtn1" type="button">Next</button>
                    </div>

                </div>





                <!-- three -->


                <div class="col coll3">
                    <!-- pages3-->
                    <div class="col-12 three">
                        <!-- 1 -->
                        <div class="form-check">
                            <div class="word2">Data Protection & Terms and Conditions</div>
                            <p class="cp">I hereby consent to protect all the course materials and intellectual
                                properties
                                obtained or
                                acquired
                                by my child as a result of subscribing the course/s under Smile 4 Kids Ltd.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck1" name="check1" required
                                checked />
                            <label class="inl" for="invalidCheck1" checked>
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="form-check">

                            <p class="cp">I shall not in case reproduce and /or distribute, allow reproduction and
                                /or
                                distribution of any
                                such course material by any third party including but not limited to any of my
                                family
                                members
                                for commercial or non-commercial purpose. Course materials are being provided to my
                                child
                                who
                                had subscribed the course with Smile 4 Kids ltd and shall at all times be used
                                solely by
                                my
                                child only.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck2" name="check2" required
                                checked />
                            <label class="inl" for="invalidCheck2">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!--3  -->


                        <div class="form-check">

                            <p class="cp">I understand that selling, commercial copying, hiring or lending of course
                                materials
                                are strictly
                                prohibited. I consent to indemnify Smile 4 Kids ltd for any losses or damages
                                resulting
                                out
                                of
                                my failure to protect the course materials as mentioned above with my best
                                endeavours.
                            </p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck3" name="check3" required
                                checked />
                            <label class="inl" for="invalidCheck3">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>
                        <!-- 4  -->


                        <div class="form-check">

                            <p class="cp">I will endeavour to speak Panjabi to my child as part of their homework.
                            </p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck4" name="check4" required
                                checked />
                            <label class="inl" for="invalidCheck4">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="form-check">

                            <p class="cp">Smile 4 Kids will presume that the parents/other party has read and
                                consented
                                to
                                all
                                the
                                terms and
                                clauses in the agreement and NDA should they prefer not to return a signed copy of
                                such
                                documents
                                and the student attends a class.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck5" name="check5" required
                                checked />
                            <label class="inl" for="invalidCheck5">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>
                        <!-- 6 -->

                        <div class="form-check">

                            <p class="cp">I undertake that my child is under parental/guardian supervision, at all
                                times,
                                during
                                the
                                length of
                                the class. I agree not to hold Smile 4 Kids responsible, for being unable to
                                supervise
                                my
                                child
                                individually.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck6" name="check6" required
                                checked />
                            <label class="inl" for="invalidCheck6">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                    </div>

                    <!-- 3sub -->

                    <div class="col-12 sub3">
                        <button class="btn pre_btn2" type="button">Previous</button>
                        <button class="btn btn3 nextbtn1" type="button">Next</button>
                    </div>
                </div>
                <!-- four -->

                <div class="col coll4">
                    <!-- pages4-->
                    <div class="col-12 four">
                        <!-- 1 -->
                        <div class="form-check">
                            <div class="word2">Data Protection & Terms and Conditions</div>
                            <p class="cp">I undertake that my child is under parental/guardian supervision, at all
                                times,
                                during
                                the length of the class. I agree not to hold Smile 4 Kids responsible, for being
                                unable
                                to
                                supervise my child individually.
                            </p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck7" name="check7" required
                                checked />
                            <label class="inl" for="invalidCheck7">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="form-check">

                            <p class="cp">By enrolling my child onto a SMILE 4 KIDS course, I agree that I have read
                                and
                                will be
                                bound by all the terms and conditions and policies, on the SMILE 4 kids website.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck8" name="check8" required
                                checked />
                            <label class="inl" for="invalidCheck8">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- 3 -->

                        <div class="form-check">

                            <p class="cp">I understand that termly fees once paid are non-refundable.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck9" name="check9" required
                                checked />
                            <label class="inl" for="invalidCheck9">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="form-check">

                            <p class="cp">I consent to occasional classes being recorded for staff training purposes
                                only. I
                                accept that I will have the right to decline or permit use of any footage of my
                                child,
                                when
                                asked, (for use on SMILE 4 KIDS website or social media), prior to use.</p>

                            <input type="radio" id="radio1" name="radio1" checked />
                            <label class="red" for="radio1">YES</label> <br>
                            <input type="radio" id="radio2" name="radio2" />
                            <label class="red" for="radio2">NO</label>
                        </div>

                        <!-- sub4 -->

                        <div class="col-12 sub4">
                            <button class="btn pre_btn3" id="Previous" type="button">Previous</button>
                            <button class="btn btn4 nextbtn1" type="button">Next</button>
                        </div>

                    </div>
                </div>



                <!-- five -->
                <div class="col coll5">
                    <!-- pages5-->
                    <div class="col-12 four">
                        <!-- 1 -->
                        <div class="form-check">
                            <div class="word2">Data Protection & Terms and Conditions</div>
                            <p class="cp">I agree to reading all policies on SMILE 4 kids website including
                                Health/safety,
                                Safeguarding, Online Safety T’s and C’s and Privacy Policy.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck10" name="check10" required
                                checked />
                            <label class="inl" for="invalidCheck10">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>
                        <!-- 2 -->

                        <div class="form-check">

                            <p class="cp">I accept that no refund or partial refund will be given if a student
                                leaves,
                                part
                                term.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck11" name="check11" required
                                checked />
                            <label class="inl" for="invalidCheck11">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- 3 -->

                        <div class="form-check">

                            <p class="cp">I accept that any missed classes cannot be replaced/accommodated, on
                                alternative
                                dates.</p>
                            <input class="inputc" type="checkbox" value="" id="invalidCheck12" name="check12" required
                                checked />
                            <label class="inl" for="invalidCheck12">
                                I Agree
                            </label>
                            <div class="invalid-feedback if">
                                please accept the terms and conditions.
                            </div>
                        </div>

                        <!-- sub4 -->

                        <div class="col-12 sub5">
                            <button class="btn pre_btn4" type="button" id="Previous">Previous</button>
                            <button type="submit" class="btn btn5 submitbtn" name="submitform">Apply</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--  -->
    <script src="./assets\js\form1.js"></script>


    <!--  -->
    <script>
    var date = new Date();
    var cYear = date.getFullYear();
    var cMonth = date.getMonth();
    var cDate = cDate = date.getDate();


    $(document).ready(function() {
        $("#datepicker").datepicker({
            maxDate: new Date(cYear, cMonth, cDate)
        });
    });
    </script>
</body>

</html>