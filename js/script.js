
document.getElementById('colapse-menu').onclick = function changeContent() {

    if(document.getElementById('sidebar').classList.contains('colapsed')){
        document.getElementById('sidebar').classList.remove('colapsed');
        
        document.getElementById('main').classList.replace('col-lg-12','col-lg-10');
        document.getElementById('paraRemover').classList.remove('col-lg-1');
    }else{
        document.getElementById('sidebar').classList.add('colapsed');
        document.getElementById('main').classList.replace('col-lg-10','col-lg-12');
        document.getElementById('linha').insertAdjacentHTML("afterbegin","<div class='col-lg-1' id='paraRemover'> </div>");
    }
    
 
 }