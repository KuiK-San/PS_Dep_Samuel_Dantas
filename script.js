var button = document.querySelector('#start')
var input = document.querySelector('#sintomas')
var log = document.querySelector('#log')
var gravando = false
var gravacao = null
var sintomas = ['febre', 'erupções', 'bolhas', 'inchaço', 'tosse', 'nariz', 'falta', 'ar', 'dificuldade', 'respiratória']


var recognition = new createRecognition()

/* console.log(recognition) */
button.addEventListener('click', e => {
    if(!recognition) return;

    gravando ? recognition.stop() : recognition.start()
    
})

function createRecognition(){
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition
    const recognition = SpeechRecognition !== undefined ? new SpeechRecognition() : null

    /* caso não seja encontrado a API de conversão de voz para texto */
    if(!recognition){
        input.value = "API não encontrada, verifique o navegador!"
        return
    }

    /* configurando recognition */

    recognition.lang = 'pt_BR'
    recognition.onstart = () => gravando = true
    recognition.onend = () => gravando = false
    recognition.onerror = e => console.log('error', e)
    recognition.onresult = e =>{
        gravacao = e.results[0][0].transcript
        log.value = gravacao
        gravacao = gravacao.split(" ")
        
        
        for (let i = 0; i < gravacao.length; i++) {
            var element = gravacao[i];
            if (element == 'dor') {
                var j = i
                element += " " + gravacao[j + 1]
                element += " " + gravacao[j + 2]
                input.value += element + ", "
                
            }
            sintomas.forEach(sintoma => {
                if(element == sintoma){
                    input.value += element + " "
                }
            });
        }

        


        /* console.log(gravacao) */
    } 

    /* retorno da função */
    return recognition
}

