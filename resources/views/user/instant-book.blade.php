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



      <div class="row book-inst">

        @if(!empty($data))
        <div class="sessionModalForm col-md-12" style="width:100%;">
            <p class="modalFormHeading">Register Now to Book session</p>
            <form action="{{url('/user/booksession')}}" class="callUsForm" method="post" autocomplete="off">
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
                    <input
                      type="radio"
                      class="btn-check"
                      name="options"
                      id="optionFree"
                      autocomplete="off"
                      value="{{$data->id}}"
                      checked
                    />
                    <label class="radioBox" for="optionFree">
                        <p>{{($data->price > 0)?'₹ '.$data->price.' /-':'Free'}}</p>

                      <p>{{$data->content}}</p></label
                    >

                </div>
                <div class="form-group modal-Input">
                    <i class="fa-regular fa-calendar-days"></i>
                    <input
                      type="text"
                      id="picker"
                      class="form-control datepick"
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
                <p class="modalFormTerms">By Submitting this form you accept and agree to our
                    <a href="">Terms of Use.</a>
                </p>
                <div class="d-flex justify-content-center align-items-ce">
                    <button type="Submit" class="Modalbtn">Book Session</button>
                </div>
            </form>
        </div>
        @else
        <div class="col-md-12 form-group text-center">
            <h3>Product Not Found!</h3>
        </div>
        <div class="col-md-12 form-group text-center">
            <a href="{{url('/instant-advice')}}" type="button" class="Modalbtn">Go Back</a>
        </div>
        @endif



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
