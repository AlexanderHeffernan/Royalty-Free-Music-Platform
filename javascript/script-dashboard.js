const filterOne = document.querySelector(".filter-button-one");
const filterTwo = document.querySelector(".filter-button-two");

var clickOne = false
function filterClickOne() {
    if (clickOne == false) {
        filterOne.classList.add('material-icons-clicked')
        clickOne = true;
    } else {
        filterOne.classList.remove('material-icons-clicked')
        clickOne = false;
    }
}
var clickTwo = false
function filterClickTwo() {
    if (clickTwo == false) {
        filterTwo.classList.add('material-icons-clicked')
        clickTwo = true;
    } else {
        filterTwo.classList.remove('material-icons-clicked')
        clickTwo = false;
    }
}


const profileSettings = document.querySelector(".profile-settings");
var clickThree = false
function profileSettingsFunction() {
    if (clickThree == false) {
        profileSettings.classList.add('clicked')
        clickThree = true;
    }
}
function profileSettingsFunctionHide() {
    if (clickThree == true) {
        profileSettings.classList.remove('clicked')
        clickThree = false;
    }
}