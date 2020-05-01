<h1>This is the Home View</h1>

<?php if ($this->session->flashdata('login_success')) {
    echo $this->session->flashdata('login_success',['class'=>'text text-danger']);
} ?>


<?php if ($this->session->flashdata('login_failed')) {
    echo $this->session->flashdata('login_failed',['class'=>'text text-danger']);
} ?>
