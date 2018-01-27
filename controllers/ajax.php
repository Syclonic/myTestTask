<?php

require '../core/boot.php';

if (isset($_POST['id'])) {
    $worker = new Workers;
    $workerFullInfo = $worker->getWorkerFullInfo($pdoConnection, $_POST['id']);
    $subordinatedWorkers = $worker->getSubordinatedWorkers($pdoConnection, $_POST['id']);
}


require '../views/ajaxAnswer.view.php';


