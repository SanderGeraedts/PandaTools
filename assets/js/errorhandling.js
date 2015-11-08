/**
 * Created by Sander Geraedts on 07/11/2015.
 */
function showError(x){
    var panel = document.getElementById(x);
    if(panel.style.opacity == 0){
        panel.style.opacity = "1";
        panel.style.display = "inline-block";
    } else {
        panel.style.opacity = "0";
        panel.style.display = "none";
    }
}

function checkHoursSpent(spent, allocated) {
    var hrsSpent = document.getElementsByClassName(spent);
    var hrsAllocated = document.getElementsByClassName(allocated);

    for (var i = 0; i < hrsSpent.length; i++) {
        if(hrsAllocated[i].innerHTML < 0 && hrsSpent[i].innerHTML <0){
            hrsAllocated[i].style.color = '#FF0000';
            hrsSpent[i].style.color = '#FF0000';
        }
        else if(hrsAllocated[i].innerHTML < 0){
            hrsAllocated[i].style.color = '#FF0000';
        }
        else if (hrsSpent[i].innerHTML > hrsAllocated[i].innerHTML || hrsSpent[i].innerHTML < 0 ) {
            hrsSpent[i].style.color = '#FF0000';
        }
    }
}