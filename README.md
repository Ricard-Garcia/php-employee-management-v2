`#html` `#css` `#js` `#php` `#master-in-software-engineering`

# PHP Employee Manager v2 <!-- omit in toc -->

> This current repository contains an employee manager that uses Manager and Controller PHP files to make Database queries and load data to a JSGrid and to forms.

> This app also alows to CRUD (Create Re Update Delete) employees both in Dashboard and Employee's page.

## Index <!-- omit in toc -->

- [Project key points](#project-key-points)
- [Directory structure](#directory-structure)
- [Built with](#built-with)
- [Resources](#resources)
- [TODO](#todo)
- [Bugs](#bugs)
- [Contributors](#contributors)

## Project key points

1. Design a database
2. Implementation of a database
3. Implementation of a MVC pattern
4. CRUD functionality

## Directory structure

This directory strcuture establishes the basic archictecture in which the MVC pattern will be exectued in this project.

```bash

repo
 ├── node_modules
 ├── .gitignore
 ├── assets
 ├── config
 ├── db
 ├── libs
 │     ├── Router.php
 │     ├── Controller.php
 │     ├── Model.php
 │     ├── View.php
 │     ├── Database.php
 │     └── sessionHelper.php
 ├── models
 │     ├── EmployeesModel.php
 │     └── LoginModel.php
 ├── controllers
 │     ├── EmployeesController.php
 │     ├── LoginController.php
 │     ├── SessionController.php
 │     └── ErrorController.php
 ├── views
 │     ├── login/index.php
 │     ├── dashboard/index.php
 │     ├── employee/index.php
 │     └── error/index.php
 └── index.php (main controller)

```

- `assets`: css & js.
- `config`: base constants.
- `db`: initial database.
- `libs`: base classes that will be extended in the app.

## Built with

\* HTML

\* CSS

\* JS (jQuery)

\* PHP

## Resources

### PHP

- [OOP (Object Oriented Programming) in PHP](https://www.php.net/manual/es/language.oop5.php)
- [PDO (PHP Data Objects) in PHP](https://www.php.net/manual/en/intro.pdo.php)
- [Class constructors & destructors](https://www.php.net/manual/es/language.oop5.decon.php)

### Docs 👀

- [JsGrid Documentation](http://js-grid.com/docs/)

### Libraries

- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [JsGrid](http://js-grid.com/)

## TODO 🤝

- Add admins.
- Responsive design.

## Bugs 🚨

- Bootstrap alerts might appear when hard reload pages.

## Contributors ✨

👤 [Hayk Petrosyan](https://github.com/haykbit)

👤 [Ricard Garcia](https://github.com/Ricard-Garcia)

<!-- <table>
  <tr>
    <td align="center"><a href="https://github.com/Ricard-Garcia"><img src="https://avatars.githubusercontent.com/u/80328331?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Ricard-Garcia</b></sub></a><br /><a href="https://github.com/Ricard-Garcia/php-employee-management-v2/commits?author=Ricard-Garcia" title="Code">💻</a> <a href="#design-Ricard-Garcia" title="Design">🎨</a> <a href="#ideas-Ricard-Garcia" title="Ideas, Planning, & Feedback">🤔</a> <a href="#projectManagement-Ricard-Garcia" title="Project Management">📆</a></td>
    <td align="center"><a href="https://github.com/mhfortuna"><img src="https://avatars.githubusercontent.com/u/66578026?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Mathias Fortuna</b></sub></a><br /><a href="https://github.com/Ricard-Garcia/php-employee-management-v2/commits?author=mhfortuna" title="Code">💻</a> <a href="#design-mhfortuna" title="Design">🎨</a> <a href="#ideas-mhfortuna" title="Ideas, Planning, & Feedback">🤔</a> <a href="#projectManagement-mhfortuna" title="Project Management">📆</a></td>
  </tr>
</table> -->
