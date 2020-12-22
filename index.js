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
  handleBlogInfo(0);
});
gridChild.on('mouseleave', function () {
  handleBlogInfo(0);
});
