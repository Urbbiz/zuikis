<?php require DIR.'views/top.php' ?>
<h1>Bannana Boxes</h1>
<?php require DIR.'views/menu.php' ?>

<ul id="list">
    <?php foreach([] as $box) : ?>
    <li style="padding: 10px;">
        <span>ID: <?= $box['id'] ?></span>
        <span>Count: <?= $box['bannana'] ?></span>
        <a class="btn btn-outline-success" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
        <form style="display:inline-block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
            <button type="submit" class="btn btn-outline-danger">DELETE</button>
        </form>
    </li>
    <?php endforeach ?>
</ul>

<div style="padding: 26px; border: 1px solid black; margin: 30px;">
    Bannanas in box: <input type="text" id="count">
    <br><br>
    <button class="btn btn-outline-info" type="button">Create</button>
</div>
<?php require DIR.'views/bottom.php' ?>