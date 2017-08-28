# MVC for web applications: basics

<i>A read for anyone who has never coding with MVC before or those wanting to brush up on previous MVC development skills.</i>

## Read:
* [MVC for Noobs](https://code.tutsplus.com/tutorials/mvc-for-noobs--net-10488) 
* [The MVC Pattern and PHP, Part 1](https://www.sitepoint.com/the-mvc-pattern-and-php-1/)
* [The MVC Pattern and PHP, Part 2](https://www.sitepoint.com/the-mvc-pattern-and-php-2/)

## MVC: model, view, controller

MVC (model, view, controller) is not a design pattern, it is a [software architectual pattern](https://en.wikipedia.org/wiki/Software_architecture) that describes a way to structure our application and the responsibilities and interactions for each part in that structure. In other words, keeping the presentation of data separate from the methods that interact with the data.

MVC widely used by web developers due to its emphasis on separation of concerns, and thus indirectly, reusable code. MVC is an example of [separating concerns](https://en.wikipedia.org/wiki/Separation_of_concerns#HTML.2C_CSS.2C_JavaScript).

Most important advantages we gain using MVC:
- a clear separation of presentation and aplication logic
- reduces the complexity when designing large applications
- helps keep code more structured and therefore easier maintain, test and reuse

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/MVC-Process.svg/500px-MVC-Process.svg.png" alt="">

## Controller:
- main function is to call and coordinate the necessary resources/objects needed to perform the user action
- usually the controller will call the appropriate model for the task and then selects the proper view
- contains internal-organizational logic for the application itself
- the Controller is only given task to perfom when the user interacts with the View first, and that each Controller function is a trigger, set off by the user's interaction with the View
- without user interactions, the Controller has no purpose, it is the only part of the pattern the user should be interacting with
- it might be summed up simply as a collector or information, which then passes it on to the Model to be orginzed for storage, and does not contain any logic other than that needed to collect the input

## Model:
- its sole purpose is to process data into its permanent storage or seek an prepare data to be passed along to the other parts
- it neither calls nor seeks a response from the the other parts
- the model acts as a gatekeeper to the data itself, asking no questions but accepting all request which comes its way
- the model has no connection or knowledge of what happens to the data when it is passed to the View or Controller components
- contains the most important part of our application logic, the logic that applies to the problem we are dealing with
- there is no direct relationship between the View and the Controller without the Model in between them

## View:
- is where data, requested from the Model, is viewed and its final output is determined
- in web apps built using MVC, the View is the part of the system where the HTML is generated and displayed
- the View also ignites reactions from the user, who then goes on to interact with the Controller

---
A web application is usually composed of a set of controllers, models and views. The controller may be structured as a main controller (ex. index.php) that receives all requests and calls specific controllers that handles actions for each case.

---

## MVC in PHP

You may write a web appication in PHP whose architecture is based on the MVC pattern.

### Basic example:

1) Describe basic classes for each part of the pattern:

### Model
```
<?php
  class Model
  {
    public $string;

    public function __construct() {
      $this->string = "Hello World! = Awesome, click here!";
    }
  }
?>
```

### View
```
<?php
  class View
  {
    private $model;
    private $controller;

    public function __construct($controller, $model) {
      $this->controller = $controller;
      $this->model = $model;
    }

    public function output() {
      return '<p><a href="mvc.php?action=clicked"' . $this->model->string . "</a></p>";
    }
  }
?>
```

### Controller
```
<?php
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function clicked() {
    $this->model->string = "Updated Data!";
  }
?>
```

2) Set up the relationship between them:
```
<?php
  $model = new Model();
  $controller = new Controller($model);
  $view = new View($controller, $model);

  if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
  }

  echo $view->output();
?>
```

## Laravel & MVC

When use a framework (ex. Laravel), the basic structure for MVC is already prepared and you just have to extend that structure, placing your files in the appropriate directory, to comply with the MVC pattern. On top of that, you get a lot of functionality alrady written and tested.

Laravel applications folow the MVC architectual pattern:
1. Controllers to handle user requests and retrieve data, by leveraging Models
2. Models to interact with your database and retrieve your objects' information
3. Views to render pages
4. Routes are used to map URLs to designed controller actions

## The full MVC request cycle in a Laravel 5 application

<img src="http://laravelbook.com/images/laravel-architecture/laravel-mvc-components.png" alt="">

1. A [request](https://en.wikipedia.org/wiki/Request%E2%80%93response) is made — say, when a user enters a URL associated with your application
2 A route associated with that URL maps the URL to a controller action.
3. That controller action leverages the necessary model(s) to retrieve information from the database, and then passes that data off to a view
4. And that view renders the final page.

## Read:
* [Creating a Basic Laravel 5 MVC Application in 10 Minutes](https://selftaughtcoders.com/from-idea-to-launch/lesson-17/laravel-5-mvc-application-in-10-minutes/)
* [Playing with Legos: The Inner-Workings of a Model-View-Controller (MVC) Web Application](https://selftaughtcoders.com/model-view-controller-mvc-web-application/)

