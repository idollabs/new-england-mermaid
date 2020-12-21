//Blog Grid

const originColor1 = $('.child1').css('background-color');

let isGridChange1 = false;
let isGridChange2 = false;
let isGridChange3 = false;

const handleBlogInfo = (itemKey) => {
  if (itemKey == 1) {
    if (!isGridChange1) {
      $('.child1').css('background-color', 'yellow');
      isGridChange1 = true;
    } else {
      $('.child1').css('background-color', originColor1);
      isGridChange1 = false;
    }
  }
  if (itemKey == 2) {
    if (info2 === '') {
      setInfo2('hover worked');
    } else {
      setInfo2('');
    }
  }
  if (itemKey == 3) {
    if (info3 === '') {
      setInfo3('hover worked');
    } else {
      setInfo3('');
    }
  }
};

$('.child1').on('mouseenter', function () {
  handleBlogInfo(1);
});
$('.child1').on('mouseleave', function () {
  handleBlogInfo(1);
});
