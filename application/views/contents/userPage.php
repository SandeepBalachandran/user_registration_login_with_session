<?php
echo "Hurraay!!";
?>
<div class="col-lg-12 userPage">
    <div class="row">
        <?php echo form_open('newController/logout');?>
        <?php
            $post_array = $this->session->userdata('username');
        ?>
        <div class="col-lg-12 mainDiv text-center">
            <div class="row">
                <table class="table-responsive table-hover" border=1>
                    <tr>
                        <th>customerid</th>
                        <th>customername</th>
                        <th>country</th>
                    </tr>
                    <?php
                    if($contents)
                    {
                        foreach($contents as $constant)
                        {
                            ?>
                            <tr>
                                <td><?php echo $constant->id;?></td>
                                <td><?php echo $constant->name;?></td>
                                <td><?php echo $constant->amount;?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>


                </table>
                <h1>Welcome to the website <?php echo $post_array;?></h1>


        <?php
        $logoutBtn=array(
                        'id'=>'logoutBtn',
                        'name'=>'logout',
                        'value'=>'Log Out',
                        'class'=>'btn btn-danger'

        );
        echo form_submit($logoutBtn);
        ?>
    </div>
</div>
        <?php echo form_close();?>
