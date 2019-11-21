<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="form-group">
                <h3>Heading</h3>
                <small id="helpId" class="form-text text-muted">All Job and Candidate details are filled automatically
                    on sellectiong candidate and job</small><br>
                <textarea id="heading_input" cols="100" name="heading_input" rows="5" aria-describedby="helpId"
                    required></textarea>
                <small id="helpId" class="form-text text-muted">Type what you want to display in heading of
                    email</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <h3>Body</h3><br>
                <h5>Heading Body</h5>
                <textarea id="body_head_input" name="body_head_input" cols="100" rows="2"
                    aria-describedby="helpId"></textarea>
                <small id="helpId" class="form-text text-muted">This is optional if you want To add something in body as
                    text</small>
            </div>
        </div>
        <div class="col-md-12" style="background-color:#EDEDED">
            <div class="form-group">
                <h5>Lower Body</h5><br>
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
                        <textarea name="job_detail" id="job_detail" cols="40" rows="6" aria-describedby="helpId"
                            readonly style="background-color:#FAFAFA" required></textarea>
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                    <div class="col-md-6">
                        <h6>Job Visa</h6>
                        <textarea name="job_visa" id="job_visa" cols="40" rows="6" aria-describedby="helpId" readonly
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
                    <div class="col-md-6">
                        <h6>Email to</h6>
                        <input type="text" class="form-control" id="email_to" name="email_to" required readonly
                            style="background-color:#FAFAFA">
                        <small id="helpId" class="form-text text-muted">This is required</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6>Candidate Skill</h6>
                        <textarea name="candidate_skill" id="candidate_skill" cols="60" rows="6"
                            aria-describedby="helpId" readonly style="background-color:#FAFAFA" required></textarea>
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

            </div>
        </div>
    </div>
</div>
