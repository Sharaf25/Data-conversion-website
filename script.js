const input = document.getElementById("convText");
const userData = document.getElementById("data");
const subButton = document.getElementById("covert");
const convertButton = document.getElementById("inp2");
const result = document.getElementById("result");

const units = {bit: 1 / 8, byte: 1, kilobyte: 1024, megabyte: 1024 * 1024, gigabyte: 1024 * 1024 * 1024,};

convertButton.addEventListener("click", () => {
  const inputUnit = parseFloat(input.value);
  const choosenData = units[userData.value.toLowerCase()];
  const toUnit = units[subButton.value.toLowerCase()];

  const finalResult = inputUnit * choosenData / toUnit;
  result.textContent = `${finalResult} ${subButton.value}`;
});
