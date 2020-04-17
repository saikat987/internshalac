<?php
require_once "header.php";
Page::ForceLogin();
if(!isset($_SESSION['type']))
{header("location: internship.php");}

?>
<head>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 22px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 36px;
      color: #fff;
      z-index: 2;
      }
      span.required {
      color: red;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 180px;
      background-image: url("");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      p.top-info {
      margin: 10px 0;
      }
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #095484;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 5px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .question input {
      width: auto;
      margin: 0;
      border-radius: 50%;
      }
      .question input, .question span {
      vertical-align: middle;
      }
      .question label {
      display: inline-block;
      margin: 5px 20px 15px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
</head>

        <div class="testbox">
                <form method="post" action="intern_details.php">
                  <div class="banner">
                    <h1>INTERNSHIP DETAILS</h1>
                  </div>
                  <p class="top-info">Fill the following</p>
                  <div class="item">
                    <p><b>Job title<span class="required">*</span></b></p>
                    <div class="item">
                      <input type="textarea" name="title" placeholder="Write here" required/>
                    </div>
                  </div>
                  <div class="item">
                    <p><b>Company name<span class="required">*</span></b></p>
                    <div class="item">
                      <input type="textarea" name="company" placeholder="Write here" required/>
                    </div>
                  </div>
                  <div class="item">
                    <p><b>Work Location<span class="required">*</span></b></p>
                    <div class="item">
                    <input type="textarea" name="location"/>
                    </div>
                  </div>
              
                    <div class="item">
                        <p><b>Start Date<span class="required">*</span></b></p>
                        <input type="textarea" name="start_date" placeholder="Write here" required/>
                    </div>
                    <div class="item">
                        <p><b>Duration<span class="required">*</span></b></p>
                        <input type="text" name="duration" placeholder="Duration" required/>
                    </div>
                    <div class="item">
                        <p><b>Stipend<span class="required">*</span></b></p>
                        <input type="text" name="stipend" placeholder="Stipend" required/>
                    </div>
                    <div class="item">
                        <p><b>Apply By<span class="required">*</span></b></p>
                        <input type="text" name="apply_by" placeholder="Apply By" required/>
                    </div>
                    <div class="btn-block">
                    <button type="submit" href="/">Submit</button>
                  </div>
                </form>
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>