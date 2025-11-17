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

  // Browse by Vehicle auto-slider
  const track = document.querySelector('.vehicle-track');
  const sliderViewport = track ? track.parentElement : null;
  const slides = track ? Array.from(track.children) : [];
  let sliderIndex = 0;

  function getStep() {
    if (!slides.length || !sliderViewport) return 0;
    const viewportWidth = sliderViewport.getBoundingClientRect().width;
    const gap = parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap || '0');
    return viewportWidth + gap;
  }

  function goToSlide(index) {
    if (!track || !slides.length) return;
    const step = getStep();
    track.style.transform = `translateX(${-step * index}px)`;
  }

  if (track && slides.length) {
    setInterval(() => {
      sliderIndex = (sliderIndex + 1) % slides.length;
      goToSlide(sliderIndex);
    }, 1000);
    window.addEventListener('resize', () => goToSlide(sliderIndex));
  }
})();
