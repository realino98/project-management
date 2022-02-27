
<?php require("functions/functions.php")?>
<?php 
    $tasks = query("SELECT * FROM tasks ORDER BY TaskId");
?>
<?php require("header.php")?>
<!-- tampilkan semua data, acc, pilih pelaksana dari list -->
<h1>Admin</h1>
    <h2>Permintaan</h2>
    <table border='1' cellpadding='10' cellspacing='0'>
        <tr>
            <th>Task ID</th>
            <th>Unit Name</th>
            <th>Task Name</th>
            <th>Due Date</th>
            <th>Type</th>
            <th>Description</th>
            <th>Excecutor</th>
            <th>Approval</th>
            <th>Status</th>
        </tr>
        <?php foreach($tasks as $task):?>
            <tr>
                <td><?= $task["TaskId"]?></td>
                <td><?= $task["UnitOwner"]?></td>
                <td><?= $task["TaskName"]?></td>
                <td><?= $task["TaskDate"]?></td>
                <td><?= $task["TaskType"]?></td>
                <td><?= $task["TaskDescription"]?></td>
                <td><?= $task["TaskExcecutor"]?></td>
                <?php if($task["TaskApprove"] == 1):?>
                    <td>Accepted</td>
                <?php elseif($task["TaskApprove"] == 0):?>
                    <td>Declined</td>
                <?php elseif($task["TaskApprove"] == 2):?>
                    <form action="admin.php" method="GET">
                        <td><button type="submit" name="submit" value="1">Accept</button> <button type="submit" name="submit" value="0">Decline</button></td>        
                    </form>
                <?php endif?>
                <?php if($task["TaskDone"] == 1):?>
                    <td>Done</td>
                <?php elseif($task["TaskDone"] == 0):?>
                    <td>Working</td>        
                <?php endif?>
            </tr>
        <?php endforeach?>  
        </tr>
    </table>
    <h1>Units</h1>
    <table border='1' cellpadding='10' cellspacing='0'>
        <tr>
            <th>Nama Unit</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Keterangan</th>
            <th>Users</th>
        </tr>
        <tr>
            <td>Reza</td>
            <td>17 Agustus 1945</td>
            <td>Tugas</td>
            <td>Keterangan</td>
        </tr>
    </table>
<?php require("footer.php")?>