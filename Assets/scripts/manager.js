var elementoSpinne = document.getElementById ("LoadSpinner");
var ULRToLoad = "";


function LoadIndexPage (){
console.log ("Change to index Page");

ActiveLoadSpinner();
ULRToLoad = "index.html";
window.setTimeout(ChangePage, 1000);
}

function LoadGamePage ()
{
console.log ("Change to Game Page");

ActiveLoadSpinner();
ULRToLoad = "Games.php";
window.setTimeout(ChangePage, 1000);
}

function LoadProgramsPage ()
{
console.log ("Change to Programs Page");

ActiveLoadSpinner();
ULRToLoad = "Programs.html";
window.setTimeout(ChangePage, 1000);
}

function LoadPluginsPage ()
{
console.log ("Change to Plugins Page");

ActiveLoadSpinner();
ULRToLoad = "Plugins.html";
window.setTimeout(ChangePage, 1000);
}

function ChangePage (){
        window.location = ULRToLoad;
}

function ActiveLoadSpinner ()
{
document.getElementById("LoadSpinner").classList.add('spinner');
document.getElementById("LoadSpinner").classList.remove('_spinner');

document.getElementById("spinnerColor").classList.remove('_lds-ring');
document.getElementById("spinnerColor").classList.add('lds-ring');
}