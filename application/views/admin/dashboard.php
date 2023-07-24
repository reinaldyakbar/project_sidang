<!DOCTYPE html>
<html>

<head>
  <title>Robo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
  h1 {
    text-align: center;
    font-family: 'Roboto', sans-serif;
  }

  p {
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color: grey
  }

  .robots {
    display: flex;
    justify-content: center
  }

  .android {}

  .head,
  .left_arm,
  .torso,
  .right_arm,
  .left_leg,
  .right_leg {
    background-color: #5f93e8;
  }

  .head {
    width: 200px;
    margin: 0 auto;
    height: 150px;
    border-radius: 200px 200px 0 0;
    margin-bottom: 10px;
  }


  .head:hover {
    width: 300px;
    transition: 1s ease-in-out;
  }

  .head:hover .right_eye,
  .head:hover .left_eye {
    box-shadow:
      inset 5px 0 5px #9c0058
  }

  .head:hover .mouth {
    display: block;
  }

  .eyes {
    display: flex
  }

  .left_eye,
  .right_eye {
    width: 20px;
    height: 20px;
    border-radius: 15px;
    background-color: white;
  }

  .left_eye {
    /* These properties are new and you haven't encountered
  in this course. Check out CSS Tricks to see what it does! */
    position: relative;
    top: 100px;
    left: 40px;
  }

  .right_eye {
    position: relative;
    top: 100px;
    left: 120px;
  }

  .mouth {
    background-color: white;
    width: 20px;
    height: 1px;
    position: relative;
    top: 130px;
    left: 48px;
    display: none;
  }

  .upper_body {
    width: 300px;
    height: 150px;
    display: flex;
  }

  .left_arm,
  .right_arm {
    width: 40px;
    height: 125px;
    border-radius: 100px;
    transition: all 1s;
  }

  .left_arm {

    margin-right: 10px;
  }

  .left_arm:hover {
    -webkit-transform: translate(0, -50%) scale(1.2);
    -moz-transform: translate(0, -50%) scale(1.2);
    -o-transform: translate(0, -50%) scale(1.2);
    -ms-transform: translate(0, -50%) scale(1.2);
    transform: translate(0, -50%) scale(1.2);
  }


  .right_arm {
    margin-left: 10px;
  }

  .right_arm:hover {
    -webkit-transform: translate(0, -50%) scale(1.2);
    -moz-transform: translate(0, -50%) scale(1.2);
    -o-transform: translate(0, -50%) scale(1.2);
    -ms-transform: translate(0, -50%) scale(1.2);
    transform: translate(0, -50%) scale(1.2);
  }

  .torso {
    width: 200px;
    height: 200px;
    border-radius: 0 0 50px 50px;
    display: flex;
    justify-content: center
  }

  .energy_ball {
    border-radius: 50%;
    background-color: white;
    height: 40px;
    width: 40px;
    position: relative;
    top: 50px;
    box-shadow:
      0 0 20px #fff,
      10px 0 40px #f0f,
      -10px 0 40px #f0f
  }

  .torso:hover .energy_ball {
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation: glow 1s ease-in-out infinite alternate;
    animation: glow 1s ease-in-out infinite alternate;
  }

  .lower_body {
    display: flex;
    width: 200px;
    height: 200px;
    /* This is another useful property. Hmm what do you think it does?*/
    margin: 0 auto;

  }

  .left_leg,
  .right_leg {
    width: 40px;
    height: 120px;
    border-radius: 0 0 100px 100px;
  }

  .left_leg {
    margin-left: 45px;
  }

  .left_leg:hover {
    -webkit-transform: rotate(20deg);
    -moz-transform: rotate(20deg);
    -o-transform: rotate(20deg);
    -ms-transform: rotate(20deg);
    transform: rotate(20deg);
  }

  .right_leg {
    margin-left: 30px;
  }

  .right_leg:hover {
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
  }

  @keyframes glow {
    0% {
      box-shadow:
        0 0 20px #fff,
        10px 0 40px #f0f,
        -10px 0 40px #f0f,
        /*       inset 10px 0 20px #f0f */
    }

    30% {
      box-shadow:
        0 0 40px #fff,
        10px 0 60px #f0f,
        -10px 0 60px #f0f,
        /*       inset 20px 0 30px #f0f, */
    }

    100% {
      box-shadow:
        0 0 60px #fff,
        10px 0 80px #f0f,
        -10px 0 80px #f0f,
        inset -10px 0 40px #f0f
    }
  }
</style>

<body>
  <div id="layoutSidenav_content" style="margin-top: 120px; margin-bottom: 8px;">
    <div class="robots">
      <div class="android">
        <div class="head">
          <div class="eyes">
            <div class="left_eye"></div>
            <div class="right_eye"></div>
            <div class="mouth"></div>
          </div>
        </div>
        <div class="upper_body">
          <div class="left_arm"></div>
          <div class="torso">
            <div class="energy_ball"></div>
          </div>
          <div class="right_arm"></div>
        </div>
        <div class="lower_body">
          <div class="left_leg"></div>
          <div class="right_leg"></div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>