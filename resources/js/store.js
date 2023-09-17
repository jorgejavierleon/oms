export default {
  isDarkModeEnabled: false,
  isMonochromeModeEnabled: false,
  isSearchbarActive: false,
  isSidebarExpanded: false,
  isRightSidebarExpanded: false,

  init() {
    let firstTime = true;

    this.isDarkModeEnabled = Alpine.$persist(false).as("_x_darkMode_on");

    this.isSidebarExpanded =
      document.querySelector(".sidebar") &&
      document.body.classList.contains("is-sidebar-open") &&
      Alpine.store("breakpoints").xlAndUp;

    Alpine.effect(() => {
      this.isDarkModeEnabled
        ? document.documentElement.classList.add("dark")
        : document.documentElement.classList.remove("dark");
    });

    Alpine.effect(() => {
      this.isMonochromeModeEnabled
        ? document.body.classList.add("is-monochrome")
        : document.body.classList.remove("is-monochrome");
    });

    Alpine.effect(() => {
      this.isSidebarExpanded
        ? document.body.classList.add("is-sidebar-open")
        : document.body.classList.remove("is-sidebar-open");
    });

    Alpine.effect(() => {
      if (Alpine.store("breakpoints").name && !firstTime) {
        this.isSidebarExpanded = false;
        this.isRightSidebarExpanded = false;
      }
    });


    Alpine.effect(() => {
      if (Alpine.store("breakpoints").smAndUp) this.isSearchbarActive = false;
    });

    firstTime = false;
  }
};
