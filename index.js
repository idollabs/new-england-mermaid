//Blog Grid

const originColor1 = $('.child').css('background-color');

let isGridChange = [];
const classLength = document.getElementsByClassName('child').length;

for (let i = 0; i < classLength; i++) {
  isGridChange.push(false);
}

const handleBlogInfo = (itemKey) => {
  if (!isGridChange[itemKey]) {
    $('.child').eq(itemKey).css('background-color', 'yellow');
    isGridChange[itemKey] = true;
  } else {
    $('.child').eq(itemKey).css('background-color', originColor1);
    isGridChange[itemKey] = false;
  }
};

let gridChild = $('.child');

gridChild.on('mouseenter', function () {
  handleBlogInfo(gridChild.index(this));
});
gridChild.on('mouseleave', function () {
  handleBlogInfo(gridChild.index(this));
});

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
const hamToggle = () => {
  var x = document.getElementById('myLinks');
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }
};
