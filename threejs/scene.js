var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.1, 1000 );

var renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth/4*3, window.innerHeight/4*3 );
document.body.appendChild( renderer.domElement );

var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );

var geometry = new THREE.BoxGeometry();

var cube = new THREE.Mesh( geometry, material );
var x=0;
var y=0;
var z=0;
camera.position.z=5;
scene.add(cube);
function animate() {
	requestAnimationFrame( animate );
    cube.rotation.x += x;
    cube.rotation.y += y;
    cube.rotation.z += z;
    renderer.render( scene, camera );
    renderer.setSize( window.innerWidth/4*3, window.innerHeight/4*3 );
}
animate();

window.addEventListener("load",btn,false)
function btn(){
    document.getElementById("+x").addEventListener("click",()=>{x+=0.01},false);
    document.getElementById("-x").addEventListener("click",()=>{x-=0.01},false);
    document.getElementById("+y").addEventListener("click",()=>{y+=0.01},false);
    document.getElementById("-y").addEventListener("click",()=>{y-=0.01},false);
    document.getElementById("+z").addEventListener("click",()=>{z+=0.01},false);
    document.getElementById("-z").addEventListener("click",()=>{z-=0.01},false);
    document.getElementById("reset").addEventListener("click",()=>{
        x=0;y=0;z=0;
        cube.rotation.x = 0;
        cube.rotation.y = 0;
        cube.rotation.z = 0;},false);
}