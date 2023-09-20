let deferredPrompt;
window.addEventListener('beforeinstallprompt', (event) => {
  event.preventDefault();
  deferredPrompt = event;
  const installBanner = document.getElementById('install-banner');
  installBanner.style.display = 'flex';
  const installBtn = document.getElementById('install-btn');
  installBtn.addEventListener('click', () => {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User installed the app');
      } else {
        console.log('User did not install the app');
      }
      deferredPrompt = null;
      installBanner.style.display = 'none';
    });
  });
});
