<html>
    Question 1: Who is the final boss in the Hellfire Citadel raid in World of Warcraft? <br>
    You answered: <?php echo $_POST["Hellfire_Citadel"]; if($_POST["Hellfire_Citadel"] == "Archimonde"){$correctAnswers++;} ?><br>
    Correct answer: Archimonde<br> <br>

    Question 2: Ragnaros is the final boss of which World of Warcraft raid? <br>
    You answered: <?php echo $_POST["Ragnaros"]; if($_POST["Ragnaros"] == "Firelands"||$_POST["Ragnaros"] == "Molten Core"){$correctAnswers++;} ?><br>
    Correct answer: Firelands and Molten Core<br> <br>

    Question 3: This World of Warcraft raid's final boss contained a secret phase on Mythic difficulty in which you fight The Demon Within.<br>
    You answered: <?php echo $_POST["TDW"]; if($_POST["TDW"] == "The Nighthold"){$correctAnswers++;} ?><br>
    Correct answer: The Nighthold<br> <br>

    Question 4: The world first kill of this World of Warcraft raid's final boss was achieved in less than a day after its mythic difficulty was released.<br>
    You answered: <?php echo $_POST["QuickKill"]; if($_POST["QuickKill"] == "Emerald Nightmare"){$correctAnswers++;} ?><br>
    Correct answer: Emerald Nightmare<br> <br>

    Question 5: This item was controversially used to bug the Lich King fight in the World of Warcraft Raid Icecrown Citadel<br>
    You answered: <?php echo $_POST["Cheese"]; if($_POST["Cheese"] == "Saronite Bomb"){$correctAnswers++;} ?><br>
    Correct answer: Saronite Bomb<br> <br>

    You got <?php echo $correctAnswers ?> correct! That is a <?php echo $correctAnswers*20 ?>%
</html>