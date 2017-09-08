<?php
	// error_reporting(0);
	require_once('simple_html_dom.php');
	// date_default_timezone_set("CET");
	$matchList = file_get_html('http://www.gosugamers.net/dota2/gosubet');
	$dota_suffixs = array('DotA2','Dota 2','.Dota2','.Dota 2','-Dota2','-Dota 2');
	$done = $matchList->find('.matches');
    $boxes = count($done);

    $upcoming = false;
    $live = false;
    $d0 = 0;
    $d1 = 0;
    $d2 = 0;
    if ($boxes == 3) {
		$d0 = 0;
		$d1 = 1;
		$d2 = 2;
		$live = true;
    $upcoming = true;
    }
    else if ($boxes == 2) {
		$d0 = 0;
		$d1 = 0;
		$d2 = 1;
		$upcoming = true;
    }

    $i = 0;
echo 'live<br>';
	//started
	if ($live) {
		$started = $matchList->find('.matches', $d0);
		foreach($started->find('tr') as $aGame) {
			$img1 = strtolower(substr($aGame->find('.flag', 0)->class,-2));
			$img1 = ($img1 == "un" || $img1 == "xa") ? "world" : $img1;
			$img1 = "http://cdn1.gamesports.net/img/flags/".$img1.".gif";

			$img2 = strtolower(substr($aGame->find('.flag', 1)->class,-2));
			$img2 = ($img2 == "un" || $img2 == "xa") ? "world" : $img2;
			$img2 = "http://cdn1.gamesports.net/img/flags/".$img2.".gif";

      $linky = $aGame->find('a', 0)->href;
			$linkID = "http://www.gosugamers.net".$linky;
			$titleList = file_get_html($linkID);

			$team1 =  parse_name(trim($titleList->find('.opponent1', 0)->children(1)->plaintext));
			if (!$team1) {
				continue;
			}

			$team2 =  parse_name(trim($titleList->find('.opponent2', 0)->children(1)->plaintext));
            $eventName = get_event($titleList);
            $fullDate = $titleList->find(".box-row[href={$linky}]", 0)->title;
            $fullDate = explode("&quot;time&quot;&gt;", $fullDate);
            $fullDate = explode("&lt;", $fullDate[1])[0];
            $fullDate = str_replace("at ", "", $fullDate);
			$timeStamp = strtotime($fullDate);
/*
$eventName - название события
$timeStamp - время события
$img1 - страна первой команды
$team1 - название первой команды
$img2 - страна второй команды
$team2 - название второй команды
*/

echo $eventName.'-'.date('d-m-Y H:i',$timeStamp).'-'.$img1.'-'.$team1.'-'.$img2.'-'.$team2.';<br>';



	/*		$date = "Live";
			$gameArray["eventLive"][] = "<tr class='d2mtrow eventLive' href='{$linkID}' title='{$eventName}' rel='tooltip'><td alt='{$timeStamp}' class='push-tt gg_date'><b>{$date}</b></td><td><img src='{$img1}' width='14px' height='9px'> {$team1}</td><td>v</td><td><img src='{$img2}' width='14px' height='9px'> {$team2}</td></tr>";
            $i++;*/
		}
	}
echo '<hr> upcoming<br>';
    //upcoming
    if ($upcoming) {
        $upcoming = $matchList->find('.matches', $d1);
        foreach($upcoming->find('tr') as $aGame) {
            $img1 = strtolower(substr($aGame->find('.flag', 0)->class,-2));
            $img1 = ($img1 == "un" || $img1 == "xa") ? "world" : $img1;
            $img1 = "http://cdn1.gamesports.net/img/flags/".$img1.".gif";
            $team1 =  trim($aGame->find('.opp1', 0)->plaintext);
            if (!$team1) {
                continue;
            }
            $img2 = strtolower(substr($aGame->find('.flag', 1)->class,-2));
            $img2 = ($img2 == "un" || $img2 == "xa") ? "world" : $img2;
            $img2 = "http://cdn1.gamesports.net/img/flags/".$img2.".gif";
            $team2 =  trim($aGame->find('.opp2', 0)->plaintext);
            $date = trim($aGame->find('.live-in', 0)->plaintext);

            $linkID = "http://www.gosugamers.net".$aGame->find('a', 0)->href;
            $titleList = file_get_html($linkID);

            $team1 =  parse_name(trim($titleList->find('.opponent1', 0)->children(1)->plaintext));
            if (!$team1) {
                continue;
            }
            $team2 =  parse_name(trim($titleList->find('.opponent2', 0)->children(1)->plaintext));
            $eventName = get_event($titleList);
            // $fullDate = str_replace("CET", "CEST", $titleList->find('.datetime', 0)->plaintext); //reenable this on DST
            $fullDate = trim($titleList->find('.datetime', 0)->plaintext);
            $timeStamp = strtotime($fullDate);


/*
$eventName - название события
$timeStamp - время события
$img1 - страна первой команды
$team1 - название первой команды
$img2 - страна второй команды
$team2 - название второй команды
*/


echo $eventName.'-'.date('d-m-Y H:i',$timeStamp).'-'.$img1.'-'.$team1.'-'.$img2.'-'.$team2.';<br>';
           /* $gameArray["eventSoon"][] =  "<tr class='d2mtrow eventSoon' href='{$linkID}' title='{$eventName}' rel='tooltip'><td alt='{$timeStamp}' class='push-tt gg_date'>{$date}</td><td><img src='{$img1}' width='14px' height='9px'> {$team1}</td><td>v</td><td><img src='{$img2}' width='14px' height='9px'> {$team2}</td></tr>";
            if ($i == 13) break;
            $i++;*/
        }
    }

echo '<hr> result<br>';
	//done
	$done = $matchList->find('.matches', $d2);
	$i = 0;
	foreach($done->find('tr') as $aGame) {
		if ($i > 15)
			break;
		$img1 = strtolower(substr($aGame->find('.flag', 0)->class,-2));
		$img1 = ($img1 == "un" || $img1 == "xa") ? "world" : $img1;
		$img1 = "http://cdn1.gamesports.net/img/flags/".$img1.".gif";
		$team1 =  trim($aGame->find('.opp1', 0)->plaintext);
		if (!$team1) {
			continue;
		}
		$img2 = strtolower(substr($aGame->find('.flag', 1)->class,-2));
		$img2 = ($img2 == "un" || $img2 == "xa") ? "world" : $img2;
		$img2 = "http://cdn1.gamesports.net/img/flags/".$img2.".gif";
		$team2 =  trim($aGame->find('.opp2', 0)->plaintext);

		$linkID = "http://www.gosugamers.net".$aGame->find('a', 0)->href;
		$titleList = file_get_html($linkID);

		$team1 =  parse_name(trim($titleList->find('.opponent1', 0)->children(1)->plaintext));
		if (!$team1) {
			continue;
		}
		$team2 =  parse_name(trim($titleList->find('.opponent2', 0)->children(1)->plaintext));
		$eventName = get_event($titleList);
		$fullDate = $titleList->find('.datetime', 0)->plaintext;
		$timeStamp = strtotime($fullDate);
		$score1 = 0 + trim($titleList->find('.match-extras .hidden span', 0)->plaintext);
		$score2 = 0 + trim($titleList->find('.match-extras .hidden span', 1)->plaintext);
		$series = "{$score1}:{$score2}";
		if ($score1 == $score2)
			$winner = "x";
		else if ($score1 > $score2) {
			$team1 = '<b>'.$team1.'</b>';
			$winner = ">";
		} else {
			$team2 = '<b>'.$team2.'</b>';
			$winner = "<";
		}


/*
$eventName - название события
$timeStamp - время события
$img1 - страна первой команды
$team1 - название первой команды
$score1 - счет 1 команды
$score2 - счет второй команды
$img2 - страна второй команды
$team2 - название второй команды
*/


echo $eventName.'-'.date('d-m-Y H:i',$timeStamp).'-'.$img1.'-'.$team1.'-'.$score1.':'.$score2.'-'.$img2.'-'.$team2.';<br>';

	/*	$gameArray["eventDone"][] = "<tr class='d2mtrow eventDone' href='{$linkID}' title='{$eventName}' rel='tooltip'><td alt='{$timeStamp}' class='push-tt gg_date series'>{$series}</td><td><img src='{$img1}' width='14px' height='9px'> {$team1}</td><td class='winResult' data-winner='{$winner}'>{$winner}</td><td><img src='{$img2}' width='14px' height='9px'> {$team2}</td></tr>";
		$i++;*/

	}
	

	/*$str = trim(json_encode($gameArray));
	$filestr    = "api.json";
	$fp=@fopen($filestr, 'w');
	fwrite($fp, $str);
	fwrite($fp, "");
	fclose($fp);*/
  // echo $str;
  echo "OK";

	function parse_name($name) {
		global $dota_suffixs;

		foreach($dota_suffixs as $k) {
			$name = str_replace($k,'',$name);
		}
		return $name;
	}

    function get_event($titleList) {
        $bestof = $titleList->find('.match-extras .bestof', 0)->plaintext;
        $bestof = current(array_slice(explode(' ', $bestof), 2, 1));
        if(!is_numeric($bestof)) $bestof = '?';
        $eventName = $titleList->find('.stage-name', 0)->prev_sibling()->plaintext;
        return $eventName." [BO{$bestof}]";
    }

?>
