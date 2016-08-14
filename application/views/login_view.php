<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>        
        <title>Login system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1><?php echo $form_header ?></h1>
            </div>
                <?php
                    echo form_open('Login/process_form', $form_attr);
                ?>
                        <div class="form-group">
                            <?php
                                echo form_label('Username', $user_input_attr['id'], $label_attr);
                                echo form_input($user_input_attr);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo form_label('Password', $paswd_input_attr['id'], $label_attr);
                                echo form_password($paswd_input_attr);
                            ?>
                        </div>
                        <div class="form-group">                    
                            <?php
                                echo form_submit($submit_butt);
                                echo form_close();
                            ?>
                        </div>
        </div>
    </body>
</html>