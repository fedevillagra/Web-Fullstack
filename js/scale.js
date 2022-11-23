function zoom(cuadro){
    var box=document.getElementById(cuadro)
    if(box.style.transform==''){
        box.style.transform='scale(1.1)'
        box.style.transition='transform 0.5s'
    }else{
        box.style.transform=''
    }
}