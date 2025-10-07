document.querySelectorAll("form").forEach(form => {
  form.addEventListener("submit", e => {
    e.preventDefault();
    alert("✅ Datos enviados (ejemplo)");
  });
});
