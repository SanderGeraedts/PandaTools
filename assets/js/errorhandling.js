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

function convertDueDate(dateString){
    var result = 0;

    var day = dateString.substring(0,2);
    var month = dateString.substring(3,5);
    var year = dateString.substring(6);

    if(day.length == 2){
        if(day.substring(0,1) == '0') {
            day = day.substring(1, 2);
        }
    }

    if(month.length == 2){
        if(month.substring(0,1) == '0') {
            month = month.substring(1, 2);
        }
    }

    if(year.length == 2){
        year = "20" + year;
    }

    day = parseInt(day);
    month = parseInt(month);
    year = parseInt(year);

    currentDate = new Date();

    result += (day - currentDate.getDate());
    result += ((month - (currentDate.getMonth()+1))*30.5);
    result += ((year - currentDate.getFullYear())*365.25);

    result = parseInt(result);

    return result;
}

function checkDueDate(invoiceClass){
    var invoices = document.getElementsByClassName(invoiceClass);

    for(var i = 0; i < invoices.length; i++){
        var duedate = invoices[i].getElementsByClassName('daysDue')[0];
        duedate.innerText = convertDueDate(duedate.innerText);
        if(duedate.innerText < 0){
            duedate.style.color = '#FF0000';
        }

        duedate.innerText += ' days';
    }
}

function checkSentDate(checkboxId, textboxId, labelId){
    var checkbox = document.getElementById(checkboxId);
    var textbox = document.getElementById(textboxId);
    var label = document.getElementById(labelId);

    if(checkbox.checked == true){
        textbox.style.display = 'inline-block';
        label.style.display = 'inline-block';
    }
    else{
        textbox.style.display = 'none';
        label.style.display = 'none';
    }
}