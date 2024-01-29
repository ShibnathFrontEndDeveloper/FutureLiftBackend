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
        <div class="banner container-fluid mt-5">
          <img src="{{asset('assets/images/Banner2-01.png')}}" alt="" class="img-fluid mt-4"/>
          <div class="Counselling8th-bannerContent col-6">
            <p>Welcome to 11th-12th Class</p>
            <p>Discover your life goals early</p>
            <p>Choose Right Career in Right Time.</p>
            <a href="#serviceSection"
              ><button class="Counselling8th-bannerBtn">Get Started</button></a
            >
          </div>
        </div>
        <!-- Service Section start -->
        <div
          class="container-fluid col-12 d-flex justify-content-center flex-wrap serviceSection8th"
          id="serviceSection"
        >
          <div class="serviceVideoContent">
            <p>Why you Choose Future Lift</p>
            <p>For 10th to 12th class Counselling</p>
          </div>
          <iframe
            class="serviceVideo"
            src="https://www.youtube.com/embed/MihlCysVWNs"
          >
          </iframe>
        </div>
        <!-- Service Section End -->

        <!-- Success section start -->
        <div
          class="successSection8th my-5 container-fluid d-flex align-items-center flex-column"
          data-aos="zoom-in-up"
        >
          <p class="successSection8th-heading">Success is just 4 steps away</p>
          <div
            class="successSection8th-cards justify-content-center py-4 row col-12"
          >
            <div class="successSection8th-card col-6 col-md-3">
              <div class="successSection8th-cardContent">
                <p class="successCard-heading">Online Test</p>
                <div class="successCardText">
                  <p>
                    Understand your Interest and get career options according to
                    your interest.
                  </p>
                </div>
                <a href="{{url('/login-signup')}}" class="successSection8th-cardbtn px-1">Start Test</a>
              </div>
            </div>
            <div class="successSection8th-card col-6 col-md-3">
              <div class="successSection8th-cardContent">
                <p class="successCard-heading">Career Test</p>
                <div class="successCardText">
                  <ul style="text-align: start">
                    <li>Personality Test</li>
                    <li>IQ Test</li>
                    <li>Aptitude Test</li>
                  </ul>
                </div>
                <a href="{{url('/login-signup')}}" class="successSection8th-cardbtn px-1">Get Started</a>
              </div>
            </div>
            <div class="successSection8th-card col-6 col-md-3">
              <div class="successSection8th-cardContent">
                <p class="successCard-heading">Live Counseling</p>
                <div class="successCardText">
                  <p>
                    Live session help in understanding yourself and deciding
                    Stream
                  </p>
                </div>
                <a href="{{url('/login-signup')}}" class="successSection8th-cardbtn px-1">Book Session</a>
              </div>
            </div>
            <div class="successSection8th-card col-6 col-md-3">
              <div class="successSection8th-cardContent">
                <p class="successCard-heading">Personalized Expert Guidance</p>
                <div class="successCardText">
                  <p>Understand the road map of your stream.</p>
                </div>
                <!--<button class="successSection8th-cardbtn">Know More</button>-->
                <a href="{{url('/login-signup')}}" class="successSection8th-cardbtn px-1">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Success section End -->

        <!-- Counselling Journey Section Start -->
        <div class="counsellingJourneySection">
          <div class="counsellingJourneyContent">
            <p>Start your Free Counseling Journey</p>
            <p>
              It helps to understand oneself, world of work, set professional
              goals and then develop a career path to achieve them.
            </p>
            <a href="{{url('/login-signup')}}"class="pickSectionCardbtn p-2">Free Test</a>
          </div>
          <div class="counsellingJourneyImg">
            <img src="{{asset('assets/images/illustration-careers.png')}}" alt="" />
          </div>
        </div>


        <!-- Pick Package End -->

        <!-- Call Expert Section start -->
        @include('user.includes.left-widget')
        <div class="callExpertSection">
          <!--<div class="callExpertTop">-->
          <!--  <div class="callExpertTopContent">-->
          <!--    <p>Confused About your career choices</p>-->
          <!--    <p>-->
          <!--      Discover the best fit career with the world's most-advanced-->
          <!--      career assessment.-->
          <!--    </p>-->
          <!--  </div>-->

          <!--  <button class="callExpertTopbtn">Call to our Expert</button>-->
          <!--</div>-->
          <div class="callExpertBottom">
            <div class="callExpertBottomContent">
              <p>Have any Questions?</p>
              <p>InstantAdvice Career Session</p>
              <p>Get help in choosing the right career,course and College</p>
              <button class="callExpertBottombtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Know More</button>
            </div>
            <div class="callExpertBottomImg">
              <img src="{{asset('assets/images/callusImg-removebg-preview.png')}}" alt="" />
            </div>
          </div>
        </div>
        <!-- Call Expert Section End -->

        <!-- Tabs section Start -->
        <div class="container-fluid d-flex align-items-center flex-column mb-5">
          <div class="d-flex align-items-center flex-column px-3">
            <h1>Why Everyone Love Future Lift!</h1>
            <p>
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
                    @foreach ($parentTestimonial as $parentTestimonialKey => $parentTestimonialValue)
                        <div class="tabCard swiper-slide">
                            <div class="tabCardContent">
                                <div class="tabCrad_img">
                                    <img src="{{asset('assets/testimonial_images/'.$parentTestimonialValue->image)}}" alt="" />
                                    <div class="overlay_box"></div>
                                </div>
                                <div class="tabCardContentText">
                                    <p class="parentName">- {{$parentTestimonialValue->name}}</p>
                                    <div class="rating_star">
                                        @for ($rating = 0; $rating < $parentTestimonialValue->rating; $rating++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                    <p>
                                    {{$parentTestimonialValue->content}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach ($studentTestimonial as $studentTestimonialKey => $studentTestimonialValue)
                        <div class="tabCard swiper-slide">
                            <div class="tabCardContent">
                                <div class="tabCrad_img">
                                    <img src="{{asset('assets/testimonial_images/'.$studentTestimonialValue->image)}}" alt="" />
                                    <div class="overlay_box"></div>
                                </div>
                                <div class="tabCardContentText">
                                    <p class="parentName">- {{$studentTestimonialValue->name}}</p>
                                    <div class="rating_star">
                                        @for ($rating = 0; $rating < $studentTestimonialValue->rating; $rating++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                    <p>
                                    {{$studentTestimonialValue->content}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

        <!-- CallUs Section Start -->
        @include('user.includes.inquery-form')
        <!-- CallUs Section End -->

        <!-- Career FAQ Section Start -->
        <div class="container-fluid faqSection">
          <h1 style="font-weight: bold">FAQ</h1>
          <div class="accordion" id="accordionExample">
          @foreach ($faq as $faqKey => $faqValue)
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{$faqKey}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faqKey}}" aria-expanded="true" aria-controls="collapse{{$faqKey}}">
                  {{$faqValue->question}}
                </button>
              </h2>
              <div id="collapse{{$faqKey}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faqKey}}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>{!!$faqValue->answer!!}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
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
