let spinner = document.querySelector('.spinner')
window.addEventListener('load', function(){
    spinner.style.opacity = '0%'
    setTimeout(() => spinner.style.display = 'none', 1000);
})


const form1 = document.getElementById('form1')
const form2 = document.getElementById('form2')
const form3 = document.getElementById('form3')
const back1 = document.getElementById('back1')
const back2 = document.getElementById('back2')
const back3 = document.getElementById('back3')
const next = document.getElementById('next')
const next2 = document.getElementById('next2')
const send = document.getElementById('send')

back2.style.display = 'none'
back3.style.display = 'none'
form2.style.display = 'none'
form3.style.display = 'none'
next2.style.display = 'none'
send.style.display = 'none'


next.addEventListener('click', function() {
    form1.style.display = 'none'
    form2.style.display = 'block'

    back1.style.display = 'none'
    back2.style.display = 'block'

    next.style.display = 'none'
    next2.style.display = 'block'
})

back2.addEventListener('click', function() {
    form1.style.display = 'block'
    form2.style.display = 'none'

    back1.style.display = 'block'
    back2.style.display = 'none'

    next.style.display = 'block'
    next2.style.display = 'none'
})

next2.addEventListener('click', function() {
    form2.style.display = 'none'
    form3.style.display = 'block'

    back2.style.display = 'none'
    back3.style.display = 'block'

    next2.style.display = 'none'
    send.style.display = 'block'
})

back3.addEventListener('click', function() {
    form2.style.display = 'block'
    form3.style.display = 'none'

    back2.style.display = 'block'
    back3.style.display = 'none'

    next2.style.display = 'block'
    send.style.display = 'none'
})
