@extends('admin.Dashboard.sidebar')
@section('title') Session {{$key}} Review of {{$getUserDetails->name}} @endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Session {{$key}} Review of {{$getUserDetails->name}}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin/admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Session {{$key}} Review of {{$getUserDetails->name}}</li>
                </ol>
            </nav>
        </div>
        @php
            $session_experience = json_decode($data->session_experience);
            $counselor_impression = json_decode($data->counselor_impression);
            $service_delivery = json_decode($data->service_delivery);
            $overall_Impact = json_decode($data->overall_Impact);
        @endphp
        <div class="row">
            <div class="col-md-12 form-group border-bottom">
                <h3>Session Experience</h3>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q1. How satisfied were you with your career counseling session today?</h5>
                <p>Ans :
                            @for ($rate_session_experience=1; $rate_session_experience <= 5; $rate_session_experience++)
                                @if($session_experience->session_experience_rating >= $rate_session_experience)
                                    <i class="bi bi-star-fill"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor

                </p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q2. What did you find most helpful about the session?</h5>
                <p>Ans : {{$session_experience->session_experience_helpful_about_the_session}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q3. Did the counselor adequately address your career concerns and questions?</h5>
                <p>Ans : {{$session_experience->session_experience_your_career_concerns_and_questions}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q4. If not, what specific areas could the counselor have improved on?</h5>
                <p>Ans : {{$session_experience->session_experience_could_the_counselor_have_improved_on}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group border-bottom">
                <h3>Counselor Impression</h3>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q1. How knowledgeable and professional did you find your counselor?</h5>
                <p>Ans :
                            @for ($rate_counselor_impression=1; $rate_counselor_impression <= 5; $rate_counselor_impression++)
                                @if($counselor_impression->counselor_impression_rating >= $rate_counselor_impression)
                                    <i class="bi bi-star-fill"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor

                </p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q2. Was the counselor's communication style clear and engaging?</h5>
                <p>Ans : {{$counselor_impression->counselor_impression_communication_style_clear_and_engaging}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q3. Did you feel comfortable and heard throughout the session?</h5>
                <p>Ans : {{$counselor_impression->counselor_impression_comfortable_and_heard_throughout_the_session}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group border-bottom">
                <h3>Service Delivery</h3>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q1. Was the online platform easy to use and navigate for the session?</h5>
                <p>Ans : {{$service_delivery->service_delivery_navigate_for_the_session}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q2. Did you experience any technical difficulties during the session?</h5>
                <p>Ans : {{$service_delivery->service_delivery_difficulties_during_the_session}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q3. How knowledgeable and professional did you find your counselorHow easy was it to schedule and manage your session appointment?</h5>
                <p>Ans :
                            @for ($rate_service_delivery=1; $rate_service_delivery <= 5; $rate_service_delivery++)
                                @if($service_delivery->service_delivery_rating >= $rate_service_delivery)
                                    <i class="bi bi-star-fill"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group border-bottom">
                <h3>Overall Impact</h3>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q1. Do you feel your session helped you gain valuable insights and move forward in your career journey?</h5>
                <p>Ans : {{$overall_Impact->overall_impact_move_forward_in_your_career_journey}}</p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q2. How likely are you to recommend FUTURE LIFT's career counseling services to others?</h5>
                <p>Ans :
                            @for ($rate_overall_Impact=1; $rate_overall_Impact <= 5; $rate_overall_Impact++)
                                @if($overall_Impact->overall_impact_rating >= $rate_overall_Impact)
                                    <i class="bi bi-star-fill"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor

                </p>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q3. Would you consider purchasing another counseling session in the future?</h5>
                <p>Ans : {{$overall_Impact->overall_impact_counseling_session_in_the_future}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group border-bottom">
                <h3>Additional Feedback</h3>
            </div>
            <div class="col-md-12 form-group">
                <h5>Q1. Is there anything else you would like to share about your experience with FUTURE LIFT?</h5>
                <p>Ans : {{$data->additional_feedback}}</p>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    new DataTable('#example');
</script>
@endsection
