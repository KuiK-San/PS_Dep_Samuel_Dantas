var button = document.querySelector('#start');
var input = document.querySelector('#sintomas');

var recognition = createRecognition()

function createRecognition(){
    const SpeechRecognition = window.SpeechRecognition || window.webkitSeepchRecognition;
    const recognition = SpeechRecognition !== undefined ? ;

    console.log(recognition)
    /* caso não seja encontrado a API de conversão de voz para texto */

}