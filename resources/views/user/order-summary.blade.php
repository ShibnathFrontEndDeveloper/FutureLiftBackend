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



     <section class="order_summary" id="summary_order">
      <div class="container">
        <div class="coupon_animation">
          <video loop muted autoplay src="{{asset('assets/images/coupon.mp4')}}" width="320" height="240"></video>
        </div>
        <div class="main_product_details">
          <div class="details_summary">
            <div class="product_Caption">
              <h3>Product</h3>
            </div>
            <div class="product_name">
              <h1>Future Lift Advance</h1>
              <p>Including All Facility</p>
            </div>
          </div>
          <div class="details_summary">
            <div class="product_Caption">
              <h3>Package Validity</h3>
            </div>
            <div class="product_name">
              <button class="btn product_btn">365 Days/1 Year</button>
            </div>
          </div>
          <div class="details_summary">
            <div class="product_Caption">
              <h3>Price</h3>
            </div>
            <div class="product_name">
              <h1><i class="bi bi-currency-rupee"></i>13,449</h1>
              <span><i class="bi bi-currency-rupee"></i>15,449</span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-8 orderDetails">
            <button class="btn coupon_Btn" >Submit your coupon code</button>
            <div class="coupone_code_box">
              <form action="" class="coupon_past_box">
                <input type="mail" class="form-control" required placeholder="Your coupon code">
                <button type="sumit" class="btn coupon_Btn coupon_sendBtn">Apply</button>
              </form>
            </div>
            <div class="coupon_note">
              <p><span>Note:</span>Your code will be diapere after 30 days</p>
            </div>
          </div>
          <div class="col-md-4 orderPrice">
            <div class="card" style="width: 23rem;">
              <ul class="list-group list-group-flush price_list">
                <li class="list-group-item">Subtotal: <span><i class="bi bi-currency-rupee"></i>15,449</span></li>
                <li class="list-group-item">Coupon Discount: <span class="text-success"><i class="bi bi-currency-rupee"></i>2,000</span></li>
                <li class="list-group-item">Net Amount: <span><i class="bi bi-currency-rupee"></i>13,449</span></li>
              </ul>
              <div class="card-footer">
              Total Amount <span><i class="bi bi-currency-rupee"></i>13,449</span>
              </div>
            </div>
            <div class="paymnt_btnBox mt-5 text-right">
              <button class="btn paymnt_btn">Continue</button>
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
