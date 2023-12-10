console.clear();

let duration = 0.4;
let isDay = true;

let scale = 30;
let toNightAnimation = gsap.timeline();

// hiệu khi khi chuyển đổi sáng tối
toNightAnimation
.to('#night-content', {duration: duration * 0.5, opacity: 1, ease: 'power2.inOut', x: 0})
.to('#circle', {
  duration: duration,
  ease: 'power4.in',
  scaleX: scale,
  scaleY: scale,
  x: 1,
  transformOrigin: '100% 50%',
}, 0)

.set('#circle', {
  scaleX:-scale,
  onUpdate: () => switchTime()
}, duration)

.to('#circle', {
  duration: duration,
  ease: 'power4.out',
  scaleX: -1,
  scaleY: 1,
  x: 2,
}, duration)
// đổi nền thì màu mặc định trắng sang màu xanh tối
.to('#day-content', {duration: duration * 0.5, opacity: 0.5}, duration * 1.5)
.to('body', {backgroundImage: 'linear-gradient(to top, rgb(0 25 43) 0%, rgb(0 0 0) 100%)', duration: duration * 2}, 0)
.to('.left-area',{backgroundColor: 'rgb(0, 46, 79)', duration: duration * 2}, 0)
.to('.app-container',{boxShadow: '0 0 0 10px rgba(255, 255, 255, 0.158)', duration: duration * 2}, 0)
.to('.main-area',{background: 'linear-gradient(97deg, rgb(10 42 65) 0%, rgb(19 32 61) 90%)', duration: duration * 2}, 0)
.to('.app-name',{color: '#ffffff', duration: duration * 2},0)
.to('h1', {color: '#ffffff', duration: duration * 2},0)
.to('h3', {color: '#ffffff', duration: duration * 2},0)
.to('.card',{backgroundColor: 'rgb(0, 46, 79)', duration: duration * 2}, 0)
.to('.card-2',{backgroundColor: 'rgb(48 58 65)', duration: duration * 2}, 0)
.to('.main-area', {color: '#ffffff', duration: duration * 2}, 0)
.to('.btn',{color: '#ffffff', duration: duration * 2}, 0)
.to('.btn.cancel', {color: '#032035', duration: duration * 2}, 0)
.to('textarea',{backgroundColor: '#032035', duration: duration * 2}, 0)
.to('.content',{backgroundColor: 'rgb(0, 46, 79)', duration: duration * 2}, 0)

let stars = Array.from(document.getElementsByClassName('star'));
stars.map(star => gsap.to(star, {duration: 'random(0.4, 1.5)', repeat: -1, yoyo: true, opacity: 'random(0.2, 0.5)'}))
gsap.to('.clouds-big', {duration: 15, repeat: -1, x: -74, ease: 'linear'})
gsap.to('.clouds-medium', {duration: 20, repeat: -1, x: -65, ease: 'linear'})
gsap.to('.clouds-small', {duration: 25, repeat: -1, x: -71, ease: 'linear'})

// nút sáng tối
let switchToggle = document.getElementById('input');
switchToggle.addEventListener('change', () => toggle())

let toggle = () => 
{
  isDay = switchToggle.checked == true;
  if (isDay) {
      toNightAnimation.reverse();
  } else {
      toNightAnimation.play();
  }
}



if(CodePen.isThumbnail) toggle();

toNightAnimation.reverse();
toNightAnimation.pause();