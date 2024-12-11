const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const prevButton = document.querySelector('.carousel-control.prev');
const nextButton = document.querySelector('.carousel-control.next');

let currentSlideIndex = 0;

// Função para atualizar o carrossel
function updateCarousel(index) {
  const slideWidth = slides[0].getBoundingClientRect().width;
  track.style.transform = `translateX(-${index * slideWidth}px)`;
}

// Botão "Anterior"
prevButton.addEventListener('click', () => {
  currentSlideIndex = (currentSlideIndex === 0) ? slides.length - 1 : currentSlideIndex - 1;
  updateCarousel(currentSlideIndex);
});

// Botão "Próximo"
nextButton.addEventListener('click', () => {
  currentSlideIndex = (currentSlideIndex === slides.length - 1) ? 0 : currentSlideIndex + 1;
  updateCarousel(currentSlideIndex);
});

// Ajusta o carrossel ao carregar a página
updateCarousel(currentSlideIndex);
