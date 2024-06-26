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
              <div class="col-lg-7 col-md-7">
                <div class="blog_single_text">
                  <h1>welcome to <span class="name">future</span> <span class="title">lift</span> <span class="page_name">blog</span></h1>
                  <p>India's largest career counselling brand</p>
                  <div class="text-left">
                    <a href="{{url('/about')}}">about us</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 personalityBannerImg blog_banner_img">
                  <img src="{{asset('assets/images/blog_banner_new.png')}}" alt="" class="img-fluid desktop_img">

              </div>
              <div class="blog_banner_img">
              <img src="{{asset('assets/images/blog_banner.png')}}" alt="" class="img-fluid mobile_img">
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Articles start -->
        <div class="container p-5">
            <div class="row g-3">
              <div class="col-lg-4 last_blog_box">
              <h4>Search Results For: <span class="search-data-text">{{request()->get('search')}}</span></h4>
              </div>
            </div>

            <!-- blog left -->
            <div class="row mt-5">
              <div class="col-lg-9 col-md-12 main_blog" >
                <h2 class="blog_heading">All Articles</h2>

                @foreach ($allBlog as $allBlogKey => $allBlogValue)
                <div class="blog_article_box mb-3 pb-3">
                  <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6">
                      <a href="{{url('/blog-details/'.$allBlogValue->slug)}}" class="all_article_img"><img src="{{asset('assets/blog_images/'.$allBlogValue->image)}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="article_text_box">
                        <div class="article_header">
                          <a href="{{url('/blog/blog-category/'.App\Helpers::getBlogCategoryIdBySlug($allBlogValue->categoryId))}}">{{App\Helpers::getBlogCategoryIdByName($allBlogValue->categoryId)}}</a>
                        </div>
                        <div class="artical_caption">
                          <a href="{{url('/blog-details/'.$allBlogValue->slug)}}">
                            <h1>{{$allBlogValue->title}}</h1>
                          </a>
                        </div>
                        <div class="article_release">
                            @php
                                $userDetailsAllBlog = App\Helpers::getUserDetails($allBlogValue->userId);
                            @endphp
                            <p>{{$userDetailsAllBlog->name}} <span>{{date('jS F Y',strtotime($allBlogValue->created_at))}}</span></p>
                        </div>
                        <div class="article_para">
                          <p>{{Str::words(strip_tags($allBlogValue->content), 50, ' ...')}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <div id="main_blogGrid">

                </div>
                <div class="d-flex justify-content-center blog-search-pagination">{!! $allBlog->withQueryString()->links() !!}</div>
              </div>
              <!-- blog left end -->

              <!-- blog right start -->
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
                            <a href="{{url('/blog-details/'.$latestBlogValue->slug)}}" class="all_article_img">
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
          </div>
          <!-- Blog Articles End -->

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
        var pageNumber = 2;
        function loadMoreData(){
            $.ajax({
                type : 'GET',
                url: "<?=url('/blog?page=')?>" +pageNumber,
                success : function(data){
                    console.log(data.html);
                    pageNumber +=1;
                        if(data.length == 0){
                            $("#notFoundData").show();
                        }else{
                            if(data.html == ""){
                                $("#notFoundData").show();
                            }else{
                                $('#main_blogGrid').append(data.html);
                                $("#notFoundData").hide();
                            }
                        }
                },error: function(data){

                },
            })
    }
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </body>
</html>
