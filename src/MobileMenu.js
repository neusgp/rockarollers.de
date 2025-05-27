const hamburgerIcon = document.querySelector(".hamburger-menu-icon");

hamburgerIcon.addEventListener("click", () => {
  let mobileMenu;
  let closeButton;
  console.log("open mobile menu");
  mobileMenu = document.querySelector(".mobile-menu");

  if (mobileMenu) {
    mobileMenu.classList.add("show");

    closeButton = document.querySelector(".close-button");
    if (closeButton)
      closeButton.addEventListener("click", () => {
        mobileMenu.classList.remove("show");
      });
  }
});
