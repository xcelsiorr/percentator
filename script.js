window.onload = configureControls();

function formatChartResult(num) {
  return Math.abs(num) > 999999
    ? Math.sign(num) * (Math.abs(num) / 1000000).toFixed(1) + "M"
    : Math.abs(num) > 999
    ? Math.sign(num) * (Math.abs(num) / 1000).toFixed(1) + "k"
    : num % 1 === 0
    ? num
    : num.toFixed(2);
}

const setChartText = text => {
  const chartText = document.querySelector(".chart-result-text");
  chartText.innerHTML = text;
};

const clearChart = () => {
  let circle = document.querySelector(".circle");
  circle.style.strokeDasharray = [0, 100];
  setChartText("0%");
};

const displayChart = result => {
  let circle = document.querySelector(".circle");
  let strokeDashArray = result < 0 ? [100, result] : [result, 100];
  circle.style.strokeDasharray = strokeDashArray;
};

const showResult = (result, id) => {
  let resultField = document.getElementById(id);
  resultField.value = result;
};

const calculatePercentage = () => {
  let percentage = document.getElementById("percent").value;
  let totalValue = document.getElementById("total-value").value;
  let result = (percentage * totalValue) / 100;
  showResult(result, "percent-result");
  displayChart(0);
  setChartText("0%");
};

const calculatePercentage2 = () => {
  let value = document.getElementById("value-2").value;
  let total = document.getElementById("total-2").value;
  if (!value || !total) {
    setChartText("0%");
    displayChart(0);
    return false;
  }
  let result = (value / total) * 100;
  document.getElementsByClassName("circle")[0].style.stroke = "#ff9f00";
  showResult(result, "percent-result-2");
  displayChart(result);
  setChartText(`${formatChartResult(result)}%`);
};

const calculatePercentage3 = () => {
  const startValue = document.getElementById("start-value").value;
  const endValue = document.getElementById("end-value").value;
  if (!startValue || !endValue) {
    setChartText("0%");
    displayChart(0);
    return false;
  }
  const result = ((startValue - endValue) / startValue) * 100 * -1;
  document.getElementsByClassName("circle")[0].style.stroke = "#4CC790";
  showResult(result, "percent-result-3");
  displayChart(result);
  setChartText(`${formatChartResult(result)}%`);
};

function calculateResult(event) {
  let id = event.target.id;
  if (id === "calculate-percentage") {
    calculatePercentage();
  } else if (id === "calculate-percentage-2") {
    calculatePercentage2();
  } else if (id === "calculate-percentage-3") {
    calculatePercentage3();
  }
}

function configureControls() {
  let calculateButtons = document.querySelectorAll(".button-calculate");
  calculateButtons.forEach(button => {
    button.addEventListener("click", calculateResult);
  });
}
