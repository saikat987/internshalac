<?php
require_once "header.php";
Page::ForceLogin();

?>

    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
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
  <body>
      
    <div class="testbox">
      <form method="post" action="apply_intern.php?code=<?php echo $_GET['code']?>">
        <div class="banner">
          <h1>INTERNSHIP FORM</h1>
        </div>
        <p class="top-info">Fill the following</p>
        <div class="item">
          <p><b>Why should we hire you?<span class="required">*</span></b></p>
          <div class="item">
            <input type="textarea" name="why" placeholder="Write here" required/>
          </div>
        </div>
        <div class="item">
          <p><b>Are you Available during the mentioned dates??<span class="required">*</span></b></p>
          <div class="item">
            <input type="textarea" name="avail" placeholder="Write here" required/>
          </div>
        </div>
        <div class="item">
          <p><b>Are you someone who has experience with MEAN/MERN stack and is looking to build/expand his/her portfolio? If yes, kindly share the links of your past experience.<span class="required">*</span></b></p>
          <input type="textarea" name="experience"/>
        </div>
    
        <div class="item">
          <p><b>Describe the best web project you have worked on till date (using PHP and Bootstrap). If possible, please share the link of the project you are mentioning, What other technologies did you use in this project and what functionalities did you build? Also, why do you consider it as your best project<span class="required">*</span></b></p>
          <input type="textarea" name="project" placeholder="Write here" required/>
          <div class="city-item">
            <input type="text" name="city" placeholder="City" required/>
            <input type="text" name="address" placeholder="Address" required/>
            <input type="text" name="pincode" placeholder="Picode" required/>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Apply</button>
        </div>
      </form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>