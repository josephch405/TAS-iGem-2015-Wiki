var c = document.getElementById("canvas-container");
var ctx = c.getContext("2d");
var counter = 0;
var cubes = [[],[]];
var unitSize;

ctx.canvas.width  = window.innerWidth;
ctx.canvas.height = window.innerHeight;

unitSize = window.innerWidth/40;

for (var i = 0; i < 40; i++){
  cubes[i] = [];
  for (var ii = 0; ii < window.innerHeight/unitSize; ii++){
    cubes[i].push(new Cube(i * unitSize, ii * unitSize));
  }
}

function Cube(x, y){
    this.x = x;
    this.y = y;
    this.strength = 0;
    this.vStrength = 0;
    this.step = function(){
      this.vStrength += (Math.random()-.5)/100;
      this.strength += this.vStrength;

      if (this.strength > .6){
        this.strength = .6;
        this.vStrength = 0;
      }
      else if (this.strength <= 0.2){
        this.strength = 0.2;
        this.vStrength = 0;
      }
    }
    
    this.paint = function(){
      //var grd = ctx.createRadialGradient(this.x+200, this.y+200, 0, this.x+200, this.y+200, 200);
      //grd.addColorStop(0, "rgba(255,200,100,"+ this.strength +")");
      //grd.addColorStop(1, "rgba(255,255,255,0)");

      ctx.fillStyle = "rgba(50, 200, 255,"+ this.strength +")";
      //ctx.fillStyle = "rgba(255,200,100,"+ this.strength +")";
      ctx.fillRect(this.x,this.y,unitSize,unitSize);
    }
}

setInterval(execute,20);

function execute(){
    counter += 1;
    ctx.fillStyle = "rgba(256, 256, 256, 1)";
    ctx.fillRect(0,0,window.innerWidth,window.innerHeight);
    for (var i in cubes){
      for (var ii in cubes[i]){
        cubes[i][ii].step();
        cubes[i][ii].paint();
      }
    }
}