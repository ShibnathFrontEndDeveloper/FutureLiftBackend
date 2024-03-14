@extends('user.Dashboard.sidebar')
@section('title') Review @endsection
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
                    @csrf
                    <input type="hidden" name="sessionId" value="{{$id}}">
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
                                <input class="form-check-input" type="radio" name="session_experience_rating" id="session_experience_rating1" value="1">
                                <label class="form-check-label" for="session_experience_rating1">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="session_experience_rating" id="session_experience_rating2" value="2">
                                <label class="form-check-label" for="session_experience_rating2">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="session_experience_rating" id="session_experience_rating3" value="3">
                                <label class="form-check-label" for="session_experience_rating3">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="session_experience_rating" id="session_experience_rating4" value="4">
                                <label class="form-check-label" for="session_experience_rating4">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="session_experience_rating" id="session_experience_rating5" value="5">
                                <label class="form-check-label" for="session_experience_rating5">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">What did you find most helpful about the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="session_experience_helpful_about_the_session" type="radio" value="Yes" id="session_experience_helpful_about_the_session1">
                                <label class="form-check-label" for="session_experience_helpful_about_the_session1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="session_experience_helpful_about_the_session" type="radio" value="No" id="session_experience_helpful_about_the_session2" >
                                <label class="form-check-label" for="session_experience_helpful_about_the_session2">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did the counselor adequately address your career concerns and questions?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="session_experience_your_career_concerns_and_questions" type="radio" value="Yes" id="session_experience_your_career_concerns_and_questions1">
                                <label class="form-check-label" for="session_experience_your_career_concerns_and_questions1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="session_experience_your_career_concerns_and_questions" type="radio" value="No" id="session_experience_your_career_concerns_and_questions2">
                                <label class="form-check-label" for="session_experience_your_career_concerns_and_questions2">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">If not, what specific areas could the counselor have improved on?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="session_experience_could_the_counselor_have_improved_on" type="radio" value="Yes" id="session_experience_could_the_counselor_have_improved_on1">
                                <label class="form-check-label" for="session_experience_could_the_counselor_have_improved_on1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="session_experience_could_the_counselor_have_improved_on" type="radio" value="No" id="session_experience_could_the_counselor_have_improved_on2">
                                <label class="form-check-label" for="session_experience_could_the_counselor_have_improved_on2">
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
                                <input class="form-check-input" type="radio" name="counselor_impression_rating" id="counselor_impression_rating1" value="1">
                                <label class="form-check-label" for="counselor_impression_rating1">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="counselor_impression_rating" id="counselor_impression_rating7" value="2">
                                <label class="form-check-label" for="counselor_impression_rating7">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="counselor_impression_rating" id="counselor_impression_rating8" value="3">
                                <label class="form-check-label" for="counselor_impression_rating8">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="counselor_impression_rating" id="counselor_impression_rating9" value="4">
                                <label class="form-check-label" for="counselor_impression_rating9">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="counselor_impression_rating" id="counselor_impression_rating10" value="5">
                                <label class="form-check-label" for="counselor_impression_rating10">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Was the counselor's communication style clear and engaging?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="counselor_impression_communication_style_clear_and_engaging" type="radio" value="Yes" id="counselor_impression_communication_style_clear_and_engaging1">
                                <label class="form-check-label" for="counselor_impression_communication_style_clear_and_engaging1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" type="radio" name="counselor_impression_communication_style_clear_and_engaging" value="No" id="counselor_impression_communication_style_clear_and_engaging2">
                                <label class="form-check-label" for="counselor_impression_communication_style_clear_and_engaging2">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did you feel comfortable and heard throughout the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="counselor_impression_comfortable_and_heard_throughout_the_session" type="radio" value="Yes" id="counselor_impression_comfortable_and_heard_throughout_the_session1">
                                <label class="form-check-label" for="counselor_impression_comfortable_and_heard_throughout_the_session1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="counselor_impression_comfortable_and_heard_throughout_the_session" type="radio" value="No" id="counselor_impression_comfortable_and_heard_throughout_the_session2">
                                <label class="form-check-label" for="counselor_impression_comfortable_and_heard_throughout_the_session2">
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
                                <input class="form-check-input" name="service_delivery_navigate_for_the_session" type="radio" value="Yes" id="service_delivery_navigate_for_the_session1">
                                <label class="form-check-label" for="service_delivery_navigate_for_the_session1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="service_delivery_navigate_for_the_session" type="radio" value="No" id="service_delivery_navigate_for_the_session2">
                                <label class="form-check-label" for="service_delivery_navigate_for_the_session2">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">Did you experience any technical difficulties during the session?</p>
                            <div class="box_check d-flex">
                              <div class="form-check">
                                <input class="form-check-input" name="service_delivery_difficulties_during_the_session" type="radio" value="Yes" id="service_delivery_difficulties_during_the_session1">
                                <label class="form-check-label" for="service_delivery_difficulties_during_the_session1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input" name="service_delivery_difficulties_during_the_session" type="radio" value="No" id="service_delivery_difficulties_during_the_session2">
                                <label class="form-check-label" for="service_delivery_difficulties_during_the_session2">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center respons_input">
                            <p class="mb-0">How easy was it to schedule and manage your session appointment?</p>
                            <div class="d-flex valu_box mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_delivery_rating" id="service_delivery_rating11" value="1">
                                <label class="form-check-label" for="service_delivery_rating11">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_delivery_rating" id="service_delivery_rating12" value="2">
                                <label class="form-check-label" for="service_delivery_rating12">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_delivery_rating" id="service_delivery_rating13" value="3">
                                <label class="form-check-label" for="service_delivery_rating13">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_delivery_rating" id="service_delivery_rating14" value="4">
                                <label class="form-check-label" for="service_delivery_rating14">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="service_delivery_rating" id="service_delivery_rating15" value="5">
                                <label class="form-check-label" for="service_delivery_rating15">
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
                            <input class="form-check-input" name="overall_impact_move_forward_in_your_career_journey" type="radio" value="Yes" id="overall_impact_move_forward_in_your_career_journey1">
                            <label class="form-check-label" for="overall_impact_move_forward_in_your_career_journey1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check ms-5">
                            <input class="form-check-input" name="overall_impact_move_forward_in_your_career_journey" type="radio" value="No" id="overall_impact_move_forward_in_your_career_journey2">
                            <label class="form-check-label" for="overall_impact_move_forward_in_your_career_journey2">
                              No
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center respons_input">
                        <p class="mb-0">How likely are you to recommend FUTURE LIFT's career counseling services to others? </p>
                        <div class="d-flex valu_box mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="overall_impact_rating" id="overall_impact_rating16" value="1">
                                <label class="form-check-label" for="overall_impact_rating16">
                                  <i class="bi bi-emoji-angry"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="overall_impact_rating" id="overall_impact_rating17" value="2">
                                <label class="form-check-label" for="overall_impact_rating17">
                                <i class="bi bi-emoji-frown"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="overall_impact_rating" id="overall_impact_rating18" value="3">
                                <label class="form-check-label" for="overall_impact_rating18">
                                  <i class="bi bi-emoji-expressionless"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="overall_impact_rating" id="overall_impact_rating19" value="4">
                                <label class="form-check-label" for="overall_impact_rating19">
                                  <i class="bi bi-emoji-smile"></i>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="overall_impact_rating" id="overall_impact_rating20" value="5">
                                <label class="form-check-label" for="overall_impact_rating20">
                                <i class="bi bi-emoji-laughing"></i>
                                </label>
                              </div>
                            </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center respons_input">
                        <p class="mb-0">Would you consider purchasing another counseling session in the future?</p>
                        <div class="box_check d-flex">
                          <div class="form-check">
                            <input class="form-check-input" name="overall_impact_counseling_session_in_the_future" type="radio" value="Yes" id="overall_impact_counseling_session_in_the_future1">
                            <label class="form-check-label" for="overall_impact_counseling_session_in_the_future1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check ms-5">
                            <input class="form-check-input" name="overall_impact_counseling_session_in_the_future" type="radio" value="No" id="overall_impact_counseling_session_in_the_future2">
                            <label class="form-check-label" for="overall_impact_counseling_session_in_the_future2">
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
                          <textarea name="additional_feedback" id="additional_feedback" cols="30" rows="10" class="form-control"></textarea>

                        </div>
                      <input type="button" name="previous" class="btnprevious action-button-previous" value="Previous"/>
                      <input type="submit" name="make_payment" class="action-button" value="Submit"/>
                  </fieldset>
                </form>
              </div>
          </div>
        </div>
@endsection
@section('scripts')
<script>

$("#review_check_form").submit(function(e) {
    console.log($("#review_check_form").serialize());
    e.preventDefault();
    $("#ftco-loader").show();
    $.ajax({
        type : 'POST',
        url: "{{url('/submit-user-session-review')}}",
        data:$("#review_check_form").serialize(),
        success : function(data){
            console.log(data);
            $("#ftco-loader").hide();
            let parse = JSON.parse(data);
            if(parse.status){
                $("#review_check_form").addClass('d-none');
                toastr.success('Thank you for your feedback!', 'success');
                setTimeout(() => {
                    window.location.href = "{{url('/session')}}";
                }, 2000);
            }else{
                toastr.error(parse.message, 'error');
            }
        },error: function(data){
            $("#ftco-loader").hide();
        },
    })

});


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
