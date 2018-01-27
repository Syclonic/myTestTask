<div class="col mt-2 ml-5">
    <table class="table">
        <tr>
            <th>ФИО</th>
            <th>Должность</th>
            <th>Дата приема на работу</th>
            <th>Размер заработной платы</th>
        </tr>
        <tr>
            <td><?= $workerFullInfo[0]['first_name'].' '. $workerFullInfo[0]['middle_name']. ' '. $workerFullInfo[0]['surname']?></td>
            <td><?= $workerFullInfo[0]['position_name']?></td>
            <td><?= date("d-m-Y", strtotime($workerFullInfo[0]['hired_on']))?></td>
            <td><?= $workerFullInfo[0]['salary'].' $'?></td>
        </tr>
    </table>
    <?php if (!empty($subordinatedWorkers)): ?>
        Подчиненные:
    <?php else: ?>
        Нет подчиненных
    <?php endif; ?>

    <div class="">
        <?php foreach ($subordinatedWorkers as $worker):?>
            <div class="row">
                <div class="col mt-2">
                    <button class="btn btn-primary" id="<?=$worker['id']?>"><?=$worker['first_name']. ' '.
                        $worker['middle_name']. ' '.
                        $worker['surname']. ' ['.
                        $worker['position_name'].']'?>
                    </button>
                </div>
            </div>
            <div class="row hidden <?=$worker['id']?>">

            </div>
        <?php endforeach; ?>
    </div>


</div>
