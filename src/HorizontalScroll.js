document.getElementById("scroll-right-button").addEventListener("click", () => {
  const container = document.getElementById("horizontal-scroll");
  const scrollAmount = 320;

  container.scrollBy({
    left: scrollAmount,
    behavior: "smooth",
  });
});
