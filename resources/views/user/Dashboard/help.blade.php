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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card collapse_card">
                        <div class="card-body collapse_body">
                            <h4 class="card-title">Ask friquently</h4>
                            <div class="d-flex align-items-start faqLinkTab">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach ($category as $key => $value)
                                    <button class="nav-link {{$key == 0 ? 'active':''}}" id="v-pills-{{$key}}" data-bs-toggle="pill" data-bs-target="#v-pills-{{$key}}" type="button" role="tab" aria-controls="v-pills-{{$key}}" aria-selected="true" onclick="getData('{{$key}}','{{$value->id}}');">{{$value->name}}</button>
                                @endforeach
                                </div>
                                <div class="tab-content faqQTabs" id="v-pills-tabContent">

                                </div>
                            </div>
                            <div class="row"></div>
                            <!-- <div id="accordion" class="accordion">
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
                                            <p>{!!$faqValue->answer!!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div> faqs end -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card help_card collapse_card">
                        <div class="card-body text-center">
                            <h4 class="card-title">For any type of help</h4>
                            <p class="card-description">Speek with our expert</p>
                            <a href="tel:+91 8617373674" class="call_btn"><i class="bi bi-telephone-fill"></i>+91 8617373674</a>
                            <p class="schedule">Monday to Saturday</p>
                            <p class="schedule ">10am - 6pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script>
    function getData(key,categoryId){
                $("#ftco-loader").show();
                $.ajax({
                    type : 'GET',
                    url: "<?=url('/get-help-faq-data')?>/"+key+"/"+categoryId,
                    success : function(data){
                        console.log(data);
                        $("#v-pills-tabContent").html(data);
                        $("#ftco-loader").hide();
                    },error: function(data){
                        console.log(data);
                        $("#ftco-loader").hide();
                    },
                })
        }
    $(document).ready(function () {
        $("#ftco-loader").show();
        getData(0,'<?=($categoryFirstData->id)?$categoryFirstData->id:0?>');
    });
</script>
@endsection

