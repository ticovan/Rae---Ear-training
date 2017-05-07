<?php
// insert here your Bot API token
define("BOT_TOKEN", " ");
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
            ); //FINE start
			
		// ARRAY teoria	
		$teoria = array(
			
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
		

// ------ AVVIO


if($text == "/start"){
	$response = $start['1']['testo_A'].$firstname."!".$start['1']['testo_B'];
	//menu
	header("Content-Type: application/json");
	$parameters = array('chat_id' => $chatId, "text" => $response, "parse_mode" => 'HTML');
	$parameters["method"] = "sendMessage";
	$parameters["reply_markup"] = '{ "keyboard": [["Teoria"], ["Esercizi sugli intervalli"]]}';
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



/// ------ ESERCIZI ------ ////
elseif ($text == "Esercizi sugli intervalli"){
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


	

	
	
	
	



