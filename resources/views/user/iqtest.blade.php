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
        <div class="personalityBanner container-fluid">
          <div class="container">
            <div class="row align-items-center personalityBanner_box_row">
              <div class="col-md-6">
                <div class="personalityBannerContent">
                <p>IQ is the strongest predictor of what you can achieve...</p>
                  <p>
                    IQ is important in understanding abilities and overall
                    achievement.
                  </p>
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
              </div>
              <div class="col-md-6 ">
                <div class="personalityBannerImg">
                  <img src="{{asset('assets/images/iqtestBanner.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service Section start -->
        <div class="testServiceSection">
          <div class="testServiceCards row">
            <div class="testServiceCard col-md-4">
              <div class="testServiceCardContent">
                <div class="testServiceCardImg">
                  <img src="{{asset('assets/images/original.png')}}" alt="" />
                </div>
                <div class="testServiceCardText">
                  <p>Authentic Career Test</p>
                  <p>
                    Authentic assessments help students analyze what they've
                    learned and apply it their own experience.
                  </p>
                </div>
              </div>
            </div>
            <div class="testServiceCard col-md-4">
              <div class="testServiceCardContent">
                <div class="testServiceCardImg">
                  <img src="{{asset('assets/images/research.png')}}" alt="" />
                </div>
                <div class="testServiceCardText">
                  <p>Well-researched Report</p>
                  <p>
                    A research report allows you to present information in a
                    precise and concise manner.
                  </p>
                </div>
              </div>
            </div>
            <div class="testServiceCard col-md-4">
              <div class="testServiceCardContent">
                <div class="testServiceCardImg">
                  <img src="{{asset('assets/images/secure-payment.png')}}" alt="" />
                </div>
                <div class="testServiceCardText">
                  <p>Secure Payment</p>
                  <p>
                    It helps secure a purchase and a customer's payment
                    information in a transaction.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service Section End -->

        <!-- Benefits section start -->
        <div class="BenefitsSection swiper container-fluid">
          <h1 style="font-weight: bold; text-align: center">
            Benefits of IQ Test
          </h1>
          <div class="BenefitsCards swiper-wrapper">
            <div class="BenefitsCard swiper-slide">
              <div class="BenefitsCardContent" id="BenefitsCardContent-1">
                <p>Attentive</p>
                <p>
                  Being more attentive can help to recall information and
                  increase IQ level.
                </p>
              </div>
            </div>
            <div class="BenefitsCard swiper-slide">
              <div class="BenefitsCardContent" id="BenefitsCardContent-2">
                <p>Short way</p>
                <p>
                  IQ is the most short and quick way to identify and check the
                  intelligence level .
                </p>
              </div>
            </div>
            <div class="BenefitsCard swiper-slide">
              <div class="BenefitsCardContent" id="BenefitsCardContent-3">
                <p>Latent Abilities</p>
                <p>
                  For this ability of IQ test you get different answers for same
                  question.
                </p>
              </div>
            </div>
            <div class="BenefitsCard swiper-slide">
              <div class="BenefitsCardContent" id="BenefitsCardContent-4">
                <p>Smartness</p>
                <p>IQ test improve smartness and makes more better.</p>
              </div>
            </div>
            <div class="BenefitsCard swiper-slide">
              <div class="BenefitsCardContent" id="BenefitsCardContent-5">
                <p>Speediness</p>
                <p>
                  Your Brain and mind capacity for speedy solution improves the
                  quality of career determine by IQ test.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Benefits section End -->

        <!-- Career FAQ Section Start -->
        <div class="container-fluid faqSection">
          <h1 style="font-weight: bold; text-align: center;margin-bottom: 20px;">
            FAQ about IQ Test
          </h1>
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
