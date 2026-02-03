<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bekzod's Homewrk</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family: Arial, sans-serif;background:black;color:white;overflow-x:hidden;transition:0.5s;}
body.light{background:#f2f2f2;color:#111;}
canvas{position:fixed;top:0;left:0;z-index:-1;}
.controls{position:fixed;right:20px;bottom:20px;z-index:2000;}
.controls button{display:block;margin:10px 0;padding:12px 20px;background:black;color:red;border:2px solid red;border-radius:10px;cursor:pointer;font-weight:bold;box-shadow:0 0 15px red;}
body.light .controls button{background:white;color:#111;border:2px solid #111;}
nav{position:fixed;top:0;width:100%;background:rgba(0,0,0,0.8);padding:15px;text-align:center;border-bottom:2px solid red;z-index:1000;}
body.light nav{background:rgba(255,255,255,0.8);}
nav a{color:#ff0033;margin:0 20px;text-decoration:none;font-weight:bold;letter-spacing:2px;text-shadow:0 0 10px red;}
header{height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;text-align:center;}
header h1{font-size:3.5rem;color:#ff0033;text-shadow:0 0 25px red;animation: glow 2s infinite alternate;}
header p{font-size:1.5rem;margin-top:15px;}
.typing{border-right:3px solid red;padding-right:6px;}
section{padding:100px 15%;opacity:0;transform:translateY(60px);transition:1s;}
section.show{opacity:1;transform:translateY(0);}
h2{color:#ff0033;text-shadow:0 0 15px red;margin-bottom:20px;}
.card{background:rgba(255,0,0,0.05);border:2px solid red;padding:25px;border-radius:15px;margin-bottom:30px;box-shadow:0 0 20px red;transition:0.4s;}
.card:hover{transform:scale(1.05);box-shadow:0 0 40px red;}
body.light .card{border:2px solid #111;box-shadow:0 0 10px #333;}
footer{text-align:center;padding:20px;border-top:2px solid red;}
@keyframes glow{from{ text-shadow:0 0 10px red;} to{ text-shadow:0 0 30px red;}}
html{scroll-behavior:smooth;}
</style>
</head>
<body>

<canvas id="bg"></canvas>

<!-- MUSIC -->
<audio id="bgMusic" loop>
  <source src="music.mp3" type="audio/mpeg">
</audio>

<div class="controls">
  <button onclick="toggleMusic()">🎧 Music ON</button>
  <button onclick="toggleMode()">🌙 / ☀️ Night-Day</button>
</div>

<nav>
  <a href="#home">HOME</a>
  <a href="#about">ABOUT</a>
  <a href="#interests">INTERESTS</a>
  <a href="#goals">GOALS</a>
  <a href="#skills">SKILLS</a>
  <a href="#contact">CONTACT</a>
</nav>

<header id="home">
  <h1>Bekzod's Homewrk</h1>
  <p class="typing" id="typingText"></p>
</header>

<section id="about">
<h2>About Me</h2>
<div class="card">
<p>My name is Bekzodbek Ramatov and I am 15 years old. I am passionate about technology, programming, and learning new things.</p>
<p>I love exploring how games and applications are built, and my dream is to become a professional IT specialist.</p>
</div>
</section>

<section id="interests">
<h2>My Interests</h2>
<div class="card">
<ul>
<li>🎮 Gaming and game development</li>
<li>💻 Programming and IT technologies</li>
<li>📘 Learning English language</li>
</ul>
</div>
</section>

<section id="goals">
<h2>My Goals</h2>
<div class="card">
<p>I want to master programming, build innovative digital solutions, and work on exciting IT projects in the future.</p>
</div>
</section>

<section id="skills">
<h2>My Skills</h2>
<div class="card">
<ul>
<li>HTML & CSS</li>
<li>PHP (Learning)</li>
<li>Creative thinking</li>
<li>Problem solving</li>
<li>English (Improving)</li>
</ul>
</div>
</section>

<section id="contact">
<h2>Contact Me</h2>
<div class="card">
<p>Email: bekzodbek@example.com</p>
<p>Telegram: @bekzodbek</p>
</div>
</section>

<footer>
<p>© 2026 Bekzodbek Ramatov | Neon Cyber Portfolio</p>
</footer>

<script>
// Music toggle
let music = document.getElementById("bgMusic");
let playing = false;
function toggleMusic(){
  if(!playing){music.play(); playing=true; document.querySelector(".controls button").innerHTML="⏸ Music OFF";}
  else{music.pause(); playing=false; document.querySelector(".controls button").innerHTML="🎧 Music ON";}
}

// Day / Night toggle
function toggleMode(){document.body.classList.toggle("light");}

// Typing effect
const text = "15-year-old | Future IT Developer | Neon Cyber Portfolio";
let i=0;
function typing(){if(i<text.length){document.getElementById("typingText").innerHTML+=text.charAt(i);i++;setTimeout(typing,70);}}
typing();

// Scroll animation
const sections=document.querySelectorAll("section");
window.addEventListener("scroll",()=>{sections.forEach(sec=>{const top=sec.getBoundingClientRect().top;if(top<window.innerHeight-100){sec.classList.add("show");}});});

// Particle background
const canvas=document.getElementById("bg");
const ctx=canvas.getContext("2d");
canvas.width=window.innerWidth;
canvas.height=window.innerHeight;
let particles=[];
for(let i=0;i<120;i++){particles.push({x:Math.random()*canvas.width,y:Math.random()*canvas.height,vx:(Math.random()-0.5),vy:(Math.random()-0.5),size:2});}
function animate(){ctx.clearRect(0,0,canvas.width,canvas.height);ctx.fillStyle="red";particles.forEach(p=>{p.x+=p.vx;p.y+=p.vy;if(p.x<0||p.x>canvas.width)p.vx*=-1;if(p.y<0||p.y>canvas.height)p.vy*=-1;ctx.beginPath();ctx.arc(p.x,p.y,p.size,0,Math.PI*2);ctx.fill();});requestAnimationFrame(animate);}
animate();
</script>
</body>
</html>
