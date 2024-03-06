@extends('user.Dashboard.sidebar')
@section('title') Action Plan @endsection
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            @include('user.Dashboard.update-pro')
            <div class="page-header">
                <h3 class="page-title"> Action Plan</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Action Plan</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                @if ($userSessionHistoryCount > 0)
                <div class="col-md-8">
                    <div class="navTabWrapper">
                        <ul class="navTab">
                            @if ($userSessionHistoryCount > 0)
                                @foreach ($userSessionHistoryData as $userSessionHistoryDataKey => $userSessionHistoryDataValue)
                                    <li>
                                        <input type="radio" name="sessionTab" id="session-{{$userSessionHistoryDataKey}}" {{($userSessionHistoryDataKey == 0)?'checked':''}}>
                                        <label for="session-{{$userSessionHistoryDataKey}}">
                                            <div class="lebel_box">
                                                <i class="bi bi-stopwatch-fill"></i><span>Session {{$userSessionHistoryDataKey + 1}}</span>
                                            </div>
                                        </label>
                                        <div class="session_content">
                                            <h4>Session {{$userSessionHistoryDataKey + 1}}</h4>
                                            <div class="session_content_paraBox">
                                                @if ($userSessionHistoryDataValue->counselling_report)
                                                    {!!$userSessionHistoryDataValue->counselling_report!!}
                                                @else
                                                    <h5 class="text-center">Report Not Found</h5>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-dark">Supporting Documents</h3>
                    @if ($userSessionHistoryCount > 0)
                        @foreach ($userSessionHistoryData as $userSessionHistoryDataKey => $userSessionHistoryDataValue)
                            @if ($userSessionHistoryDataValue->counselling_report_document)
                                <div class="card mt-2">
                                    <div class="card-header">
                                        Session {{$userSessionHistoryDataKey + 1}}
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="{{asset('/assets/support_documents/'.$userSessionHistoryDataValue->counselling_report_document)}}" download="session_{{$userSessionHistoryDataKey + 1}}_report_card.pdf">
                                            <img src="{{asset('/assets/images/download-pdf.png')}}" alt="" width="150px">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p class="text-center">No Documents Found</p>
                    @endif
                </div>
                @else
                <div class="col-md-12">
                    <h2 class="text-center">Report Not Found</h2>
                </div>
                @endif
            </div>
        </div>
@endsection
@section('scripts')
<script>
    function subscription_purchase(id){
        window.location.href="{{url('/user/subscription-submit')}}/"+id;
    }
</script>
@endsection
