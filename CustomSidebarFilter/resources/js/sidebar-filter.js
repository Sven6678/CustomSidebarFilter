document.getElementById("toggleFilter").addEventListener("click", () => {
  const section = document.getElementById("filterSection");
  section.classList.toggle("open");
});

document.getElementById("resetFilter").addEventListener("click", () => {
  document.querySelectorAll('.filter-section input[type="checkbox"]').forEach(cb => cb.checked = false);
  document.querySelectorAll('.filter-section input[type="number"]').forEach(input => input.value = '');
});
