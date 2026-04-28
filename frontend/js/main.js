document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.about-track');
  const cards = document.querySelectorAll('.about-card');

  if (!track || cards.length === 0) return;

  const firstCards = Array.from(cards).slice(0, 2);
  firstCards.forEach((card) => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });

  let currentIndex = 0;
  let intervalId;

  function getCardWidth() {
    const firstCard = track.querySelector('.about-card');
    if (!firstCard) return 0;

    const trackStyle = window.getComputedStyle(track);
    const gap = parseInt(trackStyle.gap || 0, 10);

    return firstCard.offsetWidth + gap;
  }

  function moveCarousel() {
    const cardWidth = getCardWidth();
    if (!cardWidth) return;

    currentIndex++;
    track.style.transition = 'transform 0.6s ease';
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    if (currentIndex >= cards.length) {
      setTimeout(() => {
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        currentIndex = 0;
      }, 650);
    }
  }

  function startCarousel() {
    intervalId = setInterval(moveCarousel, 2500);
  }

  function stopCarousel() {
    clearInterval(intervalId);
  }

  startCarousel();

  track.addEventListener('mouseenter', stopCarousel);
  track.addEventListener('mouseleave', startCarousel);

  window.addEventListener('resize', () => {
    const cardWidth = getCardWidth();
    track.style.transition = 'none';
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  });
});