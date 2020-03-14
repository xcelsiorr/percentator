<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="This free Percentage Calculator is a simple online tool that helps you to do simple percentage calculations and gives the most accurate results."
    />
    <link rel="canonical" href="http://mypercentagecalculator.com/" />
    <link rel="stylesheet" href="style.css" />
    <script src="./script.js" defer></script>
    <title>[BEST] Percentage Calculator - Calculate Percentages</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-151391163-3"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-151391163-3");
    </script>
  </head>
  <body>
    <div id="main-container">
      <div class="header-container">
        <div class="title">
          <p><a href="index.php">My Percentage Calculator</a></p>
          <p class="description">
            My Percentage Calculator is a simple online tool to calculate
            percentages.
          </p>
        </div>
      </div>
      <div class="body-container">
        <div class="calculator-container">
          <ul>
            <li class="calc-item">
              <p class="calc-controls">
                What is <input type="number" id="percent" />% of
                <input type="number" id="total-value" />?
              </p>
              <div class="calculate-controls">
                <button id="calculate-percentage" class="button-calculate">
                  Calculate
                </button>
                <input
                  type="text"
                  class="result"
                  id="percent-result"
                  readonly
                />
              </div>
            </li>
            <li class="calc-item">
              <p class="calc-controls">
                <input type="number" id="value-2" /> is what percentage of
                <input type="number" id="total-2" />?
              </p>
              <div class="calculate-controls">
                <button class="button-calculate" id="calculate-percentage-2">
                  Calculate
                </button>
                <input
                  type="text"
                  class="result"
                  id="percent-result-2"
                  readonly
                />
              </div>
            </li>
            <li class="calc-item">
              <p class="calc-controls">
                What is the percentage increase/decrease from <br />
                <input type="number" id="start-value" /> to
                <input type="number" id="end-value" />?
              </p>
              <div class="calculate-controls">
                <button id="calculate-percentage-3" class="button-calculate">
                  Calculate
                </button>
                <input
                  type="text"
                  class="result"
                  id="percent-result-3"
                  readonly
                />
              </div>
            </li>
          </ul>
          <div class="info-container">
            <p class="info-text">
              <b>Tips:</b> Use tab to move to the next field. Use shift-tab to
              move to the previous field. Press enter to calculate.
            </p>
          </div>
        </div>
        <div class="chart-container">
          <svg viewBox="0 0 36 36" class="circular-chart">
            <path
              class="circle-bg"
              d="M18 2.0845
                  a 15.9155 15.9155 0 0 1 0 31.831
                  a 15.9155 15.9155 0 0 1 0 -31.831"
            />
            <path
              class="circle"
              stroke-dasharray="0, 100"
              d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
            />
            <text x="18" y="20.35" class="chart-result-text">0%</text>
          </svg>
        </div>
      </div>
      <div class="footer-container-main">
        <div class="footer-content">
          <h1 class="footer-title">
            My Percentage Calculator - A simple online tool to calculate
            Percentage
          </h1>
          <div class="footer-desc">
            <h2 class="footer-ques">What is percentage calculator ?</h2>
            <p class="footer-ans-data">
              My percentage calculator a simple yet advanced version of a
              calculator, that helps you with all types of percentage
              calculations, with an easy to use interface. This platform enables
              you to calculate different percentage results accurately, thereby
              simplifying all the percentage related problems from your day to
              day life.
            </p>
            <h2 class="footer-ques">
              How to use the Percentage calculator website ?
            </h2>
            <p class="footer-ans-data">
              Using this percentage calculator is quite easy, as is the
              interface. Simply enter the numbers for which you need to
              calculate the percentage in their respective fields, and click on
              the calculate button, which would instantly calculate and gives
              the results. My percentage calculator helps you to find a specific
              percentage of a number, determine what percentage a number is of
              another, the percentage increase or decrease between two numbers,
              and many more!
            </p>
            <h2 class="footer-ques">What is Percentage Formula ?</h2>
            <p class="footer-ans-data">
              Percentage formula helps you determine the percentage of a number
              with respect to another number, and express the result as a
              dimensionless ratio between the two numbers. If you need to find
              <i>b</i> % of a number <i>a</i>, then <i>b</i> is multiplied by
              <i>a</i> and divided by 100, to get the <i>b%</i> of <i>a</i>. If
              you want to find 30% of 200, this percentage calculator tool works
              by multiplying 30 and 200, and then dividing the result by 100
              which would give you the answer as 60. In case you need to
              calculate how much percentage of a number <i>a</i> is <i>b</i>,
              then <i>b</i> is divided by <i>a</i> and multiplied by 100, to get
              the result. For example, to find how much percentage of 75 is 25,
              divide 25 by 75 and multiply by 100, which would give the answer
              33.33 %.
            </p>

            <h2 class="footer-ques">What is Percentage Change Formula ?</h2>
            <p class="footer-ans-data">
              My percentage calculator also works as a percentage change
              calculator, to help you quantify the increase/decrease from one
              number to another, and give you this change in terms of percentage
              difference. i.e this tool helps you to find the percentage
              increase or percentage decrease between two numbers. If you want
              to find the percentage change of a number <i>a</i> to a number
              <i>b</i>, then the difference between the two numbers is
              calculated and divided by <i>b</i>, and then multiplied by 100.
              For example, if you want to find the percentage increase or
              decrease of 75 to 125, then the difference between the two numbers
              are calculated, divided by 125 and multiplied by 100, to get the
              result 66.66%.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
