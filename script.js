(function () {
  const tabs = document.querySelectorAll('.tab');
  const forms = {
    vehicle: document.getElementById('finder-vehicle'),
    size: document.getElementById('finder-size'),
  };
  const resultBox = document.querySelector('.finder-result');

  function setActiveTab(target) {
    tabs.forEach((tab) => {
      const isActive = tab.dataset.target === target;
      tab.classList.toggle('active', isActive);
      tab.setAttribute('aria-selected', isActive);
    });
    Object.entries(forms).forEach(([key, form]) => {
      form.classList.toggle('active', key === target);
    });
    resultBox.textContent = 'Select options to see tailored tyre suggestions.';
  }

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => setActiveTab(tab.dataset.target));
  });

  function handleVehicleSubmit(event) {
    event.preventDefault();
    const vehicle = document.getElementById('vehicle').value;
    const position = document.getElementById('position').value;
    const size = document.getElementById('size').value;
    resultBox.textContent = `Showing recommended ${vehicle.toLowerCase()} tyres for the ${position.toLowerCase()} in ${size}. Contact sales for exact fitment.`;
  }

  function handleSizeSubmit(event) {
    event.preventDefault();
    const width = document.getElementById('width').value || 'width';
    const aspect = document.getElementById('aspect').value || 'aspect';
    const rim = document.getElementById('rim').value || 'rim size';
    resultBox.textContent = `Showing tyres matching ${width}/${aspect} R${rim}. Reach out for on-ground availability near you.`;
  }

  forms.vehicle.addEventListener('submit', handleVehicleSubmit);
  forms.size.addEventListener('submit', handleSizeSubmit);
})();
