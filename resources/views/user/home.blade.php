<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />

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

<!-- Modal start -->
      <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-body">
              <div class="sessionModalContent">
                <div class="modalContentImg">
                  <img
                    src="{{asset('assets/images/new new new  black -1-01 (1).png')}}"
                    alt=""
                  />
                  <p>Book Your Personalized Career Session</p>
                </div>
                <div class="modalfeatureSwiper swiper">
                  <div class="featureslides swiper-wrapper">
                    <div class="featureslide swiper-slide">
                      <div class="featureHeading">
                        <p>Detailed Knowledge</p>
                      </div>
                      <div class="featureContent">
                        <p>
                          Gain the complete information and guidance about your
                          career, strong decision making best studies carriers
                          and many others carrier development facts to get the
                          favorable outcomes.
                        </p>
                      </div>
                    </div>
                    <div class="featureslide swiper-slide">
                      <div class="featureHeading">
                        <p>Setting Career Pathway</p>
                      </div>
                      <div class="featureContent">
                        <p>
                          Identify and create your particular and unique
                          document program with updated skill sets you need for
                          formation.
                        </p>
                      </div>
                    </div>
                    <div class="featureslide swiper-slide">
                      <div class="featureHeading">
                        <p>Insight to Problem</p>
                      </div>
                      <div class="featureContent">
                        <p>
                          Get a sudden solution in a linear way to face and
                          complete guidance to solve any issues and evaluate
                          further in your motion.
                        </p>
                      </div>
                    </div>
                    <div class="featureslide swiper-slide">
                      <div class="featureHeading">
                        <p>Increase Confidence</p>
                      </div>
                      <div class="featureContent">
                        <p>
                          Game complete support in your field or area of
                          operation, so that you can clear out your doubts and
                          expressed in a confidential way in your performance as
                          well as in your impression.
                        </p>
                      </div>
                    </div>
                    <div class="featureslide swiper-slide">
                      <div class="featureHeading">
                        <p>Suit Your Needs</p>
                      </div>
                      <div class="featureContent">
                        <p>
                          Match and find out your unique needs to build a better
                          pillar of success which suits you the most.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div class="modalfeatureCardSwiper swiper">
                  <div class="featureCardslides swiper-wrapper">
                    <div class="featureCardslide swiper-slide">
                      <div class="featureCardslideBox">
                        <div class="featureCardImg">
                          <img src="{{asset('assets/images/hostel.png')}}" alt="" />
                        </div>
                        <div class="featureCardContent">
                          <p>
                            Future Lift ia a one stop solution to all your
                            career related queries.
                          </p>
                          <p>Rohit Sharma</p>
                        </div>
                      </div>
                    </div>
                    <div class="featureCardslide swiper-slide">
                      <div class="featureCardslideBox">
                        <div class="featureCardImg">
                          <img src="{{asset('assets/images/hostel.png')}}" alt="" />
                        </div>
                        <div class="featureCardContent">
                          <p>
                            Personalized Session gives me accurate & Detailed
                            knowledge about my career...
                          </p>
                          <p>Lavanya Pandey</p>
                        </div>
                      </div>
                    </div>
                    <div class="featureCardslide swiper-slide">
                      <div class="featureCardslideBox">
                        <div class="featureCardImg">
                          <img src="{{asset('assets/images/hostel.png')}}" alt="" />
                        </div>
                        <div class="featureCardContent">
                          <p>
                            This session helped me to learn about Career
                            Threats.
                          </p>
                          <p>Subhra Mohanta</p>
                        </div>
                      </div>
                    </div>
                    <div class="featureCardslide swiper-slide">
                      <div class="featureCardslideBox">
                        <div class="featureCardImg">
                          <img src="{{asset('assets/images/hostel.png')}}" alt="" />
                        </div>
                        <div class="featureCardContent">
                          <p>
                            According to myself, everyone needs to take this
                            session before taking admission in college.
                          </p>
                          <p>Subham Sing</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
              <div class="sessionModalForm">
                <p class="modalFormHeading">Register Now to Book session</p>
                <form action="{{url('/user/booksession')}}" class="callUsForm" method="post">
                    @csrf
                  <div class="form-group modal-Input">
                    <i class="fa-solid fa-user"></i>
                    <input
                      type="text"
                      name="candidate_name"
                      class="form-control"
                      placeholder="Full name"
                      required
                      value="{{old('candidate_name')}}"
                    />
                  </div>
                  <div class="form-group modal-Input">
                    <i class="fa-solid fa-envelope"></i>
                    <input
                      type="email"
                      name="candidate_email"
                      class="form-control"
                      placeholder="Email"
                      required
                      value="{{old('candidate_email')}}"
                    />
                  </div>
                  <div class="form-group modal-Input">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <input
                      type="tel"
                      name="candidate_phone"
                      pattern="^[6789]\d{9,9}$"
                      class="form-control"
                      placeholder="Mobile Number"
                      required
                      value="{{old('candidate_phone')}}"
                    />
                  </div>
                  <div class="form-group modal-Input">
                    <i class="fa-solid fa-location-dot"></i>
                    <input
                      type="text"
                      name="candidate_city"
                      class="form-control"
                      placeholder="City you Live in"
                      required
                      value="{{old('candidate_city')}}"
                    />
                  </div>
                  <div class="form-group modal-Input justify-content-between">
                    @foreach ($allSession as $sessionKey => $sessions)
                    <input
                      type="radio"
                      class="btn-check"
                      name="options"
                      id="option{{$sessionKey+1}}"
                      autocomplete="off"
                      value="{{$sessions->id}}"
                    />
                    <label class="radioBox" for="option{{$sessionKey+1}}">
                        @if ($sessions->price > 0)
                            <p>₹ {{$sessions->price}} /-</p>
                        @else
                        <p>Free</p>
                        @endif
                      <p>{{$sessions->content}}</p></label
                    >
                    @endforeach
                  </div>
                  <div class="form-group modal-Input">
                    <i class="fa-regular fa-calendar-days"></i>
                    <input
                      type="text"
                      id="myLocalDate"
                      class="form-control"
                      placeholder="Schedule Your Session"
                      onfocus="(this.type='datetime-local')"
                      onblur="if(this.value==''){this.type='text'}"
                      required
                      name="schedule_date_time"
                    />
                  </div>
                  <p class="modalFormTerms">
                    By Submitting this form you accept and agree to our
                    <a href="">Terms of Use.</a>
                  </p>
                  <button type="Submit" class="Modalbtn">Book Session</button>
                </form>
                <p class="alreadyMember">
                  Already a member? <a href="{{url('/user/login')}}">Click Here</a>it's easy!
                </p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->

      <div class="container-fluid">
        <div class="home_part">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 home_part_heading">
                <p class="hone_heading">India's Largest Career Counselling Platform...</p>
                @if(Auth::guard('user')->check())

                @else
                <form action="{{url('/user/demo-registration')}}" class="testForm" method="post">
                    @csrf
                  <input
                    type="email"
                    name="reg_email"
                    class="testInput"
                    placeholder="Enter Email I'd"
                    required
                    value="{{old('reg_email')}}"
                  />
                  <button class="testbtn" type="submit">Take Free Demo</button>
                </form>
                @endif
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="home_swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <a href="8th-10thCounselling.html">
                        <img src="./assets/images/card-1.webp" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="10th-12thCounselling.html">
                        <img src="./assets/images/card-2.webp" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="collegeGraduateCounselling.html">
                        <img src="./assets/images/card-3.webp" alt="" class="img-fluid">
                      </a>
                    </div>
                    <!-- <div class="swiper-slide">
                      <img src="./assets/images/card-2.png" alt="" class="img-fluid">
                    </div> -->
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- <div class="banner">
          <img src="assets/images/counselling-banner.png" alt="" />
          <div class="Counselling-bannerContent">
            <p>India's Largest Career Counselling Platform...</p>
            <div class="personalityBannerContent mt-2" style="width: 100%">
              <form action="login_signInForm.html" class="testForm">
                <input
                  type="email"
                  name="email"
                  class="testInput"
                  placeholder="Enter Email I'd"
                  required
                />
                <button class="testbtn">Take Free Demo</button>
              </form>
            </div>
          </div>
        </div> -->
        <!-- Service Section start -->
        <!-- <div class="mb-3 p-0 m-0">
          <div class="container-fluid col-12 d-flex justify-content-center">
            <div
              class="container-fluid d-flex justify-content-evenly row col-12 py-4"
              style="background-color: rgb(235, 243, 255)"
            >
              <div class="counsellingCard col-6 col-sm-3">
                <a class="counsellingCardBox" href="8th-10thCounselling.html">
                  <div class="counsellingCard-content">
                    <p>8th-10th Class</p>
                    <p>Explore</p>
                  </div>
                  <div class="counsellingCardImg">
                    <img
                      src="assets/images/-teacher-8 to 10.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                </a>
              </div>
              <div href="#" class="counsellingCard col-6 col-sm-3">
                <a class="counsellingCardBox" href="10th-12thCounselling.html">
                  <div class="counsellingCard-content">
                    <p>11th-12th Class</p>
                    <p>Explore</p>
                  </div>
                  <div class="counsellingCardImg">
                    <img
                      src="assets/images/11th to 12th.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                </a>
              </div>
              <div href="#" class="counsellingCard col-6 col-sm-3">
                <a
                  class="counsellingCardBox"
                  href="collegeGraduateCounselling.html"
                >
                  <div class="counsellingCard-content">
                    <p>College Graduate</p>
                    <p>Explore</p>
                  </div>
                  <div class="counsellingCardImg">
                    <img
                      src="assets/images/college gr.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                </a>
              </div>
              <div href="#" class="counsellingCard col-6 col-sm-3">
                <a class="counsellingCardBox">
                  <div class="counsellingCard-content">
                    <p>Working Professional</p>
                    <p>Explore</p>
                  </div>
                  <div class="counsellingCardImg">
                    <img
                      src="assets/images/working pr.png"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Service Section End -->

        <!-- Why Career section-1 start -->

          <div class="why-career-section-1 container-fluid " style="background: url({{asset('assets/images/why-bg-1.webp')}});" data-aos="zoom-in-up">
            <div class="container">
                <!--<a href="https://api.whatsapp.com/send?phone=15551234567">Send Message</a>-->
              <div class="row">
                <div class="whyCard-career-1 col-4 col-sm-4 container-fluid">
                  <div class="whyCard-career-1-img">
                    <i class="fa-solid fa-people-group"></i>
                  </div>
                  <div class="whyCard-career-1-content" id="whyContent1-career-1">
                    <p class="whyCard-career-1-text1">1,00,000+ Happy Students</p>
                    <p class="whyCard-career-1-text2 d-none d-sm-block">
                      We have served our service to more than 1 lakh students.
                    </p>
                  </div>
                </div>
                <div class="whyCard-career-1 col-4 col-sm-4 ">
                  <div class="whyCard-career-1-img">
                    <i class="fa fa-handshake-angle"></i>
                  </div>
                  <div class="whyCard-career-1-content" id="whyContent2-career-1">
                    <p class="whyCard-career-1-text1">120+ Experienced Partners</p>
                    <p class="whyCard-career-1-text2 d-none d-sm-block">
                      We have experienced certified Counselor throughout India.
                    </p>
                  </div>
                </div>
                <div class="whyCard-career-1 col-4 col-sm-4">
                  <div class="whyCard-career-1-img">
                    <i class="fa fa-user-graduate"></i>
                  </div>
                  <div class="whyCard-career-1-content" id="whyContent3-career-1">
                    <p class="whyCard-career-1-text1">250+ Institution Partners</p>
                    <p class="whyCard-career-1-text2 d-none d-sm-block">
                      Many of institutions in India are joining with us to seize
                      this oppurtunity service.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>


        <!-- Why Career section-1 End -->

        <!-- Why Career section-2 Start -->
          <div class="careerWhyCards d-flex flex-column p-4" style="background: url({{asset('assets/images/why-bg-.webp')}});">
            <div class="container">
              <div class="row align-items-center py-5 g-5">
                <div class="col-lg-6 col-md-6 why_box">
                  <img src="{{asset('assets/images/whyimg.webp')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="whyDetail_box">
                    <h1 class="section_heading text-center sd_text">Why Future Lift</h1>
                    <div class="careerWhyCard">
                      <div class="row careerWhyCardImg_box">
                        <div class="col-lg-6 col-md-6 mb-3 careerWhyCardContent">
                          <img src="{{asset('assets/images/career_assessment.webp')}}" alt="" class="imgfuid"/>
                          <p>Career Assessment</p>
                          <p class="last_para">Helps plan & prepare for the best suitable career for you.</p>
                        </div>
                        <!-- <div class="col-lg-4 careerWhyCardContent">
                          <img src="{{asset('assets/images/sowt analysis.png')}}" alt="" class="imgfuid"/>
                          <p>SWOT Analysis</p>
                          <p class="last_para">Performs a SWOT analysis for you.</p>
                        </div> -->
                        <div class="col-lg-6 col-md-6 mb-3 careerWhyCardContent">
                          <img src="{{asset('assets/images/Value_added_aervice.webp')}}" alt="" class="imgfuid"/>
                          <p>Value Added Service</p>
                          <p class="last_para">Provides tools to conquer obstacles in the desert carrier
                            path.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 careerWhyCardContent">
                          <img src="{{asset('assets/images/techCounseling-02.webp')}}" alt="" class="imgfuid"/>
                          <p>Tech-Empowered Counselling </p>
                          <p class="last_para">It helps to same your time and money. It gives you
                            personalized quality service.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 careerWhyCardContent">
                          <img src="{{asset('assets/images/Knowledge_repositories.webp')}}" alt="" class="imgfuid" />
                          <p>Knowledge Repository</p>
                          <p class="last_para">It helps to understand the demand of occupation provides
                            educational grooming.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-8">
              <div class="row">
                <div class="col-3">
                  <div class="careerWhyCard">
                    <div class="careerWhyCardContent">
                      <p>Career Assessment</p>
                      <p>
                        Helps plan & prepare for the best suitable career for you.
                      </p>
                    </div>
                    <div class="careerWhyCardImg">
                      <img src="{{asset('assets/images/career assesment.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="careerWhyCard">
                    <div class="careerWhyCardContent">
                      <p>SWOT Analysis</p>
                      <p>Performs a SWOT analysis for you.</p>
                    </div>
                    <div class="careerWhyCardImg">
                      <img src="{{asset('assets/images/sowt analysis.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="careerWhyCard">
                    <div class="careerWhyCardContent">
                      <p>Value Added Service</p>
                      <p>
                        Provides tools to conquer obstacles in the desert carrier
                        path.
                      </p>
                    </div>
                    <div class="careerWhyCardImg">
                      <img src="{{asset('assets/images/valur added service.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="careerWhyCard">
                    <div class="careerWhyCardContent">
                      <p>Tech-Empowered Counselling</p>
                      <p>
                        It helps to same your time and money. It gives you
                        personalized quality service.
                      </p>
                    </div>
                    <div class="careerWhyCardImg">
                      <img src="{{asset('assets/images/techCounseling-02.png')}}" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="careerWhyCard">
                    <div class="careerWhyCardContent">
                      <p>Knowledge Repository</p>
                      <p>
                        It helps to understand the demand of occupation provides
                        educational grooming.
                      </p>
                    </div>
                    <div class="careerWhyCardImg">
                      <img src="{{asset('assets/images/knowldge-02.png')}}" alt="" />
                    </div>
                  </div>
                </div>

              </div>
            </div> -->
          </div>

        <!-- Why Career section-2 End -->
        <!-- Homepage-cards Section start -->

        <h1 class="text-center my-5 sd_text">Explore Something Different</h1>

        <section  class="bg_img" style="background: url({{asset('assets/images/why-bg-1.webp')}});">
          <div class="container">
            <div class="homepage-card row col-12" data-aos="fade-left">
              <div class="contentImg col-lg-6 col-md-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_Nwp9LyblGr.json"  background="transparent"  speed="1"   loop autoplay></lottie-player>
              </div>
              <div class="content col-lg-6 col-md-6">
                <div class="cardText">
                  <p class="homepageCard-text1">
                    Personality begins where comparison ends...
                  </p>
                  <p class="homepageCard-text2">
                    Know which type of personality you have and do the best you
                    can.
                  </p>
                </div>
                <a href="personalityTest.html"
                  ><button class="cardbtn">Know More</button></a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="bg_img" style="background: url({{asset('assets/images/why-bg-.webp')}});" >
          <div class="container">
            <div class="homepage-card row col-12 reverse_card" data-aos="fade-right">
              <div class="content col-lg-6 col-md-6">
                <div class="cardText">
                  <p class="homepageCard-text1">
                    Find & learn to manage your talent...
                  </p>
                  <p class="homepageCard-text2"> Measure your interest lets you accurately match your preference.</p>
                </div>
                <a href="interestTest.html"
                  ><button class="cardbtn">Know More</button></a
                >
              </div>
              <div class="contentImg col-lg-6 col-md-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_svuxrlnw.json"  background="transparent"  speed="1"  loop autoplay></lottie-player>
              </div>
            </div>
          </div>
        </section>
        <section class="bg_img" style="background: url({{asset('assets/images/why-bg-1.webp')}});">
          <div class="container">
            <div class="homepage-card row col-12 reverse_card" data-aos="fade-right">
              <div class="content col-lg-6 col-md-6">
                <div class="cardText">
                  <p class="homepageCard-text1">
                    Aptitude improves chances of success...
                  </p>
                  <ul class="homepageCard-text2">
                    <li>Understand the area of interest and strengths better.</li>
                    <li>
                      improve you're analytical thinking and observation power.
                    </li>
                  </ul>
                </div>
                <a href="aptitudetest.html">
                  <button class="cardbtn">Know More</button></a
                >
              </div>
              <div class="contentImg col-lg-6 col-md-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_jG18nt.json"  background="transparent"  speed="1"  loop autoplay></lottie-player>
              </div>
            </div>
          </div>
        </section>
        <section class="bg_img" style="background: url({{asset('assets/images/why-bg-.webp')}});">
          <div class="container">
            <div class="homepage-card row col-12" data-aos="fade-left">
              <div class="contentImg col-lg-6 col-md-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_xk8oiud5.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
              </div>
              <div class="content col-lg-6 col-md-6">
                <div class="cardText">
                  <p class="homepageCard-text1">
                    IQ Is the strongest predictor of what you can achieve....
                  </p>
                  <ul class="homepageCard-text2">
                    <li>Know does processing speed of your brain and memory.</li>
                    <li>
                      Measure intellectual potential & diagnose intellectual
                      disabilities.
                    </li>
                  </ul>
                </div>
                <a href="iqtest.html">
                  <button class="cardbtn">Know More</button></a
                >
              </div>
            </div>
          </div>
        </section>





        <!-- Homepage-cards Section End -->

        <!-- Career Session Section Start -->
        <div class="session container-fluid d-flex align-items-center">
          <div class="sessionContent">
            <p>Book Personalized Career Session...</p>
            <p>
              Are you know about your specific career options and career
              opportunities?Like:
            </p>
            <ul class="row">
              <li class="col-6">Career Threats</li>
              <li class="col-6">Career Details</li>
              <li class="col-6">Career Road Maps</li>
              <li class="col-6">Career Paths</li>
            </ul>

            <button
              class="sessionBtn"
              data-bs-toggle="modal"
              data-bs-target="#staticBackdrop"
            >
              Book Now
            </button>
          </div>
          <div class="sessionImg">
            <img
              src="{{asset('assets/images/career_session.webp')}}"
              alt=""
            />
          </div>
        </div>
        <!-- Career Session Section End -->

        <!-- Top collection Start -->
        <div
          class="topCollection swiper topCollectionSwiper d-flex align-items-center flex-column mb-5"
        >
        <div class="container">
          <div
            class="d-flex align-items-center justify-content-between pageHeading w-100"
          >
            <h1 class="sd_text">Top Collection</h1>
            <button class="exploreAllbtn "><a href="./blog.html">Explore All</a></button>
          </div>
        </div>


          <div class="topCollection-cards swiper-wrapper">
            <div class="topCollection-card swiper-slide">
              <div class="topCard">
                <div class="topCard-img">
                  <img
                    src="{{asset('assets/images/blog-67-370x260.webp')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="topContent">
                  <p class="topText1">Sunday Challenge</p>
                  <p class="topText2">
                    Try the Weekly Quiz and Win Exciting Prizes!
                  </p>
                  <a href="blog.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="topCollection-card swiper-slide">
              <div class="topCard">
                <div class="topCard-img">
                  <img
                    src="{{asset('assets/images/blog-64-370x260.webp')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="topContent">
                  <p class="topText1">Exam Tips</p>
                  <p class="topText2">
                    Tips to Become an Effective Reader in Global Race
                  </p>
                  <a href="blog.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="topCollection-card swiper-slide">
              <div class="topCard">
                <div class="topCard-img">
                  <img
                    src="{{asset('assets/images/blog-68-370x260.webp')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="topContent">
                  <p class="topText1">Visual Stories</p>
                  <p class="topText2">
                    ISRO Missions that put India in Global Space
                  </p>
                  <a href="blog.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="topCollection-card swiper-slide">
              <div class="topCard">
                <div class="topCard-img">
                  <img
                    src="{{asset('assets/images/blog-69-370x260.webp')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="topContent">
                  <p class="topText1">Sunday Challenge</p>
                  <p class="topText2">
                    Try the Weekly Quiz and Win Exciting Prizes!
                  </p>
                  <a href="blog.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="topCollection-card swiper-slide">
              <div class="topCard">
                <div class="topCard-img">
                  <img
                    src="{{asset('assets/images/blog-64-370x260.webp')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="topContent">
                  <p class="topText1">Sunday Challenge</p>
                  <p class="topText2">
                    Try the Weekly Quiz and Win Exciting Prizes!
                  </p>
                  <a href="blog.html">Read more</a>
                </div>
              </div>
            </div>
            <!--<div class="topCollection-card swiper-slide">-->
            <!--  <div class="topCard">-->
            <!--    <div class="topCard-img">-->
            <!--      <img-->
            <!--        src="assets/images/Exam prepration.png"-->
            <!--        alt=""-->
            <!--        class="img-fluid"-->
            <!--      />-->
            <!--    </div>-->
            <!--    <div class="topContent">-->
            <!--      <p class="topText1">Sunday Challenge</p>-->
            <!--      <p class="topText2">-->
            <!--        Try the Weekly Quiz and Win Exciting Prizes!-->
            <!--      </p>-->
            <!--      <a href="">Read more</a>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- Top collection End -->

        <!-- Tabs section Start -->
        <div class="container-fluid d-flex align-items-center flex-column mb-5">
          <div class="d-flex align-items-center flex-column px-3">
            <h1 class="sd_text">Why Everyone Love Future Lift!</h1>
            <p class="sd_txt_para">
              Our users get value from our services, here they share their
              experience and thoughts about us.
            </p>
          </div>
          <div class="tab-Section container-fluid d-flex flex-column px-2">
            <nav
              class="nav nav-pills d-flex align-items-center align-self-center"
            >
              <button
                type="button"
                class="nav-link active"
                data-bs-target="#parents"
                data-bs-toggle="tab"
              >
                Parents
              </button>
              <div class="divider"></div>
              <button
                type="button"
                class="nav-link"
                data-bs-target="#students"
                data-bs-toggle="tab"
              >
                Students
              </button>
            </nav>
            <div class="container">
              <div class="tab-content swiper container-fluid">
                <div
                  class="tab-pane fade show active container-fluid"
                  id="parents"
                >
                  <div class="tabSwiper container-fluid">
                    <div class="tabCards swiper-wrapper">
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-1.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Rahul Roy</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              My child was in hesitation and puzzle to peruse her
                              career. Being a parent also I can't helpher as lack
                              of knowledge, hereafter Future Lift enlightened my
                              daughter's career path also fades all uncertainty,
                              she is happy now, I'm very glad to share this.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-3.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Sanjeev Banerjee</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              Hi, I would like to say a big thank you to Future
                              Lift for ensuring that our children’s studies have
                              not been impacted. It was overwhelming to see how
                              quickly and efficiently the new way of guiding was
                              adopted by the Future Lift and not only this, but
                              the entire parent community was also made
                              comfortable. During the online sessions each and
                              every student was given a chance to speak and
                              express.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-2.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Parents of Suhana</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              I really appreciate your efforts to make my ward
                              study even in this kind of situation we are facing
                              right now, and she also study very judiciously. We
                              are happy that children taking this class is
                              seriously and I hope these classes will help
                              students to get better result in even these kind of
                              situation. Thank you so much Future Lift.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-4.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Mina Jain</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              We, the parents of Ruhi Jain and Sourav Jain are
                              proud to be a part of this counseling session.
                              Future Lift learning system has made a great and a
                              positive impact on both our children. Future Lift
                              has nurtured the potential and talent of our
                              children’s. We are extremely happy with their
                              performance. Future Lift has excellent staff and
                              technical environment.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next">
                      <i class="fa fa-solid fa-caret-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                      <i class="fa fa-solid fa-caret-left"></i>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade container-fluid" id="students">
                  <div class="tabSwiper">
                    <div class="tabCards swiper-wrapper">
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-2.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Sayani Ghosh</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              The career counselling season from Future Lift open
                              a lot of options for me and help me to pick the best
                              one. Surely would recommend it to the others. The
                              Aptitude tests were very helpful. I really felt
                              confident and relaxed after I found out that my
                              career exactly matched with their recommendation,
                              and it was a good counselling for me. Got a lot of
                              clarity of courses. It made choosing my PG course
                              easy. A lot of thanks to Future Lift.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-3.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Bishal Roy</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              After graduation, being in confusion of choosing a
                              career Future Lift helps me a lot to get information
                              about all the possible career options that i can go
                              through. Not only it helped me get my confidential
                              solution but also guided me a lot throughout my I'm
                              thankful that I got such a type of platform who
                              helps like a personal mentor and always raises its
                              helping hand towards me.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-1.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Krishna Kinkar Ghosh</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              Previously we all heard that Career counseling means
                              just finding the best career option but now the
                              scenario is changed by Future Lift. Besides doing
                              career counseling it also helps the student to build
                              a bright future and be a good human being and feel
                              proud of his/her parents.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="tabCard swiper-slide">
                        <div class="tabCardContent">
                          <div class="tabCrad_img">
                            <img src="{{asset('assets/images/team-4.webp')}}" alt="" />
                            <div class="overlay_box"></div>
                          </div>
                          <div class="tabCardContentText">
                            <p class="parentName">- Srija Banerjee</p>
                            <div class="rating_star">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                            </div>
                            <p>
                              The career counselling season from Future Lift open
                              a lot of options for me and help me to pick the best
                              one. Surely would recommend it to the others. The
                              Aptitude tests were very helpful. I really felt
                              confident and relaxed after I found out that my
                              career exactly matched with their recommendation.
                              Got a lot of clarity of career & course. It made
                              choosing my PG course easy.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next">
                      <i class="fa fa-solid fa-caret-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                      <i class="fa fa-solid fa-caret-left"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tabs section End -->

        <!-- Career Subscribe Section Start -->
        <div class="container-fluid p-4">
          <div class="container-fluid careerSubscribeSection">
            <div class="careerSubscribeContent">
              <p>
                Subscribe to get access of our Education Library and News...
              </p>
              <div class="collapse" id="Subscribe_mail_box">
                <form action="">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Email" required>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              <a href="#Subscribe_mail_box" data-bs-toggle="collapse">
                <button class="careerSubscribebtn">Subscribe with Gmail</button>
              </a>
            </div>
            <div class="careerSubscribeImg">
              <img
                src="{{asset('assets/images/subscription_img.webp')}}"
                alt=""
              />
            </div>
          </div>
        </div>

        <!-- Career Subscribe Section End -->

        <!-- Career FAQ Section Start -->
        <div class="container-fluid faqSection">
          <h1 style="font-weight: bold">FAQ</h1>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is Futurelift online career counselling?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>A good career is a building pillar of the rest of your happy
                    living. And it is the most hard and powerful decision one should
                    take in their life. As everyone start their education and also
                    explore some hobbies in their early stage but choosing something
                    we would enjoy doing for the rest of our lives is hard. However,
                    this is easier said than done, given that there are more than
                    500+ career options available today. How do we choose the right
                    career path? Which of our interests would be best suited as a
                    profession? How do we decide? And this is where career
                    counselling lead into picture. As we need the best decision for
                    our career. A Future career counsellor solve all your career
                    related issues, it might be confidence, poor time management,
                    lack of concentration, career road map through virtual session.
                    Provide solution in every bit of the career channel. This
                    programme is accessible in any point of time of the booking
                    schedule according to you, where you will gone through
                    psychometric test, online live session with personalised
                    guidance by and other extensive support throughout your journey
                    with us.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do it better from other platforms?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>It comprises or provence by my success stories starting from our
                    platform, Here student find their one stop solution of career
                    counselling. The process involves psychometric test,
                    personalized career counselling and. The quality of the tests is
                    the key factor apart from scientific discussion in our process.
                    Our results have been fairly appreciated by our clients over the
                    years. The student as well as parents appreciate our career
                    counselling overwhelmed with the process as it, leaves no stone
                    unturned in understanding the right career path. Over the whole
                    process the child and parent feel connected with us which makes
                    us different from others and They are enjoying their career and
                    have referred many of their friends to us.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is Personality Test?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Personality is the most clear psychometric test that expression
                    when interact with other people. It is the characteristics way
                    of thinking , feeling and behaving with others. This test
                    includes the scientific tools , process to identify the traits
                    of individual human having in them like openness, agreeableness.
                    It uses some famous and useful AI based technique and theories
                    to identify these traits correctly.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do the interest test is more beneficial than IQ test?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Both test have their self value centric, Interest identify your
                    area of potential so that you can put your efforts on correct
                    field and the IQ test comprises the short way technique to
                    identify the capacity and speed of your brain to capture your
                    work.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What is interest Test?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Interest test is essential psychometric measurement test gives clearly about the interest area that lead to right career decisions.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  My child is studying in 9th standard do I need to access him/her in career assessment test?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Early stage career decision is the most important thing in a student educational life and career to persue. At the stage of 9 th standard Student got their actual time for career choice as after class 10 th student get busy in exam and after that they have to choose their stream on a quick note, so he/ she basically conscious about the right direction their must peace of mind and clear attention to their present work.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  What are the steps for personalized Guidance?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Click here and directly get the personalized Guidance page and Press the Book Now After that fill up the form details then schedule for the session . Our team will get connect you within 24 hours.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Can I get the preference to choose my regional language?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Of course, you got the option to talk and clear out the matter in the discussion in your regional language. Our team and counsellor will help out in your regional language only.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  What are the steps include in all the programme?
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    The steps included in through out the programme are online test
                psychometric test to understand and access with the scientific
                assessment, next get consulted in Live counselling session by
                the expert counsellor , and last but not the least get a
                valuable Brainstorming session to be explored more in your
                career.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <!-- <div class="faq">
            <div class="faqQuestion">
              <p>What is Futurelift online career counselling?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                A good career is a building pillar of the rest of your happy
                living. And it is the most hard and powerful decision one should
                take in their life. As everyone start their education and also
                explore some hobbies in their early stage but choosing something
                we would enjoy doing for the rest of our lives is hard. However,
                this is easier said than done, given that there are more than
                500+ career options available today. How do we choose the right
                career path? Which of our interests would be best suited as a
                profession? How do we decide? And this is where career
                counselling lead into picture. As we need the best decision for
                our career. A Future career counsellor solve all your career
                related issues, it might be confidence, poor time management,
                lack of concentration, career road map through virtual session.
                Provide solution in every bit of the career channel. This
                programme is accessible in any point of time of the booking
                schedule according to you, where you will gone through
                psychometric test, online live session with personalised
                guidance by and other extensive support throughout your journey
                with us.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>How do it better from other platforms?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                It comprises or provence by my success stories starting from our
                platform, Here student find their one stop solution of career
                counselling. The process involves psychometric test,
                personalized career counselling and. The quality of the tests is
                the key factor apart from scientific discussion in our process.
                Our results have been fairly appreciated by our clients over the
                years. The student as well as parents appreciate our career
                counselling overwhelmed with the process as it, leaves no stone
                unturned in understanding the right career path. Over the whole
                process the child and parent feel connected with us which makes
                us different from others and They are enjoying their career and
                have referred many of their friends to us.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>What is Personality Test?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                Personality is the most clear psychometric test that expression
                when interact with other people. It is the characteristics way
                of thinking , feeling and behaving with others. This test
                includes the scientific tools , process to identify the traits
                of individual human having in them like openness, agreeableness.
                It uses some famous and useful AI based technique and theories
                to identify these traits correctly.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>Do the interest test is more beneficial than IQ test?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                Both test have their self value centric, Interest identify your
                area of potential so that you can put your efforts on correct
                field and the IQ test comprises the short way technique to
                identify the capacity and speed of your brain to capture your
                work.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>What is interest Test?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                Interest test is essential psychometric measurement test gives
                clearly about the interest area that lead to right career
                decisions.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>
                My child is studying in 9th standard do I need to access him/her
                in career assessment test?
              </p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                Early stage career decision is the most important thing in a
                student educational life and career to persue. At the stage of 9
                th standard Student got their actual time for career choice as
                after class 10 th student get busy in exam and after that they
                have to choose their stream on a quick note, so he/ she
                basically conscious about the right direction their must peace
                of mind and clear attention to their present work.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>What are the steps for personalized Guidance?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                <a>Click here</a> and directly get the personalized Guidance
                page and Press the <a>Book Now</a>
                After that fill up the form details then schedule for the
                session . Our team will get connect you within 24 hours.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>Can I get the preference to choose my regional language?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                Of course, you got the option to talk and clear out the matter
                in the discussion in your regional language. Our team and
                counsellor will help out in your regional language only.
              </p>
            </div>
          </div>
          <div class="faq">
            <div class="faqQuestion">
              <p>What are the steps include in all the programme?</p>
              <i class="fa fa-solid fa-caret-down"></i>
            </div>
            <div class="faqAnswer">
              <p>
                The steps included in through out the programme are online test
                psychometric test to understand and access with the scientific
                assessment, next get consulted in Live counselling session by
                the expert counsellor , and last but not the least get a
                valuable Brainstorming session to be explored more in your
                career.
              </p>
            </div>
          </div> -->
        </div>
        <!-- Career FAQ Section End -->
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
