var c = document.getElementById("canvas-container");
var ctx = c.getContext("2d");
var counter = 0;
var cubes = [];


ctx.canvas.width  = window.innerWidth;
ctx.canvas.height = window.innerHeight;

function Cube(x, y){
    this.x = x;
    this.y = y;
    this.vx = 0;
    this.vy = 0;
    this.yCount = 0;
    this.touched = false;
    this.strength = 0;
    this.step = function(){                
        this.yCount += 1;
        /*if (this.yCount > 4){
            this.yCount = 0;*/
            this.vx += (Math.random()-.5);
            this.vy += (Math.random()-.5);
            this.x += this.vx;
            this.y += this.vy;

            if (this.touched){
              //this.y += 1;
              this.strength -= .004;
            }
            else {
              this.strength += .008;
              if (this.strength > .8){
                this.touched = true;
              }
            }
        //}
    }
    
    this.paint = function(){
      var grd = ctx.createRadialGradient(this.x+200, this.y+200, 0, this.x+200, this.y+200, 200);
      grd.addColorStop(0, "rgba(255,200,100,"+ this.strength +")");
      grd.addColorStop(1, "rgba(255,255,255,0)");
      ctx.fillStyle = grd;
      ctx.fillRect(this.x,this.y,400,400);
    }
}

setInterval(execute,20);

function execute(){
    counter += 1;
    ctx.fillStyle = "rgba(256, 256, 256, 1)";
    ctx.fillRect(0,0,window.innerWidth,window.innerHeight);
    for (var i in cubes){
        cubes[i].step();
        if (cubes[i].strength < 0){
              cubes.splice(i, 1);
        }
        else{
          cubes[i].paint();
        }
    }
    
    if (counter > 50){
        counter = 0;
        ctx.fillStyle = "rgba(255, 100, 100, 1)";
        for (var i = 0; i < 10; i++){
        cubes.push(new Cube(Math.floor(window.innerWidth*Math.random())-200,Math.floor(window.innerHeight*Math.random())-200));
    }
    }

}