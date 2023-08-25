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



      <div class="container">

      <div class="row mt-5">
                <div class="col-lg-9 col-md-9 handpicked_blog_box">
                    <div class="first_blog mb-5">
                        <h3 class="blog_page_heading">{{$blog->title}}</h3>
                        @php
                            $userDetailsAllBlog = App\Helpers::getUserDetails($blog->userId);
                        @endphp
                        <a href="" class="title_blog">{{$userDetailsAllBlog->name}}</a> <span class="title_blog">{{date('jS F Y',strtotime($blog->created_at))}}</span>
                        <img src="{{asset('assets/blog_images/'.$blog->image)}}" alt="" class="img-fluid mt-4">
                        <div class="tag-blog-section">
                            Tags:
                            @foreach ($blogTag as $blogTagKey => $blogTagValue)
                                <a href="{{url('/blog/blog-tag/'.$blogTagValue->slug)}}" class="blog-tag"> {{$blogTagValue->tag}}</a>
                            @endforeach

                        </div>

                        <div class="first_blog_para mt-3">
                            {!!html_entity_decode($blog->content)!!}
                        </div>
                        <div class="like_box_wrap">
                            @if(Auth::guard('user')->check())
                            <div class="like_box border-end" style="cursor:pointer;" onclick="likeBlog('<?=$blog->id?>')">
                          @else
                          <div class="like_box border-end" style="cursor:pointer;" onclick="loginAlert()">
                          @endif
                            <i class="bi bi-hand-thumbs-up-fill"></i>
                            <div class="count_box ms-1">
                              <span id="likeBlogCount">{{$countLike}}</span>
                            </div>
                          </div>
                          @if(Auth::guard('user')->check())
                          <div class="like_box" style="cursor:pointer;" onclick="dislikeBlog('<?=$blog->id?>')">
                          @else
                          <div class="like_box" style="cursor:pointer;" onclick="loginAlert()">
                          @endif
                            <i class="bi bi-hand-thumbs-down-fill"></i>
                            <div class="count_box ms-1">
                              <span id="dislikeBlogCount">{{$countDislike}}</span>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 main_blog">
                    <h2 class="blog_heading blog_subHeading">search</h2>
                    <form class="blog_search" action="{{url('/blog-search')}}">
                        <fieldset>
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <input class="btn" type="submit">
                        </fieldset>
                    </form>
                    <h1 class="blog_heading blog_subHeading">Latest Posts</h1>
                    @foreach ($latestBlog as $latestBlogKey => $latestBlogValue)
                    <div class="right_blog_box mb-3">

                      <div class="latestPost_box">
                        <div class="lts_post_img">
                          <a href="{{url('/blog-details/'.$latestBlogValue->slug)}}">
                            <img src="{{asset('assets/blog_images/'.$latestBlogValue->image)}}" alt="" class="img-fluid">
                          </a>
                        </div>
                        <div class="lts_post_hding">
                          <a href="{{url('/blog-details/'.$latestBlogValue->slug)}}"><h4>{{$latestBlogValue->title}}</h4></a>
                        </div>
                        <div class="lts_post_release">
                        @php
                            $userDetails = App\Helpers::getUserDetails($latestBlogValue->userId);
                        @endphp
                            <p>{{$userDetails->name}} <span>{{date('jS F Y',strtotime($latestBlogValue->created_at))}}</span></p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <div class="right_blog_box mb-3 get_box stick_box">
                      <h1 class="blog_heading blog_subHeading ">Get in touch</h1>
                      <div class="latestPost_box">
                      <form action="{{url('/submitQueryForm')}}" method="post" class="get_form">
                    @csrf
                      <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}" required>
                      </div>
                      <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" required>
                      </div>
                      <div class="form-group">
                        <label for="" class="form-label">Message</label>
                        <textarea id="" name="message" cols="30" rows="2" class="form-control">{{old('message')}}</textarea>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary blog_btn_send">Send</button>
                      </div>
                    </form>
                      </div>
                    </div>
                </div>
            </div>
            <div class="share_part">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/blog-details/'.$blog->slug)}}" class="social_icon_links" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com/share?url={{url('/blog-details/'.$blog->slug)}}&text={{ $blog->title }}" class="social_icon_links" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{url('/blog-details/'.$blog->slug)}}" class="social_icon_links" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://pinterest.com/pin/create/button/?url={{url('/blog-details/'.$blog->slug)}}&media={{asset('assets/blog_images/'.$blog->image)}}&description={{ $blog->title }}" class="social_icon_links" target="_blank"><i class="bi bi-pinterest"></i></a>
            </div>

      </div>
      <div id="footer">
      @include('user.includes.footer')

      </div>
    </div>
    <div class="toToBottom_btn_box" id="scrollToTop" title="Go to top" onclick="topFunction()">
        <i class="bi bi-chevron-up"></i>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <!-- <script src="{{asset('js/script.js')}}"></script> -->
    <!-- <script>
      $(function () {
        $("#header").load("careerCounsellingHeader.html");
        $("#footer").load("footer.html");
      });
    </script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- Include Bootstrap Timepicker JS -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js" integrity="sha512-2xXe2z/uA+2SyT/sTSt9Uq4jDKsT0lV4evd3eoE/oxKih8DSAsOF6LUb+ncafMJPAimWAXdu9W+yMXGrCVOzQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
  <script src="{{asset('toaster/toastr.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $('#picker').datepicker({
            minDate: 1,
            dateFormat: 'dd/mm/yy'
        });

        $('#timepicker').timepicker({
        minTime: '10:00am',
        maxTime: '06:00pm',
        step: 15, // 15 minutes
        disableTimeRanges: [
            ['12:00am', '09:15am'],
            ['06:15pm', '11:45pm']
        ],
        // showDuration: true
        });
  </script>
    {!! Toastr::message() !!}

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

        function loginAlert(){
            //Swal.fire('Need to login!');
            Swal.fire({
            title: 'Need to login!',
            showCancelButton: true,
            confirmButtonText: 'Go to Login Page',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                localStorage.setItem("display", "signIn");
                window.location.href = "<?=url('/login-signup')?>?redirectURL=<?=url()->current()?>";
            }
            })
        }

        function likeBlog(id){
            $.ajax({
                type : 'GET',
                url: "<?=url('/blogLike')?>/" +id,
                success : function(data){
                    console.log(data);
                    $("#likeBlogCount").html(data.countLike);
                    $("#dislikeBlogCount").html(data.countDislike);
                },error: function(data){

                },
            })
        }
        function dislikeBlog(id){
            $.ajax({
                type : 'GET',
                url: "<?=url('/blogDislike')?>/" +id,
                success : function(data){
                    console.log(data);
                    $("#likeBlogCount").html(data.countLike);
                    $("#dislikeBlogCount").html(data.countDislike);

                },error: function(data){

                },
            })
        }
    </script>
  </body>
</html>
