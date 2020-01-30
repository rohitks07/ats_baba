<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="form-group" >
                <h3>Heading</h3>
                <small id="helpId" class="form-text text-muted">All Job and Candidate details are filled automatically
                    on sellectiong candidate and job</small><br>
                <textarea id="heading_input" maxlength="300" class="wysihtml5" style="width:100%" name="heading_input" rows="8" aria-describedby="helpId"
                    required>
                <b>Dear Candidate <p id="candidate_name_value_first"></p></b><br>
                We are pleased with your performance with us since joining as part of _________. <br>
                We are happy to have you in our growing family of ________. <br>
                We take pleasure in informing you that your services has been Confirmed with effect _______. <br>
                Also, your salary has been revised to _________.
                
                </textarea>
                <small id="helpId" class="form-text text-muted">Type what you want to display in heading of
                    email</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <h3>Email Content</h3><br>
                <h5>Content Body</h5>
                <textarea id="body_head_input" name="body_head_input" style="width:100%" rows="5"
                    aria-describedby="helpId" class="wysihtml5">
                The Details about you and this job are given bellow
                </textarea>
                <small id="helpId" class="form-text text-muted">This is optional if you want To add something in body as
                    text</small>
            </div>
        </div>
        <div class="col-md-12" style="background-color:#EDEDED">
            <div class="form-group">
                <h5>Lower Body</h5>
                <small id="helpId" class="form-text text-muted">The Job code is not going to show in email </small>
                <br><br>
                <div class="row">
                    <div class="col-md-3">
                        <h6>Job Code</h6>
                        <select name="job_code" id="job_code" class="form-control" required>
                            <option value="">Select job code</option>
                            @foreach ($toReturn['jobpost'] as $item)
                            <option value="{{$item['job_code']}}|{{$item['ID']}}">{{$item['job_code']}}</option>
                            @endforeach
                        </select>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-3">
                        <h6>Job Title</h6>
                        <input type="text" class="form-control" id="job_title" name="job_title" required readonly
                            style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-5">
                        <h6>Job Location</h6>
                        <input type="text" class="form-control" id="location" name="location" required readonly
                            style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6>Job Detail</h6>
                        <textarea name="job_detail" id="job_detail" style="width:100%" rows="6" aria-describedby="helpId"
                            readonly style="background-color:#FAFAFA" required></textarea>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-6">
                        <h6>Job Visa</h6>
                        <textarea name="job_visa" id="job_visa" style="width:100%" rows="6" aria-describedby="helpId" readonly
                            style="background-color:#FAFAFA" required></textarea>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6>Client Name</h6>
                        <input type="text" class="form-control" id="job_client_name" name="job_client_name" required
                            readonly style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-6">
                        <h6>Job Pay Rate</h6>
                        <input type="text" class="form-control" id="job_pay_rate" name="job_pay_rate" required readonly
                            style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6>Select Candidate</h6>
                        <select name="candidate_name" id="candidate_name" class="form-control" required>
                            <option value="">Select job code</option>
                            @foreach ($toReturn['seeker'] as $item)
                            <option
                                value="{{$item['first_name']}} {{$item['middle_name']}} {{$item['last_name']}}|{{$item['ID']}}">
                                {{$item['first_name']}} {{$item['middle_name']}} {{$item['last_name']}}</option>
                            @endforeach
                        </select>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-6">
                        <h6>Candidate Visa</h6>
                        <input type="text" class="form-control" id="candidate_visa" name="candidate_visa" required
                            readonly style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6>Candidate Location</h6>
                        <input type="text" class="form-control" id="candidate_location" name="candidate_location"
                            required readonly style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6>Candidate Skill</h6>
                        <textarea name="candidate_skill" id="candidate_skill" style="width:60%" rows="6"
                            aria-describedby="helpId" readonly style="background-color:#FAFAFA" required></textarea>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>

                </div>
                <br>
                <div class="row">
                        <div class="col-md-6">
                                <h6>Email to</h6>
                                <input type="text" class="form-control" id="email_to" name="email_to" required 
                                    style="background-color:#FAFAFA">
                                <small id="helpId" class="form-text text-muted">This is required</small>
                            </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6>Email bcc</h6>
                        <input type="text" class="form-control" id="email_to" name="email_bcc"  
                            style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required ( Multiple email can be added using '  ,  ' operator)</small>
                    </div>
                    <div class="col-md-6">
                        <h6>Email Subject</h6>
                        <input type="text" class="form-control" id="subject_email" name="subject_email"  
                            style="background-color:#FAFAFA" required>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6>Signature</h6>
                        <textarea name="signature_show" class="wysihtml5" id="signature_show" style="width:100%" rows="10">
                            <b>|| Name:</b> _________ <b>|| company:</b> _________ <b>||phone :</b> _________ <b>|| website:</b> _________ <b>||</b>
                        </textarea>
                        <small id="helpId" class="form-text text-muted">Enter Your Signature</small>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
