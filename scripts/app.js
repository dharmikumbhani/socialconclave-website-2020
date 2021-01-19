//Loading

// Header NavBar
function toggleNav(){
    document.querySelector(".slider-menu").classList.toggle("slider-menu-animation")
    document.querySelector('.ham').classList.toggle('active')
}
function toggleAgendas(){
    document.querySelector(".specificagendas").classList.toggle("specific-agendas-animation")
}
function toggleAboutUs(){
    document.querySelector(".aboutuslist").classList.toggle("aboutus-list-animation")
}

//Faq's Page accordion
const items = document.querySelectorAll(".accordion a");
console.log(items)
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
items.forEach(item => item.addEventListener('click', toggleAccordion));


var result = bowser.getParser(window.navigator.userAgent);
console.log(result.parsedResult.browser.name);
if (result.parsedResult.browser.name == "Chrome"){
  // Team Conclave Page image hover effect
let img = document.querySelectorAll(".photocontainer")

img.forEach(img  => document.addEventListener('mousemove', function(e){
    if(e.x > img.getBoundingClientRect().x
    && e.x < img.getBoundingClientRect().x + img.getBoundingClientRect().width
    && e.y > img.getBoundingClientRect().y
    && e.y < img.getBoundingClientRect().y + img.getBoundingClientRect().height){

        if(e.x > img.getBoundingClientRect().x
        && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)){
            let valueXLeft = (img.getBoundingClientRect().width/2 - (e.x - img.getBoundingClientRect().x))/5.5;
            gsap.to(img, 1, {rotationY: -1 * valueXLeft})
        }

        if(e.x > img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)
        && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width)){
            let valueXRight = (e.x - img.getBoundingClientRect().x  - img.getBoundingClientRect().width/2)/5.5;
            gsap.to(img, 1, {rotationY: valueXRight})
        }

        if(e.y > img.getBoundingClientRect().y
        && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().height/2)){
            let valueYTop = (img.getBoundingClientRect().height/2 - (e.y - img.getBoundingClientRect().y))/5.5;
            gsap.to(img, 1, {rotationX: valueYTop})
        }

        if(e.y > img.getBoundingClientRect().y + (img.getBoundingClientRect().height/2)
        && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().height)){
            let valueYBottom = (e.y - img.getBoundingClientRect().y  - img.getBoundingClientRect().height/2)/5.5;
            gsap.to(img, 1, {rotationX: -1  * valueYBottom})
        }
    }
    else{
        gsap.to(img, 2, {rotationX:0})
        gsap.to(img, 2, {rotationY:0})
    }
}))
}
else {
  console.log("THe hover Effect only works on Chrome")
}

// // Team Conclave Page image hover effect
// let img = document.querySelectorAll(".photocontainer")

// img.forEach(img  => document.addEventListener('mousemove', function(e){
//     if(e.x > img.getBoundingClientRect().x
//     && e.x < img.getBoundingClientRect().x + img.getBoundingClientRect().width
//     && e.y > img.getBoundingClientRect().y
//     && e.y < img.getBoundingClientRect().y + img.getBoundingClientRect().height){

//         if(e.x > img.getBoundingClientRect().x
//         && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)){
//             let valueXLeft = (img.getBoundingClientRect().width/2 - (e.x - img.getBoundingClientRect().x))/5.5;
//             gsap.to(img, 1, {rotationY: -1 * valueXLeft})
//         }

//         if(e.x > img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)
//         && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width)){
//             let valueXRight = (e.x - img.getBoundingClientRect().x  - img.getBoundingClientRect().width/2)/5.5;
//             gsap.to(img, 1, {rotationY: valueXRight})
//         }

//         if(e.y > img.getBoundingClientRect().y
//         && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().height/2)){
//             let valueYTop = (img.getBoundingClientRect().height/2 - (e.y - img.getBoundingClientRect().y))/5.5;
//             gsap.to(img, 1, {rotationX: valueYTop})
//         }

//         if(e.y > img.getBoundingClientRect().y + (img.getBoundingClientRect().height/2)
//         && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().height)){
//             let valueYBottom = (e.y - img.getBoundingClientRect().y  - img.getBoundingClientRect().height/2)/5.5;
//             gsap.to(img, 1, {rotationX: -1  * valueYBottom})
//         }
//     }
//     else{
//         gsap.to(img, 2, {rotationX:0})
//         gsap.to(img, 2, {rotationY:0})
//     }
// }))



// Agendas



// Home Page
// Earth Model
// 

// Image Fade in Out
// var myIndex = 0;
// carousel();

// function carousel() {
//   var i;
//   var x = document.getElementsByClassName("photocontainerhp");
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   myIndex++;
//   if (myIndex > x.length) {myIndex = 1}    
//   x[myIndex-1].style.display = "block";  
//   setTimeout(carousel, 2000); // Change image every 2 seconds
// }


// Extra 10%
// var rellax = new Rellax('.rellax');
ScrollOut({
    once: true,
});



//Particle Background
document.addEventListener('DOMContentLoaded', function () {
    particleground(document.getElementById('particles'), {
        // dotColor: 'rgba(255, 255, 255, 0.5)',
        // dotColor: '#000000',
        // lineColor: 'rgba(255, 255, 255, 0.05)',
        // minSpeedX: 0.075,
        // maxSpeedX: 0.15,
        // minSpeedY: 0.075,
        // maxSpeedY: 0.15,
        // density: 30000, // One particle every n pixels
        // curvedLines: false,
        // proximity: 20, // How close two dots need to be before they join
        // parallaxMultiplier: 20, // Lower the number is more extreme parallax
        // particleRadius: 2, // Dot size
        // ForeGround
        dotColor: '#2AF598',
        // dotColor: '#003EE5',
        lineColor: '#2AF598',
        minSpeedX: 0.3,
        maxSpeedX: 0.6,
        minSpeedY: 0.3,
        maxSpeedY: 0.6,
        // directionY: 'down',
        density: 8500, // One particle every n pixels
        curvedLines: false,
        proximity: 1, // How close two dots need to be before they join
        parallaxMultiplier: 5, // Lower the number is more extreme parallax
        particleRadius: 4, // Dot size
    });
    // var intro = document.getElementById('intro');
    // intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
  }, false);
  
  //Swiper JS
  var timelineSwiper = new Swiper ('.timeline .swiper-container', {
    direction: 'vertical',
    loop: true,
    speed: 1600,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    pagination: '.swiper-pagination',
    paginationBulletRender: function (swiper, index, className) {
      var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
      return '<span class="' + className + '">' + year + '</span>';
    },
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
      768: {
        direction: 'horizontal',
      }
    }
  });