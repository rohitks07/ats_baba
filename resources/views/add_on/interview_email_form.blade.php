<div class="card">


    <div class="card-body">
        <div class="row">

            <div class="col-md-12">
                <div class="row ml-5">
                    <div class="col-md-2 mt-5">
                    {{-- <img src="{{url('public/companylogo/baba_logo.png')}}" alt="Logo" style="width:80%;"> --}}
                    <img src="{{url('public/companylogo/'.$data['company']->company_logo)}}" style="width:60%;margin-left:15%;">

                    </div>
                    <div class="col-md-3 mt-2" style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Email Subject</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <textarea name="subject" id="subject" style="width:100%;border-color:#E6E6E6;padding-left:50px;"
                                    maxlength="250" rows="5"></textarea>
                                    <small style="display:none;color:red" id="subject_check">** This cannot be blank **</small>
                            </div>
                            {{--Drop down close--}}

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>
                <div class="row ml-5">
                    <div class="col-md-2 mt-2">

                    </div>
                    <div class="col-md-3 mt-2" style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Candiate Name</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <select class="form-control" id="candidatename" onchange="candidate_value()"
                                    name="candidatename" required>
                                    <option value="">Select Candiate</option>
                                    @foreach ($data['name'] as $i)
                                    <option
                                        value="{{$i['first_name']}} {{$i['middle_name']}} {{$i['last_name']}}|{{$i['ID']}}">
                                        {{$i['first_name']}} {{$i['middle_name']}} {{$i['last_name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Drop down close--}}

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>
                <div class="row ml-5">
                    <div class="col-md-2 mt-2 ">
                    </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Email To</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            <input type="email" class="form-control" name="email_to" id="email_to"
                                aria-describedby="helpId" placeholder="Enter email address" required>

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>
                <div class="row ml-5">
                    <div class="col-md-2 mt-2 ">
                                        </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Email CC</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            <input type="email" class="form-control" name="email_cc" id="email_cc"
                                aria-describedby="helpId" placeholder="Enter email address" required>

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>

                <div class="row ml-5">
                    <div class="col-md-2 mt-2 ">
                                   </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Job</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <select class="form-control" onchange="job_value()" name="jobcode" id="jobcode" required
                                    style="letter-spacing:1px;">
                                    <option value="">Select Job For Schedule an interview
                                    </option>
                                    @foreach ($toReturn['jobpost'] as $item)
                                    <option value="{{$item['job_title']}}|{{$item['ID']}}">{{$item['job_code']}}
                                    </option>
                                    @endforeach
                                </select>
                                <div id="job_detail"
                                    style="display:none;background-color:#EFEFEF;border-radius:0px 00px 10px 10px;">
                                    <div class="row" style="padding:20px 0px 0px 20px">

                                        <div class="col-md-4">
                                            {{-- <p><b>Job Code</b></p> --}}
                                            <p><b>Job Title</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><b>Client Name</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><b>Type</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            {{-- <p><b>Pay Rate</b></p> --}}
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        

                                    </div>
                                    <div class="row" style="padding:20px 0px 0px 20px">
                                        <div class="col-md-4">
                                            {{-- <p id="job_code"></p> --}}
                                            <p id="job_title"></p>
                                        </div>
                                        <div class="col-md-2">
                                                <p id="job_client"></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p id="type"></p>
                                        </div>
                                        <div class="col-md-2">
                                            {{-- <p id="job_pay_rate"></p> --}}
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        {{-- <div class="col-md-2">
                                            
                                        </div> --}}
                                    </div>
                                </div>
                                {{-- <div id="job_detail"
                                    style="display:none;background-color:#EFEFEF;border-radius:0px 00px 10px 10px;">
                                    <div class="row" style="padding:20px 0px 0px 20px">

                                        <div class="col-md-2">
                                            <p><b>Job Code</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><b>Job Title</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><b>Client Name</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><b>Pay Rate</b></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><b>Type</b></p>
                                        </div>
                                        

                                    </div>
                                    <div class="row" style="padding:20px 0px 0px 20px">
                                        <div class="col-md-2">
                                            <p id="job_code"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p id="job_title"></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p id="job_client"></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p id="job_pay_rate"></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p id="type"></p>
                                        </div>
                                         
                                    </div>
                                </div> --}}
                            </div>


                            {{--Drop down close--}}

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>
                <div class="row ml-5">
                    <div class="col-md-2 mt-2 ">
                                     </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Dates</h5>
                    </div>
                    <div class="col-md-7 mt-2">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5>Start Date</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="interviewdate" id="interviewdate"
                                        aria-describedby="helpId" placeholder="" required>
                                </div>
                                <div class="col-md-2">
                                    <h5>End Date</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="end_date" id="interviewdate"
                                        aria-describedby="helpId" placeholder="">
                                </div>
                            </div>


                        </div>
                        {{-- <div class="col-md-1">

                        </div> --}}
                    </div>


                </div>
                {{-- <div class="row ml-5">
                    <div class="col-md-5 mt-2 ">
                        <h4>End Date</h4>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            <input type="date" class="form-control" name="end_date" id="interviewdate"
                                aria-describedby="helpId" placeholder="">

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div> --}}
                {{--row --}}
                <div class="row ml-5 mt-3">
                    <div class="col-md-2 mt-2 ">
                    
                    </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Time Zone</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <select class="form-control" name="time_zone" id="time_zone" required
                                    style="letter-spacing:1px;">
                                    <option value="">Select Time Zone</option>
                                    @foreach ($toReturn['time_zone'] as $item)
                                    <option>{{$item->time_zone_name}}</option>
                                    @endforeach


                                </select>
                            </div>

                            {{--Drop down close--}}
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>
                <div class="row ml-5 mt-3">
                    <div class="col-md-2 mt-2 ">
                                     </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Times</h5>
                    </div>
                    <div class="col-md-7 mt-2">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-2">
                                    <h5>Start Time</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="srttime" class="timepicker" name="start_time" type="time" required>
                                </div>
                                <div class="col-md-2">
                                    <h5>End Time</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="endtime" class="timepicker1" name="end_time" type="time" required>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="col-md-1">

                        </div> --}}
                    </div>


                </div>
                {{--row --}}
                {{-- <div class="row ml-5">
                    <div class="col-md-5 mt-2 ">
                        <h4>End Time</h4>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            <input id="endtime" class="timepicker1" name="end_time" type="time" required>

                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div> --}}
                {{--row --}}
                <div class="row ml-5 mt-3">
                    <div class="col-md-2 mt-2 ">
                                    </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Type</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <select class="form-control" onchange="change()" name="type_int" id="type_int" required>
                                    <option value="">Select Interview Type</option>
                                    <option>Telephonic</option>
                                    <option>Skype</option>
                                    <option>Conference call</option>
                                    <option>Webex</option>
                                    <option>In-Person</option>

                                </select>
                            </div>

                            {{--Drop down close--}}
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>


                </div>

                <div class="row ml-5 mt-3" style="display:none;" id="hidden_webex">
                    <div class="col-md-2 mt-2 ">
                                     </div>
                    <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                        <h5>Webex</h5>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">

                            {{-- Drop down --}}
                            <div class="form-group">
                                <input type="text" id="webex" name="webex" class="form-control">
                            </div>

                            {{--Drop down close--}}
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                    <div class="row ml-5 mt-3" style="display:none;" id="hidden">
                        <div class="col-md-2 mt-2 ">
                                             </div>
                        <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                            <h5>Venue</h5>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">

                                {{-- Drop down --}}
                                <div class="form-group">
                                    <input type="text" id="venue" name="venue" class="form-control">
                                </div>

                                {{--Drop down close--}}
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>


                    </div>
                    {{--row --}}

                    {{--row --}}

                    {{--row --}}

                    <div class="row ml-5">
                        <div class="col-md-2 mt-2 ">
                                                   </div>
                        <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                            <h5>Instruction</h5>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">

                                <textarea class="form-control" aria-label="With textarea" id="instruction"
                                    name="instruction" required></textarea>
                                    <small style="display:none;color:red" id="instruction_check">** This cannot be blank **</small>

                            </div>
                            {{--Drop down close--}}

                        </div>

                    </div>
                    <div class="row ml-5">
                        <div class="col-md-2 mt-2 ">
                                                 </div>
                        <div class="col-md-3 mt-2 " style="border-left:1px solid #E6E6E6;padding-left:50px;">
                            <h5>Signature</h5>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">

                                <textarea class="form-control" aria-label="With textarea" id="signature"
                                    name="signature" required></textarea>
                                    <small style="display:none;color:red" id="signature_check">** This cannot be blank **</small>

                            </div>
                            {{--Drop down close--}}

                        </div>

                    </div>
                    {{-- <div class="row ml-5">
                    <div class="col-md-5 mt-2 ">
                        <h4>Add Multiple Files</h4>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">


                            <div class="file-field">
                                <div class="btn bg-primary text-light float-left">
                                    <span><b>Choose files</b></span>
                                    <input type="file" name="files_upload"> --}}
                    {{-- <input type="file" name="files_upload[]" id="files_upload" multiple> --}}
                    {{-- </div>
                            </div>


                        </div> --}}
                    {{--Drop down close--}}

                </div>

            </div>



        </div>




    </div>

    {{--row --}}
</div>
