function getCurrentPHST() {
  const now = new Date();
  const phTime = now.toLocaleTimeString('en-US', { timeZone: 'Asia/Manila' });
  return phTime;
}

function getCurrentDate() {
  const now = new Date();
  const options = { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' };
  const dateString = now.toLocaleDateString('en-US', options);
  return dateString;
}

function updatePHSTTime() {
  const phTimeElement = document.getElementById('phst-time');
  const currentDateElement = document.getElementById('current-date');
  const phTime = getCurrentPHST();
  const currentDate = getCurrentDate();
  phTimeElement.textContent = 'Current Philippine Time: ' + phTime;
  currentDateElement.textContent = 'Current Date: ' + currentDate;
}

// Update PHST time every second
setInterval(updatePHSTTime, 1000);


