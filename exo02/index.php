<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8 mx-auto">
                <div class="card my-5">
                    <h5 class="card-header bg-primary text-white">
                        Todo List
                    </h5>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Search todo">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="fas fa-search"></i> </span>
                            </div>
                        </div>
                        <ul class="list-group mb-3">
                            <?php
                            $todo = array("la lessive", "nourrir les chats", "regarder netflix", "pas de rapport de stage");
                            foreach ($todo as $oneTodo) {
                            ?>
                                <li class="list-group-item">
                                    <i class="far fa-square done-icon"></i>
                                    <i class="far fa-check-square done-icon"></i>
                                    <span class="todo-text"><?= $oneTodo ?></span>
                                    <i class="far fa-trash-alt"></i>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <button id="clearBtn" type="button" class="btn btn-dark btn-sm">Clear All</button>
                    </div>
                    <div class="card-footer">
                        <form id="form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="todo" placeholder="Add new todo item">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/5bb1d77498.js" crossorigin="anonymous"></script>
</body>

</html>