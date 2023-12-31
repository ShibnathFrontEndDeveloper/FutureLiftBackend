@extends('user.Dashboard.sidebar')
@section('title') Profile @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
          @include('user.Dashboard.update-pro')
            <div class="page-header">
              <h3 class="page-title"> My Profile</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Profile</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 mx-0">
                <div class="card">
                  <div class="card-body">
                    <form id="msform" action="{{url('/user/personalInformationSave')}}" method="post" enctype= "multipart/form-data">
                        @csrf
                      <!-- progressbar -->
                      <ul id="progressbar">
                          <li class="pro_bar {{(request()->get('er'))?'':'active'}}" id=""><i class="bi bi-person-circle"></i><strong>Personal Details</strong></li>
                          <li class="pro_bar" id=""><i class="bi bi-journal-richtext"></i><strong>Education Details</strong></li>
                          <li class="pro_bar" id=""><i class="bi bi-people-fill"></i><strong>Family Details</strong></li>
                          <li class="pro_bar {{(request()->get('er'))?'active':''}}" id=""><i class="bi bi-pencil-square"></i><strong>Academic Details</strong></li>
                      </ul>
                      <!-- fieldsets -->
                      <fieldset style="{{(request()->get('er'))?'display: none; position: relative; opacity: 0;':''}}">
                        @if ($dataCount > 0)
                            <input type="hidden" name="infoId" id="infoId" value="{{$data->id}}">
                        @endif
                        <div class="row">
                          <div class="col-lg-3">
                            <div class="col-xs-12 profile_img_box">
                              <div class="input_image">
                                <img src="{{($dataCount > 0)?($data->profile_image)?asset('assets/user_images/'.$data->profile_image):'':''}}" alt="" id="upload_image">
                              </div>
                              <input type="file" class="form-control file-upload-info"  placeholder="Upload Image" id="upload_inout" name="profile_image" accept="Image/*">
                              <label class="img_btn" for="upload_inout">Upload Image</label>
                            </div>
                          </div>
                          <div class="col-lg-9 mt-4 profile_input">
                            <div class="row p-3">
                              <div class="col-lg-4 mb-3">
                                <label class="form-label" for="">Full Name</label>
                                <input type="text" class="form-control " id="name" name="name" value="{{Auth::guard('user')->user()->name}}" placeholder="Jane Doe">
                              </div>
                              <div class="col-lg-4 mb-3">
                                <label class="form-label" for="">Phone Number</label>
                                <!-- <input type="text" class="form-control" id="father_name" name="father_name" value="{{($dataCount > 0)?($data->father_name)?$data->father_name:'':''}}" placeholder="Jane Doe" > -->
                                <div class="d-flex phone_selectBox">
                                <select name="" id="" class="form-select phone_select">
                                  <option value="0">+91<i class="bi bi-chevron-down"></i></option>
                                </select>
                                <input type="tel" class="form-control" disabled placeholder="Phone Number" value="{{Auth::guard('user')->user()->phone}}">
                                </div>
                              </div>
                              <div class="col-lg-4 mb-3">
                                <label class="form-label" for="">Date of Birth</label>
                                <!-- <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{($dataCount > 0)?($data->mother_name)?$data->mother_name:'':''}}" placeholder="Jane Doe"> -->
                                <input type="date" class="form-control" id="dob" value="{{($dataCount > 0)?($data->dob)?$data->dob:'':''}}" name="dob">
                              </div>
                            </div>
                            <div class="row align-items-center p-3">
                              <div class="col-lg-4 mb-3">
                                <label class="form-label" for="">Email address</label>
                                <!-- <input type="Email" class="form-control" id="email" value="{{($dataCount > 0)?($data->email)?$data->dob:'':''}}" name="dob"> -->
                                <input type="email" class="form-control" disabled placeholder="Enter email address" value="{{Auth::guard('user')->user()->email}}">
                              </div>
                              <!-- <div class="col-lg-4 mb-3">
                                <label class="form-label" for="">City</label>
                                <select class="form-select" name="city" id="city">
                                    <option <?=($dataCount > 0)?($data->city)?($data->city=='kolkata')?'selected':'':'':''?> value="kolkata" >Kolkata</option>
                                    <option <?=($dataCount > 0)?($data->city)?($data->city=='indore')?'selected':'':'':''?> value="indore">Indore</option>
                                    <option <?=($dataCount > 0)?($data->city)?($data->city=='bangalore')?'selected':'':'':''?> value="bangalore">Bangalore</option>
                                </select>
                              </div> -->
                              <div class="col-lg-8 mb-0">
                                <div class="d-flex">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" <?=($dataCount > 0)?($data->gender)?($data->gender=='Male')?'checked':'':'':''?> id="gnderMale" value="Male">Male</label>
                                  </div>
                                  <div class="form-check mx-3">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" <?=($dataCount > 0)?($data->gender)?($data->gender=='Female')?'checked':'':'':''?> id="gnderFemale" value="Female">Female</label>
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="gender" <?=($dataCount > 0)?($data->gender)?($data->gender=='Other')?'checked':'':'':''?> id="gnderOther" value="Other">Other</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 mb-0 ">
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-0 show_input">Add Email</p>
                                  <span class="hide_input">Cancel</span>
                                </div>
                                <input type="email" id="additional_email" value="{{($dataCount > 0)?($data->additional_email)?$data->additional_email:'':''}}" class="form-control mt-2 addEmail" placeholder="Add email" name="additional_email" style="<?=($dataCount > 0)?($data->additional_email)?'display:block':'':''?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="button" name="next" class="btn btn-primary next" onclick="step_one()" value="Next"/>
                      </fieldset>
                      <fieldset>
                        <div class="row p-3">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">School</label>
                              <input type="text" name="college" id="college" value="{{($dataCount > 0)?($data->college)?$data->college:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Current Class</label>
                              <input type="text" name="university" id="university" value="{{($dataCount > 0)?($data->university)?$data->university:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Board</label>
                              <input type="text" name="course" id="course" value="{{($dataCount > 0)?($data->course)?$data->course:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Year of Passing Current Class</label>
                              <input type="text" class="form-control" id="year_of_passing" value="{{($dataCount > 0)?($data->year_of_passing)?$data->year_of_passing:'':''}}" name="year_of_passing">
                            </div>
                          </div>
                        </div>
                        <input type="button" name="previous" class=" btn btn-outline-primary prev" value="Back"/>
                        <input type="button" name="next" class="btn btn-primary next" onclick="step_two()" value="Next"/>
                      </fieldset>
                      <fieldset>
                        <div class="row p-3">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Father's (or Guardian's) Name</label>
                              <input type="text" name="father_guardian_name" id="father_guardian_name" value="{{($dataCount > 0)?($data->father_guardian_name)?$data->father_guardian_name:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Mother's (or Guardian's) Name</label>
                              <input type="text" name="mother_guardian_name" id="mother_guardian_name" value="{{($dataCount > 0)?($data->mother_guardian_name)?$data->mother_guardian_name:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Father's (or Guardian's) Profession</label>
                              <input type="text" name="father_profession" id="father_profession" value="{{($dataCount > 0)?($data->father_profession)?$data->father_profession:'':''}}" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="" class="form-label">Mother's (or Guardian's) Profession</label>
                              <input type="text" class="form-control" id="mother_profession" value="{{($dataCount > 0)?($data->mother_profession)?$data->mother_profession:'':''}}" name="mother_profession">
                            </div>
                          </div>
                        </div>
                        <input type="button" name="previous" class=" btn btn-outline-primary prev" value="Back"/>
                        <input type="button" name="next" class="btn btn-primary next" onclick="step_three()" value="Next"/>
                      </fieldset>
                      <fieldset style="{{(request()->get('er'))?'display: block; opacity: 1;':''}}">
                        <div class="container"></div>
                        <div class="row p-3">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form_heading_box">
                                  <h4>Most Recent Academic Scores</h4>
                                  <p>Please enter your scores below for best 5 subjects</p>
                                </div>
                                @php
                                $recent_subject = [];
                                $recent_score = [];
                                $previous_subject = [];
                                $previous_score = [];
                                    if($dataCount > 0){
                                        if($data->recent_subject){
                                            $recent_subject = json_decode($data->recent_subject,true);
                                        }
                                        if($data->recent_score){
                                            $recent_score = json_decode($data->recent_score,true);
                                        }
                                        if($data->previous_subject){
                                            $previous_subject = json_decode($data->previous_subject,true);
                                        }
                                        if($data->previous_score){
                                            $previous_score = json_decode($data->previous_score,true);
                                        }
                                    }
                                @endphp
                                <div class="row">
                                  <div class="col-lg-7">
                                    <div class="form-group">
                                      <label for="" class="form-label">Subject</label>
                                      <input type="text" name="recent_subject[]" value="{{(isset($recent_subject[0]))?$recent_subject[0]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_subject[]" value="{{(isset($recent_subject[1]))?$recent_subject[1]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_subject[]" value="{{(isset($recent_subject[2]))?$recent_subject[2]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_subject[]" value="{{(isset($recent_subject[3]))?$recent_subject[3]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_subject[]" value="{{(isset($recent_subject[4]))?$recent_subject[4]:''}}" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-5">
                                    <div class="form-group">
                                      <label for="" class="form-label">CGPA / %age</label>
                                      <input type="text" name="recent_score[]" value="{{(isset($recent_score[0]))?$recent_score[0]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_score[]" value="{{(isset($recent_score[1]))?$recent_score[1]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="recent_score[]" value="{{(isset($recent_score[2]))?$recent_score[2]:''}}" class="form-control">
                                    </div><div class="form-group">
                                      <input type="text" name="recent_score[]" value="{{(isset($recent_score[3]))?$recent_score[3]:''}}" class="form-control">
                                    </div><div class="form-group">
                                      <input type="text" name="recent_score[]" value="{{(isset($recent_score[4]))?$recent_score[4]:''}}" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12 my-3 upload_marksheetBox text-center">
                                  <p class="text-dark  fw-bold mb-0">-or-</p>
                                  <span>Upload your Marksheet <small class="text-danger">(Please select only pdf file and max file size 2MB)</small></span>
                                  <input type="file" name="recent_marksheet" onchange="validateFileUpload(this)" class="form-control mt-2">
                                  @if ($data->recent_marksheet)
                                  <p class="text-warning">Last uploaded marksheet view to <a href="javascript:void(0)" onclick="marksheetModalOpen('{{asset('/assets/marksheets/'.$data->recent_marksheet)}}');">click here</a></p>
                                  @endif
                                </div>

                              </div>
                              <div class="col-lg-6">
                                <div class="form_heading_box">
                                  <h4>Previous Year Academic Scores</h4>
                                  <p> Please enter your scores below for best 5 subjects</p>
                                </div>
                                <div class="row">
                                  <div class="col-lg-7">
                                    <div class="form-group">
                                      <label for="" class="form-label">Subject</label>
                                      <input type="text" name="previous_subject[]" value="{{(isset($previous_subject[0]))?$previous_subject[0]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_subject[]" value="{{(isset($previous_subject[1]))?$previous_subject[1]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_subject[]" value="{{(isset($previous_subject[2]))?$previous_subject[2]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_subject[]" value="{{(isset($previous_subject[3]))?$previous_subject[3]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_subject[]" value="{{(isset($previous_subject[4]))?$previous_subject[4]:''}}" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-5">
                                    <div class="form-group">
                                      <label for="" class="form-label">CGPA / %age</label>
                                      <input type="text" name="previous_score[]" value="{{(isset($previous_score[0]))?$previous_score[0]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_score[]" value="{{(isset($previous_score[1]))?$previous_score[1]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_score[]" value="{{(isset($previous_score[2]))?$previous_score[2]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_score[]" value="{{(isset($previous_score[3]))?$previous_score[3]:''}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="previous_score[]" value="{{(isset($previous_score[4]))?$previous_score[4]:''}}" class="form-control">
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-12 my-3 upload_marksheetBox text-center">
                                  <p class="text-dark  fw-bold mb-0">-or-</p>
                                  <span>Upload your Marksheet <small class="text-danger">(Please select only pdf file and max file size 2MB)</small></span>
                                  <input type="file" name="previous_marksheet" onchange="validateFileUpload(this)" class="form-control mt-2">
                                  @if ($data->previous_marksheet)
                                  <p class="text-warning">Last uploaded marksheet view to <a href="javascript:void(0)" onclick="marksheetModalOpen('{{asset('/assets/marksheets/'.$data->previous_marksheet)}}');">click here</a></p>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="button" name="previous" class=" btn btn-outline-primary prev" value="Back"/>
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                      </fieldset>
                      <fieldset>
                        <h1 class="text-center pt-5">Your Profile successfuly submited</h1>
                        <input type="button" name="previous" class=" btn btn-outline-primary prev" value="Back"/>
                    </fieldset>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>


        <div class="modal fade" id="marksheetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Marksheet</h5>
                        <button type="button" onclick="$('#marksheetModal').modal('hide');" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <embed src="" width="999" height="500" alt="pdf" id="marksheetEm">
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('scripts')
<script src="{{asset('js/educationform.js')}}"></script>
@endsection

<!-- <script>

</script> -->
