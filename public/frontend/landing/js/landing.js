const doc = document;
const right = doc.querySelector(".right");
const left = doc.querySelector(".left");
const container = doc.querySelector(".container");

left.addEventListener("mouseenter", () => {
  container.classList.add("hover-left");
}
);
left.addEventListener("mouseleave", () => {
  container.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  container.classList.add("hover-right");
});
right.addEventListener("mouseleave", () => {
  container.classList.remove("hover-right");
});