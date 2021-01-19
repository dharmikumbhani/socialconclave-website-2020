// Team Conclave Page
// let img = document.querySelectorAll(".photocontainer")
// console.log(img)
// document.addEventListener("mousemove", function(e){
//     if(e.x > img.getBoundingClientRect().x
//     && e.x < img.getBoundingClientRect().x + img.getBoundingClientRect().width
//     && e.y > img.getBoundingClientRect().y
//     && e.y < img.getBoundingClientRect().y + img.getBoundingClientRect().height){
//         console.log("trigger")
//         if(e.x > img.getBoundingClientRect().x
//         && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)){
//             let valueXLeft = (img.getBoundingClientRect().width/2 - (e.x - img.getBoundingClientRect().x))/10;
//             gsap.to(img, 1, {rotationY: -1*valueXLeft})
//         }

//         if(e.x > img.getBoundingClientRect().x + (img.getBoundingClientRect().width/2)
//         && e.x < img.getBoundingClientRect().x + (img.getBoundingClientRect().width)){
//             let valueXRight = (e.x - img.getBoundingClientRect().x  - img.getBoundingClientRect().width/2)/10;
//             gsap.to(img, 1, {rotationY: valueXRight})
//         }

//         if(e.y > img.getBoundingClientRect().y
//         && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().width/2)){
//             let valueYTop = (img.getBoundingClientRect().height/2 - (e.y - img.getBoundingClientRect().y))/10;
//             gsap.to(img, 1, {rotationX: valueYTop})
//         }

//         if(e.y > img.getBoundingClientRect().y + (img.getBoundingClientRect().height/2)
//         && e.y < img.getBoundingClientRect().y + (img.getBoundingClientRect().height)){
//             let valueYBottom = (e.y - img.getBoundingClientRect().y  - img.getBoundingClientRect().height/2)/10;
//             gsap.to(img, 1, {rotationX: -1  * valueYBottom})
//         }
//     }
// })

// Agendas

// Scenes
// const intro = document.querySelector('.intro');
// const video = intro.querySelector('video');
// const text = intro.querySelector('h1');
// // End Section
// const section = document.querySelector('section');
// const end = document.querySelector('h1');


// // Scroll Magic
// const controller = new ScrollMagic.Controller();

// const scene = new ScrollMagic.Scene({
//     duration: 60000,
//     triggerElement: intro,
//     triggerHook: 0
// })
// .addIndicators().setPin(intro).addTo(controller);

// // Video Animation
// let accelAmount = 0.5;
// let scrollpos = 0;
// let delay = 0;

// scene.on('update', e => {
//     scrollpos = e.scrollPos/1000;
// })
// setInterval(()=> {
//     delay += (scrollpos - delay) * accelAmount;

//     video.currentTime = delay;
// }, 33.33)



// Home Page
// Earth Model
// Variables for setup
// let container;
// let camers;
// let renderer;
// let headlinelogo;
// function init(){
//     container = document.querySelector('.headlinelogo')
//     //Create Scene
//     scene = new Three.Scene();

//     const fov = 35;
//     const aspect = container.clientWidth/ container.clientHeight;
//     const near = 0.1;
//     const far = 500;
//     camera = new Three.PerspectiveCamera(fov, aspect, near, far);

//     camera.position.set(-50, 40, 350);

//     renderer = new THREE.WebGLRenderer();
//     renderer.setSize( window.innerWidth, window.innerHeight );
//     document.body.appendChild( renderer.domElement );
//     var geometry = new THREE.BoxGeometry( 1, 1, 1 );
//     var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
//     var cube = new THREE.Mesh( geometry, material );
//     scene.add( cube );
//     function animate() {
//         requestAnimationFrame( animate );
//         renderer.render( scene, camera );
//     }
//     animate();
// }
// var canvas = createCanvas(100, 100);


// 3D flip slideshowm 1
// (function bfCards(elements, speed) {
// 	var cards1 = $('.cards1');
// 	var container1 = cards1.children('.cards__container1');
//     var front1 = container1.children('.cards__front');
//     var back1 = container1.children('.cards__back');
//     console.log(front1)

// 	function swapArticleClass(element, newClass) {
// 		element.removeClass(function(index, css) {
// 			return (css.match(/(^|\s)card-\S+/g) || []).join(' ');
// 		});

// 		element.addClass(newClass);
// 	}

// 	var onTick = function(i) {
// 		setTimeout(function() {
// 			var nextClass1;
// 			var currentClass1 = 'card-1-' + i;

// 			if (currentClass1 === elements)  {
//                 nextClass1 = 'card-1-' + (i + 1);
// 			} else {
//                 nextClass1 = 'card-1-1';
// 			}

// 			if (i % 2 === 0) {
// 				cards1.addClass('is-flipped');
// 				swapArticleClass(back1, currentClass1);
// 				setTimeout(function() {
// 					swapArticleClass(front1, nextClass1);
// 				}, speed / 2);
// 			} else {
// 				cards1.removeClass('is-flipped');
// 				swapArticleClass(front1, currentClass1);
// 				setTimeout(function() {
// 					swapArticleClass(back1, nextClass1);
// 				}, speed / 2);
// 			}
// 		}, speed * i);
//     };

// 	function cycle() {
// 		for (var i = 1; i <= elements; i++) {
// 			onTick(i);
// 		}
// 	};

// 	cycle();
// 	setInterval(cycle, speed * elements);
// })(cardAmount, flipSpeed);
