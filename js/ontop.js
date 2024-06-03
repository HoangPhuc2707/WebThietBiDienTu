let mybutton = document.getElementById("myBtn");

window.onscroll = function() { scrollFunction();};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  // Thực hiện việc kéo lên một cách mượt mà
  function scrollToTop() {
    const currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentPosition > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, currentPosition - currentPosition / 25);
    }
  }

  scrollToTop();
}