<?php require("id.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mission: Groomsman</title>
    <script src="lib/typed.min.js" type="text/javascript"></script>
    <script src="demos.js"></script>
    <link href="demos.css" rel="stylesheet" />
</head>

<body>
    <div class="wrap">
        <div class="type-wrap">
            <div id="typed-before-clock" class="hidden">
<span>
Welcome Agent <?php echo $agentName; ?>, thank you for making contact with mission HQ.

This message will self destruct in
</span>
            </div>
            <span id="typed-a" style="white-space:pre-wrap;"></span>
            <span id="clockdiv" style="color:chocolate"></span>
            <br><br>
            <span id="typed" style="white-space:pre-wrap;"></span>
            <div id="typed-strings" class="hidden">
<span>
You have been hand selected by the top leaders of the Impossible Mission Force for a secret mission; to assist and protect an undercover agent through the remainder of an ongoing engagement.

Your mission, should you choose to accept it:

<ul><li>Rendezvous with Agent Redacted on the (date), 2018 (Agent will henceforth be codenamed "Groom")
</li><li>Rehearse the primary mission objective, the "Ceremony"
</li><li>Attend field operation dinner, preventing civilian causalties while protecting your co-agents from enemy spies
</li><li>Ensure Groom makes it to site of Ceremony the following day ((date))
</li><li>Keep track of other valuable mission assets, rings, liquid courage, etc.
</li><li>Attend mission training excersize, codenamed "Bachelor Party", details to be determined
</li></ul>
<?php
if($isBest==true){
echo "Agent ";
echo $agentName;
echo ", In light of your extensive list of previous successful missions completed with Groom, you have been nominated to be the leader, or Best Agent, of this mission. These responsibilites will be in addition to your ordinary duties.\n";
}?>

	<a href="respond.php?resp=y&id=<?php echo $id;?>">[Accept]</a>   <a href="respond.php?resp=n&id=<?php echo $id;?>">[Decline]</a>
</span>
            </div>
        </div>
    </div>
</body>

</html>
