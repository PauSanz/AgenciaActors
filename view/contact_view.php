<div class="container">

    <!-- Page Heading-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contacte</h1>                
        </div>
    </div>       
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>Envia un missatge</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nom:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Telèfon:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Missatge:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-danger">Envia</button>
            </form>
            <div>
                <p></p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Detalls de contacte</h3>
            <p>
                08450 Granollers<br>C/Camp de les moreres nº12<br>
            </p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Phone">Telèfon</abbr>: 934531212</p>
            <p><i class="fa fa-envelope-o"></i> 
                <abbr title="Email">Email</abbr>: <a href="mailto:name@example.com">agenciadactors@gmail.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i> 
                <abbr title="Hours">Horari</abbr>: Dilluns - Divendres: 9:00 AM - 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div> 
    </div>
</div>