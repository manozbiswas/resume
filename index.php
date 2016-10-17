<?php include_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'header.php'); ?>
<section class="container">
    <section class="custom-content">
        <?php if (isset($_GET['msg']) && $_GET['msg'] == "success"): ?>
		<div class="row">
		<div class="col-md-12">
            <div class="message" style="height: 400px">
                <div class="alert error alert-success fade in">
                    <h3>Your information has been saved</h3>
                    <h5>Please check your email for further information</h5>
                </div>
				      <a style="text-align: right" href="index.php" class="btn btn-primary btn-submit pull-right-md custom-btn">Click here for new application</a>
            </div>
		</div>
		</div>
        <?php elseif (isset($_GET['msg']) && $_GET['msg'] == "error"): ?>
		<div class="row">
		<div class="message" style="height: 400px">
            <?php
            session_start();
            if (isset($_SESSION['errror']) && !empty($_SESSION['errror'])) {
				
                foreach ($_SESSION['errror'] as $er) {
                    ?>
                    <div class="alert error alert-danger fade in">
                        <p><?php echo $er; ?></p>
                    </div>
                    <?php
                }
		
				
            }
               session_destroy();
            ?>
		</div>
		</div>
        <?php else: ?>
            <form method="post" action="store.php" id="cvform" enctype="multipart/form-data" class="form-horizontal">
                <!--                        <div class="alert error alert-warning fade in">-->
                <!--                            <ul>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="alert hide alert-success fade in">-->
                <!--                        </div>-->
                <div id="message" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4>Thank You for Your Application</h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">
                                    Personal Information
                                </h3>
                                <span class="pull-right"><span style="color: #47AC34;">*</span> Required field</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name" class="col-md-2">Full Name <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control col-md-10" id="name"
                                               placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-md-2">Mailing Address</label>
                                    <div class="col-md-10">
                                    <textarea cols="" class="form-control" rows="3" name="address" id="address"
                                              placeholder="Mailing address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-2">Email <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-md-2">Mobile No <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                               minlength="0" maxlength="11"
                                               placeholder="Mobile No" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">
                                    Educational Information
                                </h3>
                                <span class="pull-right"><span style="color: #47AC34;">*</span> Required field</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="certification" class="col-md-2">Last Certification <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="certification" class="form-control"
                                               id="certification" placeholder="Certification" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="institution" class="col-md-2">Institution <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="institution" class="form-control"
                                               id="institution"
                                               placeholder="Institution" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="passingYear" class="col-md-2">Passing Year <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="passingYear" class="form-control"
                                               id="passingYear"
                                               placeholder="Passing Year" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="col-md-2">Subject <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="subject" class="form-control" id="subject"
                                               placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="result" class="col-md-2">Result <span
                                            style="color: #47AC34;">*</span></label>
                                    <div class="col-md-10">
                                        <input type="text" name="result" class="form-control" id="result"
                                               placeholder="Result" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">
                                    Area of Interest
                                </h3>
                                <span class="pull-right">Select at least one field</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="" style="text-align: left">
                                    <span id="interest_error"></span>
                                </div>
                                <div class="col-md-3 col-sm-6 custom-height">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Communication" name="interest[]"
                                                       class="interest-group">
                                                Communication
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Finance & Account"
                                                       name="interest[]" class="interest-group">
                                                Finance & Account
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Business Intelligence"
                                                       name="interest[]" class="interest-group">
                                                Business Intelligence
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Content" class="interest-group"
                                                       name="interest[]">
                                                Content
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Copy writing "
                                                       class="interest-group" name="interest[]">
                                                Copy writing
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Impact Evaluation"
                                                       class="interest-group" name="interest[]">
                                                Impact Evaluation
                                            </label>
                                        </div>
											<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Social and Behavioral Change Communication"
                                                       class="interest-group" name="interest[]">
                                               Social and Behavioral Change Communication
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 custom-height">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Technology" class="interest-group"
                                                       name="interest[]">
                                                Technology
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Marketing" class="interest-group"
                                                       name="interest[]">
                                                Marketing
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Sales" class="interest-group"
                                                       name="interest[]">
                                                Sales
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="App Development"
                                                       class="interest-group" name="interest[]">
                                                App Development
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Graphic Design"
                                                       class="interest-group" name="interest[]">
                                                Graphic Design
                                            </label>
                                        </div>    
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value=" Big Data Analytics"
                                                       class="interest-group" name="interest[]">
                                                Big Data Analytics
                                            </label>
                                        </div>	<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Market Research"
                                                       class="interest-group" name="interest[]">
                                                Market Research
                                            </label>
                                        </div>
										
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 custom-height">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Human Resources"
                                                       class="interest-group" name="interest[]">
                                                Human Resources
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Business Development"
                                                       class="interest-group" name="interest[]">
                                                Business Development
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Social Media"
                                                       class="interest-group" name="interest[]">
                                                Social Media
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Games Development"
                                                       class="interest-group" name="interest[]">
                                                Games Development
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Software Architecture"
                                                       class="interest-group" name="interest[]">
                                                Software Architecture
                                            </label>
                                        </div>   
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Statistical Analysis"
                                                       class="interest-group" name="interest[]">
                                               Statistical Analysis
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 custom-height">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Admin" class="interest-group"
                                                       name="interest[]">
                                                Admin
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Research" class="interest-group"
                                                       name="interest[]">
                                                Research
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Digital Marketing"
                                                       class="interest-group" name="interest[]">
                                                Digital Marketing
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="UI & UX design"
                                                       class="interest-group" name="interest[]">
                                                UI & UX design
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Innovative Design"
                                                       class="interest-group" name="interest[]">
                                                Innovative Design
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Internet of Things"
                                                       class="interest-group" name="interest[]">
                                                Internet of Things
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">
                                    Job Nature
                                </h3>
                                <span class="pull-right">Select at least one field</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="" style="text-align: left">
                                    <span id="nature_error"></span>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>
                                        <input type="checkbox" value="Intern" class="nature-group"
                                               name="nature[]">
                                        Intern
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>
                                        <input type="checkbox" value="Volunteer" class="nature-group"
                                               name="nature[]">
                                        Volunteer
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>
                                        <input type="checkbox" value="Part Time" class="nature-group"
                                               name="nature[]">
                                        Part Time
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>
                                        <input type="checkbox" value=" Full Time" class="nature-group"
                                               name="nature[]"> Full
                                        Time
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">
                                    Resume Upload
                                </h3>
                                <span class="pull-right">Optional</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    <label for="file">Upload Your Resume <span
                                            style="color: #47AC34;">(pdf/docx/doc)</span></label>
                                    <label class="btn btn-default btn-file">
                                        <input type="file" id="cvFile" style="" name="cvFile"">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">

                            <div class="panel-body align-center">
                                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-submit"
                                       value="Submit"/>
                                <input type="reset" name="reset" class="btn btn-danger btn-lg btn-reset"
                                       value="Reset"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif; ?>
    </section>
</section>

<?php include_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'footer.php'); ?>

