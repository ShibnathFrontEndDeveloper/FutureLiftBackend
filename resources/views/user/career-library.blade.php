<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.favicon')

    <title>Future Lift</title>
    @include('user.includes.css-link')
  </head>
  <body>
    <div class="main-container">
      <!-- Header Start -->
      <div id="header">
      @include('user.includes.header')

      </div>
      <!-- Header End -->



        <div class="container-fluid">
            <div class="library_home">
                <div class="libry_banner">
                    <img src="{{asset('assets/images/7333316.png')}}" alt="" class="img-fluid">
                </div>
                <div class="headi_search">
                    <h5>future lift career library</h5>
                    <input type="search" class="form-control">
                </div>
            </div>
            <div class="container">
                <div class="features_pannel">
                    <div class="d-flex align-items-start featureTabBox">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All Careers</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Design & Arts</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Media & Communication</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Human Service & Social Service</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Business Management</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Marketing & Advertising</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Hospitality & Tourism</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Accounts & Finance</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Information Technology</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Agreculture & Enviorment</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Health Science</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Science,Math & Engineering</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Bio Science & Research</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Architecture & Construction</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Education & Training</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logistics & Transportation</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Media & Communication</button>
                            <div class="bestForYou">
                                <h5>Know what is best for you!</h5>
                                <p>Take world class Assessment test</p>
                                <form action="">
                                    <input type="text" placeholder="Your mail address" class="form-control">
                                    <button type="submit">Take a free demo</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="feature_box">
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="feature_box">
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="feature_box">
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="feature_box">
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="feature_boxDetails">
                                            <div class="img_box">
                                                <img src="{{asset('assets/images/2011.i511.025_tailoring modeling flat.jpg')}}" alt=""class="img-fluid">
                                            </div>
                                            <div class="textBoxHeading">
                                                <h5>Fashion Designing</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div id="footer">
      @include('user.includes.footer')

      </div>
    </div>
    <div class="toToBottom_btn_box" id="scrollToTop" title="Go to top" onclick="topFunction()">
        <i class="bi bi-chevron-up"></i>
    </div>
    @include('user.includes.js-link')
    <script>
      $(document).ready(function () {



        AOS.init({
          offset: 150,
          duration: 600,
        });
        $("#myLocalDate").focus(function () {
          const date = new Date();
          let minDate = date.getDate();
          let minMonth = date.getMonth() + 1;
          let minYear = date.getFullYear();
          let minHour = date.getHours();
          let minMinutes = date.getMinutes();
          if (minDate < 10) {
            minDate = "0" + minDate;
          }
          if (minMonth < 10) {
            minMonth = "0" + minMonth;
          }
          $(this).attr(
            "min",
            minYear +
              "-" +
              minMonth +
              "-" +
              minDate +
              "T" +
              minHour +
              ":" +
              minMinutes
          );
          function daysInMonth(month, year) {
            return new Date(year, month, 0).getDate();
          }
          let maxDate = daysInMonth(minMonth, minYear);
          $(this).attr(
            "max",
            minYear + "-" + minMonth + "-" + maxDate + "T" + "17" + ":" + "00"
          );
        });
        $(".faq").click(function (e) {
          const display =
            $(this).find(".faqAnswer").css("display") === "none"
              ? "flex"
              : "none";
          console.log(display);
          $(this).find(".faqAnswer").css("display", display);
          e.preventDefault();
          e.stopPropagation();
        });

    //     $('button[type="submit"]').click(function(event) {
    //         event.preventDefault();
    //         $('.modal').modal('hide');
    //         $("#ftco-loader").show();
    //   });


      });
    </script>

    <script>
        let mybutton = document.getElementById("scrollToTop");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
  </body>
</html>
