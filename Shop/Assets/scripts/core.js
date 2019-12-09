function changeValueInSearchButton(){
    let filters = document.getElementsByClassName("filter");
    let filtersLength = filters.length;
    let buttonValue = document.getElementsByClassName("selectedValue");
    let button = document.getElementById("optionViewButton");
    let value = new Array();

    for(i = 0; i <= filtersLength - 1; i++){
        filters[i].addEventListener("click", function(){
            value[i] = this.value;
            buttonValue[0].innerHTML = value[i];

            button.checked = false;
        });
    }
}

changeValueInSearchButton();
