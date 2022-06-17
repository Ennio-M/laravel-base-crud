require('./bootstrap');


const delete_button = document.getElementById('delete_button')

delete_button.addEventListener("click", function(event){
    const resp = confirm('Sei sicuro di voler eliminare il fumetto?')
    if(!resp){
        event.preventDefault()
    }
})