document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];

    if (!file) {
      alert("File harus diunggah!");
      event.preventDefault();
      return;
    }

    if (file.size > 2 * 1024 * 1024) {
      // 2MB size limit
      alert("Ukuran file maksimal 2MB.");
      event.preventDefault();
      return;
    }

    if (!file.name.endsWith(".txt")) {
      alert("File harus berupa teks (.txt).");
      event.preventDefault();
    }
  });
