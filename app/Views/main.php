<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Information</title>
</head>
<body>
    <div class="container">
        <form action="<?= base_url("Save") ?>" method="post">
            <?php if(isset($d['ID'])){?>
                <input type="hidden" name="ID" value="<?=$d['ID']?>">
            <?php }?>
            
            <label for="StudName">Name: </label> 
            <input type="text" id="StudName" placeholder="Student Name" name="StudName" required value="<?= isset($d['StudName']) ? $d['StudName'] : '' ?>">
            <br>
            <label for="StudGender">Gender: </label>
            <select type="box" name="StudGender" placeholder="Student Gender" name="StudGender" required value="<?= isset($d['StudGender']) ? $d['StudGender'] : '' ?>">>
                <option>Male</option>
                <option>Female</option>
            </select>
            <br>
            <label for="StudCourse">Course: </label>
            <select id="text" name="StudCourse" placeholder="Student Course" name="StudCourse" required value="<?= isset($d['StudCourse']) ? $d['StudCourse'] : '' ?>">
                <option value="BSIT" <?= isset($d['StudCourse']) === 'BSIT' ? 'selected' : '' ?>>BSIT</option>
            </select>
            <br>
            <label for="StudSection">Section</label>
            <select type="text" name="StudSection" placeholder="Student Section" name="StudSection" required value="<?= isset($d['StudSection']) ? $d['StudSection'] : '' ?>">
                <option value="F1" <?= isset($d['StudSection']) === 'F1' ? 'selected' : '' ?>>F1</option>
                <option value="F2" <?= isset($d['StudSection']) === 'F2' ? 'selected' : '' ?>>F2</option>
                <option value="F3" <?= isset($d['StudSection']) === 'F3' ? 'selected' : '' ?>>F3</option>
                <option value="F4" <?= isset($d['StudSection']) === 'F4' ? 'selected' : '' ?>>F4</option>
                <option value="F5" <?= isset($d['StudSection']) === 'F5' ? 'selected' : '' ?>>F5</option>
            </select>
            <br>
            <label for="StudYear">Year Level: </label>
            <input type="number" id="StudYear" placeholder="Student Year Level" name="StudYear" required value="<?= isset($d['StudYear']) ? $d['StudYear'] : '' ?>">
            <br>
            <input type="submit" value="Save">
        </form>

        <h2>STUDENT INFORMATION</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Section</th>
                <th>YearLevel</th>
                <th>Action</th>
            </tr>

            <?php foreach($main as $k): ?>
                <tr>
                    <th><?=$k['ID']   ?></th>
                    <th><?=$k['StudName'] ?></th>
                    <th><?=$k['StudGender'] ?></th>
                    <th><?=$k['StudCourse'] ?></th>
                    <th><?=$k['StudSection'] ?></th>
                    <th><?=$k['StudYear'] ?></th>
                    <th><a href="/Update/<?=$k['ID']?>">Update</a> || <a href="/Delete/<?=$k['ID']?>">Delete</a> </th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>