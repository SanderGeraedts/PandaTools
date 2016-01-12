/**
 * Created by Sander Geraedts on 16/11/2015.
 */

function filterPaid(filterId, className){
    var filter = document.getElementById(filterId);
    var selectionItem = filter.selectedOptions.item(0);
    var input = selectionItem.innerText;
    var elements = document.getElementsByClassName(className);

    if(input == "Unpaid"){
        for(var i = 0; i < elements.length; i++){
            if(elements[i].getElementsByTagName('img')[0].alt == 'checkbox - unchecked'){
                elements[i].style.display = 'block';
            }
            else{
                elements[i].style.display = 'none';
            }
        }
    }
    else if(input == "Paid"){
        for(var i = 0; i < elements.length; i++){
            if(elements[i].getElementsByTagName('img')[0].alt == 'checkbox - unchecked'){
                elements[i].style.display = 'none';
            }
            else{
                elements[i].style.display = 'block';
            }
        }
    }
    else if(input == "No Filter"){
        for(var i = 0; i < elements.length; i++){
            if(elements[i].getElementsByTagName('img')[0].alt == 'checkbox - unchecked'){
                elements[i].style.display = 'block';
            }
            else{
                elements[i].style.display = 'block';
            }
        }
    }

}

function readDescription(descriptionId){
    var description = document.getElementById(descriptionId);

    if(description.style.whiteSpace == 'normal'){
        description.style.whiteSpace = 'nowrap';
    }
    else{
        description.style.whiteSpace = 'normal';
    }
}