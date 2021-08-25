<?php
$baseUrl = "http://127.0.0.1/public/";

function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

function setFlashSuccess($message)
{
    $_SESSION['flash'] = $message;
}
function success()
{
    if (isset($_SESSION['flash'])) {
?>
        <div id="alert" class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><?php print_r($_SESSION['flash']); ?></strong>
        </div>
    <?php
        unset($_SESSION['flash']);
    }
}

function setFlash($message)
{
    $_SESSION['flash'] = $message;
}
function setFlashError($message)
{
    setFlash($message, 'danger');
    if (isset($_SESSION['flash'])) {
    
    }
}
?>