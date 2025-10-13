<?php
$url = $_SERVER['REQUEST_URI'];
$lang = 'en'; // default

if (strpos($url, '/es') !== false) $lang = 'es';
elseif (strpos($url, '/fr') !== false) $lang = 'fr';
elseif (strpos($url, '/ru') !== false) $lang = 'ru';
elseif (strpos($url, '/lt') !== false) $lang = 'lt';
elseif (strpos($url, '/tr') !== false) $lang = 'tr';
elseif (strpos($url, '/tw') !== false) $lang = 'tw';
elseif (strpos($url, '/cn') !== false) $lang = 'cn';

// Adjust the number and label per language
$targetNumber = 234000;
?>

<span class="counter h4">0</span><?php
switch ($lang) {
  case 'es':
    echo '<span class="fw-bold">mil</span>';
    break;
  case 'lt':
    echo '<span class="fw-bold"> tūkst.</span>';
    break;
  case 'tr':
    echo '<span class="fw-bold">’i</span>';
    break;
  case 'tw':
    echo '<span class="fw-bold">萬</span>';
    break;
  case 'cn':
    echo '<span class="fw-bold">万</span>';
    break;
  case 'en':
  case 'fr':
  case 'ru':
  default:
    echo '<span class="fw-bold">K</span>+';
    break;
}
?>

<script>
const counterElement = document.querySelector('.counter');
const lang = '<?php echo $lang; ?>';
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
  const targetNumber = <?php echo $targetNumber; ?>;
  const duration = 2400;
  const startTime = performance.now();

  function animate(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    let current = Math.floor(targetNumber * progress);

    let formatted;
    switch (lang) {
      case 'es':
        formatted = (current / 1000).toFixed(0);
        break;
      case 'lt':
        formatted = (current / 1000).toFixed(0);
        break;
      case 'tr':
        formatted = current.toLocaleString('tr-TR');
        break;
      case 'tw':
      case 'cn':
        formatted = (current / 10000).toFixed(0);
        break;
      default: // en, fr, ru
        formatted = Math.floor(current / 1000).toLocaleString() ;
    }

    counterElement.textContent = formatted;
    if (progress < 1) requestAnimationFrame(animate);
  }

  requestAnimationFrame(animate);
}
</script>