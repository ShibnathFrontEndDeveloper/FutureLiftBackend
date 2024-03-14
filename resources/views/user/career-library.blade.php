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
            <div class="library_home">
                <!-- <div class="libry_banner">
                    <img src="{{asset('assets/images/7333316.png')}}" alt="" class="img-fluid">
                </div> -->
                <!-- <div class="headi_search">
                    <h5>future lift career library</h5>
                    <input type="search" class="form-control">
                </div> -->
            </div>
            <div class="container">
                <div class="features_pannel">

                    <div class="featureTabBox">
                        <i class="bi bi-list" id="careerMenuList"></i>
                        <div class="elimeni_box">
                          <div class="nav flex-column nav-pills me-3 p" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link active" id="tab-key-all-career-data" data-bs-toggle="pill" data-bs-target="#tab-key-all-career-data" type="button" role="tab" aria-controls="tab-key-all-career-data" aria-selected="true" onclick="getData('all-career-data',0)">All Careers</button>
                              @foreach ($category as $categoryKey => $categoryValue)
                                  <button class="nav-link" id="tab-key-{{$categoryKey}}" data-bs-toggle="pill" data-bs-target="#tab-key-{{$categoryKey}}" type="button" role="tab" aria-controls="tab-key-{{$categoryKey}}" aria-selected="false" onclick="getData('{{$categoryKey}}','{{$categoryValue->id}}')">{{$categoryValue->name}}</button>
                              @endforeach

                          </div>
                          <div id="blankdiv"></div>
                          <div class="bestForYou d-none d-lg-block">
                              <h5>Know what is best for you!</h5>
                              <p>Take world class Assessment test</p>
                              <form action="">
                                  <input type="text" placeholder="Your mail address" class="form-control">
                                  <button type="submit">Take a free demo</button>
                              </form>
                          </div>

                        </div>

                        <div class="tab-content" id="v-pills-tabContent">

                        </div>
                    </div>

                    <div class="bestForYou d-lg-none d-sm-block p-3 border">
                        <h5>Know what is best for you!</h5>
                        <p>Take world class Assessment test</p>
                        <form action="">
                            <input type="text" placeholder="Your mail address" class="form-control">
                            <button type="submit">Take a free demo</button>
                        </form>
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

        function getData(key,categoryId){
                $("#ftco-loader").show();
                $.ajax({
                    type : 'GET',
                    url: "<?=url('/get-library-data')?>/"+key+"/"+categoryId,
                    success : function(data){
                        $("#v-pills-tabContent").html(data);
                        $("#ftco-loader").hide();
                    },error: function(data){
                        $("#ftco-loader").hide();
                    },
                })
        }

        getData('all-career-data',0);
    </script>
    <script>
     // Get the navbar
        // const navbar = document.getElementById("v-pills-tab");

        // Get the offset position of the navbar
        // const sticky = navbar.offsetTop;
        // console.log(navbar.offsetTop);

        // Add the sticky class to the navbar when you reach its scroll position. Remove the sticky class when you leave the scroll position.
        // function myFunction() {
        //   if (window.pageYOffset >= sticky) {
        //     navbar.classList.add("sticky")
        //   } else {
        //     navbar.classList.remove("sticky");
        //   }
        // }

        // let tabNav = document.getElementById('v-pills-tab');
        // let sticky = tabNav.offsetTop;
        // window.onscroll = function navFun(){
        //   // console.log();
        //   if(window.pageYOffest>=sticky){
        //     tabNav.classList.add('sticky');
        //   }else{
        //     tabNav.classList.remove('sticky');
        //   }
        // }
        var scrollPosition = $('#blankdiv').offset().top;
         $(window). scroll(function(){
             if ($(this).scrollTop() > 200 && $(this).scrollTop() < scrollPosition) {
                 $('.elimeni_box').addClass('newClass');
                 $('.feature_box').addClass('newTab');
            }else{
               $('.elimeni_box').removeClass('newClass');
                 $('.feature_box').removeClass('newTab');
           }
        });

        // $(window).scroll(function(){
        //     if ($(this).scrollTop() > 150 && $(this).scrollTop() < scrollPosition) {
        //         $('.elimeni_box').addClass('newClass');
        //         $('.feature_box').addClass('newTab');
        //     }else{
        //           $('.elimeni_box').removeClass('newClass');
        //           $('.feature_box').removeClass('newTab');

        //     }
        // });
    </script>


  </body>
</html>
