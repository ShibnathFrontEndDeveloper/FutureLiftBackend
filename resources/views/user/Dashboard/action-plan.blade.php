@extends('user.Dashboard.sidebar')
@section('title') Action Plan @endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row mb-4">
                <div class="col-12 grid-margin ">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="http://localhost:8000/Dashboard/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                    <span>
                                        <a href="http://localhost:8000/price" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
              <div class="navTabWrapper">
                <ul class="navTab">
                  <li>
                    <input type="radio" name="sessionTab" id="session-1" checked>
                    <label for="session-1">
                      <div class="lebel_box">
                        <i class="bi bi-stopwatch-fill"></i><span>Session 1</span>
                      </div>
                  </label>
                    <div class="session_content">
                      <h4>Session 1</h4>
                      <div class="session_content_paraBox">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eveniet culpa beatae reprehenderit tenetur asperiores expedita error. Provident accusamus magni ratione, iusto, non a minus dolores adipisci dolorum voluptates reiciendis eaque neque excepturi veritatis maiores fugit, labore asperiores. A quaerat magnam sunt dolore nisi ducimus sequi ea, iste quia deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea placeat cum obcaecati rerum consectetur neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolorem a adipisci illum obcaecati culpa sit ex, voluptatibus ducimus accusantium cum, neque fugiat quasi eligendi.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <input type="radio" name="sessionTab" id="session-2">
                    <label for="session-2">
                      <div class="lebel_box">
                      <i class="bi bi-stopwatch-fill"></i><span>Session 2</span>
                      </div>
                    </label>
                    <div class="session_content">
                      <h4>Session 2</h4>
                      <div class="session_content_paraBox">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eveniet culpa beatae reprehenderit tenetur asperiores expedita error. Provident accusamus magni ratione, iusto, non a minus dolores adipisci dolorum voluptates reiciendis eaque neque excepturi veritatis maiores fugit, labore asperiores. A quaerat magnam sunt dolore nisi ducimus sequi ea, iste quia deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea placeat cum obcaecati rerum consectetur neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolorem a adipisci illum obcaecati culpa sit ex, voluptatibus ducimus accusantium cum, neque fugiat quasi eligendi.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <input type="radio" name="sessionTab" id="session-3">
                    <label for="session-3">
                      <div class="lebel_box">
                        <i class="bi bi-stopwatch-fill"></i><span>Session 3</span>
                      </div>
                    </label>
                    <div class="session_content">
                      <h4>Session 3</h4>
                      <div class="session_content_paraBox">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eveniet culpa beatae reprehenderit tenetur asperiores expedita error. Provident accusamus magni ratione, iusto, non a minus dolores adipisci dolorum voluptates reiciendis eaque neque excepturi veritatis maiores fugit, labore asperiores. A quaerat magnam sunt dolore nisi ducimus sequi ea, iste quia deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea placeat cum obcaecati rerum consectetur neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolorem a adipisci illum obcaecati culpa sit ex, voluptatibus ducimus accusantium cum, neque fugiat quasi eligendi.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
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
