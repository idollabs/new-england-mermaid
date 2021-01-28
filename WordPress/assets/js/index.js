window.onload = function () {
  const hamToggle = () => {
    var x = document.getElementById('myLinks');
    if (x.style.display === 'block') {
      x.style.display = 'none';
    } else {
      x.style.display = 'block';
    }
  };

  const blogToggle = () => {
    var x = document.getElementById('blogLinks');
    if (x.style.display === 'block') {
      x.style.display = 'none';
    } else {
      x.style.display = 'block';
    }
  };

  document.getElementById('hamburger').onclick = function () {
    hamToggle();
  };

  document.getElementById('blogOption').onclick = function () {
    blogToggle();
  };
};
