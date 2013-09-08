
<?php
header(‘Content-type: text/xml’);
echo ‘<?xml version=”1.0″ encoding=”UTF-8″?>’;
echo ‘<Response>’;
//Create variable with user input.
$user_pushed = (int) $_REQUEST['Digits'];
if ($user_pushed == 94532287)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Arizona__Fight_Wildcats,_Fight.mp3</Play>’;
}
elseif ($user_pushed == 786338455)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Arizona_State__Maroon_And_Gold.mp3</Play>’;
}
elseif ($user_pushed == 23277)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/California__Fight_For_California.mp3</Play>’;
}
elseif ($user_pushed == 28332567)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Colorado__Fight_CU.mp3</Play>’;
}
elseif ($user_pushed == 38257)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Oregon__Mighty_Oregon__new.mp3</Play>’;
}
elseif ($user_pushed == 2328377)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Oregon_State__Hail_To_OSU.mp3</Play>’;
}
elseif ($user_pushed == 22734625)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Stanford__All_Right_Now__(1972_Rose_Bowl).mp3</Play>’;
}
elseif ($user_pushed == 278467)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/UCLA__Sons_Of_Westwood.mp3</Play>’;
}
elseif ($user_pushed == 8765267)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/USC__Fight_On__new.mp3</Play>’;
}
elseif ($user_pushed == 8837)
{
echo ‘<Play>http://www.footballfightmusic.com/themesongs/Utah%20-%20U%20of%20Utah.mp3</Play>’;
}
elseif ($user_pushed == 4875437)
{
echo ‘<Play>http://www.footballfightmusic.com/themesongs/Washington%20-%20Bow%20Down%20To%20Washington.mp3</Play>’;
}
elseif ($user_pushed == 2684275)
{
echo ‘<Play>http://www.fightmusic.com/mp3/pac12/Washington_State__WSU_Fight_Song.mp3</Play>’;
}
else
{
echo “<Say>Sorry, I can’t do that yet.</Say>”;
echo ‘<Redirect>handle-incoming-call.php</Redirect>’;
}
echo ‘</Response>’;
?>
