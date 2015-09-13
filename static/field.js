var c = document.getElementById("canvas-container");
var ctx = c.getContext("2d");
var stripeFill = [];
var stripeVelocity = [];
var unitSize;
var colorText = "200, 200, 200,";
var stripeCount = 100;
ctx.canvas.width  = window.innerWidth;
ctx.canvas.height = window.innerHeight;
var upperLimit = 100;
var lowerLimit = 0;

unitSize = window.innerWidth/stripeCount;

for (var i = 0; i < stripeCount; i++){
  stripeFill[i] = Math.round(Math.random()*upperLimit);
  stripeVelocity[i] = random(-.6,.6);
}

function wiggle(){
  for (var i = 0; i < stripeCount; i++){
    stripeVelocity[i] += random(-.1, .1);
    if(Math.abs(stripeVelocity[i]) > 3){
      stripeVelocity[i] = 3*Math.abs(stripeVelocity[i])/stripeVelocity[i];
    }
    stripeFill[i] += stripeVelocity[i];
    if (stripeFill[i]<lowerLimit){
      stripeFill[i] = lowerLimit;
      stripeVelocity[i] = 3;
    }
    else if (stripeFill[i]>upperLimit){
      stripeFill[i] = upperLimit;
      stripeVelocity[i] = -3;
    }
  }
}

setInterval(execute,50);

function execute(){
    wiggle();
    ctx.fillStyle = "rgba(255, 255, 255, 1)";
    ctx.fillRect(0,0,window.innerWidth,window.innerHeight);

    for (var i = 0; i < stripeCount; i++){
      ctx.fillStyle = "rgba(180,180,180," + stripeFill[i]/255 + ")" ;
      ctx.fillRect(i*unitSize,0,unitSize,window.innerHeight)
    }
}

function bob(item){
  return function(){item.css({display:"none"});}
}

function random (x, y){
  var answer = Math.random()*(y-x)+x;
  return answer;
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
