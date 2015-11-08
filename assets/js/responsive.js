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

function toggleCheckbox(cbId){
    var checkbox = document.getElementById(cbId);

    if(checkbox.alt == 'checkbox - unchecked'){
        checkbox.src = 'assets\\img\\cbChecked.png';
        checkbox.alt = 'checkbox - checked'
    } else{
        checkbox.src = 'assets\\img\\cbUnchecked.png';
        checkbox.alt = 'checkbox - unchecked'
    }
}