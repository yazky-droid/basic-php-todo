<?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php
        $name = isset( $_GET['name'] ) ? $_GET['name'] : null;
        $newTodo = isset( $_POST['todo'] ) ? $_POST['todo'] : null;
        $savedTodos = $_POST["todos"];

        // var_dump($savedTodos);
        
        if(isset($savedTodos)) {
            $todos = $savedTodos;
        } else {
            $todos = array();
        }

        if(isset($newTodo)){
            array_push($todos, $newTodo);
        }
        ?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php if (isset($name)) : ?>
    <h1>Welcome, <?php echo $name; ?></h1>
    <form method="post">
        <?php foreach ($todos as $todo) : ?>
            <input type="hidden" name="todos[]" value="<?php echo $todo ?>">
        <?php endforeach; ?>

        <label for="todo">What's on your todo list?</label>
        <input type="text" name="todo" id="todo"/>
        <input type="submit" value="Add todo"/>
    </form>
    <?php foreach($todos as $todo) :?>
    <li><?php echo ($todo);?></li>
    <?php endforeach; ?>
    <?php else : ?>
    <h1>Login</h1>
    <form method="GET">
        <label for="name">What is your name?</label>
        <input type="text" name="name" id="name" />
        
        <input type="submit" value="Login" />
    </form>
<?php endif; ?>
</body>
</html>