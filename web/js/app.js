// AJAX

const form = {
  nome: document.getElementById('nome'),
  email: document.getElementById('email'),
  assunto: document.getElementById('assunto'),
  conteudo: document.getElementById('conteudo'),
  submit: document.getElementById('btn-submit'),
  messages: document.getElementById('messages')
};

const msg = {
  erro_nome: document.querySelector('#msg_name'),
  erro_email: document.querySelector('#msg_email'),
  erro_assunto: document.querySelector('#msg_subject'),
  erro_conteudo: document.querySelector('#msg_content'),
}

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
    if (responseObject) {
      handleResponse(responseObject);
    }
  };

  const requestData = `nome=${form.nome.value}&email=${form.email.value}&assunto=${form.assunto.value}&conteudo=${form.conteudo.value}`

  request.open('post', 'form-validate.php');
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  request.send(requestData);


  function handleResponse(responseObject) {
    setTimeout(() => {
      form.submit.removeAttribute('disabled');
      form.submit.classList.remove('disabled');
      form.messages.style.display = "none";
    }, 5000);

    if (responseObject.ok) {
      while (form.messages.childElementCount > 0) {
        form.messages.removeChild(form.messages.lastElementChild);
      }
      form.nome.value = '';
      form.email.value = '';
      form.assunto.value = '';
      form.conteudo.value = '';

      msg.erro_nome.textContent = '';
      msg.erro_email.textContent = '';
      msg.erro_assunto.textContent = '';
      msg.erro_conteudo.textContent = '';

      responseObject.mensagens.forEach((message) => {
        const li = document.createElement('li');
        li.textContent = message;
        form.messages.appendChild(li);
        li.style.cursor = 'auto';
      });

      form.messages.classList.add('sucesso');
      form.messages.classList.remove('erro');
      form.messages.style.display = "block";

      document.getElementById('contact').scrollIntoView();
    } else {
      form.messages.style.display = "none";

      msg.erro_nome.textContent = responseObject.msg_name;
      msg.erro_email.textContent = responseObject.msg_email;
      msg.erro_assunto.textContent = responseObject.msg_subject;
      msg.erro_conteudo.textContent = responseObject.msg_content;

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

window.addEventListener("scroll", function(event) {
  let scroll = this.scrollY;

  let distanceToTop = document.getElementById('about').offsetTop;

  if (this.scrollY < (distanceToTop - 120)) {
    document.querySelector('.icon-top').style.display = 'none';
  } else {
    document.querySelector('.icon-top').style.display = 'block';
  }
});

btnUp.addEventListener('click', (event) => {
  const base_url = window.location.origin;
  window.location.href = `${base_url}/#welcome`;
});