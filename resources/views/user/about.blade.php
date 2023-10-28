<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.favicon')

    <title>Future Lift1</title>
    @include('user.includes.css-link')
    @section('csss')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://assets2.lottiefiles.com/packages/lf20_4kji20Y93r.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    @endsection
  </head>
  <body>
    <div class="main-container">
      <!-- Header Start -->
      <div id="header">
      @include('user.includes.header')

      </div>
      <!-- Header End -->



      <div class="container-fluid">

      <section class="about_future_lift" id="about" style="">
          <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                  <div class="heading_box text-center">
                    <h1 class="about_heading">Who we are</h1>
                  </div>
                </div>
            </div>
            <div class="frrr" >
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div>
                      <div class="round_text_box">
                        <img src="{{asset('assets/images/round_box.png')}}" alt="">
                        <div class="text">
                          <p>70%</p>
                        </div>
                      </div>
                      <div class="about_text_blow">
                        <p>70% of professionals in India are unhappy and frustrated with their careers. -- Society for Human Resource Management 2022.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div>
                      <div class="round_text_box">
                        <img src="{{asset('assets/images/round_box.png')}}" alt="">
                        <div class="text">
                          <p>54</p>
                        </div>
                      </div>
                      <div class="about_text_blow">
                        <p>54 million young Indians struggle to find suitable employment due to a mismatch between their qualifications and available job opportunities. -- World Bank 2022.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div>
                      <div class="round_text_box">
                        <img src="{{asset('assets/images/round_box.png')}}" alt="">
                        <div class="text">
                          <p>51%</p>
                        </div>
                      </div>
                      <div class="about_text_blow">
                        <p>51% of professionals in India believe that they would be happier in their careers if they had received proper guidance when making career decisions.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <div class="whoWeAre_box_text" style="background: url({{asset('assets/images/about_bg_dia.webp')}});">
        <div class="container">
          <p>Future Lift is an online career guidance and mentorship platform that enables
            students and working professionals to discover themselves and the courses
            and careers they will enjoy and excel at. Our team of experienced
            psychologists, career consultants, content researchers, counselling experts and
            subject matter experts will ensure that all our users have an exciting journey of
            career discovery as they discover which career is perfect for them. Future Lift is
            driven by the vision to foster generations of happier, more productive and
            successful individuals through holistic career guidance and mentorship. It is a
            tool to help you take control and confidently assume more responsibility for the
            future you plan for yourself</p>
        </div>
      </div>
      <div class="mission_main_box" style="background: url({{asset('assets/images/why-bg-1.webp')}});">
        <div class="container">
          <div class="row mission_futureLift_row">
            <div class="col-lg-4 col-md-6 futureLift_mission_box">
              <div class="mission_info_box">
                <h1>VISION</h1>
                <p>Future Lift aspire to be the primer educational platform of India for
                    student centric guidance with a strong focus on applied search to
                    become more innovative by exploding or needs with leadership
                    whilst maintaining highest academic and ethical standards in
                    creative and innovative environment.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 futureLift_mission_box">
              <div class="mission_info_box">
                <h1>MISSION</h1>
                <p>Our mission is to provide personalized and comprehensive career
                    guidance services that help individuals identify their strengths,
                    interests, and values, explore career options, and develop the skills
                    and strategies necessary to achieve their career objectives.
                    </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 futureLift_mission_box">
              <div class="mission_info_box">
                <h1>GOAL</h1>
                <p>Provide high-quality and customized career counseling
                    services to individuals across different industries and sectors.
                    Build and maintain strong partnerships with educational
                    institutions, employers, and other stakeholders to create more
                    opportunities for our clients.
                    Continuously update and improve our counseling
                    methodologies and tools to ensure that we are providing the
                    most relevant and effective guidance.
                    Expand our reach by leveraging technology and digital
                    platforms to connect with more clients.
                    Foster a supportive and inclusive environment where clients
                    feel empowered and encouraged to pursue their career goals.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="contact_section" style="background: url({{asset('assets/images/why-bg-.webp')}});">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 loacation_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.7493288204087!2d77.48694630287879!3d12.98787834391658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3c6c7a35f063%3A0xfa2abf4f397981c2!2s18%2C%202nd%20Cross%2C%20Shree%20Nidhi%20Layout%2C%20Herohalli%2C%20Tunganagara%2C%20Bengaluru%2C%20Karnataka%20560091!5e0!3m2!1sen!2sin!4v1688099030856!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-6 quary_box">
              <div class="flQuery_box">
                <h1>for any query</h1>
                <div class="query_flForm_box">
                  <form action="{{url('/submitQueryForm')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <label for="mail" class="form-label">Email</label>
                      <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="message" class="form-label">message</label>
                      <textarea id="" name="message" cols="30" rows="2" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="row">
                      <div class="form-group text-center pt-4">
                        <button type="submit" class=" msg_btn">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="specification_futureLift" style="background: url({{asset('assets/images/why-bg-1.webp')}});">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 my-3 ">
              <div class="about_other_text">
                <div class="img_other_box">
                  <div class="other_img_box">
                    <img src="{{asset('assets/images/icon_brain.png')}}" alt="" srcset="" class="img-fluid">
                  </div>
                </div>
                <h1>Our Philosophy:</h1>
                <p>Students spend 70% of their adult life at the workplace. Career decisions are one of the most important decisions in a student's academic and professional journey. It is essential that these decisions are made with utmost care and expertise.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
              <div class="about_other_text">
                <div class="img_other_box">
                  <div class="other_img_box">
                    <img src="{{asset('assets/images/icon_handshake.png')}}" alt="" srcset="" class="img-fluid">
                  </div>
                </div>
                <h1>Our Strength:</h1>
                <p>We blend artificial intelligence and machine learning with strategic human interventions to enable career success. Our management team, advisory board and psychometric team bring unparalleled experience in the domain with the singular aim to help students.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
              <div class="about_other_text">
                <div class="img_other_box">
                  <div class="other_img_box">
                    <img src="{{asset('assets/images/icon_mathametics.png')}}" alt="" srcset="" class="img-fluid">
                  </div>
                </div>
                <h1>Our Pedagogy:</h1>
                <p>We aim to minimize human bias in the career decision making process. We leverage technology and research to help students, parents, schools, counselors in making infirmed career decisions. Our platform and experts together simplify this process.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
              <div class="about_other_text">
                <div class="img_other_box">
                  <div class="other_img_box">
                    <img src="{{asset('assets/images/icon_trophy.png')}}" alt="" srcset="" class="img-fluid">
                  </div>
                </div>
                <h1>Our Accord:</h1>
                <p>We are a group of PhDs, career experts, strategists, entrepreneurs and technology whiz-kids with a collective experience of over 150 years. Trust us with your career decisions as we help you figure out your true self and help you craft your success stories.</p>
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </body>
</html>
