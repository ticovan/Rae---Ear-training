<?php
// insert here your Bot API token
define("BOT_TOKEN", "360080898:AAG7UklJPYTI1N075FFlSaw8NYJaV_Hl9OM");
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}

// scrive i parametri presenti nel json inviato da Telegram
$message = isset($update['message']) ? $update['message'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$firstname = isset ($message['chat']['first_name']) ? $message['chat']['first_name'] : "";



/////---- ARRAY ----/////
		
		//ARRAY start
         $start = array(
            '1' => array(
                'testo_A' => "L'<b>ascolto</b> è alla base della comprensione.
				Tutti possono allenare il proprio <i>orecchio musicale</i> e migliorare la consapevolezza dei suoni uditi. 
				Anche tu ",
				'testo_B' => "
				
				Ad esempio, il suono prodotto dalla sirena dei carabinieri è un intervallo di quarta",
            ),		
			); //FINE start
			
		// ARRAY teoria	
		$teoria = array(
			'unisono' => array(
					'txt' => "L'<b>unisono</b> si compone di note aventi la stessa altezza (pitch)",
					'gif' => './vid_gif/unisonoC.gif',
					'img' => './img_penta/unisonoC.jpg',
					'audio' => './aud/CC.mp3',
				),
			
			'seconda minore' => array (
					'txt' => "La <b>seconda minore</b> corrisponde al semitono, che è il più piccolo intervallo del sistema musicale moderno. Equivale alla metà di un tono",
					'gif' => "./vid_gif/semitonoC_asc.gif",
					'img' => "./img_penta/semitonoC_asc.jpg",
					'audio' => "./aud/CC#.mp3",
				),
			
			'seconda giusta' => array(
					'txt' => "La <b>seconda maggiore</b> corrisponde al tono, l'intervallo composto da due semitoni",
					'gif' => "./vid_gif/tonoC_asc.gif",
					'img' => "./img_penta/tonoC_asc.jpg",
					'audio' => "./aud/CD.mp3",
				),
			
			'terza minore' => array(
					'txt' => "Nell'intervallo di <b>terza minore</b>, le note distano di 3 semitoni",
					'gif' => "./vid_gif/terzaMinoreC_asc.gif",
					'img' => "./img_penta/terzaMinoreC_asc.jpg",
					'audio' => "./aud/CD#.mp3",
				),
			
			'terza maggiore' => array(
					'txt' => "Nell'intervallo di <b>terza maggiore</b>, le note distano di 4 semitoni, ossia 2 toni.
					Se suonate contemporaneamente esse formano una consonanza imperfetta",
					'gif' => "./vid_gif/terzaMaggioreC_asc.gif",
					'img' => "./img_penta/terzaMaggioreC_asc.jpg",
					'audio' => "./aud/CE.mp3",
				),
			'quarta' => array(
					'txt' => "Nell'intervallo di terza minore, le note distano di 5 semitoni (2 toni e 1 semitono)",
					'gif' => "./vid_gif/quartaC_asc.gif",
					'img' => "./img_penta/quartaC_asc.jpg",
					'audio' => "./aud/CF.mp3",
				),
			'quinta minore' => array(
					'txt' => "Nell'intervallo di quarta eccedente, anche detto quinta bemolle o quinta diminuita, le note distano di 6 semitoni (3 toni)",
					'gif' => "./vid_gif/quintaMinoreC_asc.gif",
					'img' => "./img_penta/quintaMinoreC_asc.jpg",
					'audio' => "./aud/CF#.mp3",
				),
			'quinta giusta' => array(
					'txt' => "L'intervallo di quinta le note distano di 7 semitoni (3 toni e un semitono). Due note distanti una quinta si fondono in un'armonia morbida e gradevole: esse si trovano infatti in consonanza perfetta",
					'gif' => "./vid_gif/quintaC_asc.gif",
					'img' => "./img_penta/quintaC_asc.jpg",
					'audio' => "./aud/CG.mp3",
				),
			'sesta minore' => array(
					'txt' => "Nell'intervallo di quinta eccedente le note distano di 8 semitoni (4 toni)",
					'gif' => "./vid_gif/sestaMinoreC_asc.gif",
					'img' => "./img_penta/sestaMinoreC_asc.jpg",
					'audio' => "./aud/CG#.mp3",
				),
			'sesta giusta' => array(
					'txt' => "Nell'intervallo di sesta le note distano di 9 semitoni (4 toni e 1 semitono)",
					'gif' => "./vid_gif/sestaC_asc.gif",
					'img' => "./img_penta/sestaC_asc.jpg",
					'audio' => "./aud/CA.mp3",
				),
			'settima minore' => array(
					'txt' => "Nell'intervallo di settima minore, detto anche settima bemolle, le note distano di 9 semitoni (4 toni e 1 semitono)",
					'gif' => "./vid_gif/settimaMinoreC_asc.gif",
					'img' => "./img_penta/settimaMinoreC_asc.jpg",
					'audio' => "./aud/CA#.mp3",
				),
			'settima maggiore' => array(
					'txt' => "Nell'intervallo di settima maggiore le note distano di 10 semitoni (5 toni)",
					'gif' => "./vid_gif/settimaMaggioreC_asc.gif",
					'img' => "./img_penta/settimaMaggioreC_asc.jpg",
					'audio' => "./aud/CB.mp3",
				),
			'ottava' => array(
					'txt' => "L'ottava si forma con le note distano di 8 semitoni (4 toni). Le due note hanno lo stesso nome,sebbene l'onda del suono più acuto abbia frequenza doppia di quella più grave",
					'gif' => "./vid_gif/ottavaC_asc.gif",
					'img' => "./img_penta/ottavaC_asc.jpg",
					'audio' => "./aud/CC2.mp3",
				),
		
			); //FINE teoria
		
		///array ESERCIZI
		$esercizi = array(
            'unisono' => array (
					'intervallo' => "unisono",
					'tipo' => " ",
					'nota_1' => "C",
					'nota_2' => "C",
					'note' => "C C",
					'gif' => "./vid_gif/unisonoC.gif",
					'img' => "./img_penta/unisonoC.jpg",
					'audio' => "./aud/CC.mp3",
					),
					
			 //fine unisono
			
			'seconda minore ascendente' => array (
					'intervallo' => "seconda minore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "Db",
					'note' => "C Db",
					'gif' => "./vid_gif/semitonoC_asc.gif",
					'img' => "./img_penta/semitonoC_asc.jpg",
					'audio' => "./aud/CC#.mp3",
					),
			'seconda minore discendente' => array (
					'intervallo' => "seconda minore",
					'tipo' => "discendente",
					'nota_1' => "Db",
					'nota_2' => "C",
					'note' => "Db C",
					'gif' => "./vid_gif/semitonoC_disc.gif",
					'img' => "./img_penta/semitonoC_disc.jpg",
					'audio' => "./aud/C#C.mp3",
					),
				//fine seconda minore
			
			'seconda giusta ascendente' => array (
					'intervallo' => "seconda giusta",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "D",
					'note' => "C D",
					'gif' => "./vid_gif/tonoC_asc.gif",
					'img' => "./img_penta/tonoC_asc.jpg",
					'audio' => "./aud/CD.mp3",
					),
			'seconda giusta discendente' => array (
					'intervallo' => "seconda giusta",
					'tipo' => "discendente",
					'nota_1' => "D",
					'nota_2' => "C",
					'note' => "D C",
					'gif' => "./vid_gif/tonoC_disc.gif",
					'img' => "./img_penta/tonoC_disc.jpg",
					'audio' => "./aud/DC.mp3",
					),
			
			 //fine seconda giusta
			
			'terza minore ascendente' => array (
					'intervallo' => "terza minore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "Eb",
					'note' => "C Eb",
					'gif' => "./vid_gif/terzaMinoreC_asc.gif",
					'img' => "./img_penta/terzaMinoreC_asc.jpg",
					'audio' => "./aud/CD#.mp3",
					),
			'terza minore discendente' => array (
					'intervallo' => "terza minore",
					'tipo' => "discendente",
					'nota_1' => "Eb",
					'nota_2' => "C",
					'note' => "Eb C",
					'gif' => "./vid_gif/terzaMinoreC_disc.gif",
					'img' => "./img_penta/terzaMinoreC_disc.jpg",
					'audio' => "./aud/D#C.mp3",
					),
					
			 //fine terza minore
			
			'terza maggiore ascendente' => array (
					'intervallo' => "terza maggiore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "E",
					'note' => "C E",
					'gif' => "./vid_gif/terzaMaggioreC_asc.gif",
					'img' => "./img_penta/terzaMaggioreC_asc.jpg",
					'audio' => "./aud/CE.mp3",
					),
			'terza maggiore discendente' => array (
					'intervallo' => "terza maggiore",
					'tipo' => "discendente",
					'nota_1' => "E",
					'nota_2' => "C",
					'note' => "E C",
					'gif' => "./vid_gif/terzaMaggioreC_disc.gif",
					'img' => "./img_penta/terzaMaggioreC_disc.jpg",
					'audio' => "./aud/EC.mp3",
					),
			 //fine terza maggiore
			
			'quarta ascendente' => array (
					'intervallo' => "quarta",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "F",
					'note' => "C F",
					'gif' => "./vid_gif/quartaC_asc.gif",
					'img' => "./img_penta/quartaC_asc.jpg",
					'audio' => "./aud/CF.mp3",
					),
			'quarta discendente' => array (
					'intervallo' => "quarta",
					'tipo' => "discendente",
					'nota_1' => "F",
					'nota_2' => "C",
					'note' => "F C",
					'gif' => "./vid_gif/quartaC_disc.gif",
					'img' => "./img_penta/quartaC_disc.jpg",
					'audio' => "./aud/FC.mp3",
					),
					
			//fine quarta
			
			'quinta minore ascendente' => array (
					'intervallo' => "quinta minore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "Gb",
					'note' => "C Gb",
					'gif' => "./vid_gif/quintaMinoreC_asc.gif",
					'img' => "./img_penta/quintaMinoreC_asc.jpg",
					'audio' => "./aud/CF#.mp3",
					),
			'quinta minore discendente' => array (
					'intervallo' => "quinta minore",
					'tipo' => "discendente",
					'nota_1' => "Gb",
					'nota_2' => "C",
					'note' => "Gb C",
					'gif' => "./vid_gif/quintaMinoreC_disc.gif",
					'img' => "./img_penta/quintaMinoreC_disc.jpg",
					'audio' => "./aud/F#C.mp3",
					),
					
			 //fine quinta minore
			
			'quinta giusta ascendente' => array (
					'intervallo' => "quinta giusta",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "G",
					'note' => "C G",
					'gif' => "./vid_gif/quintaC_asc.gif",
					'img' => "./img_penta/quintaC_asc.jpg",
					'audio' => "./aud/CG.mp3",
					),
			'quinta giusta discendente' => array (
					'intervallo' => "quinta giusta",
					'tipo' => "discendente",
					'nota_1' => "G",
					'nota_2' => "C",
					'note' => "G C",
					'gif' => "./vid_gif/quintaC_disc.gif",
					'img' => "./img_penta/quintaC_disc.jpg",
					'audio' => "./aud/GC.mp3",
					),
					
			 //fine quinta giusta
			
			'sesta minore ascendente' => array (
					'intervallo' => "sesta minore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "Ab",
					'note' => "C Ab",
					'gif' => "./vid_gif/sestaMinoreC_asc.gif",
					'img' => "./img_penta/sestaMinoreC_asc.jpg",
					'audio' => "./aud/CG#.mp3",
					),
			'sesta minore discendente' => array (
					'intervallo' => "sesta minore",
					'tipo' => "discendente",
					'nota_1' => "Ab",
					'nota_2' => "C",
					'note' => "Ab C",
					'gif' => "./vid_gif/sestaMinoreC_disc.gif",
					'img' => "./img_penta/sestaMinoreC_disc.jpg",
					'audio' => "./aud/G#C.mp3",
					),
					
			 //fine sesta minore			
			
			'sesta giusta ascendente' => array (
					'intervallo' => "sesta giusta",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "A",
					'note' => "C A",
					'gif' => "./vid_gif/sestaC_asc.gif",
					'img' => "./img_penta/sestaC_asc.jpg",
					'audio' => "./aud/CA.mp3",
					),
			'sesta giusta discendente' => array (
					'intervallo' => "sesta giusta",
					'tipo' => "discendente",
					'nota_1' => "A",
					'nota_2' => "C",
					'note' => "A C",
					'gif' => "./vid_gif/sestaC_disc.gif",
					'img' => "./img_penta/sestaC_disc.jpg",
					'audio' => "./aud/AC.mp3",
					),
					
			 //fine sesta giusta

			'settima minore ascendente' => array (
					'intervallo' => "settima minore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "Bb",
					'note' => "C Bb",
					'gif' => "./vid_gif/settimaMinoreC_asc.gif",
					'img' => "./img_penta/settimaMinoreC_asc.jpg",
					'audio' => "./aud/CA#.mp3",
					),
			'settima minore discendente' => array (
					'intervallo' => "settima minore",
					'tipo' => "discendente",
					'nota_1' => "Bb",
					'nota_2' => "C",
					'note' => "Bb C",
					'gif' => "./vid_gif/settimaMinoreC_disc.gif",
					'img' => "./img_penta/settimaMinoreC_disc.jpg",
					'audio' => "./aud/A#C.mp3",
					),
					
			//fine settima minore
			
			'settima maggiore ascendente' => array (
					'intervallo' => "settima maggiore",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "B",
					'note' => "C B",
					'gif' => "./vid_gif/settimaMaggioreC_asc.gif",
					'img' => "./img_penta/settimaMaggioreC_asc.jpg",
					'audio' => "./aud/CB.mp3",
					),
			'settima maggiore discendente' => array (
					'intervallo' => "settima maggiore",
					'tipo' => "discendente",
					'nota_1' => "B",
					'nota_2' => "C",
					'note' => "B C",
					'gif' => "./vid_gif/settimaMaggioreC_disc.gif",
					'img' => "./img_penta/settimaMaggioreC_disc.jpg",
					'audio' => "./aud/BC.mp3",
					),
					
			 //fine settima minore
			
			'ottava ascendente' => array (
					'intervallo' => "ottava",
					'tipo' => "ascendente",
					'nota_1' => "C",
					'nota_2' => "C",
					'note' => "C C",
					'gif' => "./vid_gif/ottavaC_asc.gif",
					'img' => "./img_penta/ottavaC_asc.jpg",
					'audio' => "./aud/CC2.mp3",
					),
			'ottava discendente' => array (
					'intervallo' => "ottava",
					'tipo' => "discendente",
					'nota_1' => "C",
					'nota_2' => "C",
					'note' => "C C",
					'gif' => "./vid_gif/ottavaC_disc.gif",
					'img' => "./img_penta/ottavaC_disc.jpg",
					'audio' => "./aud/C2C.mp3",
					),
					
			//fine ottava
				
        ); // FINE esercizi
		
////// ESERCIZI RANDOM /////
	$esercizi_random = array (
	$esercizi[array_rand($esercizi)],
	$esercizi[array_rand($esercizi)],
	$esercizi[array_rand($esercizi)],
	);

//// creo array 
$esercizi_pentagramma = array (
		0 => array ($esercizi_random[0]['intervallo'], $esercizi_random[0]['tipo'], $esercizi_random[0]['nota_1'], $esercizi_random[0]['nota_2'], $esercizi_random[0]['img']),
		1 => array ($esercizi_random[1]['intervallo'], $esercizi_random[1]['tipo'], $esercizi_random[1]['nota_1'], $esercizi_random[1]['nota_2'], $esercizi_random[1]['img']),
		array ($esercizi_random[2]['intervallo'], $esercizi_random[2]['tipo'], $esercizi_random[2]['nota_1'], $esercizi_random[2]['nota_2'], $esercizi_random[2]['img']),
		);

$esercizi_gif = array (
		0 => array ($esercizi_random[0]['intervallo'], $esercizi_random[0]['tipo'], $esercizi_random[0]['nota_1'], $esercizi_random[0]['nota_2'], $esercizi_random[0]['gif']),
		1 => array ($esercizi_random[1]['intervallo'], $esercizi_random[1]['tipo'], $esercizi_random[1]['nota_1'], $esercizi_random[1]['nota_2'], $esercizi_random[1]['gif']),
		array ($esercizi_random[2]['intervallo'], $esercizi_random[2]['tipo'], $esercizi_random[2]['nota_1'], $esercizi_random[2]['nota_2'], $esercizi_random[2]['gif']),
		);

$esercizi_audio = array (
		0 => array ($esercizi_random[0]['intervallo'], $esercizi_random[0]['tipo'], $esercizi_random[0]['nota_1'], $esercizi_random[0]['nota_2'], $esercizi_random[0]['audio']),
		1 => array ($esercizi_random[1]['intervallo'], $esercizi_random[1]['tipo'], $esercizi_random[1]['nota_1'], $esercizi_random[1]['nota_2'], $esercizi_random[1]['audio']),
		array ($esercizi_random[2]['intervallo'], $esercizi_random[2]['tipo'], $esercizi_random[2]['nota_1'], $esercizi_random[2]['nota_2'], $esercizi_random[2]['audio']),
		);
		
		


// scrive i parametri presenti nel json inviato da Telegram
$message = isset($update['message']) ? $update['message'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$text = isset($message['text']) ? $message['text'] : "";

// ------ AVVIO


if($text == "/start"){
	$response = $start['1']['testo_A'].$firstname."!".$start['1']['testo_B'];
	//menu
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	$parameters["reply_markup"] = '{ "keyboard": [["Teoria intervalli"], ["Esercizi intervalli"]]}';
	echo json_encode($parameters);
	//send Audio
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile(realpath("./aud/sirena_carabinieri.mp3")), 'title' => "Sirena bitonale dei carabinieri", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}

//-- menu iniziale 
elseif ($text == "Menu iniziale"){
	$response = "Vuoi approfondire la teoria o provare gli esercizi?";
	//menu
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	$parameters["reply_markup"] = '{ "keyboard": [["Teoria intervalli"], ["Esercizi intervalli"]]}';
	echo json_encode($parameters);	
}

/// ------ TEORIA ------ ////
elseif ($text == "Teoria intervalli"){
	$response = "Quale intervallo vorresti approfondire?";
	//menu
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	$parameters["reply_markup"] = '{ "keyboard": [["Intervalli musicali: cosa sono"],["Unisono"], ["Seconda minore"],["Seconda"],["Terza minore"],["Terza maggiore"],["Quarta"],["Quinta minore"],["Quinta"],["Sesta minore"],["Sesta"],["Settima minore"],["Settima maggiore"],["Ottava"],["Menu iniziale"]], "one_time_keyboard": true}';
	echo json_encode($parameters);
			
}
elseif($text == "Intervalli musicali: cosa sono"){
	$response = "http://telegra.ph/Un-po-di-teoria-sugli-intervalli-musicali-04-10";
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
}
elseif($text == "Unisono" || $text == "unisono"){
	$response = $teoria['unisono']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['unisono']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Unisono", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['unisono']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['unisono']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	
}
elseif($text == "Seconda minore" || $text == "seconda minore"){
	$response = $teoria['seconda minore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['seconda minore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Seconda minore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['seconda minore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['seconda minore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Seconda" || $text == "seconda"){
	$response = $teoria['seconda giusta']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['seconda giusta']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Seconda", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['seconda giusta']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['seconda giusta']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Terza minore" || $text == "terza minore"){
	$response = $teoria['terza minore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['terza minore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Terza minore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['terza minore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['terza minore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Terza maggiore" || $text == "terza maggiore"){
	$response = $teoria['terza maggiore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['terza maggiore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Terza maggiore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['terza maggiore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['terza maggiore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Quarta" || $text == "quarta"){
	$response = $teoria['quarta']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['quarta']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Quarta", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['quarta']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['quarta']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Quinta minore" || $text == "quinta minore"){
	$response = $teoria['quinta minore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['quinta minore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Quinta minore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['quinta minore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['quinta minore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Quinta" || $text == "quinta"){
	$response = $teoria['quinta giusta']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['quinta giusta']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Quinta giusta", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['quinta giusta']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['quinta giusta']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Sesta minore" || $text == "sesta minore"){
	$response = $teoria['sesta minore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['sesta minore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Sesta minore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['sesta minore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['sesta minore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Sesta" || $text == "sesta"){
	$response = $teoria['sesta giusta']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['sesta giusta']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Sesta giusta", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['sesta giusta']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['sesta giusta']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Settima minore" || $text == "settima minore"){
	$response = $teoria['settima minore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['settima minore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Settima minore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['settima minore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['settima minore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Settima maggiore" || $text == "settima maggiore"){
	$response = $teoria['settima maggiore']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['settima maggiore']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Settima maggiore", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['settima maggiore']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['settima maggiore']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}
elseif($text == "Ottava" || $text == "ottava"){
	$response = $teoria['ottava']['txt'];
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	//send Audio
	$path_audio = $teoria ['ottava']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Ottava", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Img Penta
	$path = $teoria['ottava']['img'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendPhoto";
	$postFields = array('chat_id' => $chatId, 'photo' => new CURLFile($path), 'caption' => "", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//send Gif
	$path_gif = $teoria['ottava']['gif'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendVideo";
	$postFields = array('chat_id' => $chatId, 'video' => new CURLFile($path_gif), 'caption' => "Note al piano", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
}

/// ------ ESERCIZI ------ ////
elseif ($text == "Esercizi intervalli"){
	$response = $esercizi_random;
	//menu
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	$parameters["reply_markup"] = '{ "keyboard": [["Indovina intervallo"],["Indovina le note"], ["Canta intervallo"],["Menu iniziale"]], "one_time_keyboard": true}';
	echo json_encode($parameters);
			
}

/////////ESERCIZI INLINE KEYBOARD -----

elseif ($text == "Indovina intervallo"){
	//send Audio
	$path_audio = $teoria ['ottava']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Intervallo", 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//
	$response = "Che intervallo hai udito?";
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response);
	$parameters["method"] = "sendMessage";
	//inline Keyboard
	$keyboard = ['inline_keyboard' => [[['text' =>  'yourText', 'callback_data' => "ciao"], ['text' => 'open url', 'callback_data' => 'bubi']]]];
	$parameters["reply_markup"] = json_encode($keyboard, true);
	echo json_encode($parameters);
	// 
	$cllbck_query_data = isset($update["CallbackQuery"]["data"]) ? $update["CallbackQuery"]["data"]  : "";
	$cllbck_query_id = $update["CallbackQuery"]["id"];
	$cllbck_query_from = $update["CallbackQuery"]["from"];
		
	if ($cllbck_query_data == "ciao") {
		header("Content-Type: application/json");
		$parameters = array('callback_query_id' => $cllbck_query_id, "text" => "ciao",);
		$parameters["method"] = "answerCallbackQuery";
	}

}
	

elseif ($text == "Indovina le note"){
	//send Audio
	$path_audio = $teoria ['ottava']['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => "Intervallo", 'disable_notification' => "true");
	//
	$response = $chatId;

}

elseif ($text == "Canta intervallo"){
	//array RANDOM
	$esercizi_random = array (
	$esercizi[array_rand($esercizi)],
	$esercizi[array_rand($esercizi)],
	$esercizi[array_rand($esercizi)],
	$esercizi[array_rand($esercizi)],
	);
	$esercizi_pentagramma = array (
		$esercizi_random[array_rand($esercizi_random)],
		$esercizi_random[array_rand($esercizi_random)],
		$esercizi_random[array_rand($esercizi_random)],
		$esercizi_random[array_rand($esercizi_random)],
		$esercizi_random[array_rand($esercizi_random)],
		);
	//send Audio
	$path_audio = $esercizi_pentagramma[0]['audio'];
	$botUrl = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendAudio";
	$postFields = array('chat_id' => $chatId, 'audio' => new CURLFile ($path_audio), 'title' => $esercizi_pentagramma[0]['intervallo']." ".$esercizi_pentagramma[0]['tipo'], 'disable_notification' => "true");
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $botUrl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$output = curl_exec($ch);
	//msg
	$response = "Inviami una nota vocale in cui canti le note udite, tenendo conto che la prima nota è ";
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response.$esercizi_pentagramma[0]['nota_1'], "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	
   }

elseif(isset($message['voice']))
	{
		$sticker_i_d = "CAADAgAD9gADP5XMCmTu0VMf1PBDAg";
		// SEND STICKER
		header("Content-Type: application/json");
		$parameters = array('chat_id' => $chatId, "sticker" => $sticker_i_d);
		$parameters["method"] = "sendSticker";
		echo json_encode($parameters);
	}

	

	
	
	
	



