<?php 
    if(isset($_SESSION['mensagem'])):
?>

<div class="alert alert-warning alert-dismissible fade show">
    <?= $_SESSION['mensagem']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close" ></button>
</div>

<?php
    unset($_SESSION['mensagem']);
    endif;
?>
