// AJAX

const form = {
    nome: document.getElementById('nome'),
    email: document.getElementById('email'),
    assunto: document.getElementById('assunto'),
    conteudo: document.getElementById('conteudo'),
    submit: document.getElementById('btn-submit'),
    messages: document.getElementById('form-messages')
};

form.submit.addEventListener('click', (e) => {
    e.preventDefault();
    form.submit.setAttribute('disabled', true);
    form.submit.classList.add('disabled');
    const request = new XMLHttpRequest();

    
    request.onload = () => {
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);
        } catch (e) {
            console.error('Could not parse JSON!');
        }
        console.log(responseObject)
        if (responseObject) {
            handleResponse(responseObject);
        }
    };
    
    const requestData = `nome=${form.nome.value}&email=${form.email.value}&assunto=${form.assunto.value}&conteudo=${form.conteudo.value}`

    request.open('post', 'form-validate.php');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);

    function handleResponse (responseObject) {

        setTimeout(() => {
            form.submit.removeAttribute('disabled');
            form.submit.classList.remove('disabled');
        }, 3000);

        if (responseObject.ok) {
            form.nome.value = '';
            form.email.value = '';
            form.assunto.value = '';
            form.conteudo.value = '';
        } else {
            while (form.messages.firstChild) {
                form.messages.removeChild(form.messages.firstChild);
            }

            responseObject.mensagens.forEach((message) => {
                const li = document.createElement('li');
                li.textContent = message;
                form.messages.appendChild(li);
            });

            form.messages.style.display = "block";
        }
    }

    
})

// Menu Navbar

let nav = document.getElementById('menu');
let iconbar = document.querySelector('#nav-button');
nav.style.display = "none";

document.getElementsByTagName('body')[0].addEventListener("click", (e) => {
    if (nav.style.display === 'block' && e.target.id != 'nav-button') {
        nav.style.display = "none";
        removeCloseButton();
    }
});


function removeCloseButton() {
    iconbar.classList.remove('close-button');
    iconbar.innerHTML = '';
    iconbar.classList.add('icon-bars');
}

iconbar.addEventListener("click", (e) => {
    if (nav.style.display === 'none') {
        nav.style.display = "block";
        console.log(iconbar)
        iconbar.classList.remove('icon-bars');
        iconbar.innerHTML = '&times;';
        iconbar.classList.add('close-button');
    } else {
        nav.style.display = "none";
        removeCloseButton();
    }
});
// scroll

let btnUp = document.querySelector('.icon-top');

btnUp.style.display = 'none';

window.addEventListener("scroll", function (event) {
    let scroll = this.scrollY;

    let distanceToTop = document.getElementById('about').offsetTop;

    if( this.scrollY < (distanceToTop - 120)){
        document.querySelector('.icon-top').style.display = 'none';
    }else{
        document.querySelector('.icon-top').style.display = 'block';
    }
});


btnUp.addEventListener('click', (event) => {
    const base_url = window.location.origin;
    window.location.href = `${base_url}/#welcome`;
});