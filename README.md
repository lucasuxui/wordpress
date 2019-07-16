# WordPress - Template

A base para nossos sites estáticos.

## Resumo do Projeto

Iremos usar SCSS, JS e PHP basicamente.

### Clone

Clone primeiramente o projeto.

Com HTTPS:
```
https://gitlab.com/lucasyem/wordpress-template.git
```
Com SSH:
```
git@gitlab.com:lucasyem/wordpress-template.git
```

### Obs

Apague o .git de sua pasta raiz do wp, pois agora você iniciará seus projetos nessa template.

### Installing

Com o Node.js instale os requisitos para o compilamento futuro.(Na pasta "gulp")

```
npm install
```

Depois instale o gulp global
```
npm install gulp-cli -g
```

E rode este comando no mesmo diretório.

```
gulp
```

E finalmente você estará compilando seu scss,js,imagens e fontes ao vivo.

### Banco de Dados

Crie um banco de dados para seu projeto.
ATENÇÃO! No arquivo wp-config.php (Na raiz do projeto), tem um nome padrão já definido da db,"wordpress".Se quiser mudar isto você tem que alterar este arquivo.

### Wordpress
    Execute no localhost o projeto e instale o wordpress. Após a instalação, escolha o tema da template no wordpress.
### Directory

Entre na pasta do nosso tema "base".
Obs: Pode renomear se quiser.

## Devenvolva!

Seja feliz e curta esta template.

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Authors

* **Lucas Oliveira** - *Initial work* - [Lucasyem](https://gitlab.com/lucasyem)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Web Development
* PHP
* SCSS
