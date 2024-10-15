<h2><?= esc($title) ?>

<?= session()->getFlashData('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <?= csrf_field() ?>

    <label for="title">Titre</label>

    <input type="input" name="title" value="<?= set_value('title') ?>">

    <br>

    <label for="body">Texte</label>

    <textarea name="body" cols="45" row="4">
        <?= set_value('body') ?>
    </textarea>

    <br>

    <input type="submit" name="submit" value="Create new item">
</form>
