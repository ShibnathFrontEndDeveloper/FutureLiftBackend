@extends('user.Dashboard.sidebar')
@section('title') User Help @endsection
@section('content')

    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> User Help</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Help</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card collapse_card">
                        <div class="card-body collapse_body">
                            <h4 class="card-title">Ask friquently</h4>
                            <div id="accordion" class="accordion">
                            @foreach ($faq as $faqKey => $faqValue)
                                <div class="card">
                                    <div class="card-header" id="headingOne{{$faqKey}}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$faqKey}}" aria-expanded="true" aria-controls="collapseOne{{$faqKey}}">
                                            {{$faqValue->question}} <i class="bi bi-arrow-down-short"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne{{$faqKey}}" class="collapse" aria-labelledby="headingOne{{$faqKey}}" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{{$faqValue->answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card help_card collapse_card">
                        <div class="card-body text-center">
                            <h4 class="card-title">For any tpye of help</h4>
                            <p class="card-description">Speek with our expert</p>
                            <a href="tel:+91 8617373674" class="call_btn"><i class="bi bi-telephone-fill"></i>+91 8617373674</a>
                            <p class="schedule">Mondayn to saturday</p>
                            <p class="schedule ">10am - 6pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

