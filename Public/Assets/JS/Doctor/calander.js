let display = document.querySelector(".display");
let previous = document.querySelector(".left");
let next = document.querySelector(".right");
let days = document.querySelector(".days");
let selected = document.querySelector(".selected");

let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();

function updateHeaderDisplay() {
  display.innerHTML = date.toLocaleString("en-US", {
    month: "long",
    year: "numeric",
  });
}

function displayCalendar() {
  days.innerHTML = ""; // Clear previous days
  const firstDay = new Date(year, month, 1);
  const firstDayIndex = firstDay.getDay();
  const lastDay = new Date(year, month + 1, 0);
  const numberOfDays = lastDay.getDate();

  // Blank spaces for the first row
  for (let x = 1; x <= firstDayIndex; x++) {
    let div = document.createElement("div");
    div.innerHTML = "";
    days.appendChild(div);
  }

  // Render days of the month
  for (let i = 1; i <= numberOfDays; i++) {
    let div = document.createElement("div");
    let currentDate = new Date(year, month, i);
    div.dataset.date = currentDate.toDateString();
    div.innerHTML = i;

    // Highlight the current date
    if (
      currentDate.getFullYear() === new Date().getFullYear() &&
      currentDate.getMonth() === new Date().getMonth() &&
      currentDate.getDate() === new Date().getDate()
    ) {
      div.classList.add("current-date");
    }

    // Add click event listener to select a date
    div.addEventListener("click", (e) => {
      const selectedDate = e.target.dataset.date;
      selected.innerHTML = `Selected Date: ${selectedDate}`;
    });

    days.appendChild(div);
  }
}

previous.addEventListener("click", () => {
  month = month - 1;
  if (month < 0) {
    month = 11;
    year = year - 1;
  }
  date.setMonth(month);
  date.setFullYear(year);
  updateHeaderDisplay();
  displayCalendar();
});

next.addEventListener("click", () => {
  month = month + 1;
  if (month > 11) {
    month = 0;
    year = year + 1;
  }
  date.setMonth(month);
  date.setFullYear(year);
  updateHeaderDisplay();
  displayCalendar();
});

// Initial setup
updateHeaderDisplay();
displayCalendar();



document.addEventListener("DOMContentLoaded", () => {
  const timeSlots = document.querySelectorAll(".time-slot");
  const submitButton = document.getElementById("submitButton");

  timeSlots.forEach(slot => {
    slot.addEventListener("click", () => {
      slot.classList.toggle("selected");
    });
  });

  submitButton.addEventListener("click", () => {
    const selectedSlots = [...document.querySelectorAll(".time-slot.selected")]
      .map(slot => slot.getAttribute("data-time"));

    console.log("Selected Time Slots:", selectedSlots);
  });
});
