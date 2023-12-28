document.addEventListener('DOMContentLoaded', function() {
  const blocks = document.querySelectorAll('.block');
  let currentIndex = 0;

  function showBlock(index) {
    blocks.forEach((block, i) => {
      if (i === index) {
        block.style.display = 'block';
      } else {
        block.style.display = 'none';
      }
    });
  }

  showBlock(currentIndex);

  document.getElementById('prevBtn').addEventListener('click', function() {
    currentIndex = (currentIndex === 0) ? blocks.length - 1 : currentIndex - 1;
    showBlock(currentIndex);
  });

  document.getElementById('nextBtn').addEventListener('click', function() {
    currentIndex = (currentIndex === blocks.length - 1) ? 0 : currentIndex + 1;
    showBlock(currentIndex);
  });
});
