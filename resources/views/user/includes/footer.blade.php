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
                  <!-- <img
                    src="{{asset('assets/images/new new new  black -1-01 (1).png')}}"
                    alt=""
                  /> -->
                  <p>Book Your InstantAdvice Career Session</p>
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
                    @php
                        $allSession = App\Models\Futurelit_session::get();
                    @endphp
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
                    <!-- <input
                      type="text"
                      id="myLocalDate"
                      class="form-control"
                      placeholder="Schedule Your Session"
                      onfocus="(this.type='datetime-local')"
                      onblur="if(this.value==''){this.type='text'}"
                      required
                      name="schedule_date_time"
                    /> -->

                    <input
                      type="text"
                      id="picker"
                      class="form-control"
                      placeholder="Schedule Session Date"
                      required
                      name="schedule_date"
                    />

                  </div>
                  <div class="form-group modal-Input">
                    <i class="fa-regular fa-calendar-days"></i>
                    <input
                      type="text"
                      id="timepicker"
                      class="form-control"
                      placeholder="Session Time"
                      required
                      name="schedule_time"
                    />
                    </div>
                  <p class="modalFormTerms">
                    By Submitting this form you accept and agree to our
                    <a href="">Terms of Use.</a>
                  </p>
                  <div class="d-flex justify-content-center align-items-ce">
                  <button type="Submit" class="Modalbtn">Book Session</button>
                  <a href="{{url('/instant-advice')}}" target="_blank" class="modalKnowMore_btn ms-3">Know More</a>
                  </div>
                </form>
                @if(!Auth::guard('user')->check())
                <p class="alreadyMember">
                  Already a member? <a href="{{url('/login-signup')}}">Click Here</a> it's easy!
                </p>
                @endif
                
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

<div id="ftco-loader" class="show fullscreen pre-loader" style="display: none;">
    <div class="loader-position">
        <img src="{{asset('assets/images/loader.gif')}}" alt="Preloader">
    </div>
</div>
<div id="footer" class="footer-area section-padding" style="background: url({{asset('assets/images/footer_bg.webp')}});">
  <div class="container">
    <div class="row">
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer_div"
        data-wow-delay="0.2s"
      >
        <div class="footer-logo mb-3">
          <img src="{{asset('assets/images/newlogo.png')}}" alt="" class="img-fluid" />
        </div>
      </div>
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer_div"
        data-wow-delay="0.4s"
      >
        <h3 class="footer-title">Quick Links</h3>
        <ul>
          <li><a href="{{url('/about')}}">About Us</a></li>
          <!-- <li><a href="">FAQs</a></li> -->
          <li><a href="{{url('/policy')}}">Privacy Policy</a></li>
          <li>
            <a href="{{url('/terms-condition')}}">Terms & Conditions</a>
          </li>
        </ul>
      </div>
      <!-- <div
        class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div"
        data-wow-delay="0.6s"
      >
        <h3 class="footer-title">Our Services</h3>
        <ul>
          <li><a href="#">Career</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Clients</a></li>
        </ul>
      </div> -->
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer_div"
        data-wow-delay="0.8s"
      >
        <h3 class="footer-title">Find Us On</h3>
        <div class="social-icon">
          <a
            href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"
            ><i class="fab fa-facebook-square"></i
          ></a>
          <a
            href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&utm_content=7k4l34c"
            ><i class="fab fa-instagram-square"></i
          ></a>
          <a href=" https://twitter.com/Futurelift_edu?s=09"
            ><i class="fab fa-twitter-square"></i
          ></a>
          <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"
            ><i class="fab fa-youtube-square"></i
          ></a>
          <a href="https://www.linkedin.com/company/futurelift-duication"
            ><i class="fab fa-linkedin"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</div>
<section id="copyright">
  <div class="container">
    <div class="d-flex flex-wrap">
      <div class="col-md-6 cpyrgt_fisrt">
        <p class="flex-start">Copyright © 2023 future lift All Right Reserved</p>
      </div>
      <div class="col-md-6 cpyrgt_second">
        <p class="flex-end">Design and Develop by <a target="_blank" href="https://websolveinfo.com/">websolveinfo</a></p>
      </div>
    </div>
  </div>
</section>

<script>
    $(document).ready(function () {
        localStorage.setItem("display", "signUp");
  });

</script>
