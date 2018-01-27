<?php

class Workers
{
    public static function getCeoInfo($pdoConnection)
    {
        $ceoInfoQuery= $pdoConnection->prepare('SELECT 
                                                     worker.id, 
                                                     worker.first_name, 
                                                     worker.middle_name, 
                                                     worker.surname, 
                                                     position.position_name
                                            FROM 
                                                     worker, 
                                                     position
                                            WHERE 
                                                     worker.position_id = position.id AND 
                                                     position.position_name = \'Генеральный директор\'');
        $ceoInfoQuery->execute();

        return $ceoInfoQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWorkerFullInfo($pdoConnection, $workerId)
    {
        $fullInfoQuery = $pdoConnection->prepare('SELECT 
                                                       worker.id, 
                                                       worker.first_name, 
                                                       worker.middle_name, 
                                                       worker.surname, 
                                                       worker.hired_on, 
                                                       worker.salary, 
                                                       position.position_name
                                                  FROM 
                                                       worker, 
                                                       position
                                                  WHERE 
                                                       worker.position_id = position.id AND 
                                                       worker.id = ?');
        $fullInfoQuery->execute(array($workerId));

        return $fullInfoQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSubordinatedWorkers($pdoConnection, $workerId)
    {
        $subordinatedWorkers = $pdoConnection->prepare('SELECT
                                                            worker.id,
                                                            worker.first_name,
                                                            worker.middle_name,
                                                            worker.surname,
                                                            position.position_name
                                                        FROM
                                                            worker,
                                                            subordination,
                                                            position
                                                        WHERE
                                                            worker.id = subordination.subordinate_worker_id AND 
                                                            worker.position_id = position.id AND 
                                                            subordination.worker_id = ?');
        $subordinatedWorkers->execute(array($workerId));

        return $subordinatedWorkers->fetchAll(PDO::FETCH_ASSOC);
    }
 }



?>