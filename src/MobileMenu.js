const hamburgerIcon = document.querySelector(".hamburger-menu-icon");
const content = document.querySelector("#content");
const footer = document.querySelector("footer");

hamburgerIcon.addEventListener("click", () => {
  let mobileMenu;
  let closeButton;
  let links;

  mobileMenu = document.querySelector(".mobile-menu");

  if (mobileMenu) {
    mobileMenu.classList.add("show");
    content.classList.add("hide");
    footer.classList.add("hide");

    closeButton = document.querySelector(".close-button");
    if (closeButton)
      closeButton.addEventListener("click", () => {
        mobileMenu.classList.remove("show");
        content.classList.remove("hide");
        footer.classList.remove("hide");
      });

    links = document.getElementsByTagName("a");
    if (links)
      for (let link of links) {
        link.addEventListener("click", () => {
          mobileMenu.classList.remove("show");
          content.classList.remove("hide");
          footer.classList.remove("hide");
        });
      }
  }
});
