
const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

let painting = false;


function startPosition() {
    painting = true;
}
function finishedPosition() {
    painting = false;
    ctx.beginPath();
}
var x = 1;
function myFunction() {
        x = x + 1;
}
function myFunction2() {
    if(x>0)
    x = x - 1;
    else{
        x=1;
        }
}
function draw(e) {
    if (!painting) { return };
    ctx.lineCap = "round";
    ctx.lineWidth = x;
    ctx.lineTo(e.clientX, e.clientY);
    ctx.stroke();
    ctx.strokeStyle = "black"
    ctx.beginPath();
    ctx.moveTo(e.clientX, e.clientY);

}
function clearCanvas() {
    clickX = new Array();
    clickY = new Array();
    clickDrag = new Array();
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
};
canvas.addEventListener("mousedown", startPosition);
canvas.addEventListener("mouseup", finishedPosition);
canvas.addEventListener("mousemove", draw);
