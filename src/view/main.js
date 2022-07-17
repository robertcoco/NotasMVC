
function pauseTime() {
    var esteMomento = new Date();
    var hora = esteMomento.getHours();
    if(hora < 10) hora = '0' + hora;
    var minuto = esteMomento.getMinutes();
    if(minuto < 10) minuto = '0' + minuto;
    var segundo = esteMomento.getSeconds();
    if(segundo < 10) segundo = '0' + segundo;
    HoraCompleta= hora + " : " + minuto + " : " + segundo;
    document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
}
const detener = document.getElementById("button");
function HoraActual(){
    var esteMomento = new Date();
    var hora = esteMomento.getHours();
    if(hora < 10) hora = '0' + hora;
    var minuto = esteMomento.getMinutes();
    if(minuto < 10) minuto = '0' + minuto;
    var segundo = esteMomento.getSeconds();
    if(segundo < 10) segundo = '0' + segundo;
    HoraCompleta= hora + " : " + minuto + " : " + segundo;
    document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
    const t = setTimeout("HoraActual()",1000);
    detener.addEventListener("click", ()=>{
        clearInterval(t);//<-- st es el timer mismo
        })
    
    } 
        gsap.fromTo("form",{ duration: .5, y: -480 }, { duration: 1.5, ease: "bounce.out", y: 60, delay:1.5 });
        gsap.to("#contenedor_reloj", { duration: 1.5, ease: "", y: -70 });
        gsap.fromTo("h1",{duration: 1.5, y:-300}, {duration: 1, ease: "bounce.out", y: 20, delay:2,rotation:360, fontSize: 40,textShadow: "2px 2px 1px #f00"});
        gsap.fromTo (".parrafo", {fontSize:30, opacity:0, duration:.5}, {stagger:{
            amount:1,
            from:"start",
            ease:"power1"
        }, fontSize:40, opacity:1, duration:.2,delay:.5});
        gsap.to("input,textarea", {boxShadow:"2px 2px 2px 2px blue", duration:1, repeat:-1, delay:1});
        gsap.fromTo(".arrow",{left:"54%",bottom:"1%"}, {left:"52%",bottom:"4%", repeat:-1, duration:1, delay:1, yoyo:true});
        document.getElementsById("button").onclick = () => {
            clearTimeout() 
            pauseTime();
        }