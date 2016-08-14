<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <title>Login system</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php echo $form_header ?></h1>
        <div class="container">
            <?php
                echo form_open('Login_view', $form_attr);
                    echo form_label('Username', $user_input_attr['name']);
                    echo form_input($user_input_attr);
                echo form_close()
            ?>
        </div>
    </body>
</html>