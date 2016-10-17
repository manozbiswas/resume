<?php include_once 'header.php'; ?>
    <section class="container" xmlns="http://www.w3.org/1999/html">
        <section class="custom-content">
            <div class="container">
                <form method="post" action="" id="cvform">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title pull-left">
                                            Personal Information
                                        </h3>
                                        <label class="pull-right"><span style="color: #ef4336;">*</span> Required field</label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="name">Full Name <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                   placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Mailing Address</label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                   placeholder="Mailing Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email <span style="color: #ef4336;">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                   placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Mobile No <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="mobile" class="form-control" id="mobile"
                                                   minlength="0" maxlength="11"
                                                   placeholder="Mobile No" required>
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
                                        <label class="pull-right"><span style="color: #ef4336;">*</span> Required field</label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="certification">Last Certification <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="certification" class="form-control"
                                                   id="certification" placeholder="Certification" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="institution">Institution <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="institution" class="form-control" id="institution"
                                                   placeholder="Institution" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="passingYear">Passing Year <span style="color: #ef4336;">*</span></label>
                                            <input type="year" name="passingYear" class="form-control" id="passingYear"
                                                   placeholder="Passing Year" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="subject" class="form-control" id="subject"
                                                   placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="result">Result <span style="color: #ef4336;">*</span></label>
                                            <input type="text" name="result" class="form-control" id="result"
                                                   placeholder="Result" required>
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
                                        <label class="pull-right">Check at least one field</label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Communication" name="communication" class="interest-group">
                                                        Communication
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Finance & Account" name="financeAccount" class="interest-group">
                                                        Finance & Account
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Business Intelligence" name="businessIntelligence" class="interest-group">
                                                        Business Intelligence
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Content" class="interest-group" name="content">
                                                        Content
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Copy writing " class="interest-group" name="copyWriting">
                                                        Copy writing
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Technology" class="interest-group" name="technology">
                                                        Technology
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Marketing" class="interest-group" name="marketing">
                                                        Marketing
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Sales" class="interest-group" name="sales">
                                                        Sales
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="App Development" class="interest-group" name="appDevelopment">
                                                        App Development
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Graphic Design" class="interest-group" name="graphicDesign">
                                                        Graphic Design
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Human Resources" class="interest-group" name="humanResources">
                                                        Human Resources
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Business Development" class="interest-group" name="businessDevelopment">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Social Media" class="interest-group" name="socialMedia">
                                                        Social Media
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Games Development" class="interest-group" name="gameDevelopment">
                                                        Games Development
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Software Architecture" class="interest-group" name="softwareArchitecture">
                                                        Software Architecture
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Admin" class="interest-group" name="admin">
                                                        Admin
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Research" class="interest-group" name="research">
                                                        Research
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Digital Marketing" class="interest-group" name="digitalMarketing">
                                                        Digital Marketing
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="UI & UX design" class="interest-group" name="uiUxDesign">
                                                        UI & UX design
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Innovative Design" class="interest-group" name="innovativeDesign">
                                                        Innovative Design
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
                                        <label class="pull-right">Check at least one field</label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" value="Intern" class="nature-group" name="nature">
                                                 Intern
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" value="Volunteer" class="nature-group" name="volunteer">
                                                 Volunteer
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" value="Part Time" class="nature-group" name="partTime">
                                                 Part Time
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" value=" Full Time" class="nature-group" name="fullTime"> Full
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
                                            CV Upload
                                        </h3>
                                        <label class="pull-right">Optional</label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="file">Upload Your Resume</label>
                                            <label class="btn btn-default btn-file">
                                                <input type="file" id="file" style="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">

                                    <div class="panel-body">
                                        <input type="submit" name="submit" class="btn btn-primary  btn-lg btn-block"
                                               value="Apply">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="footer"></section>
    </section>

<?php include_once 'footer.php'; ?>