var c = document.getElementById("canvas-container");
var ctx = c.getContext("2d");
var counter = 0;
var cubes = [[],[]];
var unitSize;
var colorText = "0, 255, 255,";

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
      this.vStrength += (Math.random()-.5)/500;
      this.strength += this.vStrength;

      if (this.strength > .2){
        this.strength = .2;
        this.vStrength = 0;
      }
      else if (this.strength <= 0){
        this.strength = 0;
        this.vStrength = 0;
      }
    }
    
    this.paint = function(){
      ctx.fillStyle = "rgba(" + colorText + this.strength +")";
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

$(".dropdown").mouseenter(function(){
  //console.log("bobby");
    $(this).find(".dropdown-menu").css({height:"0px"});
    $(this).find(".dropdown-menu").css({display:"block"});
    $(this).find(".dropdown-menu").animate({height:"160px"},150,"swing",function(){});
});

$(".dropdown").mouseleave(function(){
  $(this).find(".dropdown-menu").animate({height:"0px"},150,"swing", bob($(this).find(".dropdown-menu")));//};
});

function bob(item){
  return function(){item.css({display:"none"});}
}