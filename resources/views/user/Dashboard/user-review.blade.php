@extends('user.Dashboard.sidebar')
@section('title') Change Password @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> User Review</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Review</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form id="review_check_form">
                  <!-- tab bar -->
                  <ul id="tabBar">
                      <li class="active" id="session"><strong><i class="bi bi-check"></i>Session Experience</strong></li>
                      <li id="counseler"><strong><i class="bi bi-check"></i>Counselor Impression</strong></li>
                      <li id="service"><strong><i class="bi bi-check"></i>Service Delivery</strong></li>
                      <li id="impacSubmit"><strong><i class="bi bi-check"></i>Overall Impac</strong></li>
                      <li id="adidtional"><strong><i class="bi bi-check"></i>Additional Feedback</strong></li>
                  </ul>
                  <!-- fieldsets -->
                  <fieldset>
                      <div class="form-card">
                          <h2 class="fs-title">Session Experience</h2>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">How satisfied were you with your career counseling session today?</p>
                            <div class="d-flex valu_box">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                <label class="form-check-label" for="exampleRadios4">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                <label class="form-check-label" for="exampleRadios5">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">What did you find most helpful about the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did the counselor adequately address your career concerns and questions?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">If not, what specific areas could the counselor have improved on?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          
                      </div>
                      <input type="button" name="next" class="btnnext action-button" value="Next Step"/>
                  </fieldset>
                  <fieldset>
                      <div class="form-card">
                          <h2 class="fs-title">Counselor Impression</h2>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">How knowledgeable and professional did you find your counselor?</p>
                            <div class="d-flex valu_box">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6" checked>
                                <label class="form-check-label" for="exampleRadios6">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7">
                                <label class="form-check-label" for="exampleRadios7">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8">
                                <label class="form-check-label" for="exampleRadios8">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option9">
                                <label class="form-check-label" for="exampleRadios9">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios10" value="option10">
                                <label class="form-check-label" for="exampleRadios10">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Was the counselor's communication style clear and engaging?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did you feel comfortable and heard throughout the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                      </div>
                      <input type="button" name="previous" class="btnprevious action-button-previous" value="Previous"/>
                      <input type="button" name="next" class="btnnext action-button" value="Next Step"/>
                  </fieldset>
                  <fieldset>
                      <div class="form-card">
                          <h2 class="fs-title">Service Delivery</h2>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Was the online platform easy to use and navigate for the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did you experience any technical difficulties during the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">How easy was it to schedule and manage your session appointment?</p>
                            <div class="d-flex valu_box mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option11" checked>
                                <label class="form-check-label" for="exampleRadios11">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios12" value="option12">
                                <label class="form-check-label" for="exampleRadios12">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios13" value="option13">
                                <label class="form-check-label" for="exampleRadios13">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios14" value="option14">
                                <label class="form-check-label" for="exampleRadios14">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15" value="option15">
                                <label class="form-check-label" for="exampleRadios15">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      <input type="button" name="previous" class="btnprevious action-button-previous" value="Previous"/>
                      <input type="button" name="make_payment" class="btnnext action-button" value="Next Step"/>
                  </fieldset>
                  <fieldset>
                    <div class="form-card">
                      <h2 class="fs-title">Overall Impact</h2>
                      <div class="d-flex justify-content-between align-items-center respons_input">
                        <p class="mb-0">Do you feel your session helped you gain valuable insights and move forward in your career journey?</p>
                        <div class="box_check d-flex">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Yes
                            </label>
                          </div>
                          <div class="form-check ms-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                              No
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center respons_input">
                        <p class="mb-0">How likely are you to recommend FUTURE LIFT's career counseling services to others? </p>
                        <div class="d-flex valu_box mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios16" value="option16" checked>
                                <label class="form-check-label" for="exampleRadios16">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios17" value="option17">
                                <label class="form-check-label" for="exampleRadios17">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios18" value="option18">
                                <label class="form-check-label" for="exampleRadios18">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios19" value="option19">
                                <label class="form-check-label" for="exampleRadios19">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios20" value="option20">
                                <label class="form-check-label" for="exampleRadios20">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center respons_input">
                        <p class="mb-0">Would you consider purchasing another counseling session in the future?</p>
                        <div class="box_check d-flex">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Yes
                            </label>
                          </div>
                          <div class="form-check ms-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                              No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="button" name="previous" class="btnprevious action-button-previous" value="Previous"/>
                    <input type="button" class="btnnext action-button" value="Next Step"/>
                  </fieldset>
                  <fieldset>
                      <div class="form-card">
                          <h2 class="fs-title">Additional Feedback</h2>
                          <p class="mb-0">Is there anything else you would like to share about your experience with FUTURE LIFT?</p>
                          <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                          
                        </div>
                      <input type="button" name="previous" class="btnprevious action-button-previous" value="Previous"/>
                      <input type="submit" name="make_payment" class="btnnext action-button" value="Submit"/>
                  </fieldset>
                </form>
              </div>
          </div>
        </div>
@endsection
@section('scripts')
<script>
    function subscription_purchase(id){
        window.location.href="{{url('/user/subscription-submit')}}/"+id;
    }



    // User Review Multy steps
    $(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".btnnext").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#tabBar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".btnprevious").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#tabBar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
        
    });
    
</script>
@endsection
