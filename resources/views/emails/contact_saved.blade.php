<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v7 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			@font-face {
  font-family: "Montserrat-Regular";
  src: url("../fonts/Montserrat/Montserrat-Regular.ttf"); }
@font-face {
  font-family: "Montserrat-Bold";
  src: url("../fonts/Montserrat/Montserrat-Bold.ttf"); }
@font-face {
  font-family: "Montserrat-SemiBold";
  src: url("../fonts/Montserrat/Montserrat-SemiBold.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Montserrat-Regular";
  color: #fff;
  font-size: 15px;
  margin: 0; }

input, textarea, select, button {
  font-family: "Montserrat-Regular";
  color: #fff;
  font-size: 15px; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

img {
  max-width: 100%; }

ul {
  padding-left: 0;
  margin-bottom: 0; }

a:hover {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: url("../images/bg-registration-form-7.jpg") no-repeat;
  background-size: cover; }

.inner {
  max-width: 758px;
  margin: auto;
  background: #39459b;
  border: 10px solid #0d99d7;
  padding: 77px 99px 87px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2); }

textarea {
  resize: none; }

h3 {
  text-transform: uppercase;
  font-size: 45px;
  font-family: "Montserrat-Bold";
  text-align: center;
  margin-bottom: 12px; }

p {
  text-align: center;
  padding: 0 10px;
  margin-bottom: 55px;
  line-height: 1.8; }

.form-group {
  position: relative;
  display: block;
  margin-bottom: 48px; }
  .form-group span {
    font-size: 15px;
    color: #00ade6;
    position: absolute;
    top: 11px;
    transition: all .2s ease;
    transform-origin: 0 0;
    cursor: text; }
  .form-group span.border {
    height: 2px;
    display: block;
    position: absolute;
    width: 100%;
    left: 0;
    top: 41px;
    transform: scaleX(0);
    transition: all .15s ease;
    background: #fff; }

.form-control {
  border: none;
  border-bottom: 2px solid #00ade6;
  display: block;
  width: 100%;
  height: 43px;
  font-size: 15px;
  background: none;
  font-family: "Montserrat-SemiBold"; }
  .form-control:focus, .form-control:valid {
    border-bottom: 2px solid #fff; }
    .form-control:focus + span, .form-control:valid + span {
      transform: translateY(-22px) scale(0.8); }
      .form-control:focus + span + .border, .form-control:valid + span + .border {
        transform: scaleX(1); }

textarea.form-control {
  padding-top: 10px;
  padding-bottom: 10px; }

button {
  border: none;
  width: 162px;
  height: 51px;
  border: 2px solid #fff;
  margin: auto;
  margin-top: 60px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: none;
  color: #fff;
  text-transform: uppercase;
  font-family: "Montserrat-SemiBold";
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  button i {
    margin-left: 10px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-transition-duration: 0.1s;
    transition-duration: 0.1s;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #2098D1;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:hover {
    border-color: transparent; }
    button:hover:before {
      -webkit-transform: scaleX(1);
      transform: scaleX(1); }
    button:hover i {
      -webkit-transform: translateX(4px);
      transform: translateX(4px); }

@media (max-width: 767px) {
  h3 {
    font-size: 38px; }

  p {
    font-size: 14px;
    padding: 0; }

  .inner {
    padding: 27px 20px 37px;
    border: none;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none; }

  .wrapper {
    background: #39459b;
    border: 10px solid #0d99d7; } }

/*# sourceMappingURL=style.css.map */

		</style>
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="">
					<h3>Contact </h3>

                    <label class="form-group">
    Name:
    <input type="text" value="{{ $contact['name'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    Phone:
    <input type="text" value="{{ $contact['phone'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    Subject:
    <input type="text" value="{{ $contact['subject'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    First Name:
    <input type="text" value="{{ $contact['first_name'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    Email:
    <input type="text" value="{{ $contact['email'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    Category:
    <input type="text" value="{{ $contact['category'] }}" class="form-control" required>
    <span class="border"></span>
</label>
<label class="form-group">
    Message:
    <input type="text" value="{{ $contact['message'] }}" class="form-control" required>
    <span class="border"></span>
</label>

				</form>
			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
