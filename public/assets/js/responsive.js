function updateButtonGroupClass() {
      const btnGroup = document.querySelector('.skillGroup');
      if (window.innerWidth <= 768) {
        btnGroup.classList.remove('btn-group-lg');
        btnGroup.classList.add('btn-group-md');
      } else {
        btnGroup.classList.remove('btn-group-md');
        btnGroup.classList.add('btn-group-lg');
      }
    }

    // Panggil fungsi saat halaman dimuat
    updateButtonGroupClass();

    // Panggil fungsi saat ukuran layar diubah
    window.addEventListener('resize', updateButtonGroupClass);