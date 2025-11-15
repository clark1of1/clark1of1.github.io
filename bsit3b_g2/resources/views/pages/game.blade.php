@extends('layouts.app')

@section('content')
<section class="relative h-screen bg-cover bg-center" 
           style="background-image: url(httpss://caltechsites-prod-assets.s3.amazonaws.com/scienceexchange/images/wind-turbine-future-energy.2e16d0ba.fill-933x525-c100.jpg">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
        Pollution Dodger
      </h1>
      <p class="text-lg md:text-xl text-gray-300 mb-6 max-w-2xl" data-aos="fade-up">
        Select a level and dodge pollution to save the planet! Use ← → arrows to move. Collect the seedling to gain points!
        </p>
  <div class="flex justify-center mb-8" id="levelMenu">
    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 mx-2 rounded" onclick="startGame(1)">Level 1</button>
    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 mx-2 rounded" onclick="startGame(2)">Level 2</button>
    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 mx-2 rounded" onclick="startGame(3)">Level 3</button>
    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 mx-2 rounded" onclick="startGame(4)">Level 4</button>
    <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 mx-2 rounded" onclick="startGame(5)">Level 5</button>
  </div>

  <div class="flex justify-center">
    <canvas id="gameCanvas" width="900" height="400" class="bg-gray-900 rounded-lg shadow-lg" style="display:none;"></canvas>
  </div>
  <p class="text-center mt-4 text-green-400 font-semibold" id="scoreBoard" style="display:none;">
    Score: <span id="score">0</span> | Level: <span id="level">1</span>
  </p>
</section>

<script>
// Canvas setup
const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');

// Images
const bgLayers = [
    new Image(), new Image(), new Image()
];
bgLayers[0].src = '/images/game/background.png';
bgLayers[1].src = '/images/game/background2.png';
bgLayers[2].src = '/images/game/background3.png';

const playerImg = new Image();
playerImg.src = '/images/game/player_spritesheet.png'; // animated sprite
const pollutionImgs = [
    new Image(), new Image()
]; // different obstacles
pollutionImgs[0].src = '/images/game/pollution1.png';
pollutionImgs[1].src = '/images/game/pollution2.png';
const solarImg = new Image();
solarImg.src = '/images/game/solar.png';

// Preload images
let imagesLoaded = 0;
const totalImages = 7;
function imageLoaded(){ imagesLoaded++; }
bgLayers.forEach(img=>img.onload=imageLoaded);
playerImg.onload = imageLoaded;
pollutionImgs.forEach(img=>img.onload=imageLoaded);
solarImg.onload = imageLoaded;

// Game variables
let player, obstacles, collectibles, score, level, gameOver, keys, bgX, currentFrame;
let targetScore = 100;

// Sounds
const collectSound = new Audio('https://freesound.org/data/previews/256/256113_3263906-lq.mp3');
const hitSound = new Audio('https://freesound.org/data/previews/351/351624_3248244-lq.mp3');

// Start game
function startGame(selectedLevel){
    document.getElementById('levelMenu').style.display = 'none';
    canvas.style.display = 'block';
    document.getElementById('scoreBoard').style.display = 'block';

    // Initialize variables
    player = { x: 420, y: 330, width: 60, height: 60, speed: 9, frameWidth:60, frameHeight:60 };
    obstacles = [];
    collectibles = [];
    score = 0;
    level = selectedLevel;
    gameOver = false;
    keys = {};
    bgX = [0,0,0];
    currentFrame = 0;

    // Set target score per level
    targetScore = 100 + (level-1)*50;

    document.getElementById('level').innerText = level;
    document.getElementById('score').innerText = score;

    requestAnimationFrame(update);
}

// Controls
document.addEventListener('keydown', e => { if(keys) keys[e.key]=true; });
document.addEventListener('keyup', e => { if(keys) keys[e.key]=false; });

// Restart
function restartGame(){
    document.getElementById('levelMenu').style.display = 'flex';
    canvas.style.display = 'none';
    document.getElementById('scoreBoard').style.display = 'none';
}

// Game loop
function update(){
    if(gameOver) return;

    ctx.clearRect(0,0,canvas.width,canvas.height);

    // Parallax background scroll
    bgLayers.forEach((bg,i)=>{
        bgX[i] -= 1 + i*level*0.3;
        if(bgX[i] <= -canvas.width) bgX[i]=0;
        ctx.drawImage(bg,bgX[i],0,canvas.width,canvas.height);
        ctx.drawImage(bg,bgX[i]+canvas.width,0,canvas.width,canvas.height);
    });

    // Player animation (sprite sheet 4 frames)
    currentFrame = (currentFrame + 0.2) % 4;
    if(keys['ArrowLeft'] && player.x>0) player.x -= player.speed;
    if(keys['ArrowRight'] && player.x+player.width<canvas.width) player.x += player.speed;
    ctx.drawImage(playerImg, Math.floor(currentFrame)*player.frameWidth, 0, player.frameWidth, player.frameHeight, player.x, player.y, player.width, player.height);

    // Spawn obstacles
    if(Math.random() < 0.01 + level*0.005){
        const type = Math.floor(Math.random()*pollutionImgs.length);
        obstacles.push({ x: Math.random()*(canvas.width-50), y: -50, width:50, height:50, type });
    }

    // Spawn collectibles
    if(Math.random() < 0.008){
        collectibles.push({ x: Math.random()*(canvas.width-40), y: -40, width:40, height:40 });
    }

    // Obstacles
    for(let i=obstacles.length-1;i>=0;i--){
        let o = obstacles[i];
        o.y += 3 + level*0.5;
        ctx.drawImage(pollutionImgs[o.type], o.x, o.y, o.width, o.height);
        if(o.x < player.x+player.width && o.x+o.width>player.x &&
           o.y < player.y+player.height && o.y+o.height>player.y){
            hitSound.play();
            gameOver = true;
            showGameOver();
        }
        if(o.y>canvas.height) obstacles.splice(i,1);
    }

    // Collectibles
    for(let i=collectibles.length-1;i>=0;i--){
        let c = collectibles[i];
        c.y += 2;
        ctx.drawImage(solarImg, c.x, c.y, c.width, c.height);
        if(c.x < player.x+player.width && c.x+c.width>player.x &&
           c.y < player.y+player.height && c.y+c.height>player.y){
            score += 10;
            collectSound.play();
            collectibles.splice(i,1);
        }
        if(c.y>canvas.height) collectibles.splice(i,1);
    }

    document.getElementById('score').innerText = Math.floor(score);

    // Check level complete
    if(score >= targetScore){
        gameOver = true;
        showLevelComplete();
        return;
    }

    requestAnimationFrame(update);
}

// Level Complete Overlay
function showLevelComplete(){
    ctx.fillStyle = 'rgba(0,0,0,0.7)';
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle = 'lime';
    ctx.font = '50px Arial';
    ctx.textAlign = 'center';
    ctx.fillText('LEVEL COMPLETE!', canvas.width/2, canvas.height/2 - 20);
    ctx.fillStyle = 'white';
    ctx.font = '25px Arial';
    if(level<5){
        ctx.fillText('Click to continue to next level', canvas.width/2, canvas.height/2 + 30);
    } else {
        ctx.fillText('You saved the planet! Click to restart', canvas.width/2, canvas.height/2 + 30);
    }

    canvas.addEventListener('click', function continueClick(){
        canvas.removeEventListener('click', continueClick);
        if(level<5){
            startGame(level+1);
        } else {
            restartGame();
        }
    });
}

// Game Over Overlay
function showGameOver(){
    ctx.fillStyle = 'rgba(0,0,0,0.7)';
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle = 'red';
    ctx.font = '50px Arial';
    ctx.textAlign = 'center';
    ctx.fillText('GAME OVER', canvas.width/2, canvas.height/2 - 20);
    ctx.fillStyle = 'white';
    ctx.font = '25px Arial';
    ctx.fillText('Click to Restart', canvas.width/2, canvas.height/2 + 30);

    canvas.addEventListener('click', function restartClick(){
        canvas.removeEventListener('click', restartClick);
        restartGame();
    });
}
</script>
@endsection
