

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->


<section id="intro">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-7">
              <h2>Welcome to <br>Plus Afrik</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sapien leo, consequat sed aliquam at, convallis sit amet metus. Vivamus malesuada, ex in placerat bibendum, est dui euismod sapien, eget tincidunt nunc ipsum ut mauris.</p>
              <div class="dual-btns">
                <a href="#">Purchase Now</a>
                <a href="#">Learn More</a>
              </div>
            </div>
            <div class="col-md-5 sub-form">
              <div id="sub-form">
                <form class="subscribe" action="php/subscribe.php" id="invite" method="POST">
                  <h4>Sign Up For Free</h4>
                  <h5>100% Moneyback Guarantee</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="fname" id="fname" class="fname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="lname" id="lname" class="lname" placeholder="Last Name">
                    </div>
                  </div>
                  <input type="email" class="e-mail" placeholder="Email Address" name="email" id="address" data-validate="validate(required, email)">
                  <input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" required=""><label for="checkboxG1" class="css-label"><span>By clicking here, i agree to the <a class="term-popup" href="#">terms and conditions</a> of this lorem ipsum app</span></label>
                  <div class="clearfix"></div>
                  <div class="space40"></div>
                  <button type="submit" class="btn-main btn-center">Get the free Trial</button>
                </form>
              </div>
              <span id="result"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>

/*------------------------------------------------------------------
Theme Name: Sleek - Responsive Bootstrap Landing Page
Version:  1.0
Author: Dilipkumar
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
[TABLE OF CONTENTS]

  1. GLOBAL STYLES
    1.1. Theme Extras
  2. HEADER
  3. INTRO STYLES
    3.1. Intro / 1
    3.2. Intro / 2
    3.3. Intro / 3
    3.4. Intro / 4
    3.5. Intro / 5
    3.6. Intro / 6
    3.7. Intro / 7
    3.8. Intro / Extras
  4. TERMS / POPUP
  5. SERVICES
  6. FEATURES
  7. INFO BOXES
  8. INFO BOXES / DUAL
  9. SCREENSHOTS
  10. ABOUT / INFO CONTENT
  11. TESTIMONIALS
  12. PRICING TABLE
  13. SERVICES / 2
  14. FAQ SECTION
  15. CLIENTS
  16. WRAP CONTENT
  17. GOOGLE MAP
  18. FOOTER
  19. FOOTER / COPYRIGHT
  20. MODAL / VIDEO
  21. RESPONSIVE STYLES

-------------------------------------------------------------------*/

/* 1. GLOBAL STYLES */

body {
  overflow-x: hidden;
  font-family: Open Sans,Helvetica Neue,Helvetica,Arial,sans-serif;
  color: #222222;
}

.body {
  position: relative;
  width: 100%;
  overflow: hidden;
}

p {
  font-size: 15px;
  color: #898989;
  font-weight: 400;
  font-family: Open Sans,Helvetica Neue,Helvetica,Arial,sans-serif;
}

a,
a:hover {
  outline: 0;
  color: #3498DB;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  text-decoration: none;
}

a
a:hover,
a:focus,
a:active,
a.active {
  outline: 0;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: Josefin Sans,Helvetica Neue,Helvetica,Arial,sans-serif;
  font-weight: 400;
  color: #222222;
}

.img-centered {
  margin: 0 auto;
}

ul {
  padding: 0;
  margin: 0;
}

ul li {
  list-style: none;
  margin: 0;
}

button,
button:hover {
  transition: 0.3s;
  -webkit-transition: 0.3s;
}

.space10 {  margin-bottom: 10px;}
.space20 {  margin-bottom: 20px;}
.space30 {  margin-bottom: 30px;}
.space40 {  margin-bottom: 40px;}
.space50 {  margin-bottom: 50px;}
.space60 {  margin-bottom: 60px;}
.space70 {  margin-bottom: 70px;}
.space80 {  margin-bottom: 80px;}
.space90 {  margin-bottom: 90px;}

/* 1.1. Theme Extras */

.btn-main {
  background: #3498DB;
  color: #fff;
  border-radius: 5px;
  border: none;
  line-height: 45px;
  padding: 0 24px;
  text-transform: none;
  letter-spacing: 0.3px;
  font-size: 14px;
  font-weight: 600;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  margin: 0 auto;
  display: table;
}

.btn-main:hover {
  background: #111;
  color: #Fff;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

.btn-white {
  background: #fff;
  color: #3498DB;
}

.btn-left {
  margin: 0;
}

input:focus, textarea:focus {
  outline:0;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox].css-checkbox {
  position: absolute;
  z-index: -1000;
  top: -1000px;
  overflow: hidden;
  clip: rect(0 0 0 0);
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  top: 2px;
}

input[type=checkbox].css-checkbox + label.css-label {
  padding-left: 30px;
  height: 22px;
  display: inline-block;
  line-height: 22px;
  background-repeat: no-repeat;
  background-position: 0 0;
  font-size: 13px;
  vertical-align: middle;
  cursor: pointer;
  font-weight: 400;
  color: #aaa;
  margin-top: 5px;
}

input[type=checkbox].css-checkbox:checked + label.css-label {
  background-position: 0 -22px;
}

label.css-label {
  background-image: url(../images/cbox.png);
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

input[type=checkbox].css-checkbox + label.css-label span {
  position: relative;
  top: -4px;
}

.dual-btns {
  background: rgba(0,0,0,0.1);
  padding: 6px 1px;
  border-radius: 5px;
  display: table;
}

.dual-btns a {
  float: left;
}

.flexslider .slides img {
  width: 100%;
  max-width: 100%;
  display: block;
}

.content-head {
  text-align: center;
  margin: 0 0 70px;
}

.content-head h3 {
  font-size: 40px;
  font-weight: 300;
  text-transform: uppercase;
}

.content-head p {
  font-size: 17px;
  font-weight: 300;
  padding: 0 25%;
}

.content-head-lite h3 {
  color: #fff;
  font-weight: 400;
}

/* 2. HEADER */

header {
  background:transparent;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 999;
  padding: 20px 0px;
  transition: 0.3s;
  -webkit-transition: 0.3s;
}

.navbar {
  text-transform: uppercase;
  background: transparent;
  margin: 0;
  border-radius: 0px;
  border: none;
  padding: 5px 0;
  position: relative;
  top: 0;
  left: 0;
  right: 0;
}

.navbar a:focus ,
.navbar .navbar-nav li a:focus {
  outline: 0;
  color: #fff;
}

.navbar-default,
.navbar-inverse {
  border: 0;
}

.navbar-brand {
  color: #FFF !important;
  text-transform: none;
  margin: 0px;
  font-size: 37px;
  padding: 20px 0px 0px;
  font-family: Vampiro One;
  font-weight: 400;
}

.nav > li {
  position: relative;
  display: block;
  font-weight: 400;
  font-size: 11px;
  letter-spacing: 1px;
  margin: 14px 5px 0;
}

.nav > li > a {
  position: relative;
  display: block;
  padding: 7px 15px;
  color: #FFF !important;
  font-size: 11px;
  font-weight: 400;
  border-radius: 5px;
  border: 1px solid transparent !important;
}

.nav > li > a:hover ,
.nav > li.active > a {
  color: #3498db !important;
  border-color: #fff !important;
  background: #FFF !important;
}

.nav li:last-child a {
  border: 1px solid #fff !important;
}

.nav > li:last-child > a:hover {
  color: #fff !important;
  border-color: #3498db !important;
  background: #3498db !important;
}

.navbar-right {
    float: right !important;
    margin-right: -30px;
}

/* 3. INTRO STYLES */

/* 3.1. Intro / 1 */

#intro {
  padding: 227px 0 132px;
  position: relative;
  background: #000 url(https://i.ytimg.com/vi/PXyOlxiU5Kk/maxresdefault.jpg) no-repeat top right fixed;
  background-size: 100% auto;
  overflow: hidden;
}

#intro h2 {
  color: #fff;
  font-size: 70px;
  font-weight: 400;
  margin: 25px 0 25px;
  line-height: 75px;
}

#intro p {
  color: #fff;
  font-size: 16px;
  font-weight: 300;
  margin: 0 0 40px;
  padding-right: 25%;
  line-height: 25px;
}

#sub-form {
  position: relative;
  overflow: hidden;
}

.sub-form h4 {
  color: #111;
  font-size: 25px;
  margin: 0 0 15px;
  font-weight: 300;
  position: relative;
  overflow: hidden;
  text-align: center;
}

.sub-form .row {
  margin: 0;
}

.sub-form .col-md-6 {
  padding: 0;
}

.sub-form h5 {
  display: table;
  color: rgb(121, 121, 121);
  letter-spacing: 0px;
  text-align: center;
  padding: 0px;
  width: 130%;
  text-transform: capitalize;
  font-weight: 300;
  font-size: 25px;
  margin: 8px 0px 24px;
  background: #3498db;
  color: #fff;
  padding: 15px 10px;
  margin-left: -15%;
}

.sub-form {
  padding-left: 60px;
  border-right: none;
}

.sub-form form {
  padding: 40px 30px 30px;
  background: #fff;
  border-radius: 5px;
  border-top: 5px solid #feb806;
  position: relative;
}

.sub-form form:before {
  content: "";
  height: 5px;
  width: 33%;
  background: #9ac430;
  position: absolute;
  top: -5px;
  left: 0;
  border-radius: 5px 0 0 0;
}

.sub-form form:after {
  content: "";
  height: 5px;
  width: 33%;
  background: #fe5d05;
  position: absolute;
  top: -5px;
  right: 0;
  border-radius: 0 5px 0 0;
}

.sub-form form input {
  border: 1px solid #e4e4e4;
  background: transparent;
  height: 50px;
  padding: 10px 15px;
  color: #000;
  width: 100%;
  font-size: 14px;
}

.fname {
  margin-bottom: 0;
  border-radius: 5px 0 0 0;
  border-right: none !important;
}

.lname {
  margin-bottom: 0;
  border-radius: 0 5px 0 0;
}

.e-mail {
  margin-bottom: 15px;
  border-radius: 0 0 5px 5px;
  border-top: none !important;
}

/* 3.2. Intro / 2 */

#intro.intro2 {
  padding: 280px 0 230px;
  position: relative;
  background: #000 url(../images/bg/2.jpg) no-repeat top center fixed;
  background-size: 100% auto;
  overflow: hidden;
}

#intro.intro2 h2,
#intro.intro2 p {
  text-align: center;
  padding: 0 10%;
}

#intro.intro2 .dual-btns {
  margin: 0 auto;
  display: table;
}

/* 3.3. Intro / 3 */

#intro.intro3 {
  padding: 170px 0 0px;
  position: relative;
  background: #000 url(../images/bg/3.jpg) no-repeat top left;
  background-size: 125% auto;
  overflow: hidden;
}

#intro.intro3 #main-slider {
  float: right;
  margin-bottom: -100px;
}

#intro.intro3 .col-md-8 {
  width: 62%;
}

#intro.intro3 .col-md-4 {
  width: 38%;
}

#intro.intro3 h2 {
  margin: 140px 0px 25px;
  font-size: 65px;
  line-height: 70px;
  font-weight: 500;
}

#intro.intro3 h6 {
  color: #fff;
  font-family: Open Sans;
  font-size: 13px;
  margin: 20px 0 60px;
}

#intro.intro3 h6 a {
  color: #fff;
  border-bottom: 1px dotted #fff;
}

#intro.intro3 h6 a:hover {
  color:#3498DB;
}

/* 3.4. Intro / 4 */

#intro.intro4 {
  padding: 180px 0 0;
  position: relative;
  background: #000 url(../images/bg/4.jpg) no-repeat top right fixed;
  background-size: 100% auto;
  overflow: hidden;
}

#intro.intro4 h2,
#intro.intro4 p {
  text-align: center;
  padding: 0 10%;
}

#intro.intro4 .dual-btns {
  margin: 0 auto;
  display: table;
}

/* 3.5. Intro / 5 */

#intro.intro5 {
  padding: 150px 0 0;
  position: relative;
  background: #000 url(../images/bg/5.jpg) no-repeat top right fixed;
  background-size: 100% auto;
  overflow: hidden;
}

#intro.intro5 h2,
#intro.intro5 p {
  text-align: center;
  padding: 0 10%;
}

#intro.intro5 .dual-btns {
  margin: 0 auto 40px;
  display: table;
}

.play-btn {
  border: 10px solid #FFF;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  line-height: 98px;
  display: block;
  text-align: center;
  color: #FFF;
  font-size: 47px;
  position: absolute;
  left: 0px;
  right: 0px;
  margin: -60px auto 0px;
  top: 50%;
  transition: 0.5s;
  -webkit-transition: 0.5s;
  box-shadow: 0px -2px 15px rgba(0,0,0,0.5);
  -webkit-box-shadow: 0px -2px 15px rgba(0,0,0,0.5);
  text-shadow: 0 2px 15px rgba(0,0,0,0.5);
}

.play-btn:hover {
  color:#fff;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  -webkit-transform: scale(1.15);
  -ms-transform: scale(1.15);
  transform: scale(1.15);
}

/* 3.6. Intro / 6 */

#intro.intro6 {
  padding: 240px 0 175px;
  background: #000 url(../images/bg/6.jpg) no-repeat center center fixed;
}

#intro.intro6 h2 {
  margin: 13px 0px 25px;
}

/* 3.7. Intro / 7 */

#intro.intro7 {
  padding: 270px 0 240px;
  background: #000 url(../images/bg/7.jpg) no-repeat center top fixed;
  position: relative;
  background-size: 100% auto;
  overflow: hidden;
}

#intro.intro7 h2,
#intro.intro7 p {
  text-align: center;
  padding: 0 10%;
}

.intro-newsletter {
  background: rgba(0,0,0,0.1);
  padding: 8px;
  border-radius: 5px;
  width: 536px;
  margin: 0 auto;
  display: table;
  position:relative;
}

.intro-newsletter input {
  width: 400px;
  height: 50px;
  border: none;
  background: #fff;
  border-radius: 5px;
  padding: 5px 20px;
  font-size: 13px;
  float: left;
  margin:0;
}

.intro-newsletter button {
  background: #3498DB;
  line-height: 50px;
  color: #FFF;
  padding: 0px 30px;
  border-radius: 5px;
  border: none;
  font-size: 13px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0.3px;
  width: 110px;
  margin-left: 10px;
  float: left;
  font-size: 25px;
}

.intro-newsletter button:hover {
  background: #000;
  color: #FFF;
}

#result {
  text-align: center;
  position: absolute;
  top: 103%;
  left: 60px;
  right: 0px;
  display: block;
  margin: 0px auto;
  font-size: 11px;
  color: #fff !important;
  max-width: 100%;
  padding: 0px 12px;
}

#result a {
  color: #000 !important;
}

#result em {
  font-style:normal;
}

.intro-newsletter #result {
  left: 0px !important;
  top:106%;
}

/* 3.8. Intro / 8 */

#intro.intro8 {
  padding: 270px 0 240px;
  background: #000 url(../images/bg/8.jpg) no-repeat center top fixed;
  position: relative;
  background-size: 100% auto;
  overflow: hidden;
}

#intro.intro8 h2,
#intro.intro8 p {
  text-align: center;
  padding: 0 10%;
}

.countdown.styled {
  width:100%;
  max-width:850px;
  margin:-25px auto 0;
  padding:0 15px;
}

.countdown.styled div {
  width:25%;
  float:left;
  color:#fff;
  font-size:100px;
  font-weight:800;
  text-align:center;
}

.countdown.styled div span {
  display:block;
  font-size:16px;
  letter-spacing:5px;
  text-transform:uppercase;
  font-weight:700;
  background:rgba(0,0,0,0.3);
  display:table;
  margin:0 auto;
  padding:5px 10px;
  border-radius:5px;
}

/* 3.9. Intro / Extras */

.dual-btns {
  position: relative;
}

.dual-btns a {
  background: #3498DB;
  line-height: 50px;
  color: #FFF;
  padding: 0px 30px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 400;
  text-transform: none;
  letter-spacing: 0.3px;
  font-weight: 600;
  margin: 0 5px;
}

.dual-btns a:nth-child(2) {
  background:#2980b9;
  border-radius: 5px;
}

.dual-btns a:hover {
  background: #111 !important;
  color: #fff;
}

.app-btn {
  font-size: 15px;
  text-transform: none;
  font-weight: 400;
  line-height: 23px;
  padding: 10px 35px 17px;
  padding-left: 70px;
  position: relative;
  background: #3498db;
  color: #fff;
  display: table;
  border-radius: 5px;
  text-shadow: 0 3px 0 rgba(0,0,0,0.2);
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

.app-btn i {
  position: absolute;
  top: 11px;
  left: 35px;
  font-size: 50px;
}

.app-btn span {
  font-size: 26px;
  display: block;
  font-weight: 700;
}

.app-btn:hover {
  background: #111;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  color: #fff;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0.2;
}

.overlay-white {
  background: #fff;
  height: 20px;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}

.btn-single a {
  border-radius: 5px;
  padding: 0px 35px;
}

.btn-single a i {
  margin-left: 7px;
  font-size: 16px;
}

/* 4. TERMS / POPUP */

.term-popup {
  cursor: pointer;
}

.terms {
  position: fixed;
  z-index: -15;
  visibility: hidden;
  opacity: 0;
  transition: 0.5s;
  -webkit-transition: 0.5s;
  width: 90%;
  max-height: 90%;
  overflow: scroll;
  overflow-x: hidden;
  max-width: 1170px;
  height: auto;
  background: #FFF;
  top: 17%;
  left: 0;
  right: 0;
  margin: 0 auto;
  display: table-cell;
  vertical-align: middle;
  padding: 50px;
  box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
  -webkit-box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
}

.terms h3 {
  font-size: 30px;
  margin: 0 0 30px;
  border-bottom: 2px solid #e1e1e1;
  padding-bottom: 15px;
}

.terms ul li {
  list-style: decimal;
  margin-left: 15px;
  margin-bottom: 15px;
  font-size: 13px;
  line-height: 23px;
}

.t-close {
  position: absolute;
  right: 25px;
  top: 25px;
  font-size: 30px;
  opacity: 0.2;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  cursor: pointer;
}

.t-close:hover {
  opacity: 1;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

.terms-active {
  position: fixed;
  z-index: 9999999;
  visibility: visible;
  opacity: 1;
  transition: 0.5s;
  -webkit-transition: 0.5s;
}

.overlay-dark {
  background: #000;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  z-index: -20;
  transition: 0.5s;
  -webkit-transition: 0.5s;
}

.overlay-dark.active {
  z-index: 99999;
  visibility: visible;
  opacity: 0.5;
  transition: 0.5s;
  -webkit-transition: 0.5s;
}

/* 5. SERVICES */

#services {
  padding: 100px 0;
}

.service-content {
  cursor: pointer;
}

.service-content span {
  display: table;
  margin: 0px auto 25px;
  color: #3498db;
  text-align: center;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  position: relative;
  border: 2px solid #3498db;
  width: 100px;
  height: 100px;
  display: table;
  font-size: 35px;
  border-radius: 50%;
  padding-top: 22px;
}

.service-content:hover span {
  background: #3498db;
  color: #fff;
  transition: 0.3s;
  -webkit-transition: 0.3s;
}

.service-content:hover i {
  transition: 0.3s;
  -webkit-transition: 0.3s;
}

.service-content h4 {
  font-size: 17px;
  text-align: center;
  font-weight: 700;
  margin: 0px 0px 10px;
  text-transform: none;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

.service-content p {
  font-size: 14px;
  text-align: center;
  line-height: 22px;
  margin: 0 0 10px;
  color: #777;
  font-weight: 300;
  padding: 0 20px;
}

.service-content a {
  color: #3498DB;
  font-size: 14px;
  text-align: center;
  display: table;
  margin: 0 auto;
}

.service-content a i {
  font-size: 14px;
  margin-left: 5px;
}

.service-content a:hover {
  color: #000;
}

/* 6. FEATURES */

#features {
  background: #3498DB;
  padding: 75px 0 0;
}

.feature-content {
  margin-bottom: 40px;
}

.feature-content i {
  color: #fff;
  font-size: 25px;
  margin: 0 0 20px;
  float: left;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background: rgba(255,255,255,0.2);
  text-align: center;
  line-height: 70px;
}

.feature-content h4 {
  color: #fff;
  margin: 0 0 12px;
  margin-left: 95px;
  font-size: 22px;
  font-weight: 600;
}

.feature-content p {
  color: #fff;
  font-size: 13px;
  margin-left: 95px;
}

#features h3 {
  background: #fff;
  display: table;
  padding: 9px 15px;
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 700;
  margin: 150px 0 20px;
  color: #3498DB;
}

.app-info p {
  color: #fff;
  margin: 0 0 30px;
}

.app-btns a {
  color: #fff;
  font-size: 40px;
  margin-right: 25px;
}

.app-btns a:hover {
  color: #fff;
  opacity: 0.5;
}

/* 7. INFO BOXES */

.info-content {
  padding: 100px 0;
}

.ic-inner img {
  border-radius: 5px;
}

.ic-inner h4 {
  font-size: 23px;
  margin: 20px 0 15px;
  font-weight: 600;
}

.ic-inner p {
  font-size: 13px;
  line-height: 20px;
}

/* 8. INFO BOXES / DUAL */

.dual-info {
  background: #3498DB;
}

.dual-info .container {
  width: 100%;
  padding: 0;
}

.dual-info .col-md-6 {
  padding: 0;
}

.dual-info h4 {
  font-size: 70px;
  font-weight: 300;
  color: #fff;
  margin: 0 0 20px;
}

.dual-info p {
  font-size: 16px;
  font-weight: 300;
  color: #fff;
  margin: 0 0 30px;
  line-height: 25px;
}

.dual-info .col-md-9 {
  padding: 60px;
}

.dual-info ul li {
  color: #fff;
  padding-left: 40px;
  margin-bottom: 15px;
  font-weight: 300;
  position: relative;
}

.dual-info ul li i {
  font-size: 15px;
  position: absolute;
  top: 4px;
  left: 10px;
}

/* 9. SCREENSHOTS  */

.shots {
  padding: 100px 0;
}

.shots-slider {
  margin-top:-30px;
}

.slick-slide {
}

.shots-thumb {
  padding: 30px 0px 30px;
  margin: 0 15px;
}

.shots-slider .slick-slide img,
.shots-slider .slick-center img {
  border-radius: 3px;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

.shots-slider a:hover img {
  transition: 0.4s;
  -webkit-transition: 0.4s;
  -webkit-transform: scale(1.05,1.05);
  -ms-transform: scale(1.05,1.05);
  transform: scale(1.05,1.05);
  cursor: url('../images/plus.png'), url('../images/plus.png'), move;
}

.shots-thumb img {
  opacity: 1;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  cursor: pointer;
}

.shots-thumb img:hover {
  opacity: 0.6;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

.shots .col-md-12 {
  max-width: 90%;
  margin: 0 auto;
  float: none;
}

/* 10. ABOUT / INFO CONTENT  */

.wrap-content {
  background: #3498DB;
  padding: 100px 0;
}

.wrap-content h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 50px;
}

.wrap-content p {
  color: #fff;
  font-size: 14px;
  line-height: 22px;
}

.wrap-content1 {
  background: #fff !important;
  padding: 90px 0;
}

.wrap-content1 h2 {
  color: #000;
  margin-bottom: 30px;
  font-size: 50px;
}

.wrap-content1 p {
  color: #777;
  font-size: 14px;
  line-height: 22px;
}

/* 11. TESTIMONIALS */

.testimonials {
  background: #f1f1f1;
  padding: 75px 0 0;
}

.quote-info p {
  font-family: Josefin Sans;
  font-size: 60px;
  font-weight: 400;
  line-height: 59px;
  color: #555;
  padding: 0;
  padding-left: 65px;
  position: relative;
  margin-top: 120px;
}

.quote-info p:before {
  content: "\f10d";
  font-family: "FontAwesome";
  color: #3498DB;
  position: absolute;
  left: 0;
  top: -20px;
  font-size: 50px;
}

.quote-info cite {
  color: #000;
  font-size: 23px;
  font-style: normal;
  font-weight: 700;
  line-height: 30px;
  float: right;
  margin-top: 40px;
  text-transform: uppercase;
  padding-right: 60px;
}

.quote-info .cite-left {
  float: none;
  padding-left: 60px;
  padding-right: 0px;
  display: block;
}

.quote-info cite span {
  color: #3498DB;
  font-size: 16px;
  font-weight: 400;
  display: block;
  padding-left: 13px;
  text-transform: none;
}

#quote-slider .owl-controls {
  margin-top: 10px;
  text-align: center;
  position: absolute;
  bottom: 25px;
  display: block;
  margin: 0 auto;
  left: 0;
  right: 0;
}

/* 12. PRICING TABLE */

.pricing {
  padding: 80px 0 90px;
  background: #000;
}

.price {
  font-size: 70px;
  color: #fff;
}

.price-cents {
  vertical-align: super;
  font-size: 50%;
}

.list-group-item {
  color: #757575;
  font-size: 14px;
  border: none;
  border-bottom: 1px solid #e5e5e5;
  margin: 0px;
}

.list-group-item:last-child {
  border-bottom: none;
  padding-top: 20px;
}

.list-group .btn {
  background: #1abc9c !important;
  border-color: #0fa285;
}

.list-group .btn:hover {
  background: #0fa285 !important;
}

.panel-default {
  border: none;
  padding: 15px 0px;
}

.panel-body {
  font-family: Open sans;
  font-size: 13px;
  line-height: 23px;
  font-weight: 400;
  color: #fff;
  padding: 40px 0;
  background: #3498DB;
}

.panel-default > .panel-heading {
  text-transform: uppercase;
  padding: 6px 15px 18px;
}

.panel-default > .panel-heading span {
  top: -2px;
  position: relative;
}

.pricing .btn-main {
  line-height: 38px;
  padding: 0px 20px;
}

/* 13. SERVICES / 2 */

#services2 {
  background: #f1f1f1;
  padding: 100px 0 50px;
}

.sc2-inner {
  margin-left: 110px;
}

.sc2-inner h4 {
  font-weight: 600;
  font-size: 21px;
  margin: 5px 0 10px;
}

.sc2-inner p {
  margin: 0;
}

#services2 i {
  background: #3498DB;
  width: 75px;
  height: 75px;
  line-height: 75px;
  text-align: center;
  color: #FFF;
  font-size: 25px;
  float: left;
  border-radius: 50%;
}

#services2 .col-md-4 {
  margin-bottom: 50px;
}

#services2 .sc2-inner p {
  margin: 0px;
  font-size: 13px;
}

/* 14. FAQ SECTION */

.faq-content {
  padding: 80px 0 80px;
}

.faq-content .panel-title a {
  font-size: 18px;
  font-weight: 700;
  text-transform: none;
  padding: 15px;
  margin: 0px;
  background: #fff;
  display: table;
  width: 100%;
}

.faq-content .panel-title:hover {
  color: #3498DB;
}

.faq-content .panel-default {
  border-color: #e1e1e1;
  padding: 9px 0px;
  background: #fff;
}

.faq-content .panel-heading {
  border: 1px solid #e1e1e1;
  padding: 0;
  border-radius: 0;
  background: #fff;
  color: #000;
}

.faq-content .panel-default > .panel-heading + .panel-collapse > .panel-body {
  border: 1px solid #e1e1e1;
  border-top: none;
}

.faq-content .panel-body {
  padding: 20px 25px;
  background: #fff;
  color: #000;
}

.faq-wrap h3 {
  font-weight: 700;
  text-transform: none;
  margin: 0 0 5px;
}

.faq-wrap p {
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 30px;
}

.video {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}

.video iframe,
.video object,
.video embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border:none;
}

/* 15. CLIENTS */

#clients {
  padding: 40px 0;
  background: #333;
}

#clients h3 {
  margin: 0px 0px 30px;
  font-size: 30px;
  font-weight: 300;
  text-transform: uppercase;
  text-align: center;
}

#clients ul {
  padding: 0px 0px;
  margin: 0 -25px;
}

#clients ul li {
  float: left;
  margin: 0;
  list-style: none;
  width: 20%;
  position: relative;
  overflow: hidden;
  padding: 0 15px;
}

#clients ul li img {
  opacity: 0.2;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}

#clients ul li:hover img {
  opacity: 1;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  -webkit-transform: scale(1.1,1.1);
  -ms-transform: scale(1.1,1.1);
  transform: scale(1.1,1.1);
}

/* 16. WRAP CONTENT */

.wrap {
  padding: 80px 0;
  background: #3498DB;
}

.wrap h3 {
  margin: 0px 0px 10px;
  text-align: center;
  font-weight: 300;
  font-size: 45px;
  text-transform: none;
  color: #fff;
}

.wrap p {
  font-size: 16px;
  line-height: 24px;
  margin: 0px 0px 40px;
  text-align: center;
  font-weight: 300;
  padding: 0 12%;
  color: #fff;
}

.wrap em {
  font-size: 12px;
  line-height: 24px;
  text-align: center;
  font-weight: 400;
  text-transform: uppercase;
  font-style: normal;
  margin: -10px auto 0;
  display: table;
  letter-spacing: 1px;
  color: #fff;
}

.wrap a {
  font-size: 17px;
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  display: table;
  background: #000;
  line-height: 75px;
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  perspective: 1000px;
  margin: 0 auto 15px;
  display: table;
  border-radius: 5px;
}

.wrap a span {
  position: relative;
  display: inline-block;
  padding: 0 110px;
  background: #fff;
  color: #3498DB;
  border: none;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  border-radius: 5px;
}

.csstransforms3d .wrap a span::before {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
  background: transparent;
  font-size: 15px;
  content: attr(data-hover);
  -webkit-transition: background 0.3s;
  -moz-transition: background 0.3s;
  transition: background 0.3s;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  border-radius: 5px;
}

.wrap a:hover span,
.wrap a:focus span {
  -webkit-transform: rotateX(90deg) translateY(-22px);
  -moz-transform: rotateX(90deg) translateY(-22px);
  transform: rotateX(90deg) translateY(-22px);
}

.csstransforms3d .wrap a:hover span::before,
.csstransforms3d .wrap a:focus span::before {
  background: #000;
  color: #fff;
}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
.wrap a:hover span,
.wrap a:focus span {
  -webkit-transform: rotateX(0deg) translateY(-0px);
  -moz-transform: rotateX(0deg) translateY(-0px);
  transform: rotateX(0deg) translateY(-0px);
}

.wrap a:hover span {
  background: #000;
  color: #fff;
  transition:.4s;
}


}


/* 17. GOOGLE MAP */

.gmap {
  padding: 0px;
  height: 400;
}

.gmap div {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

#map {
  display: block;
  width: 100%;
  height: 400px;
  margin: 0 auto;
}

#map.large {
  height: 400px;
}

#map img {
  max-width: none !important;
  height: auto;
}

/* 18. FOOTER */

#footer {
  background: #fff;
  padding: 80px 0;
  display: table;
  width: 100%;
}

#contact-info {
  margin-bottom: 0px;
}

#footer h5 {
  font-size: 25px;
  font-weight: 300;
  color: #000;
  margin: 0 0 50px;
}

#footer h5 span {
  font-weight: 600;
}

.contact-info {
  padding: 0;
  margin: 0;
}

.contact-info li {
  padding: 0px;
  list-style: none;
  color: #888;
  margin: 0 0 15px;
  display: table;
  width: 100%;
  line-height: 30px;
  font-size: 16px;
  font-weight: 300;
}

.contact-info li i {
  font-size: 16px;
  margin-right: 15px;
  color: #000;
  float: left;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  border-radius: 50%;
}

.contact-info p {
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  margin: 0;
}

.statusMessage, .successmessage, .errormessage {
  display: none;
  margin: auto;
  width: 100%;
  height: auto;
  left: 0px;
  right: 0px;
  top: 0px;
  border: 1px solid #e1e1e1;
  margin: 0 auto 25px auto;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  color: #000;
}

.statusMessage i {
  color:#3498DB;
  font-size:15px;
  margin-right:5px;
}

.statusMessage p {
  margin: 0;
  padding: 20px;
  color: #555;
  font-size: 14px;
}

.successmessage p {
  margin: 0;
  padding: 20px;
  color: #555;
  font-size: 14px;
}

.successmessage i {
  color:#1abc9c;
  font-size:15px;
  margin-right:5px;
}

.errormessage p {
  margin: 0;
  padding: 20px;
  color: #555;
  font-size: 14px;
}

.errormessage i {
  color:#ff0000;
  font-size:15px;
  margin-right:5px;
}

#incompleteMessage i {
  color: #f1c40f;
  font-size:15px;
  margin-right:5px;
}

#contactForm input {
  width: 100%;
  border: none;
  border: 1px solid #e1e1e1;
  height: 65px;
  margin-bottom: 15px;
  background: transparent;
  padding: 15px 15px;
  color: #000;
  font-size: 15px;
  border-radius: 3px;
}

#contactForm textarea {
  width: 100%;
  color: #000;
  border: none;
  border: 1px solid #e1e1e1;
  height: 145px;
  margin-bottom: 15px;
  background: transparent;
  padding: 10px 15px;
  font-size: 15px;
  border-radius: 3px;
}

#contactForm p {
  font-size: 13px;
}

/* 19. FOOTER / COPYRIGHT */

.f-social {
  padding: 10px;
}

.f-social a {
  float: left;
  color: #ccc;
  font-size: 17px;
  margin-right: 20px;
}

.f-social a:hover {
  color: #3498DB;
}

.footer-copy {
  padding: 30px 0;
  background: #fff;
  border-top: 1px solid #ddd;
}

.footer-copy p {
  margin: 0px;
  font-size: 13px;
}

.footer-copy p a {
  color:#3498DB;
}

.footer-copy p a:hover {
  color:#000;
}

.backtotop {
  text-align: right;
  fon-size: 13px;
  text-transform: uppercase;
  display: table;
  float: right;
  margin-top: 0px;
  color:#3498DB;
}

.backtotop:hover {
  color:#000;
}

/* 20. MODAL / VIDEO */

.modal-content {
  position: relative;
  background-clip: padding-box;
  border: none;
  border-radius: 0px;
  outline: 0px none;
  box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.5);
  display: table;
  padding: 0;
  margin: 0 auto;
  height: 70%;
  margin-top: 5%;
  top: 0;
}

.modal-content .container {
  padding: 0;
}

.close-modal {
  background: #000;
  color: #FFF;
  position: absolute;
  top: -30px;
  right: 0px;
  z-index: 999;
  width: 115px;
  height: 30px;
  font-weight:700;
  opacity: 1 !important;
  text-align: center;
  line-height: 30px;
  text-transform: uppercase;
  font-size: 12px;
  transition: 0.4s;
  -webkit-transition: 0.4s;
  cursor: pointer;
}

.close-modal:hover {
  background: #3498DB;
  color: #FFF;
  transition: 0.4s;
  -webkit-transition: 0.4s;
}


/*-------------------------------------------------------------
               THEME SWITCHER
--------------------------------------------------------------- */
#customizer {
  position: fixed;
  top: 130px;
  z-index: 999999;
  height: 100%;
}

.corner {
  display: block;
  cursor: pointer;
  width: 50px;
  height: 50px;
  background: url(../images/corner.png);
  position: absolute;
  top: 0px;
  right: -50px;
  border-radius: 0 5px 5px 0;
}

.s-close {
  left: -210px !important;
  -webkit-transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.s-open {
  left: 0 !important;
  -webkit-transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.corner.expanded {
  background: url(../images/corner.png);
}

#options {
  width: 210px;
  height: 340px;
  background: #222;
  border-radius: 0 0 5px 5px;
  padding: 0;
  position: relative;
  -webkit-transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.heading {
  padding-bottom: 15px;
  margin-bottom: 20px;
}

#options h6 {
  color: #5c5c5c;
  margin-bottom: 10px;
  font-size: 13px;
}

.options-segment {
  margin-bottom: 20px;
}

.customize-button {
  display: inline-block;
  margin: 0;
  font-size: 12px;
  color: #5c5c5c !important;
  background: #f7f7f7;
  border: 1px solid #e9e9e9;
  padding: 3px 7px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

.customize-button:hover {
  background: #fff;
}

.customize-button:first-of-type {
  margin-right: 5px;
}

.color-scheme {
  padding: 0;
}

.color-scheme li {
  float: left;
  list-style: none;
  margin: 3px;
}

.color-scheme a {
  display: block;
}

.colors-sel {
  padding: 30px 25px 30px;
  margin-bottom: 0;
}

.version-sel {
  padding: 0px 25px 30px;
  margin-bottom: 0;
}

.colors-sel h5 ,
.version-sel h5 {
  color: #fff;
  font-size: 13px;
  font-weight: 700;
  margin: 0 0 12px;
}

.color-scheme li a {
  width: 16px;
  height: 16px;
}

.blue a {
  background: #3498db;
}

.green a {
  background: #7cb600;
}

.orange a {
  background: #fa5b0f;
}

.blue2 a {
  background: #495d7f;
}

.yellow a {
  background: #ffb400;
}

.brown a {
  background: #bfa980;
}

.violet a {
  background: #6957af;
}

.red a {
  background: #c62020;
}

.pink a {
  background: #c71c77;
}

.green2 a {
  background: #74aea1;
}

.brown2 a {
  background: #784e3d;
}

.pink2 a {
  background: #911938;
}

.grey a {
  background: #707070;
}

.blue3 a {
  background: #37b6bd;
}

.green3 a {
  background: #b3c211;
}

.green4 a {
  background: #3b6e40;
}

.green5 a {
  background: #1abc9c;
}

.red2 a {
  background: #e74c3c;
}

.orange2 a {
  background: #e67e22;
}

.brown3 a {
  background: #766454;
}

.options-head {
  background: #222;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  font-size: 15px;
  font-weight: 700;
  line-height: 50px;
  text-align: left;
  padding: 0 20px;
}

.version-scheme li {
  float: left;
  margin: 0 3px 5px;
}

.version-scheme li a {
  background: #333;
  line-height: 30px;
  color: #FFF;
  width: 34px;
  display: table;
  text-align: center;
  font-weight: 700;
  font-size: 12px;
}

.version-scheme li.active a {
  cursor: pointer;
}

.version-scheme li.active a,
.version-scheme li a:hover {
  background: #3498DB;
}

.home-subscribe {
  background:#3498DB;
  padding:70px 0;
}

.home-subscribe h6 {
  font-size:25px;
  color:#fff;
  margin:0 0 25px;
  text-align:center;
  font-weight:600;
}

/* 20. RESPONSIVE STYLES */

/* Ipad - Desktop (960 - 1150px) */
@media only screen and (min-width: 960px)  and (max-width: 1150px)  {

#intro ,
#intro.intro2 ,
#intro.intro3 ,
#intro.intro4 ,
#intro.intro5 ,
#intro.intro6 ,
#intro.intro7 {
  background-size: 130% auto;
}

}

/* Ipad (768 - 959px) */
@media only screen and (min-width: 768px)  and (max-width: 959px)  {

#intro {
  background-size: auto 100%;
  padding: 160px 0px 132px;
}

#intro.intro2 {
  background-size: 130% auto;
  padding: 160px 0px 132px;
}

#intro.intro4 {
  background-size: auto 100%;
  padding: 160px 0px 0px;
}

#intro.intro5 {
  background-size: auto 100%;
  padding: 160px 0px 0px;
}

#intro h2 {
  font-size: 48px;
  line-height: 56px;
}

.sub-form {
  padding-left: 0px;
}

#result {
  left: 0px;
}

.sub-form h5 {
  font-size: 19px;
}

#intro p {
  font-size: 14px;
  margin: 0px 0px 30px;
  padding-right: 15px;
  line-height: 25px;
}

.service-content p {
  font-size: 13px;
  line-height: 20px;
  padding: 0px 5px;
}

.service-content h4 {
  font-size: 15px;
}

#features .col-md-3 {
  width: 100%;
  float: none;
}

#features .col-md-4 {
  width: 45%;
}

.feature-content p {
  font-size: 12px;
  margin-left: 90px;
}

.feature-content h4 {
  margin: 0px 0px 12px 90px;
}

#features .col-md-5 {
  width: 55%;
}

#features h3 {
  display: table;
  margin: 0 auto 20px;
  ;
}

.app-info p {
  text-align: center;
  padding: 0 15%;
}

.app-btns {
  margin: 0 auto 40px;
  display: table;
}

#features .space60 {
  margin-bottom: 20px;
}

.content-head h3 {
  font-size: 35px;
}

.content-head p {
  font-size: 15px;
  padding: 0px 10%;
}

.ic-inner p {
  font-size: 12px;
}

.dual-info h4 {
  font-size: 35px;
}

.dual-info .col-md-9 {
  padding: 30px;
  width: 100%;
}

.dual-info ul li {
  margin-bottom: 7px;
  font-size: 11px;
  font-weight: 400;
}

.dual-info p {
  font-size: 11px;
  margin: -5px 0px 17px;
  line-height: 20px;
  font-weight: 400;
}

.dual-info ul {
  margin-bottom: 20px;
}

.dual-info .col-md-6:nth-child(1) {
  width: 60%;
}

.dual-info .col-md-6:nth-child(2) {
  width: 40%;
}

.dual-info .btn-main {
  line-height: 30px;
  padding: 0 15px;
  font-size: 11px;
}

.wrap-content h2 {
  color: #FFF;
  font-size: 34px;
  margin-top: 0;
}

.wrap-content p {
  font-size: 11px;
  line-height: 21px;
  font-weight: 400;
  margin-top: -15px;
}

.wrap-content1 h2 {
  color: #000;
  margin-top: 0px;
  font-size: 33px;
}

.quote-info p {
  font-size: 35px;
  line-height: 42px;
  padding: 0px 0px 0px 45px;
  margin-top: 0px;
}

.quote-info p:before {
  top: 5px;
}

.pricing .col-md-3 {
  width: 50%;
}

.sc2-inner {
  margin-left: 91px;
}

#services2 i {
  width: 65px;
  height: 65px;
  line-height: 65px;
}

.sc2-inner {
  margin-left: 75px;
}

.sc2-inner h4 {
  font-size: 16px;
}

#services2 .sc2-inner p {
  font-size: 12px;
}

#contactForm p {
  font-size: 10px;
}

.contact-info li {
  font-size: 14px;
}

#intro.intro3 h2 {
  margin: 25px 0px 25px;
  font-size: 42px;
  line-height: 48px;
  font-weight: 500;
}

#intro.intro3 p {
  font-size: 12px;
  margin: 0px 0px 30px;
  padding-right: 15px;
  line-height: 19px;
  font-weight: 400;
}

#intro.intro4 p {
  text-align: center;
  padding: 0px;
}

#intro.intro6 h2 {
  margin: -29px 0px 25px;
  font-size: 39px;
  line-height: 45px;
}

#intro.intro6 {
  padding: 192px 0px 140px;
}

#intro.intro7 {
  background-size: auto 100%;
  padding: 200px 0 185px;
}

.modal-content {
  margin: 35% auto 0px;
  height: auto;
}

}

/* Mobile (Upto 767px) */
@media only screen and (max-width: 767px)  {

#result {
  left: 0px;
}

.modal-content {
  width:90%;
  margin: 50% auto 0px;
  height: auto;
}

.terms {
  width: 90%;
  max-height: 80%;
  top: 10%;
  padding: 40px;
}

.container {
  width: 100%;
  max-width: 400px;
}

.play-btn {
  -webkit-transform: scale(0.6);
  -ms-transform: scale(0.6);
  transform: scale(0.6);
}

.play-btn:hover {
  -webkit-transform: scale(0.8);
  -ms-transform: scale(0.8);
  transform: scale(0.8);
}

.dual-btns {
  display: table;
  margin-left: auto;
  margin-right: auto;
}

#intro.intro6 .dual-btns {
  display: table;
  margin: 0 auto 40px;
}

#intro {
  background-size: auto 100%;
  padding: 160px 0px 132px;
}

#intro.intro2 {
  background-size: auto 100%;
  padding: 160px 0px 132px;
}

#intro.intro3 {
  background-size: auto 100%;
  padding: 160px 0px 80px;
}

#intro.intro4 {
  background-size: auto 100%;
  padding: 120px 0px 100px;
}

#intro.intro7 {
  background-size: auto 100%;
  padding: 120px 0px 100px;
}

.intro-newsletter {
  width: 100%;
  max-width: 400px;
}

.intro-newsletter input {
  width: 71%;
}

.intro-newsletter button {
  width: 27%;
  margin-left: 2%;
}

#intro.intro7 p {
  text-align: center;
  padding: 0px 0;
  font-size: 13px;
}

#intro.intro6 {
  padding: 120px 0px 100px;
}

#intro.intro3 #main-slider {
  float: none;
  margin-bottom: 0px;
  margin-right: auto;
  margin-left: auto;
  max-width: 400px;
  width: 100%;
}

#intro.intro3 h6 {
  font-size: 12px;
  text-align: center;
}

#intro.intro5 {
  background-size: auto 100%;
  padding: 160px 0px 0px;
}

#intro.intro3 .col-md-8 ,
#intro.intro3 .col-md-4 {
  width: 100%;
}

#intro.intro3 h2 {
  margin: 0px 0px 25px;
  font-size: 36px;
  line-height: 46px;
  font-weight: 500;
}

#intro p {
  font-size: 13px;
  margin: 0px 0px 30px;
}

.app-btn {
  display: table;
  margin: 0 auto;
}

#intro.intro3 h6 {
  font-size: 12px;
}

#intro h2 {
  font-size: 45px;
  margin: 25px 0px 40px;
  line-height: 50px;
  text-align: center;
}

#intro {
  background-size: auto 100%;
}

header {
  height:70px;
}

.dual-btns a {
  line-height: 43px;
  padding: 0px 22px;
  font-size: 13px;
}

.dual-btns a {
  float: left;
}

#intro p {
  font-size: 14px;
  margin: 0px 0px 20px;
  line-height: 24px;
  padding: 0;
  text-align: center;
}

.sub-form {
  padding-left: 15px;
  padding-top: 60px;
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
}

#services {
  padding: 100px 0px 60px;
}

.service-content {
  cursor: pointer;
  margin-bottom: 40px;
}

#features h3 {
  margin: 0px 0px 20px;
}

.app-info {
  padding: 0 15px;
  padding-bottom: 59px;
}

.content-head h3 {
  font-size: 30px;
}

.content-head p {
  font-size: 14px;
  font-weight: 300;
  padding: 0px 0;
}

.ic-inner {
  margin-bottom: 30px;
}

.info-content {
  padding: 100px 0px 70px;
}

.dual-info .col-md-9 {
  padding: 40px;
}

.wrap-content h2 {
  font-size: 35px;
}

.wrap-content p {
  font-size: 13px;
  line-height: 22px;
}

.wrap-content img {
  margin-top: 70px;
}

.quote-info p {
  font-family: Josefin Sans;
  font-size: 31px;
  font-weight: 400;
  line-height: 41px;
}

#quote-slider .item img {
  display: none;
}

.testimonials {
  padding: 0px 0px 100px;
}

#quote-slider .owl-controls {
  bottom: -50px;
}

.faq-content .content-head {
  padding: 0 15px;
}

.wrap h3 {
  font-size: 33px;
}

.wrap p {
  font-size: 13px;
  line-height: 21px;
  padding: 0px;
}

.wrap a span {
  padding: 0px 25px;
}

.wrap a {
  font-size: 12px;
  text-align: center;
  letter-spacing: 1px;
  line-height: 55px;
}

.f-social {
  padding: 10px;
  margin-bottom: 60px;
}

.footer-copy p {
  font-size: 13px;
  text-align: center;
  margin: 0 0 30px;
}

.backtotop {
  color: #3498DB;
  text-align: center;
  display: table;
  margin: 0 auto;
  float: none;
}

.navbar-toggle {
  border: none !important;
  margin-top: 17px;
  margin-right: 0px;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #fff;
}

.navbar-toggle:hover {
  background: #000 !important;
}

.navbar-toggle:focus {
  background: transparent !important;
}

.navbar-right {
  float: none;
  background: #fff;
  margin: 15px 0px 0;
  background: #000;
  padding: 0 20px 25px;
  width: 100%;
}

.navbar-collapse {
  padding-right: 0;
  padding-left: 0;
  overflow-x: visible;
  border-top: 0;
}

}


  </style>
