const hamburgerIcon = document.querySelector(".hamburger-menu-icon");

hamburgerIcon.addEventListener("click", () => {
  let mobileMenu;
  let closeButton;
  let links;

  mobileMenu = document.querySelector(".mobile-menu");

  if (mobileMenu) {
    mobileMenu.classList.add("show");

    closeButton = document.querySelector(".close-button");
    if (closeButton)
      closeButton.addEventListener("click", () =>
        mobileMenu.classList.remove("show")
      );

    links = document.getElementsByTagName("a");
    if (links)
      for (let link of links) {
        link.addEventListener("click", () =>
          mobileMenu.classList.remove("show")
        );
      }
  }
});
