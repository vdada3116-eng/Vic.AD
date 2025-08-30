// Apply dark mode based on localStorage on page load
window.addEventListener("load", () => {
  const darkModeEnabled = localStorage.getItem("darkMode") === "enabled";

  if (darkModeEnabled) {
    document.body.classList.add("dark-mode");
    const modeLabel = document.getElementById("mode");
    if (modeLabel) modeLabel.innerHTML = "LIGHT MODE";

    const checkbox = document.querySelector('input[type="checkbox"]');
    if (checkbox) checkbox.checked = true;
  }
});

// Toggle dark mode and save state
function myFunction() {
  document.body.classList.toggle("dark-mode");

  const isDark = document.body.classList.contains("dark-mode");
  localStorage.setItem("darkMode", isDark ? "enabled" : "disabled");

  const modeLabel = document.getElementById("mode");
  if (modeLabel) modeLabel.innerHTML = isDark ? "LIGHT MODE" : "DARK MODE";
}
