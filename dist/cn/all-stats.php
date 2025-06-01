<span class="counter h4">0</span>万
<script>
const counterElement = document.querySelector('.counter');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startCounterAnimation();
      observer.unobserve(entry.target);
    }
  });
});

observer.observe(counterElement);

function startCounterAnimation() {
  const targetNumber = 19; // Replace with new number
  let currentNumber = 0;
  const duration = 2400;
  const startTime = performance.now();

  function animateCounter(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1);
    currentNumber = Math.floor(targetNumber * progress);
    counterElement.textContent = currentNumber.toLocaleString();
    if (progress < 1) {
      requestAnimationFrame(animateCounter);
    }
  }

  requestAnimationFrame(animateCounter);
}
</script>