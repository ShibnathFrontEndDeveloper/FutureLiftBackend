<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.favicon')

    <title>Future Lift</title>
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

      <section class="policy_part" id="about">
          <div class="container">
            <div class="row">
                <div class="col-12 top_head_box">
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_ZygRYHjKiC.json"  background="transparent"  speed="1" loop  autoplay class="animi_policy"></lottie-player>
                    <h1 class="policy_heading">terms and <span>conditions</span></h1>
                    <p class="text-light text-center">Welcome to www.futurelift.in!</p>
                </div>
            </div>
          </div>
      </section>
      <div class="nav_tab_bar">
        <div class="container">
          <div class="nav_box p-3">
            <a href="#lisence" class="navLink_tab">Lisence</a>
          <a href="#content" class="navLink_tab">Content</a>
          <a href="#iframe" class="navLink_tab">Iframes</a>
          <a href="#content_Liability" class="navLink_tab">Content Liability</a>
          <a href="#reservation" class="navLink_tab">Reservation of Rights</a>
          <a href="#removal" class="navLink_tab">Removal</a>
          <a href="#disclaimer" class="navLink_tab">Disclaimer</a>
        </div>
        </div>
      </div>
      <div class="container mt-5">
            <p class="mb-5">These terms and conditions outline the rules and regulations for the use of Future Lift's Website, located at https;//futurelift.in/.
                By accessing this website we assume you accept these terms and conditions. Do not continue to use www.futurelift.in if you do not agree to take all of the terms and conditions stated on this page.
                The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of in. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.
            </p>
            <div class="terms_content_box"  id="lisence">
              <h6>License</h6>
              <p>
                Unless otherwise stated, Future Lift and/or its licensors own the intellectual property rights for all material on www.futurelift.in. All intellectual property rights are reserved. You may access this from www.futurelift.in for your own personal use subjected to restrictions set in these terms and conditions.
                  You must not:<br>
                  •	Republish material from <a href="https://futurelift.in/">www.futurelift.in</a><br>
                  •	Sell, rent or sub-license material from <a href="https://futurelift.in/">www.futurelift.in</a><br>
                  •	Reproduce, duplicate or copy material from <a href="https://futurelift.in/">www.futurelift.in</a><br>
                  •	Redistribute content from <a href="https://futurelift.in/">www.futurelift.in</a>
                  Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Future Lift does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Future Lift,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Future Lift shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.
                  Future Lift reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
                  You warrant and represent that:<br>
                  •	You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;<br>
                  •	The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;<br>
                  •	The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy<br>
                  •	The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.
                  You hereby grant Future Lift a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.
              </p>
            </div>
            <div class="terms_content_box mt-3" id="content">
              <h6>Hyperlinking to our Content</h6>
              <p >
                The following organizations may link to our Website without prior written approval:<br>
                •	Government agencies;<br>
                •	Search engines;<br>
                •	News organizations;<br>
                •	Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and<br>
                •	System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.<br>
                These organizations may link to our home page, to publications or to other Website information so long as the link:<br> (a) is not in any way deceptive;<br> (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and<br> (c) fits within the context of the linking party's site.
                We may consider and approve other link requests from the following types of organizations:<br>
                •	commonly-known consumer and/or business information sources;<br>
                •	dot.com community sites;<br>
                •	associations or other groups representing charities;<br>
                •	online directory distributors;<br>
                •	internet portals;<br>
                •	accounting, law and consulting firms; and<br>
                •	educational institutions and trade associations.
                We will approve link requests from these organizations if we decide that:<br> (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; <br>(b) the organization does not have any negative records with us;<br> (c) the benefit to us from the visibility of the hyperlink compensates the absence of Future Lift; and<br> (d) the link is in the context of general resource information.<br>
                These organizations may link to our home page so long as the link:<br> (a) is not in any way deceptive; <br>(b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and <br>(c) fits within the context of the linking party's site.
                If you are one of the organizations listed in paragraph<br> 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Future Lift. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.
                Approved organizations may hyperlink to our Website as follows:<br>
                •	By use of our corporate name; or<br>
                •	By use of the uniform resource locator being linked to; or<br>
                •	By use of any other description of our Website being linked to that <br>makes sense within the context and format of content on the linking party's site.<br>
                No use of Future Lift's logo or other artwork will be allowed for linking absent a trademark license agreement.

              </p>
            </div>
            <div class="terms_content_box mt-3" id="iframe">
              <h6>Iframes</h6>
              <p >
              Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.

              </p>
            </div>
            <div class="terms_content_box mt-3" id="content_Liability">
              <h6>Content Liability</h6>
              <p >We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
            </div>
            <div class="terms_content_box mt-3" id="reservation">
              <h6>Reservation of Rights</h6>
              <p > We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it's linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
            </div>
            <div class="terms_content_box mt-3" id="removal">
              <h6>Removal of links from our website</h6>
              <p >If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.
                We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.
              </p>
            </div>
            <div class="terms_content_box mt-3 mb-5" id="disclaimer">
              <h6>Disclaimer</h6>
              <p >
                To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:<br>
                •	limit or exclude our or your liability for death or personal injury;<br>
                •	limit or exclude our or your liability for fraud or fraudulent misrepresentation;<br>
                •	limit any of our or your liabilities in any way that is not permitted under applicable law; or<br>
                •	exclude any of our or your liabilities that may not be excluded under applicable law.<br>
                The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: <br>(a) are subject to the preceding paragraph; and <br>(b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.
                As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.

              </p>
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
