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
            <form action="{{url('/user/subscription-submit')}}" method="get">
                @csrf
                <input type="hidden" name="subId" id="subId" value="{{$getCoun->id}}">
                <input type="hidden" name="productPrice" id="productPrice" value="{{$getCoun->plan_price}}">
                <input type="hidden" name="couponId" id="couponId" value="">
                <input type="hidden" name="couponAmount" id="couponAmount" value="">
                <input type="hidden" name="productAllTotalPrice" id="productAllTotalPrice" value="{{$getCoun->plan_price}}">
                <div class="container">
                    <h1 class="mt-5 mb-3 text-center">Use your coupon</h1>
                    <div class="main_product_details">
                        <div class="details_summary">
                            <div class="product_Caption">
                                <h3>Product</h3>
                            </div>
                            <div class="product_name">
                                <h1>{{$getCoun->plan_name}}</h1>
                                <p>Including All Facility</p>
                            </div>
                        </div>
                        
                        <div class="details_summary">
                            <div class="product_Caption">
                                <h3>Price</h3>
                            </div>
                            <div class="product_name">
                                <h1><i class="bi bi-currency-rupee"></i>{{$getCoun->plan_price}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 orderDetails">
                            <!-- <button class="btn coupon_Btn" >Submit your coupon code</button> -->
                            <div class="coupone_code_box">
                                <div class="coupon_past_box">
                                    <input type="text" class="form-control" value="" name="coupon_code_applied" id="coupon_code_applied" placeholder="Enter Your Coupon Code">
                                    <button type="button" class="btn coupon_Btn coupon_sendBtn" onclick="applyCoupon();">Apply</button>
                                </div>
                            </div>
                            <div class="coupon_note">
                                <p id="coupon_note"></p>
                            </div>
                        </div>
                        <div class="col-md-4 orderPrice">
                            <div class="card" style="width: 23rem;">
                                <ul class="list-group list-group-flush price_list">
                                    <li class="list-group-item">Subtotal: <span><i class="bi bi-currency-rupee"></i><span id="subtotalAttr">{{$getCoun->plan_price}}</span></span></li>
                                    <li class="list-group-item">Coupon Discount: <span class="text-success"><i class="bi bi-currency-rupee"></i><span id="cDiscountAttr">0</span></span></li>
                                    <li class="list-group-item">Net Amount: <span><i class="bi bi-currency-rupee"></i><span id="netAmountAttr">{{$getCoun->plan_price}}</span></span></li>
                                </ul>
                                <div class="card-footer">
                                    Total Amount <span><i class="bi bi-currency-rupee"></i><span id="totalAmountAttr">{{$getCoun->plan_price}}</span></span>
                                </div>
                            </div>
                            <div class="paymnt_btnBox mt-5 text-right">
                                <button class="btn paymnt_btn">Continue to Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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



      });
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

        function applyCoupon(){
            let couponCode = $("#coupon_code_applied").val();
            let productPrice = $("#productPrice").val();
            if(couponCode !=''){
                $("#ftco-loader").show();
                let data = {
                    couponCode:couponCode,
                    productPrice:productPrice,
                    _token:'<?=csrf_token()?>'
                };
                $.ajax({
                    type : 'POST',
                    url: "<?=url('/coupon-request')?>",
                    data:data,
                    success : function(res){
                        let result  = JSON.parse(res);
                        if(result.status){
                            $("#cDiscountAttr").html('- '+result.data.discountAmount);
                            $("#netAmountAttr").html(result.data.totalAmount);
                            $("#totalAmountAttr").html(result.data.totalAmount);

                            $("#couponId").val(result.data.couponId);
                            $("#couponAmount").val(result.data.discountAmount);
                            $("#productAllTotalPrice").val(result.data.totalAmount);

                            $("#coupon_note").html('<span>Note:</span>'+result.message);
                            toastr.success("Coupon Applied Successfully", 'Success');
                        }else{
                            $("#cDiscountAttr").html(0);
                            $("#netAmountAttr").html(productPrice);
                            $("#totalAmountAttr").html(productPrice);

                            $("#couponId").val("");
                            $("#couponAmount").val("");
                            $("#productAllTotalPrice").val(productPrice);

                            $("#coupon_note").html('');
                            toastr.error(result.message, 'Error');
                        }
                        $("#ftco-loader").hide();
                    },error: function(res){
                        $("#cDiscountAttr").html(0);
                        $("#netAmountAttr").html(productPrice);
                        $("#totalAmountAttr").html(productPrice);

                        $("#couponId").val("");
                        $("#couponAmount").val("");
                        $("#productAllTotalPrice").val(productPrice);

                        $("#coupon_note").html('');
                        $("#ftco-loader").hide();
                        console.log(res);
                    },
                })
            }else{
                toastr.warning('Please enter valid coupon code!', 'Warning');
            }
        }
    </script>
  </body>
</html>
