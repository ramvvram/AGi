<?php
include 'header.php';
?>




<!--==========================
contuct us
============================-->
<section id="contact">

    <div class="container divinner" style="padding-top:6rem">
        <div class="row">
            <div class="col-12 text-center">
                <!--<h2 class="colorblue pagetitle wow slideInLeft">Contact <span class="colorgreen">Us</span></h2>-->
                <p class="description_text">

                </p>
            </div>

            <div class="col-4 ">
                <h4 class="colorblue">AGi Technosys Pte Ltd.</h4>
                <p> Block 79, AStart Central, <br>
                    Ayer Rajah Crescent, #05-03 ,<br> Singapore 139955<br>
                    <strong>Ph +65 96531921</strong><br>


                    <a href="mailto:hello@agitechnosys.com?Subject=Hello" target="_top"> Email : hello@agitechnosys.com</a>
                </p>


            </div>
            <div class="col-8">
                <h2 class="colorgreen">Leave Message</h2>

                <?php echo $result;?>
                <form id="contact-form" method="post" action="contact.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">First Name *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name " required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Last Name *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name " required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Please specify your need *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value=""></option>
                                        <option value="Request quotation">Request quotation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Enter Message Here " rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn  btn_submit" value="Send message">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> These fields are required

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-12" style="margin-top:3rem">
                <div class="map-responsive">
                    <div id="map-canvas">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.3971859628764!2d103.78633974182326!3d1.2981037312820005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4879aacd1dcf24ce!2sA*2AStartCentral+-+A*2Accelerate&#39;s+Co-innovation+Space!5e0!3m2!1sen!2ssg!4v1554723168407!5m2!1sen!2ssg" frameborder="0" style="border:0" allowfullscreen></iframe>


                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br>

</section>
<div class="clearfix">

</div>

<?php
include 'footer.php';
?>
