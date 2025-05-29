const menuItems = document.getElementsByClassName("main-menu-header-item");

if (menuItems) {
  let dropdown;
  let link;

  for (let item of menuItems) {
    item.addEventListener("mouseenter", (e) => {
      dropdown = item.querySelector(".sub-menu");
      link = item.querySelector("a");
      console.log(dropdown);
      if (dropdown && link) {
        dropdown.classList.add("show");
        link.classList.add("yellow-highlight");

        item.addEventListener("mouseleave", () => {
          link.classList.remove("yellow-highlight");
          dropdown.classList.remove("show");
        });
      }
    });
  }
}
