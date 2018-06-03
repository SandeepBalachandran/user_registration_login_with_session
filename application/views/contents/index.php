<div class="col-lg-12 mainbody">
    <div class="row">
        <div class="col-lg-6 signUp">
            <div class="row">
                <?php  echo form_open('newController/registration');?>
                <label>Username</label><br>
                    <?php
                    $username=array('id'=>'name',
                                    'name'=>'name',
                                    'value'=>set_value('name'),
                                    'placeholder'=>'Enter your name',
                                    'size'=>'40'
                                    );
                    echo form_input($username);?>
                    <div class="error" id="nameError">
                        <?php echo form_error('name');?>
                    </div>

                    <br>
                    <label>Email</label>
                    <br>
                    <?php
                    $email=array('id'=>'email',
                                'name'=>'email',
                                'value'=>set_value('email'),
                                'placeholder'=>'Enter your email',
                                'size'=>'40'
                            );
                    echo form_input($email);
                    ?>
                    <div class="error" id="emailError">
                        <?php echo form_error('email');?>
                    </div>

                    <br>
                    <label>Password</label><br>
                    <?php
                    $password=array('id'=>'password',
                                    'name'=>'password',
                                    'value'=>set_value('password'),
                                    'placeholder'=>'Enter your passsword',
                                    'size'=>'40'
                                );
                    echo form_password($password);?>
                    <div class="error" id="passwordError">
                        <?php echo form_error('password');?>
                    </div>
                    <br>
                    <?php

                    $submitbtn=array('id'=>'submitBtn',
                                    'name'=>'submitBtn',
                                    'value'=>'Sign Up',
                                    'size'=>'40'
                                );
                    echo form_submit($submitbtn);?>
                    <?php echo form_close();?>
            </div>
        </div>

        <div class="col-lg-6 signIn">
            <div class="row">
                <?php  echo form_open('newController/login');?>
                <label>Username</label><br>
                    <?php
                    $username=array('id'=>'username',
                                    'name'=>'username',
                                    'value'=>set_value('username'),
                                    'placeholder'=>'Enter your username',
                                    'size'=>'40'
                                    );
                    echo form_input($username);?>
                    <div class="error" id="usernameError">
                        <?php echo form_error('username');?>
                    </div>

                    <br>

                    <label>Password</label><br>
                        <?php
                        $password=array('id'=>'password',
                                        'name'=>'password2',
                                        'value'=>set_value('password2'),
                                        'placeholder'=>'Enter your password',
                                        'size'=>'40'
                                        );
                        echo form_input($password);?>
                        <div class="error" id="passwordError2">
                            <?php echo form_error('password2');?>
                        </div>

                        <br>
                        <?php

                        $submitbtn=array('id'=>'submitBtn',
                                        'name'=>'submitBtn',
                                        'value'=>'Sign In',
                                        'size'=>'40'
                                    );

                        echo form_submit($submitbtn);
                        echo '<br><label class="text-danger">'.$this->session->flashdata("error").'</label>';?>

                        <?php echo form_close();?>
                    </div>
                </div>
