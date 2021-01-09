//Blog Grid
const gridChild = $('.child');

const imgURL = 'images/Wave-at-Hampton-Beach.jpg';

const setBgImg = () => {
  gridChild.eq(0).css('backgound-image', `url(${imgURL})`);
};
setBgImg();

const originColor1 = $('.child').css('background-color');

let isGridChange = [];
const classLength = document.getElementsByClassName('child').length;

for (let i = 0; i < classLength; i++) {
  isGridChange.push(false);
}

const handleBlogInfo = (itemKey) => {
  if (!isGridChange[itemKey]) {
    $('.child').eq(itemKey).css('transition', 'all 0.2s linear');

    $('.child').eq(itemKey).css('background-color', 'yellow');
    isGridChange[itemKey] = true;
  } else {
    $('.child').eq(itemKey).css('transition', 'all 0.2s linear');

    $('.child').eq(itemKey).css('background-color', originColor1);
    isGridChange[itemKey] = false;
  }
};

//hover
// gridChild.on('mouseenter', function () {
//   handleBlogInfo(gridChild.index(this));
// });
// gridChild.on('mouseleave', function () {
//   handleBlogInfo(gridChild.index(this));
// });

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
const hamToggle = () => {
  var x = document.getElementById('myLinks');
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }
};
