# Matheus Currículo Website

Meu site pessoal, currículo, portifolio desenvolvido por mim e minha namorada :cupid:. Utilizamos PHP e Javascript.

### Prerequisites

É necessário ter instalado `yarn`, `node >= 16`, `php >= 8` e `composer`.

### Installing

Passo a passo para fazer a instalação do ambiente.

Clone o repositório, entre no diretório e utilize os comandos abaixo para baixar as dependências:

```
$ yarn -i
$ composer install
```

Em caso de desenvolvimento, é necessário criar um link simbólico para dos assets para a pasta public

```
$ ln -s {path_to_project_source}/src/assets {path_to_public_html}/public/assets
```

Para subir o servidor local

```
$ yarn dev
$ php -S localhost:8000 -t public/
```

Para buildar o projeto para produção, use o comando:

```
$ yarn build
```

## Authors

* **Andressa Miki**  - [andressamiki](https://github.com/andressamiki)

* **Matheus Mazoni**  - [MMazoni](https://github.com/MMazoni)
