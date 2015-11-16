/**
 * Created by Sander Geraedts on 05/11/2015.
 */
function toggleNavPanel(x){
    var panel = document.getElementById(x), maxH= 1 + panel.firstElementChild.childElementCount*51 + "px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
    } else {
        panel.style.height = maxH;
    }
}

function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds){
            break;
        }
    }
}

function toggleCheckbox(cbId){
    var checkbox = document.getElementById(cbId);

    if(checkbox.alt == 'checkbox - unchecked'){
        checkbox.style.opacity = 0;
        checkbox.src = 'assets\\img\\cbChecked.png';
        checkbox.alt = 'checkbox - checked'
        checkbox.style.opacity = 1;
    } else{
        checkbox.style.opacity = 0;
        checkbox.src = 'assets\\img\\cbUnchecked.png';
        checkbox.alt = 'checkbox - unchecked'
        checkbox.style.opacity = 1;
    }
}