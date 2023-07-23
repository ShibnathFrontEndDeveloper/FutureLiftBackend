@extends('user.Dashboard.sidebar')
@section('title') Dashboard @endsection
@section('content')

    <div class="main-panel">
          <div class="content-wrapper">
            @include('user.Dashboard.update-pro')
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header pro_card_header2">
                    <div class="card_icon_box ">
                      <i class="bi bi-card-checklist"></i>
                    </div>
                    <h5 class="card_heading">My Tests</h5>
                  </div>
                  <div class="card-body p-3">
                    <p class="card_para">Current: Orientation Style</p>
                    <div class="card_progress_bar">
                      <span>0/0 Remaining</span>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="card_btn text-center">
                      <a href=""class="test_btn">start test</a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header pro_card_header1 ">
                    <div class="card_icon_box ">
                      <i class="bi bi-person-fill"></i>
                    </div>
                    <h5 class="card_heading">My Profile</h5>
                  </div>
                  <div class="card-body p-3">
                    <p class="card_para">Current: Orientation Style</p>
                    <div class="card_progress_bar">
                      <!-- <span>{{$profileComplete}}/{{$profileField}} Remaining</span> -->
                      <span>{{$profilePercentage}} % Completed</span>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: {{$profilePercentage}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="card_btn text-center">
                      <a href="{{url('/user-profile')}}" class="test_btn">Click Here</a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header pro_card_header3">
                    <div class="card_icon_box ">
                      <i class="bi bi-cursor-fill"></i>
                    </div>
                    <h5 class="card_heading">Refer Friend</h5>
                  </div>
                  <div class="card-body p-3">
                    <p class="card_para">Current: Orientation Style</p>
                    <div class="card_btn text-center">
                      <a href="{{url('/refer-and-earn')}}" class="test_btn">view all</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-12 row_caption_box">
                <h5>Blog Feed</h5>
                <p>Well-researched articles written by our experts</p>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header">
                   <div class="blog_face_box w-100 d-flex justify-content-start align-items-center">
                      <div class="blog_face_img ">
                        <a href=""><img src="{{asset('Dashboard/assets/images/faces/face1.jpg')}}" alt="" class="blog_face"></a>
                      </div>
                      <div class="blog_face_img ms-2 ">
                        <p>Bloger Name</p>
                        <span>wed. Jun 10, 2023 5:15pm</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <a href="" class="card_para ">Blog title</a >
                      <div class="blog_img_box mt-3">
                        <a href=""><img src="{{asset('Dashboard/assets/images/dashboard/img_2.jpg')}}" alt="" class="img-fluid"></a>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero vitae aliquid neque eos porro? Provident quia ducimus consequuntur illo tempora ipsa eaque, libero dolorem, voluptatibus animi, dolorum tempore facere earum.</p>
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="card_btn text-center">
                          <a href="" class="test_btn" >read more</a>
                        </div>
                        <div class="text-center blog_share">
                          <a href="" class="test_btn" ><i class="bi bi-facebook"></i>Share</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header">
                   <div class="blog_face_box w-100 d-flex justify-content-start align-items-center">
                      <div class="blog_face_img ">
                        <a href=""><img src="{{asset('Dashboard/assets/images/faces/face1.jpg')}}" alt="" class="blog_face"></a>
                      </div>
                      <div class="blog_face_img ms-2 ">
                        <p>Bloger Name</p>
                        <span>wed. Jun 10, 2023 5:15pm</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <a href="" class="card_para ">Blog title</a >
                      <div class="blog_img_box mt-3">
                        <a href=""><img src="{{asset('Dashboard/assets/images/dashboard/img_2.jpg')}}" alt="" class="img-fluid"></a>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero vitae aliquid neque eos porro? Provident quia ducimus consequuntur illo tempora ipsa eaque, libero dolorem, voluptatibus animi, dolorum tempore facere earum.</p>
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="card_btn text-center">
                          <a href="" class="test_btn" >read more</a>
                        </div>
                        <div class="text-center blog_share">
                          <a href="" class="test_btn" ><i class="bi bi-facebook"></i>Share</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card ">
                <div class="card dash_card">
                  <div class="card-header d-flex justify-content-center align-items-center pro_card_header">
                   <div class="blog_face_box w-100 d-flex justify-content-start align-items-center">
                      <div class="blog_face_img ">
                        <a href=""><img src="{{asset('Dashboard/assets/images/faces/face1.jpg')}}" alt="" class="blog_face"></a>
                      </div>
                      <div class="blog_face_img ms-2 ">
                        <p>Bloger Name</p>
                        <span>wed. Jun 10, 2023 5:15pm</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <a href="" class="card_para ">Blog title</a >
                      <div class="blog_img_box mt-3">
                        <a href=""><img src="{{asset('Dashboard/assets/images/dashboard/img_2.jpg')}}" alt="" class="img-fluid"></a>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero vitae aliquid neque eos porro? Provident quia ducimus consequuntur illo tempora ipsa eaque, libero dolorem, voluptatibus animi, dolorum tempore facere earum.</p>
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="card_btn text-center">
                          <a href="" class="test_btn" >read more</a>
                        </div>
                        <div class="text-center blog_share">
                          <a href="" class="test_btn" ><i class="bi bi-facebook"></i>Share</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mt-5">
                <div class="card_btn text-center">
                  <a href="../blog.html" class="test_btn" >view all</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>

          <!-- popupbox -->
          <!-- Button trigger modal -->


          <!-- Modal -->
          <div class="modal fade upgrade_box" id="upgrade_box" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body store_box">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="position-sticky top-0">
                            <tr>
                              <th>Name</th>
                              <th>Date</th>
                              <th>Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Jacob</td>
                              <td>53275531</td>
                              <td>12 May 2017</td>
                            </tr>
                            <tr>
                              <td>Messsy</td>
                              <td>53275532</td>
                              <td>15 May 2017</td>
                            </tr>
                            <tr>
                              <td>John</td>
                              <td>53275533</td>
                              <td>14 May 2017</td>
                            </tr>
                            <tr>
                              <td>Peter</td>
                              <td>53275534</td>
                              <td>16 May 2017</td>
                            </tr>
                            <tr>
                              <td>Dave</td>
                              <td>53275535</td>
                              <td>20 May 2017</td>
                            </tr>
                            <tr>
                              <td>Jacob</td>
                              <td>53275531</td>
                              <td>12 May 2017</td>
                            </tr>
                            <tr>
                              <td>Messsy</td>
                              <td>53275532</td>
                              <td>15 May 2017</td>
                            </tr>
                            <tr>
                              <td>John</td>
                              <td>53275533</td>
                              <td>14 May 2017</td>
                            </tr>
                            <tr>
                              <td>Peter</td>
                              <td>53275534</td>
                              <td>16 May 2017</td>
                            </tr>
                            <tr>
                              <td>Dave</td>
                              <td>53275535</td>
                              <td>20 May 2017</td>
                            </tr>
                            <tr>
                              <td>Jacob</td>
                              <td>53275531</td>
                              <td>12 May 2017</td>
                            </tr>
                            <tr>
                              <td>Messsy</td>
                              <td>53275532</td>
                              <td>15 May 2017</td>
                            </tr>
                            <tr>
                              <td>John</td>
                              <td>53275533</td>
                              <td>14 May 2017</td>
                            </tr>
                            <tr>
                              <td>Peter</td>
                              <td>53275534</td>
                              <td>16 May 2017</td>
                            </tr>
                            <tr>
                              <td>Dave</td>
                              <td>53275535</td>
                              <td>20 May 2017</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        @endsection
