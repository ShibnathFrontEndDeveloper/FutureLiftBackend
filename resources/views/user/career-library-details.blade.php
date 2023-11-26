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
        <section class="libryDtls_sec">
          <h3>Career Library</h3>
        </section>
        <section class="detls_content_tab">
          <div class="container">
            <div class="row">
              <div class="col-md-3 position_box">
                <ul class="career_list">
                  <li class="career_list_links"><a href="#Summary" class="active">Summary</a></li>
                  <li class="career_list_links"><a href="#Opportunities">Opportunities</a></li>
                  <li class="career_list_links"><a href="#CareerPathway">Career Pathway</a></li>
                  <li class="career_list_links"><a href="#Qualities">Skills and Qualities</a></li>
                  <li class="career_list_links"><a href="#Occupational">Occupational Profiles</a></li>
                  <li class="career_list_links"><a href="#LeadingInstitute">Leading Institute</a></li>
                  <li class="career_list_links"><a href="#AbroadInstitute">Abroad Institute</a></li>
                  <li class="career_list_links"><a href="#Entrance">Entrance Exam</a></li>
                  <li class="career_list_links"><a href="#Industry">Industry Trends</a></li>
                </ul>
                <div class=" left_bestForYou">
                    <div class="addbox">
                      <div class="textPart_box">
                        <h5>Know what is best for you!</h5>
                        <p>Take world class Assessment test Take world class Assessment test</p>
                      </div>
                    </div>
                    <form action="" class="addFirm">
                        <input type="text" placeholder="Your mail address" class="form-control">
                        <button type="submit">Take a free demo</button>
                    </form>
                </div>
              </div>
              <div class="col-md-9">
                <h1 class="career_haeding">Artificial Intelligence and Machine Learning</h1>
                <div class="career_content_box" id="Summary">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Summery</h1>
                    <div class="d-flex justify-content-between">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.
                    </p>
                    
                    <img src="{{asset('assets/images/library-content.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Opportunities">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/oppertunityIcon.png')}}" alt="" class="img-fluid">Career Opportunities in Artificial Intelligence and Machine Learning</h1>
                    <div class="accordian_box">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Big Data Engineer
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Business Intelligence Developer
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Data Scientist
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="CareerPathway">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/careerPath.png')}}" alt="" class="img-fluid">How to Pursue a Career in Artificial Intelligence and Machine Learning</h1>
                    <div class="careerPath_tabel">
                      <table class="career_tabel">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Stream</th>
                            <th>Graduation</th>
                            <th>After Graduation</th>
                            <th>After Post Graduation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>
                              <div class="path_box">
                                path 1
                              </div>
                            </th>
                            <td>Class XII in Science stream with PCM along with any other subject</td>
                            <td>B.Tech in Computer science / Software/ Information Technology/ Data science/Electrical and Electronics/Robotics /Artificial Intelligence/ AI&ML and more</td>
                            <td>M.Tech in Computer science / Software/ Information Technology/ Data science/Artificial Intelligence/ AI&ML and more</td>
                            <td>Pursue Ph.D in Computer Science Computer Science /Software/Information Technology/ Data science/Artificial Intelligence/ AI&ML /Deep learning and more</td>
                          </tr>
                          <tr>
                            <th>
                              <div class="path_box">
                                path 2
                              </div>
                            </th>
                            <td>Class XII in Science stream with PCM along with any other subject</td>
                            <td>B.Tech in Computer science / Software/ Information Technology/ Data science/Electrical and Electronics/Robotics /Artificial Intelligence/ AI&ML and more</td>
                            <td>M.Tech in Computer science / Software/ Information Technology/ Data science/Artificial Intelligence/ AI&ML and more</td>
                            <td>Pursue Ph.D in Computer Science Computer Science /Software/Information Technology/ Data science/Artificial Intelligence/ AI&ML /Deep learning and more</td>
                          </tr>
                          <tr>
                            <th>
                              <div class="path_box">
                                path 3
                              </div>
                            </th>
                            <td>Class XII in Science stream with PCM along with any other subject</td>
                            <td>B.Tech in Computer science / Software/ Information Technology/ Data science/Electrical and Electronics/Robotics /Artificial Intelligence/ AI&ML and more</td>
                            <td>M.Tech in Computer science / Software/ Information Technology/ Data science/Artificial Intelligence/ AI&ML and more</td>
                            <td>Pursue Ph.D in Computer Science Computer Science /Software/Information Technology/ Data science/Artificial Intelligence/ AI&ML /Deep learning and more</td>
                          </tr>
                          <tr>
                            <th>
                              <div class="path_box">
                                path 4
                              </div>
                            </th>
                            <td>Class XII in Science stream with PCM along with any other subject</td>
                            <td>B.Tech in Computer science / Software/ Information Technology/ Data science/Electrical and Electronics/Robotics /Artificial Intelligence/ AI&ML and more</td>
                            <td>M.Tech in Computer science / Software/ Information Technology/ Data science/Artificial Intelligence/ AI&ML and more</td>
                            <td>Pursue Ph.D in Computer Science Computer Science /Software/Information Technology/ Data science/Artificial Intelligence/ AI&ML /Deep learning and more</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Qualities">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/skillIcon.png')}}" alt="" class="img-fluid">Skills and Qualities</h1>
                    <div class="d-flex justify-content-between">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.</p>
                    <img src="{{asset('assets/images/library-content.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Occupational">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Occupational Profile</h1>
                    <div class="d-flex justify-content-between">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.</p>
                    <img src="{{asset('assets/images/library-content.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="LeadingInstitute">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/instituteIcon.png')}}" alt="" class="img-fluid">Landing Indtitute</h1>
                    <p>Top Artificial Intelligence and Machine Learning Institutes in India</p>
                    
                    <div class="careerPath_tabel">
                      <table class="career_tabel institute_table">
                        <thead>
                          <tr>
                            <th>University</th>
                            <th>Location</th>
                            <th>Website</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>IIT Hyderabad</td>
                            <td>Hyderabad</td>
                            <td>
                              <div class="d-flex align-items-center copy_text">
                                <a href="#" id="myText">https://www.iith.ac.in/</a>
                                <button class="ms-3 copy_btn" onclick="copyContent()">Copy</button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
                <div class="career_content_box" id="AbroadInstitute">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/abrodIcon.png')}}" alt="" class="img-fluid">Abroad Institute</h1>
                    <div class="careerPath_tabel">
                      <table class="career_tabel institute_table">
                        <thead>
                          <tr>
                            <th>College</th>
                            <th>Location</th>
                            <th>Website</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>University of UK</td>
                            <td>University of Singapore</td>
                            <td>
                              <div class="d-flex align-items-center copy_text">
                                <a href="#" id="myTextCopy">https://www.iith000kioooo.ac.in/</a>
                                <button class="ms-3 copy_btn" onclick="copyContentText()">Copy</button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Entrance">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Entrance Exam</h1>
                    <div class="d-flex justify-content-between">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.</p>
                    <img src="{{asset('assets/images/library-content.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Industry">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Industry Trends</h1>
                    <div class="d-flex justify-content-between">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores recusandae provident aperiam atque totam, veniam culpa qui. Esse quos libero quidem autem repellendus molestiae modi blanditiis explicabo cum! Repellat.</p>
                    <img src="{{asset('assets/images/library-content.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class=" left_bestForYou banner_bestForYou" id="sticky_bar">
                    <div class="addbox">
                      <div class="textPart_box">
                        <h5>Know what is best for you!</h5>
                        <p>Take world class Assessment test Take world class Assessment test</p>
                      </div>
                    </div>
                    <form action="" class="addFirm  adrorm_width">
                        <input type="text" placeholder="Your mail address" class="form-control">
                        <button type="submit">Take a free demo</button>
                    </form>
                </div>
                
              </div>
            </div>
          </div>
          <div class="help_box_part">
            <div class="container">
              <div class="col-md-6">
                <div class="help_yn_box">
                  <p>Did you find this information helpful?</p>
                  <a href="">Yes</a>
                  <a href="">No</a>
                </div>
                
              </div>
            </div>
          </div>
        </section>
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


      <!-- ///////You can Copy Text/////// -->
      <script>
        let text = document.getElementById('myText').innerHTML;
        const copyContent = async () => {
          try {
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');
          } catch (err) {
            console.error('Failed to copy: ', err);
          }
        }

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

    <script>
      // Postion Sticky//
      //  let career_list =document.querySelector('.career_list');
      //  window.onscroll=function(e){
      //   window.pageYoffset>10;
      //   career_list.addClass('ghghghg')
      //  }


      //  $(window). scroll(function(){
      //     if ($(this). scrollTop() > 50) {
      //     $('.career_list'). addClass('newClass');
      //     } else {
      //     $('.career_list'). removeClass('newClass');
      //     }
      //     });
    </script>
  </body>
</html>
