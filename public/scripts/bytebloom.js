import { BASE_URL } from "../../config/config.js";

/*AOS Initalizing*/
AOS.init();

/*Smooth Scrolling Effect */

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("a.smooth-scroll").forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      const target = document.querySelector(targetId);
      const offsetTop = target.offsetTop;
      const scrollDuration = 1000;

      window.scrollTo({
        top: offsetTop,
        behavior: "smooth",
        duration: scrollDuration,
      });
    });
  });
});

/* Scroll To Top Button */

let calcScrollValue = () => {
  let scrollProgress = document.querySelector(`.scroll`);
  let progressValue = document.querySelector(`.scroll-value`);
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);

  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#16614e ${scrollValue}%, #a5d0c6 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

/*Switching between tasks*/

// Get the task elements
const tasks = document.querySelectorAll(`.task-list div`);

// Add click event listeners to each task
tasks.forEach((task, index) => {
  task.addEventListener("click", () => {
    // Remove the active class from all tasks
    tasks.forEach((task) => {
      task.classList.remove("active");
    });

    // Add the active class to the clicked task
    task.classList.add("active");

    //call to description change function
    changeDescription(`${index + 1}`);

    //call to image change function
    changeImage(`${index + 1}`);
  });
});

function changeDescription(index) {
  // Get the description elements
  const descriptions = document.querySelectorAll(`.decriptions-box div`);

  //Add the d-none class to each description
  descriptions.forEach((description) => {
    description.classList.add("d-none");
  });

  //Remove the d-none class from the selected description
  let clickedDesc = document.querySelector(`.description-${index}`);
  clickedDesc.classList.remove("d-none");
}

function changeImage(index) {
  let image = document.querySelector(".service-diamond .image");
  image.style.backgroundImage = `url(${BASE_URL}public/images/diamond-${index}.jpg)`;
}
