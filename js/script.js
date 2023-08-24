// Remember selected package on page load
window.addEventListener("load", () => {
  const selectedPackage = sessionStorage.getItem("selected_package");
  if (selectedPackage) {
    window.location.href = `package${selectedPackage}.php`;
  }
});
