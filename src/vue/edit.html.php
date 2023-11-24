<h2>Modification</h2>

<form method="POST">
    <label for="date">Date :</label>
    <input type="date" id="date" name="date" value="<?= $result["date"] ?>" required><br>

    <label for="location">Location :</label>
    <input type="text" id="location" name="location" value="<?= $result["location"] ?>" required><br>

    <label for="from">From :</label>
    <input type="number" id="from" name="from" value="<?= $result["from"] ?>" required><br>

    <label for="to">To :</label>
    <input type="number" id="to" name="to" value="<?= $result["to"] ?>" required><br>

    <label for="time">Time :</label>
    <input type="number" id="time" name="time" value="<?= $result["time"] ?>" required><br>

    <label for="comment">Comment :</label>
    <textarea id="comment" name="comment" rows="4" cols="50"><?= $result["comment"] ?></textarea><br>

    <input type="submit" value="Enregistrer">
</form>


