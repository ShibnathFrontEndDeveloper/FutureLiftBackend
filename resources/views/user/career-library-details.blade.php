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
                  <li class="career_list_links"><a href="#WorkDescription">Work Description</a></li>
                  <li class="career_list_links"><a href="#ProsCons">Pros & Cons of a Career</a></li>
                </ul>
                <div class=" left_bestForYou">
                    <div class="addbox">
                      <div class="textPart_box">
                        <h5>Know what is best for you!</h5>
                        <p>Take world class Assessment test Take world class Assessment test</p>
                      </div>
                    </div>
                    @if(Auth::guard('user')->check())

                    @else
                    <form action="{{url('/user/demo-registration')}}" method="post" class="addFirm">
                    @csrf
                    <input type="text" placeholder="Your mail address" name="reg_email" value="{{old('reg_email')}}" class="form-control">
                        <button type="submit">Take a free demo</button>
                    </form>
                    @endif
                </div>
              </div>
              <div class="col-md-9">
                <h1 class="career_haeding">{{$data->title}}</h1>
                <div class="career_content_box" id="Summary">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Summery</h1>
                    <div class="d-flex justify-content-between">
                    <p>{!!$data->summery_content!!}
                    </p>

                    <img src="{{asset('assets/career_library/'.$data->summery_image)}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Opportunities">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/oppertunityIcon.png')}}" alt="" class="img-fluid">Career Opportunities in Artificial Intelligence and Machine Learning</h1>
                    <div class="accordian_box">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                      @foreach (json_decode($data->career_opportunities,true) as $career_opportunitiesKey => $career_opportunitiesValue)
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading{{$career_opportunitiesKey}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$career_opportunitiesKey}}" aria-expanded="false" aria-controls="flush-collapse{{$career_opportunitiesKey}}">
                            {{$career_opportunitiesValue['career_op_title']}}
                            </button>
                          </h2>
                          <div id="flush-collapse{{$career_opportunitiesKey}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$career_opportunitiesKey}}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">{{$career_opportunitiesValue['career_op_content']}}</div>
                          </div>
                        </div>
                        @endforeach

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
                        @foreach (json_decode($data->career_artificial,true) as $career_artificialKey => $career_artificialValue)
                          <tr>
                            <th>
                              <div class="path_box">
                                path {{$career_artificialKey + 1}}
                              </div>
                            </th>
                            <td>{{$career_artificialValue['career_stream']}}</td>
                            <td>{{$career_artificialValue['career_graduation']}}</td>
                            <td>{{$career_artificialValue['career_after_graduation']}}</td>
                            <td>{{$career_artificialValue['career_post_graduation']}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Qualities">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/skillIcon.png')}}" alt="" class="img-fluid">Skills and Qualities</h1>
                    <div class=" justify-content-between">
                    <p>{!!$data->skill_content!!}</p>
                    <!-- <img src="{{asset('assets/career_library/'.$data->skill_image)}}" alt="" class="img-fluid"> -->
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Occupational">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Occupational Profile</h1>
                    <div class=" justify-content-between">
                    <p>{!!$data->occupational_content!!}</p>
                    <!-- <img src="{{asset('assets/career_library/'.$data->occupational_image)}}" alt="" class="img-fluid"> -->
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
                        @foreach (json_decode($data->landing_indtitute,true) as $landing_indtituteKey => $landing_indtituteValue)
                          <tr>
                            <td>{{$landing_indtituteValue['landing_indtitute_university']}}</td>
                            <td>{{$landing_indtituteValue['landing_indtitute_location']}}</td>
                            <td>
                              <div class="d-flex align-items-center copy_text">
                                <a href="#" id="myText">{{$landing_indtituteValue['landing_indtitute_website']}}</a>
                                <button class="ms-3 copy_btn" onclick="copyCodeDynamic(`{{$landing_indtituteValue['landing_indtitute_website']}}`)">Copy</button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
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
                        @foreach (json_decode($data->abroad_indtitute,true) as $abroad_indtituteKey => $abroad_indtituteValue)
                          <tr>
                            <td>{{$abroad_indtituteValue['abroad_indtitute_college']}}</td>
                            <td>{{$abroad_indtituteValue['abroad_indtitute_location']}}</td>
                            <td>
                              <div class="d-flex align-items-center copy_text">
                                <a href="#" id="myTextCopy">{{$abroad_indtituteValue['abroad_indtitute_website']}}</a>
                                <button class="ms-3 copy_btn" onclick="copyCodeDynamic(`{{$abroad_indtituteValue['abroad_indtitute_website']}}`)">Copy</button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Entrance">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Entrance Exam</h1>
                    <!-- <div class="d-flex justify-content-between"> -->

                    <!-- <img src="{{asset('assets/career_library/'.$data->entrance_exam_image)}}" alt="" class="img-fluid"> -->
                    <!-- </div> -->
                    <div class="careerPath_tabel">
                      <table class="career_tabel institute_table">
                        <thead>
                          <tr>
                            <th>College</th>
                            <th>Tentative Date</th>
                            <th>Important Elements</th>
                            <th>Website</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (json_decode($data->entrance_exam_content,true) as $entrance_exam_contentKey => $entrance_exam_contentValue)
                          <tr>
                            <td>{{$entrance_exam_contentValue['entrance_college']}}</td>
                            <td>{{$entrance_exam_contentValue['entrance_tentative_date']}}</td>
                            <td>{{$entrance_exam_contentValue['entrance_important_elements']}}</td>
                            <td>
                              <div class="d-flex align-items-center copy_text">
                                <a href="#" id="myTextCopy">{{$entrance_exam_contentValue['entrance_website']}}</a>
                                <button class="ms-3 copy_btn" onclick="copyCodeDynamic(`{{$entrance_exam_contentValue['entrance_website']}}`)">Copy</button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="Industry">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Industry Trends</h1>
                    <div class=" justify-content-between">
                    <p>{!!$data->industry_trends_content!!}</p>
                    <!-- <img src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" alt="" class="img-fluid"> -->
                    @if(Auth::guard('user')->check())
                    <embed src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" width="100%" height="400" alt="pdf" id="marksheetEm">
                    @else
                    <embed src="{{asset('media/sample.pdf')}}" width="100%" height="400" alt="pdf" id="marksheetEm" style="filter: blur(6px);">
                    <a href="javascript:void(0)" onclick="logInform()" class="btn btn-primary position-relative book_btn">View PDF</a>
                    @endif
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="WorkDescription">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/my-icon-7.jpg')}}" alt="" class="img-fluid">Work Description</h1>
                    <div class=" justify-content-between">
                    <p>{!!$data->work_description_content!!}</p>
                    <!-- <img src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" alt="" class="img-fluid"> -->
                    </div>
                  </div>
                </div>
                <div class="career_content_box" id="ProsCons">
                  <div class="career_content_boxDtls">
                    <h1><img src="{{asset('assets/images/summeryIcon.png')}}" alt="" class="img-fluid">Pros & Cons of a Career</h1>
                    <div class=" justify-content-between">
                    <p>{!!$data->pros_and_cons_content!!}</p>
                    <!-- <img src="{{asset('assets/career_library/'.$data->industry_trends_image)}}" alt="" class="img-fluid"> -->
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
                    @if(Auth::guard('user')->check())

                    @else
                    <form action="{{url('/user/demo-registration')}}" method="post" class="addFirm  adrorm_width">
                    @csrf
                        <input type="text" placeholder="Your mail address" name="reg_email" value="{{old('reg_email')}}" class="form-control">
                        <button type="submit">Take a free demo</button>
                    </form>
                    @endif
                </div>

              </div>
            </div>
          </div>

          <div class="help_box_part">
            <div class="container">
              <div class="col-md-6">
                <div class="help_yn_box">
                  <p>Did you find this information helpful?</p>
                  <a href="{{url('/career-library-post-like/'.$data->id)}}">Yes</a>
                  <a href="javascript:void(0)" onclick="voteCommentToggle()">No</a>
                  <form action="{{url('/career-library-post-dislike')}}" method="post" class="d-none" id="voteForm">
                    @csrf
                    <input type="hidden" name="postId" value="{{$data->id}}">
                    <textarea placeholder="Please enter your comment here" id="" cols="80" rows="5" name="vote_comment" class="form-control"></textarea>
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </form>
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

        function voteCommentToggle(){
            $("#voteForm").removeClass('d-none');
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
