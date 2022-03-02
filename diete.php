<!-- <?php 
session_start();
require "conn.php";
require "dbclass.php";

$db = new DB_functions();
?>-->

<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Diete -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Diete </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Diete" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/DieteStyleCSS.css">


<!-- link e script Pierluigi -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
<link rel="stylesheet" href="dietestyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css" integrity="sha512-ztsAq/T5Mif7onFaDEa5wsi2yyDn5ygdVwSSQ4iok5BPJQGYz1CoXWZSA7OgwGWrxrSrbF0K85PD5uLpimu4eQ==" crossorigin="anonymous" />

<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
<!-- fine link e script Pierluigi -->


	 <!-- Container per il cookie -->
	 <link rel="stylesheet" href="purecookie.css"/>
	 <script src="purecookie.js"></script>
	 
 </head>

 <body>
<!-- Testata del sito, Logo del sito -->
<header>
<?php if (($_SESSION['login'] != "done")): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
<?php if ($_SESSION['login'] == "done"): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="logout.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Logout
	</a></div>
	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<nav>
	<ul>
		<!-- Home -->
		<li><form id="homeform" action="index.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="homesubmit" value="Home">
		</form></li>

		<!-- Menù a tendina -->
		<li class="dropdown">

		<!-- Allenamento -->
		<form id="allenamentoform" action="allenamento.php" method="get">
				<input class="submit1" type="submit" name="submit1" id="allenamentosubmit" value="Allenamento">
		</form>

			<div class="dropdown-content">

				<input class="submit" type="submit" name='submit' id="cardiosubmit" value="Cardio">
				<hr>

				<input class="submit" type="submit" name='submit' id="pesisubmit" value="Pesi">
				<hr>

				<input class="submit" type="submit" name='submit' id="clsubmit" value="Corpo Libero">
				<hr>
				</script>
			</div>
		</form>
		</li>
		<!-- Fine menù a tendina -->

		<!-- Calcolo IMC -->
		<li><form id="imcform" action="imc.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Calcolo IMC">
		</form></li>

		<!-- Diete -->
		<li><form id="dieteform" action="#" method="get">
			<input class="submit1" type="submit" name="submit1" id="dietesubmit" value="Diete">
		</form></li>

		<!-- Consulenze -->
		<li><form id="imcform" action="consulenza.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="consulenzasubmit" value="Consulenze">
		</form></li>

		<!-- Contatti -->
		<li><form id="imcform" action="contatti.php" method="get">
			<input class="submit1" type="submit" name="submit1" id="imcsubmit" value="Contatti">
		</form></li>

		<!-- Vecchio menù a tendina
		<li><a href="imc.php">Calcolo IMC</a></li>
		<li><a href="diete.php">Diete</a></li>
		<li><a href="consulenza.php">Consulenze</a></li>
		<li><a href="contatti.php">Contatti</a></li> -->
	</ul>
</nav>

	<div id="content">
		 <div class="front1">
			 <h1>
				 Your Own Fitness, la scelta <br>giusta per il tuo fisico!
			 </h1>
		 </div>
	</div>

		<!-- Qui andranno le varie diete, idea dell'iframe -->
		<div id="Presentation">

		<!-- hero -->
		<div class="hero">
    	<div class="hero__content reveal">
      	<p class="intro-text">Your Own Fitness</p>
      	<h1 class="big-text">Migliora l'allenamento con la dieta</h1>
    	</div>
    	<video autoplay muted loop id="video-back">
      	<source src="video/v14.mp4" type="video/mp4">
    	</video>
  		</div>


		<!-- poster -->
		<div class="poster mt-3">
    	<div class="poster__img reveal">
      	<img src="images/i1.jpg" alt="">
    	</div>
    	<div class="poster__content reveal">
        <h3 class="big-text">Metabolismo basale</h3>
     

        	<p class="normal-text">Per dimagrire o in generale regolare il peso corporeo è indispensabile conoscere (anche) il proprio metabolismo basale (Basal Metabolic Rate, BMR): cos’è e come fare il calcolo del metabolismo basale?</p>
			
			<h4 class="start-text">Cos’è il metabolismo basale (a riposo)? Cosa significa?</h4>
			<p class="normal-text">Il metabolismo basale (BMR) corrisponde alla quantità minima di energia che serve all’organismo per permettere i processi biologici indispensabili alla vita, ad esempio la circolazione del sangue e la respirazione.<br>
			Per definizione, è l’energia che viene spesa da un soggetto che è in condizioni di assoluto riposo (fisico e mentale), a digiuno da 12 ore e in uno stato di neutralità termica, ovvero di condizioni ambientali (temperatura, umidità) che non innescano i processi di termoregolazione corporea: il soggetto deve essere nel maggior stato di quiete possibile.<br>
			Se una delle condizioni di misurazione non viene considerata c’è un’alterazione del calcolo del metabolismo basale: non si parla più di BMR ma di RMR (Resting Metabolic Rate) cioè di tasso metabolico a riposo. BMR e RMR sono molto simili in termini numerici in quanto differiscono solitamente per meno del 10%. Inoltre, il tasso metabolico a riposo è più frequentemente misurato per praticità.</p>
			
			<h4 class="start-text">A cosa serve il metabolismo basale? Come si misura?</h4>
			<p class="normal-text">Calcolo del metabolismo basale a riposo.<br>
			Ogni giorno consumi un certo quantitativo di energia, a causa di più componenti che incidono su questa spesa: il metabolismo basale è quella che pesa di più (60-70%) sul fabbisogno totale giornaliero. Perciò, il BMR serve a conoscere il proprio metabolismo, quanto consumi nella giornata e, di conseguenza, sapere quanto mangiare per perdere, mantenere, prendere peso. Più sei sedentario e poco attivo più l’energia totale spesa nella giornata è vicina al valore del metabolismo basale.<br>
			Il BMR può essere calcolato tramite:<br>
			calorimetria diretta: misura il calore sprigionato da un soggetto.<br>
			calorimetria indiretta: misura la quantità di ossigeno utilizzata.<br>
			equazioni di stima, come quella di Harris-Benedict che trovi successivamente.<br>
			Il metodo diretto si basa sul principio che tutti i processi metabolici sviluppano calore e prevede che il soggetto soggiorni in una camera metabolica per almeno 24 ore: è un metodo preciso e accurato ma che non è applicabile a livello ambulatoriale in quanto costoso e complesso.<br>
			Il fondamento della calorimetria indiretta, invece, è che l’organismo ricava energia tramite ossidazione dei substrati energetici contenuti negli alimenti: viene consumato ossigeno e prodotta anidride carbonica. Questa a sua volta può essere:<br>
			a circuito aperto: misura il quoziente respiratorio, dato dal rapporto tra anidride carbonica prodotta e ossigeno consumato;<br>
			a circuito chiuso: misura solo l’ossigeno e calcola le kcal/die sapendo che 1 litro di ossigeno = 4.82 kcal. Questo metodo è più facilmente utilizzabile rispetto a quello diretto.<br>
			Da cosa dipende il metabolismo basale? Fattori che lo influenzano<br>
			Ci sono molte variabili da cui dipende il metabolismo basale, anche se alcuni hanno più influenza rispetto ad altri: età, sesso, massa magra spiegano circa l’80% del BMR – infatti sono i tre fattori solitamente inclusi nelle formule di calcolo del BMR. Analizziamoli.<br>
			Età: i neonati e i bambini hanno un BMR molto elevato rispetto alle loro dimensioni, a causa della rapida crescita corporea. Mentre in adulti e anziani il metabolismo basale si abbassa, a causa della quantità di tessuto (non solo muscolare) che tende gradualmente a diminuire soprattutto nei sedentari e poco sportivi. In termini numerici, c’è un calo dell’1-2% ogni 10 anni a partire dai 20 anni.<br>
			Sesso: mediatamente gli uomini hanno un BMR più alto rispetto alle donne di circa il 5-10% grazie al maggior sviluppo dell’apparato muscolare. per quanto riguarda le donne, le fasi del ciclo mestruale influenzano la spesa energetica: il RMR è più basso all’inizio (fase follicolare) e più alto di 100-300 kcal alla fine (fase luteale).<br>
			Massa magra: più massa magra e meno massa grassa hai, più è alto il BMR. Già così, senza anticipare troppo, puoi capire come allenarti, essere attivo e avere una buona composizione corporea faccia avere un metabolismo più alto e consumare di più: metabolismo veloce?<br>
			Inoltre, come sempre, c’è una componente genetica non modificabile che incide sul valore del metabolismo basale: i componenti di una famiglia hanno valori di RMR simili.</p>
			
			<h4 class="start-text">Formula e calcolo del metabolismo basale:</h4>
			<p class="normal-text">Tra i metodi per scoprire il valore del metabolismo basale ci sono anche le equazioni di stima, che nell’immediato sono sicuramente il metodo più veloce. La formula comunemente più utilizzata è quella di Harris-Benedict, che prende in considerazione sesso, età (anni), peso (kg) ed altezza (cm).<br>
			BMR uomo (kcal/die): 66.5 + (13.75 x peso) + (5.003 x altezza) – (6.775 x età)<br>
			BMR donna (kcal/die): 655.1 + (9.5663 x peso) + (1.85 x altezza) – (4.676 x  età)<br>
			Questa, come tutte le altre formule e calcolatori, sono sicuramente utili per avere un’idea di quale possa essere il valore, ma deve esserci anche la consapevolezza che si tratta comunque di una stima con un potenziale margine di errore. Solitamente c’è una sovrastima del metabolismo basale reale.</p>
			
			<h4 class="start-text">Metabolismo basale e fabbisogno energetico</h4>
			<p class="normal-text">Come anticipato, il metabolismo basale è solo una, anche se la più influente, delle componenti che determinano il consumo calorico giornaliero e quindi il fabbisogno energetico. Oltre al BMR infatti c’è la termogenesi:<br>
			indotta dal cibo: quanta energia viene consumata per la digestione e assimilazione dei nutrienti?<br>
			associata ad esercizio fisico: quante calorie spendi se e quando ti alleni?<br>
			non associata ad esercizio fisico: il famoso NEAT, cioè tutte le attività non correlate all’esercizio fisico come il lavoro (sei seduto o è fisicamente impegnativo?), il tempo libero (fai le pulizie di casa o guardi la TV sul divano?), gesticolare, ecc.<br>
			Perciò, per sapere quanto consumi in totale al giorno al valore del metabolismo basale sono da aggiungere anche questi valori. Il calcolo delle calorie diventa così indispensabile per mantenere o ritrovare il peso ideale.</p>
			
			<h4 class="start-text">Rimedi al metabolismo basale basso, bassissimo o bloccato</h4>
			<p class="normal-text">Cosa fare se hai il metabolismo lento? In nessun libro di fisiologia o biologia c’è una definizione di metabolismo “basso” o “bloccato”, anche se nella realtà sono termini molto (troppo) utilizzati. Chi ha il metabolismo rallentato dovrebbe prima analizzare il suo stile di vita: quanto mangi? Quanto ti muovi? Fai sport? Quali cibi prediligi?<br>
			E’ facile non essere consapevole di quanto effettivamente mangi ogni giorno: bastano uno o due cucchiai di olio sulla verdura, quel cucchiaino in più di zucchero in ogni caffè, lo spuntino fatto sovra pensiero, ecc. Perciò già renderti conto di quanta energia assumi potrebbe essere il primo passo per scoprire che non hai il metabolismo lento ma che semplicemente mangi di più rispetto a quello che pensavi.<br>
			Dall’altra parte, se ti muovi poco, iniziare a farlo è sicuramente una buona idea: non serve essere maratoneti per iniziare a consumare di più, ma anche semplicemente una passeggiata ogni giorno a ritmo sostenuto è un inizio.<br>
			Il “metabolismo lento” è quindi espressione del mangiare troppo e male e del muoversi poco. Infatti, chi ha il “metabolismo veloce” è un soggetto magro, che mangia più o meno bene e che è attivo.</p>
			
			<h4 class="start-text">Aumentare il metabolismo basale: è possibile?</h4>
			<p class="normal-text">Hai scoperto prima quali sono le principali componenti che influenzano il metabolismo basale: età, sesso e massa magra. Quindi, per aumentare il basale, il fattore su cui puoi lavorare è la massa magra: come? Tramite allenamento e alimentazione. Tuttavia, c’è da precisare che questi fattori impattano comunque poco sul metabolismo basale, mentre hanno molto più rilevanza sulle altre componenti che determinano la spesa energetica.</p>
			
			<h4 class="start-text">Metabolismo basale e attività fisica</h4>
			<p class="normal-text">L’attività fisica è in grado di modificare il metabolismo basale quando permette una modificazione della composizione corporea. Chiaramente ci vuole tempo: perdere tessuto adiposo e incrementare la massa magra richiede pazienza e un programma di allenamento mirato allo scopo.</p>
			
			<p class="normal-text">Non bisogna poi dimenticare che ad ogni modo il metabolismo che hai adesso è il risultato di quello che hai fatto in tutti gli anni prima: chi è sempre stato poco attivo e comincia ad esserlo farà comunque più fatica ad incrementare il tasso metabolico rispetto a chi fin da piccolo ha mantenuto alto il proprio livello di attività fisica.</p>
			
			<h4 class="start-text">Metabolismo basale e dieta</h4>
			<p class="normal-text">Di pari passo all’allenamento, anche la dieta deve essere impostata in modo adeguato e mirato. Alimentazione ed esercizio fisico sono sinergici di tra di loro: tralasciare uno dei due potrebbe non portare al risultato sperato. Ad esempio, se mangi troppo poco non puoi costruire tessuto muscolare, così come non puoi perdere grasso se assumi troppa energia.</p>
			
			<p class="normal-text">Non ci sono cibi che attivano il metabolismo e altri che lo rallentano, nè integratori: punta sullo stile di vita da mantenere nel lungo periodo e non su queste “soluzioni” per risultati in tempi brevi che promettono ma non mantengono.</p>
			
			<h4 class="start-text">Metabolismo basale, bodybuilding e massa magra</h4>
			
			<p class="normal-text">Dal punto di vista del modello tricompartimentale della composizione corporea, il peso corporeo può essere suddiviso in: massa extra-cellulare, massa grassa e massa cellulare metabolicamente attiva (BCM). Il tessuto adiposo è metabolicamente inerte, mentre la BCM è molto attiva e contribuisce ad aumentare il metabolismo basale.</p>
			
			<p class="normal-text">Incrementare la massa magra (massa extra-cellulare + BCM) è un modo per stimolare il metabolismo: l’allenamento e un regime alimentare adeguato diventano così i mezzi per cambiare la propria composizione corporea e avere margine di modifica sul metabolismo.</p>
			
			<p class="normal-text">Solitamente, chi si allena ha valori di massa magra più alti e di massa grassa più bassi rispetto alla media della popolazione. Questo non si riflette solo su una migliore salute ed estetica, ma anche su una miglior capacità dell’organismo di metabolizzare ed utilizzare i nutrienti che riceve, in un circolo virtuoso. Da una parte, però, potrebbe anche essere che l’allenamento abbassi il metabolismo.</p>

    	</div>
  		</div>





		<!-- bg cover -->
		<div class="bg-cover mt-3" style="background: rgba(0, 0, 0, 0.349); background: url(images/i2mod.jpg) no-repeat center center; background-size: cover;"> 
    	<div class="bg-cover__title reveal">
      	<h3 class="big-text tw">Macronutrienti</h3>
    	</div>
    	<div class="bg-cover__text reveal">

    				  
<p class="normal-text tw">I macronutrienti sono uno dei concetti alla base della nutrizione: sapere cosa sono e a cosa servono può ottimizzare la salute e il raggiungimento dei tuoi obbiettivi in un percorso per dimagrire, in fase di definizione, per aumentare di peso, per essere energico in palestra negli allenamenti!<br></p>

<h4 class="start-text tw">Macronutrienti: cosa sono e quali sono?</h4>
<p class="normal-text tw">Tutte le macromolecole organiche alla base dell’alimentazione e che forniscono energia sono definite macronutriente. Questi sono divisi, a seconda delle loro caratteristiche, in:</p>
						<ul>
							<li>Carboidrati (o glucidi o zuccheri), che apportano in media 4 kcal/g;</li>
				            <li>Grassi (o lipidi), con le loro 9 kcal/g;</li>
				            <li>Proteine (o protidi), che contengono 4 kcal/g come i carboidrati.</li>
						</ul>
<p class="med-text tw">Oltre a questi tre principali, non sono da dimenticare:</p>
						<ul>
							<li>Acqua: non apporta energie ma è fondamentale per il sostentamento del metabolismo;</li>
							<li>Alcol: molecola tossica per l’organismo e che apporta 7 kcal/g.</li>
						</ul>
<p class="normal-text tw">Alla base della piramide della nutrizione subito dopo il fabbisogno calorico (di quante calorie hai bisogno) c’è proprio il giusto rapporto e la ripartizione tra i macronutrienti: quanto devi mangiare di ogni macronutriente? Quale preferire e perché? Proseguendo con la lettura troverai queste informazioni.<br></p>

<h4 class="start-text tw">A cosa servono e dove si trovano i macronutrienti?</h4>
<p class="normal-text tw">Un macronutriente non vale l’altro, non solo per il differente numero di calorie, ma piuttosto perché ognuno di essi assolve una particolare azione nell’organismo:</p>
						  <ul>
						   <li>Carboidrati: sono la principale fonte di energia utilizzata dagli organismi;</li>
				           <li>Grassi: sono una riserva di energia, hanno funzione strutturale, regolatrice (es. ormoni) e protettiva;</li>
				           <li>Proteine: hanno funzione strutturale, enzimatica, regolatrice, di trasporto, recettoriale, energetica, di difesa e protezione, di movimento e sostegno.</li>
						  </ul>
<p class="normal-text tw">A seconda di quale macronutriente è più presente in un cibo, gli alimenti possono essere suddivisi in categorie e definiti come una “buona fonte” per ricavare quel nutriente.</p>
<p class="med-text tw">I glucidi li trovi soprattutto in:</p>
						  <ul>
						   <li>Cereali: riso, mais, patate, farro, segale, orzo, triticale, frumento e derivati (pasta, pane, cracker, gallette,…)</li>
				           <li>Frutta e verdura, anche se in minor quantità rispetto ai precedenti a parità di peso data la presenza di acqua</li>
				           <li>Legumi</li>
						  </ul>
<p class="normal-text tw">I lipidi, invece, sono presenti sia come grassi animali in carne e pesci grassi, ma anche in uova (tuorlo), latte e derivati (formaggi, burro) sia come grassi vegetali in frutta secca e oli.<br>
				Infine, le proteine le trovi sostanzialmente in tutti i prodotti animali ma anche nei vegetali, soprattutto legumi e frutta secca.<br>
				Nella quasi totalità dei casi, questi nutrienti sono compresenti all’interno di uno stesso alimento, oltre anche ad altre sostanze che normalmente trovi nei cibi come la fibra alimentare, le vitamine, i minerali. Ad esempio, 100 g di pasta non corrispondono a 100 g di carboidrati, ma a circa 73 g di carboidrati, 13 g di proteine, 10 g di acqua, 2 g di fibra e tracce (i pochi restanti grammi: 2 g) di grassi.<br></p>

<h4 class="start-text tw">Tabella dei macronutrienti</h4>	
<p class="normal-text tw">I carboidrati a seconda della loro complessità strutturale possono essere:</p>
						   <ul>
							<li>Monosaccaridi: zuccheri semplici formati da una molecola, come il glucosio o fruttosio, galattosio;</li>
				   			<li>Disaccaridi: zuccheri semplici formati da due molecole, come il lattosio, saccarosio, maltosio;</li>
				   			<li>Polisaccaridi: zuccheri complessi formati da molte molecole, come l’amido, il glicogeno o la cellulosa.</li>
						   </ul>
 				<p><img src="images/1.jpeg"></p>

<h4 class="start-text tw">I grassi, invece, possono essere:</h4>

                          <ul>
							<li>Saturi: derivanti principalmente dalle fonti animali come la carne, da limitare;</li>
				   			<li>Monoinsaturi: derivanti principalmente dai vegetali come l’olio d’oliva ma anche dall’uovo della gallina;</li>
				   			<li>Polinsaturi: derivanti sia da vegetali come gli olii vegetali, sia da pesce e animali che mangiano erba o alghe;</li>
				   			<li>Trans: ottenuti principalmente chimicamente come nella lavorazione delle margarine.</li>
						  </ul>
				<p><img src="images/2.jpeg"><br></p>


<h4 class="start-text tw">Alimenti e macronutrienti in una dieta</h4>
<p class="normal-text tw">In una dieta proprio in virtù delle loro diverse caratteristiche e funzioni è bene inserire tutti e tre i macronutrienti. Un’alimentazione sana dovrebbe avere:</p>
						  <ul><li>Un buon quantitativo di carboidrati: superiore a 2-2,5 g/kg di peso corporeo (50-60% del fabbisogno calorico giornaliero)</li>
				           <li>Una giusta quantità di grassi: tra 0,5-1,5 g/kg</li>
				           <li>Un giusto quantitativo di proteine: 0,8-2,5 g/kg</li>
				           <li>Tutti i micronutrienti di cui abbiamo bisogno</li>
				           <li>La giusta idratazione: 1-1,5 litri/1000 kcal che mangi</li>
						  </ul>
<p class="normal-text tw">In questi range ci possono stare quasi tutte le diete ed i relativi pasti, escludendo quelle più estreme che tolgono un macronutriente – solitamente i glucidi per dare più spazio ai protidi.<br>
				Per raggiungere la quota calorica e quella dei rispettivi nutrienti, è preferibile avere un’alimentazione varia e ricavare così tutto quello di cui hai bisogno da fonti sempre diverse: ogni alimento ha le proprie peculiarità nutrizionali.<br>
				Alla fine, il primo fattore per essere in salute è rimanere nel peso ideale (quindi magri), mangiare alimenti poco lavorati, non industriali e stagionali. È inutile la diatriba se sia meglio la dieta mediterranea, quella chetogenica o la vegana: il corpo non riconosce gli alimenti ma i nutrienti che gli diamo.<br></p>

<h4 class="start-text tw">Quanti macronutrienti assumere per dimagrire? Quanti grammi al giorno?</h4>
<p class="normal-text tw">Per dimagrire la prima cosa da fare è impostare un deficit calorico, altrimenti anche se stabilisci la miglior ripartizione dei macronutrienti ma continui a stare in normocalorica (o, peggio, ipercalorica) non perderai neanche un grammo. La dieta che fa perdere peso è quella ipocalorica.<br>
						  In pratica cosa vuol dire? Mangiare un po’ di meno e/o muoverti un po’ di più, anche solo camminando.<br>
						  Dopo aver stabilito a quante calorie giornaliere in media arrivare, è il turno dei macronutrienti: devono essere presenti tutti e tre anche se in proporzioni diverse a seconda di più fattori. Il primo e il più importante da impostare sono le proteine: contrastano il senso di fame e preservano il tessuto magro – che è fondamentale per dimagrire. I grammi al giorno di proteine sono circa 1.5-2 g/kg peso corporeo.<br>
						  La persona normale che introduce un buon quantitativo proteico mediamente è più sazia, aumenta il trofismo muscolare, soffre meno di osteoporosi ed ha un sistema immunitario migliore.<br>
						  Dopo queste, è il turno di glucidi e lipidi: la loro quantità è di importanza secondaria rispetto a quella proteica, per questo si possono preferire i primi oppure i secondi in una quantità variabile e comunque riuscire a perdere peso.<br>
						  Solitamente, più un soggetto è sedentario o ha una cattiva affinità con i carboidrati (resistenza-insulinica), anche se le due cose spesso e volentieri vanno di pari passo, è preferibile prediligere i grassi (buoni) rispetto ai glucidi – sempre rispettando il deficit calorico.<br>
						  Infatti, l’azione dei glucidi dipende essenzialmente dal contesto calorico e dall’attività fisica che svolgi:</p>
						   <ul>
							<li>se sei attivo, fai sport, sei in ipocalorica > promuovi la sensibilità insulinica</li>
				            <li>se sei sedentario, sei in ipercalorica > promuovi la resistenza insulinica</li>
						   </ul>
<p class="normal-text tw">La prima preoccupazione dovrebbe essere quella di tornare al peso ideale, perchè una persona con grasso addominale avrà sempre livelli d’infiammazione silente elevati ed avrà un rischio d’incorrere in alcune malattie (come quelle metaboliche) superiore agli altri.<br>
				Il calcolatore Project in base al tuo obbiettivo può aiutarti a stimare il fabbisogno calorico e di macronutrienti (= da verificare in pratica su te stesso se eventualmente c’è qualcosa da modificare).<br></p>

<h4 class="start-text tw">Macronutrienti in palestra e nel bodybuilding</h4>
<p class="normal-text tw">La distribuzione dei macronutrienti può fare la differenza per chi vuole ottenere determinati obbiettivi ed è il secondo step da impostare dopo quello calorico. I “macro” vengono impostati in grammi in relazione al peso corporeo – sarebbe più accurato in relazione alla massa magra, ma la prima opzione è più pratica dato che basta una normale bilancia pesa-persone.<br>
				Carboidrati e grassi vengono utilizzati a scopo energetico, mentre le proteine contribuiscono solo in piccola parte all’energia (< 10%): tutte quelle non ossidate (la maggior parte) vanno a costruire e riparare i tessuti. Durante una dieta ipocalorica, però, la quota di proteine che viene bruciata a scopo energetico è molto maggiore, dato che il corpo si trova in una situazione di restrizione energetica.<br>
				È questo il “perché” alla base di una quota proteica più alta nella fase di definizione e soprattutto nei soggetti che hanno meno grasso corporeo (=meno deposito energetico).<br>
				Per non inficiare sull’allenamento, è meglio non abbassare troppo i carboidrati – specialmente nelle giornate di allenamento e nei pasti più vicini (prima/dopo) alla tua ora e mezza di palestra.<br></p>

<h4 class="start-text tw">Macronutrienti in massa</h4>
<p class="normal-text tw">In fase di massa il bilancio energetico è positivo e quindi vengono innescate le vie metaboliche dell’anabolismo (di costruzione).<br></p>

<p class="med-text tw">Proteine-Grassi-Carboidrati</p>
<p class="normal-text tw">1.6-2.2 g/kg	20-30% del totale calorico giornaliero (minimo 0.5 g/kg). Le restanti calorie, minimo 1g/kg<br>
				          Lo step critico di questa fase è il riuscire a non accumulare eccessivamente a grasso mandando all’aria i risultati (forse) ottenuti con la precedente fase di cut. Questo può essere anche evitato introducendo un diverso aumento calorico a seconda del livello del soggetto: più il soggetto è avanzato e più dovrà accontentarsi di un leggerissimo incremento.<br>
				          Un beginner può aumentare di 200-300 kcal al giorno, mentre uno avanzato di al massimo 100. Il soggetto intermedio può considerare le 100-200 kcal/die.<br></p>

<h4 class="start-text tw">Macronutrienti in definizione</h4>
<p class="normal-text tw">In definizione, invece, il bilancio energetico è negativo e al fine di preservare la massa magra è meglio incrementare la quota proteica: quando c’è restrizione energetica una quota maggiore di proteine viene impiegata per dare energia, cosa che avviene in misura minore quando il contesto è normo/ipercalorico.</p>
<p class="med-text tw">Proteine - Grassi - Carboidrati</p>
<p class="normal-text tw">2.2-2.6 g/kg 15-25% del totale calorico giornaliero (minimo 0.5 g/kg)	Le restanti calorie, minimo 1g/kg<br>
				          I grassi non dovrebbero essere più bassi di 0.5 g/kg peso corporeo e i carboidrati sotto 1g/kg. Se con il taglio calorico ti risulta difficile rispettare questi valori, può essere utile ridurre il deficit: ad esempio se hai prefissato una perdita di peso dell’1% del peso corporeo a settimana, passa allo 0.5%. Il dimagrimento richiederà più tempo ma il risultato ci sarà ugualmente: chi va piano va definito e lontano.</p>

<h4 class="start-text tw">Differenza tra macronutrienti e micronutrienti</h4>
<p class="normal-text tw">Si chiamano micro-nutrienti non perché siano meno importanti ma perché le quantità richieste sono molto minori rispetto ai macro-nutrienti. Si dividono in vitamine e minerali ed entrambi si trovano soprattutto in frutta e verdura. Inoltre, i micro non forniscono energia.<br>
				Se poi con i macronutrienti è piuttosto facile eccedere, con i micronutrienti è difficile che ci sia un sovra-dosaggio; è più probabile che ci sia una carenza, soprattutto quando l’alimentazione non è variegata e c’è esclusione/limitazione di certi gruppi alimentari. Ad esempio, la vitamina B12 (acido folico) è presente solamente nei prodotti di origine animale.<br>
				Le vitamine comprendono vitamine idrosolubili (vitamina C, folati, biotina, niacina, vitamina B6 e B12, riboflavina) e liposolubili (A, D, E, K) – le liposolubili a differenze delle altre possono essere depositate, in piccola quantità, nell’organismo.<br>
				Tra i minerali ci sono: ferro, zinco, rame, magnesio, manganese, potassio, sodio, calcio,…<br>
				Anche i micronutrienti rivestono un ruolo essenziale e interagiscono con la salute e la composizione corporea: la maggior parte dei processi biochimici ha bisogno di micronutrienti per potersi avviare.</p>

<h4 class="start-text tw">Conclusioni sui macronutrienti</h4>
<p class="normal-text tw">Sapere a cosa servono e dove si trovano sono le conoscenze indispensabili per riuscire a “costruire” la propria alimentazione. La loro quantità deve essere riferita all’apporto calorico totale da raggiungere nel giorno o nella settimana, ma anche la qualità è importante: una molecola di glucosio di una mela è uguale ad una molecola di glucosio di una patatina fritta col ketchup, ma decisamente sono alimenti con un valore nutrizionale differente!</p>

<p class="med-text tw">Bibliografia</p>
<p class="normal-text tw">Helms, Valdez, Morgan (2018). The Muscle & Strength Pyramid – Nutrition.<br>
				Medeiros & Wildman (2019). Advanced Human Nutrition. Jones & Bartlett Learning.</p>


    </div>
  </div>



		<!-- grid -->
  		<div class="grid mt-2">
    	<div class="col reveal">
      	<h3 class="big-text">Seleziona ora la<br/>dieta adatta a te!</h3>
    	</div>
    	<div class="col reveal">
      	<p class="med-text mt-1 mt-sma-0">Qui puoi trovare tutti i tipi di diete, seleziona la tua preferita e inseriscila nella tua routine.
	 	</p>
   	 	</div>
		</div>



		<!-- carousel -->
		<div class="main-carousel">



<!-- Dieta 1 -->
<div class="carousel-cell">

    <div class="carousel-cell__content" style="background: url(images/i3.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">


		<h4 class="start-text tw">Dieta a Punti</h4>
        <p class="start-text tw"> Giorno 1</p>
		<p class="med-text tw">Colazione</p>

		<ul><li>1 bicchiere di latte scremato</li>
	    <li>4 cucchiaini di corn-flakes</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>100g di pasta con le verdure</li>		
	    <li>120g filetto di vitello</li>		
	    <li>5 cucchiai di piselli</li>	
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>
	    <li>4 prugne</li>
	    <li>4 albicocche secche</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>120g tonno fresco</li>
        <li>Spinaci</li>
	    <li>2 fette di pane tostato</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 2</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>
	    <li>4 biscotti integrali</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>300g patate lesse</li>
	    <li>Bietole e spinaci</li>
	    <li>2-3 fette di salmone affumicato</li>
	    <li>5 cucchiai di legumi cotti</li>	
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>	
	    <li>2 fichi</li>	
	    <li>15 ciliegie</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>120g bistecca vitello</li>	
	    <li>Melanzane</li>
	    <li>2 fette di pane tostato</li>	
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 3</h4>
		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>
	    <li>16 cucchiaini di special K</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>130g di riso bianco</li>
	    <li>60g sardine</li>
	    <li>5 cucchiai di piselli</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li<>
	    <li>1 melograno</li>
	    <li>4 fette di ananas in scatola</li></ul>	

		<p class="med-text tw">Cena</p>
		<ul><li>100g fegato</li>
	    <li>Carciofi</li>
	    <li>2 fette di pane tostato</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 4</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>
	    <li>4 cucchiaini di corn-flakes</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>50g tortellini</li>
	    <li>30g groviera</li>
	    <li>5 cucchiai di piselli</li>
	    <li>1 cucchiaino di olio extravergine d'oliva</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>
	    <li>1 piccola banana</li>
	    <li>15 acini d'uva</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>1 uovo</li>
	    <li>Bietole</li>
	    <li>2 fette di pane tostato</li>
	    <li>3 cucchiaini di olio extravergine d'oliva</li></ul>	


		<h4 class="start-text tw">Giorno 5</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>
	    <li>4 biscotti integrali</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>300g patate lesse</li>
	    <li>Cavolo</li>
	    <li>12 gamberetti</li>
	    <li>5 cucchiai di legumi cotti</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>
	    <li>½ mango</li>
	    <li>15 ciliegie</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>120g fiocchi di latte</li>
	    <li>sedano</li>
	    <li>2 fette di pane tostato</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 6</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>
	    <li>16 cucchiaini di special K</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>130g di riso bianco</li>
	    <li>300g cozze</li>
	    <li>5 cucchiai di piselli</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>
	    <li>4 prugne</li>
	    <li>4 albicocche secche</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>120g trota</li>
	    <li>Carciofi</li>	
	    <li>2 fette di pane tostato</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 7</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte scremato</li>	
	    <li>4 cucchiaini di corn-flakes</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>100g di pasta con le verdure</li>
	    <li>120g filetto di vitello</li>
	    <li>5 cucchiai di piselli</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>2 yogurt bianchi scremati</li>	
	    <li>2 fichi</li>
	    <li>15 ciliegie</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>30g Emmethal</li>
	    <li>Spinaci</li>
	    <li>2 fette di pane tostato</li>
	    <li>2 cucchiaini di olio extravergine d'oliva</li></ul>

		</div>		
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta1">
				<input type="hidden" name="dieta" value="dieta_punti"/>
				<input type="submit" value="Aggiungi" id='Bdieta1'>Aggiungi</input>
			</form>
			
		</div>
</div>



<!-- Dieta 2 -->
  <div class="carousel-cell">
    <div class="carousel-cell__content" style="background: url(images/i4.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">

		<h4 class="start-text tw">Dieta per abbassare<br>il colesterolo</h4>
        
		<p class="start-text tw"> Giorno 1</p>
		<p class="med-text tw">Colazione</p>

		<ul><li>1 bicchiere di latte scremato</li>
	    <li>4 Fette biscottate (meglio integrali)</li>
	    <li>4 cucchiaini di marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>1 Mela con buccia</li>
	    <li>4 prugne</li>
	    <li>1 vasetto Yogurt bianco magro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">200g di Fagioli in brodo:</p>
		<ul><li>200g di Fagioli freschi;</li>
		<li>1/2 cucchiaio Olio di soia a crudo.</li>		
		<li>150g di Petto di pollo</li>	
	    <li>100g di Lattuga</li>
	    <li>1 cucchiaio Olio di soia a crudo</li>
		<li>1 fetta di Pane (meglio integrale o di segale)</li></ul>
	
		<p class="med-text tw">Spuntino</p>
		<ul><li>6/7 Noci secche</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>250g di Merluzzo surgelato</li>
        <li>1/2 cucchiaio di Olio di soia a crudo</li>
	    <li>200g di Melanzane</li>
	    <li>3 fette Pane (meglio integrale o di segale)</li>
	    <li>1 cucchiaio Olio di soia a crudo</li></ul>


		<h4 class="start-text tw">Giorno 2</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di soia</li>
	    <li>2 fette Pane (meglio integrale o di segale)</li>
	    <li>4 cucchiaini di Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g pera con buccia</li>
	    <li>1 vasetto di yogurt bianco magro</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Risotto alle zucchine:</p>	
		<ul><li>80g di riso basmati;</li>	
	    <li>100g di zucchine;</li>
		<li>1/2 cucchiaio di olio extravergine di oliva.</li>
		<li>5g di tonno naturale</li>
		<li>100g di radicchio rosso</li>
		<li>1 cucchiaio di olio extravergine di oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>6/7 Mandorle</li></ul>	
	    
		<p class="med-text tw">Cena</p>
		<ul><li>200g Vitello taglio magro</li>
		<li>1/2 cucchiaio Olio extravergine d'oliva</li>
		<li>200g Finocchi</li>
		<li>3 fette Pane (meglio integrale o di segale)</li>
		<li>1 cucchiaio Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 3</h4>
		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di vacca scremato</li>
	    <li>4 Fette biscottate (meglio integrali)</li>
		<li>4 cucchiaini Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>1-2 Arancia</li>
	    <li>1 vasetto di Yogurt bianco magro</li>
	    <li>5 cucchiai di piselli</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Ceci in brodo:</p>
		<ul><li>70g Ceci secchi;</li<>
	    <li>1/2 cucchiaio Olio di soia a crudo.</li>
	    <li>150g Petto di tacchino</li>
		<li>100g Valeriana</li>
		<li>1 cucchiaio Olio di soia a crudo</li>
		<li>1 fetta Pane (meglio integrale o di segale)</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>6-7 Nocciole</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>150g Sgombro o maccarello</li>
		<li>200g Broccoli</li>
		<li>3 fette Pane (meglio integrale o di segale)</li>
		<li>1/2 cucchiaio Olio di soia a crudo</li>
		<li>NO OLIO</li></ul>


		<h4 class="start-text tw">Giorno 4</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di soia</li>
	    <li>2 fette Pane (meglio integrale o di segale)</li>
		<li>4 cucchiaini Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>150g Uva con buccia</li>
	    <li>1 vasetto Yogurt bianco magro</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta al pomodoro:</p>
		<ul><li>80g di Pasta di semola (meglio integrale);</li>
	    <li>100g Passata o polpa di pomodoro;</li>
	    <li>1/2 cucchiaio Olio extravergine d'oliva.</li>
		<li>150g Fiocchi di latte magri</li>
		<li>100g Rughetta o rucola</li>
		<li>1 cucchiaio Olio extravergine d'oliva</li>
		<li>NO PANE</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>6-7 Mandorle</li></ul>	

		<p class="med-text tw">Cena</p>
		<ul><li>150g di Lombo maiale</li>
		<li>1/2 cucchiaio di Olio extravergine d'oliva</li>
		<li>200g di Cavolo cappuccio</li>
		<li>3 fette di Pane (meglio integrale o di segale)</li>
		<li>1/2 cucchiaio di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 5</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di vacca scremato</li>
	    <li>4 Fette biscottate (meglio integrali)</li>
		<li>4 cucchiaini di Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>1 Mela con buccia</li>
	    <li>1 vasetto di Yogurt bianco magro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Lenticchie in umido:</p>
		<ul><li>200g di Lenticchie secche;</li>
	    <li>1/2 cucchiaio di Olio di soia a crudo.</li>
	    <li>150g di Roast-beef</li>
		<li>100g di Lattuga</li>
		<li>1 cucchiaio di Olio di soia a crudo</li>
		<li>1 fetta di Pane (meglio integrale o di segale)</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>6-7 Noci secche</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>200g di Sarde</li>
	    <li>NO OLIO</li>
	    <li>200g di Melanzane</li>
		<li>3 fette di Pane (meglio integrale o di segale)</li>
		<li>1/2 cucchiaio di Olio di soia a crudo</li></ul>


		<h4 class="start-text tw">Giorno 6</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di soia</li>
	    <li>2 fette di Pane (meglio integrale o di segale)</li>
		<li>4 cucchiaini di Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>1 Pera con buccia</li>
	    <li>300g cozze</li>
	    <li>1 vasetto di Yogurt bianco magro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>80g di Riso basmati</li>
	    <li>100g di Funghi prataioli</li>
	    <li>1/2 cucchiaio di Tonno naturale</li>
		<li>100g di Radicchio rosso</li>
		<li>1 cucchiaio di Olio extravergine d'oliva</li>
		<li>NO PANE</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>6-7 Mandorle</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>150g di Bovino taglio magro</li>
	    <li>1/2 cucchiaio di Olio extravergine d'oliva</li>
	    <li>200g di Finocchi</li>
		<li>3 fette di Pane (meglio integrale o di segale)</li>
		<li>1 cucchiaio di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 7</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>1 bicchiere di latte di vacca scremato</li>	
	    <li>4 Fette biscottate (meglio integrali)</li>
		<li>4 cucchiaini di Marmellata senza zucchero + fibre</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>1 Mela con buccia</li>
	    <li>1 vasetto di Yogurt bianco magro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>250g di Pizza margherita + verdure grigliate</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>6-7 Nocciole</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>150g di Filetto di tonno</li>
		<li>NO OLIO</li>
		<li>QB di Insalata mista</li>
		<li>3 fette di Pane (meglio integrale o di segale)</li>
		<li>1/2 cucchiaio di Olio di soia a crudo</li></ul>

		</div>	
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta2">
				<input type="hidden" name="dieta" value="dieta_col"/>
				<input type="submit" value="Aggiungi" id="Bdieta2"></input>
			</form>
			
		</div>
</div>



<!-- Dieta 3 -->
<div class="carousel-cell">
    <div class="carousel-cell__content" style="background: url(images/i5.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">

		<h4 class="start-text tw">Dieta per<br>osteoporosi</h4>

		<p class="start-text tw">Giorno 1</p>

		<p class="med-text tw">Colazione</p>
	 	<ul><li>300g di Latte di vacca parzialmente scremato</li>
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>
	
		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Mela</li>
			<li>25g di Gallette di riso integrale non salate</li></ul>

		<p class="med-text tw">Pranzo</p>
        <p class="normal-text tw">Pasta al pomodoro:</p>
		<ul><li>90g	di Pasta di semola;</li>
			<li>100g di Salsa di pomodoro senza sale.</li>
			<li>10g	di Grana</li>
			<li>50g	di Fiocchi di latte</li>
			<li>200g di Melanzana</li>		
			<li>50g di Pane di frumento</li>
			<li>15g di Olio extravergine di oliva</li></ul>

		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Kiwi</li>
			<li>125g di	Yogurt di latte parzialmente scremato</li></ul>	

		<p class="med-text tw">Cena</p>
        <p class="normal-text tw">Sgombro alla griglia:</p>
		<ul><li>150g di Sgombro (o maccarello) dell'Atlantico;</li>
			<li>50g di Lattuga</li>	
			<li>100g di Pane di frumento</li>
			<li>5g di Olio extravergine di oliva</li></ul>


		<h4 class="start-text tw">Giorno 2</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di Latte di vacca parzialmente scremato</li>
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>

		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Mela</li>	
			<li>25g di Gallette di riso integrale non salata</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Risotto ai funghi:</p>
		<ul><li>90g di Riso bianco a chicco corto;</li>
			<li>100g di	Funghi champignon.</li>
			<li>10g Grana</li>		
			<li>50g di Ricotta da latte parzialmente scremato</li>	
			<li>200g si Zucchini</li>		
			<li>50g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>

		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Pere</li>
			<li>125g di Yogurt di latte parzialmente scremato</li></ul>

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Petto di pollo alla griglia:</p>
		<ul><li>150g di Peto di pollo, solo carne</li>
			<li>50g di Radicchio</li>	
			<li>100g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>		


		<h4 class="start-text tw">Giorno 3</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di Latte di vacca parzialmente scremato</li>		
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>		

		<p class="med-text tw">Spuntino</p>
		<ul><li>150g di Uva europea</li>
			<li>25g di Gallette di riso integrale non salata</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Stufato di fagioli con carote:</p>
		<ul><li>90g di Fagioli, secchi;</li>	
			<li>150g di Carote.</li>
			<li>10g di Grana</li>	
			<li>50g di Formaggio cremoso senza grassi</li>	
			<li>50g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>		

		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Arance</li>
			<li>125g di Yogurt di latte parzialmente scremato</li></ul>		

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Uova all'occhio di bue:</p>
		<ul><li>100g di Uova.</li>	
			<li>200g di Patate</li>
			<li>100g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>	


		<h4 class="start-text tw">Giorno 4</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di Latte di vacca parzialmente scremato</li>	
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela</li>
			<li>25g di Gallette di riso integrale non salata</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta alle melanzane:</p>
		<ul><li>90g di Pasta di semola;</li>	
			<li>100g di Melanzane.</li>		
			<li>10g di Grana</li>		
			<li>50 g di	Fiocchi di latte a ridotto contenuto di grassi</li>	
			<li>200g di Zucchini</li>
			<li>50g di Pane di frumento</li>
			<li>15g di Olio extravergine di oliva</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di	Kiwi</li>	
			<li>125g di Yogurt di latte parzialmente scremato</li></ul>	

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Sarde alla griglia:</p>
		<ul><li>150g di	Sarde.</li>		
			<li>50g di Lattuga</li>		
			<li>100g di	Pane di frumento</li>		
			<li>15g di Olio extravergine di oliva</li></ul>	


		<h4 class="start-text tw">Giorno 5</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di	Latte di vacca parzialmente scremato</li>	
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>

		<p class="med-text tw">Spuntino</p> 
		<ul><li>200g di Mela</li>	
			<li>25g di Gallette di riso integrale non salata</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Risotto alle zucchine</p>
		<ul><li>90g di Riso bianco a chicco corto;</li>	
			<li>100g di Zucchine.</li>		
			<li>10g di Grana</li>	
			<li>50g di Ricotta da latte parzialmente scremato</li>	
			<li>100g di	Finocchi</li>	
			<li>50g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>		

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di	Pere</li>	
			<li>125g di	Yogurt di latte parzialmente scremato</li></ul>	

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Spigola alla griglia:</p>
		<ul><li>150g di Spigola, varie specie.</li>
			<li>50g di Rucola</li>
			<li>100g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>	


		<h4 class="start-text tw">Giorno 6</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di Latte di vacca parzialmente scremato</li>	
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>150g di	Uva europea</li>
			<li>25g di Gallette di riso integrale non salata</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Stufato di lenticchie e sedano:</p>
		<ul><li>90g di Lenticchie, secche;</li>	
			<li>200g di Sedano.</li>	
			<li>10g di Grana</li>	
			<li>50g di Formaggio cremoso senza grassi</li>	
			<li>50g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>	

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Arance</li>	
			<li>125g di Yogurt di latte parzialmente scremato</li></ul>		

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Uova all'occhio di bue:</p>
		<ul><li>100g di	Uova.</li>	
			<li>200g di Patate</li>
			<li>100g di Pane di frumento</li>	
			<li>15g di Olio extravergine di oliva</li></ul>		


		<h4 class="start-text tw">Giorno 7</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300g di Latte di vacca parzialmente scremato</li>	
			<li>45g di Cereali pronti da mangiare, muesli, con frutta e nocciole</li></ul>		

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela</li>
			<li>25g di Gallette di riso integrale non salata</li></ul>	

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta ai peperoni:</p>
		<ul><li>90g di Pasta di semola;</li>
			<li>100g di Peperoni gialli.</li>
			<li>10g di Grana</li>	
			<li>50g di Fiocchi di latte a ridotto contenuto di grassi 2%</li>	
			<li>200g di Melanzana</li>	
			<li>50g di Pane di frumento</li>
			<li>15g di Olio extravergine di oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Kiwi</li>	
			<li>125g di Yogurt di latte parzialmente scremato</li></ul>	

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Tonno alla griglia</p>
		<ul><li>150g di Tonno fresco</li>
			<li>50g di Lattuga</li>
			<li>100g di Pane di frumento</li>
			<li>15g di Olio extravergine di oliva</li></ul>

		</div>	
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta3">
				<input type="hidden" name="dieta" value="dieta_osteo"/>
				<input type="submit" value="Aggiungi" id="Bdieta3"></input>
			</form>
			
		</div>
</div>



<!-- Dieta 4 -->
<div class="carousel-cell">
    <div class="carousel-cell__content" style="background: url(images/i6.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">

		<h4 class="start-text tw">Dieta chetogenica</h4>


		<p class="start-text tw">Giorno 1<br>SENZA ALLENAMENTO</p>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Panedi segale</li>
		<li>30g diFesa di tacchino</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Noci</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>

		<p class="med-text tw">Pranzo </p>
		<p class="normal-text tw">Vitello alla piastra:</p>
		<ul><li>400g di Controfiletto di vitello.</li>
		<li>300g di Finocchi crudi</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Mela, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato</li></ul>

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Spigola al cartoccio:</p>
		<ul><li>450g di Spigola, varie specie (parte edibile)</li>
		<li>300g di Zucchine al vapore</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Mela, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 2<br>CON ALLENAMENTO</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Pane di segale</li>
		<li>30g di Prosciutto crudo dolce, magro</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Nocciole</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>300g di	Ricotta di vacca, da latte parzialmente scremato</li>
		<li>200g di Carciofi</li>
		<li>10g di Olio extravergine d'oliva totale</li>
		<li>½ Arancia, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato</li>
		<p class="normal-text tw">Integratore di maltodestrine e amminoacidi ramificati:</p>
		<ul><li>200g di Banana;</li>
		<li>50g di Integratore maltodestrine + BCAA + sali e vitamine.</li></ul>

		<p class="med-text tw">Cena</p> 
		<p class="normal-text tw">Merluzzo al vapore:</p>
		<ul><li>450g di Filetto di merluzzo.</li>
		<li>300g di Spinaci al vapore</li>
		<li>20g di Olio extravergine d'oliva totale</li>
		<li>½ Arancia, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 3<br>SENZA ALLENAMENTO</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Pane di segale</li>
		<li>30g di Prosciutto cotto magro</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Mandorle</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Petto di pollo lessato:</p>
		<ul><li>400g di Petto di pollo.</li>
		<li>200g di Carote crude</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Pera, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato</li></ul>

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Orata al forno:</p>
		<ul><li>450g di Orata (parte edibile).</li>
		<li>300g di Melanzanein padella</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Pera, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 4<br>CON ALLENAMENTO</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Pane di segale</li>
		<li>30g di Prosciutto cotto magro</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Mandorle</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>
		
		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Petto di pollo lessato:</p>	
		<ul><li>400g di Petto di pollo.</li>
		<li>200g di Carote crude</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Pera, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato</li></ul>
		<p class="normal-text tw">Integratore di maltodestrine e amminoacidi ramificati:</p>
		<ul><li>200g di Banana;</li>
		<li>50g di Integratore maltodestrine + BCAA + sali e vitamine.</li></ul>
		
		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Orata al forno:</p>
		<ul><li>450g di Orata (parte edibile).</li>
		<li>300g di Melanzane in padella</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Pera, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 5<br>SENZA ALLENAMENTO</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Pane di segale</li>
		<li>30g di Prosciutto crudo dolce, magro</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Nocciole</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>

		<p class="med-text tw">Pranzo</p>
		<ul><li>300g di Ricotta di vacca, da latte parzialmente scremato</li>
		<li>200g di Carciofi</li>
		<li>10g di Olio extravergine d'oliva totale</li>
		<li>½ Arancia, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Merluzzo al vapore:</p>	
		<ul><li>450g di Filetto di merluzzo.</li>
		<li>300g di Spinaci al vapore</li>
		<li>20g di Olio extravergine d'oliva totale</li>
		<li>½ Arancia, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 6<br>CON ALLENAMENTO</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>60g di Pane di segale</li>
		<li>30g di Fesa di tacchino</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>15g di Noci</li>
		<li>80g di Tonno al naturale (scolato)</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Vitello alla piastra:</p>
		<ul><li>400g di Controfiletto di vitello.</li>
		<li>300g di Finocchi crudi</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Mela, con buccia</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>300g di Yogurt da latte scremato</li>
		<p class="normal-text tw">Integratore di maltodestrine e amminoacidi ramificati:</p>
		<ul><li>200g di Banana;</li>
		<li>50g di Integratore maltodestrine + BCAA + sali e vitamine.</li></ul>

		<p class="med-text tw">Cena</p>
		<p class="normal-text tw">Spigola al cartoccio:</p>
		<ul><li>450g di Spigola, varie specie (parte edibile).</li>
		<li>300g di Zucchine al vapore</li>
		<li>15g di Olio extravergine d'oliva totale</li>
		<li>½ Mela, con buccia</li></ul>


		<h4 class="start-text tw">Giorno 7<br>RICARICA</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di vacca parzialmente scremato, al 2% di lipidi</li>
		<li>35g di Biscotti secchi</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela, con buccia</li>
		<li>200g di Arancia</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta al pomodoro:</p>
		<ul><li>100g di Pasta di semola;</li>
		<li>100g di Salsa di pomodoro.</li>
		<li>10g di Parmigiano</li>
		<li>100g di Lattuga</li>
		<li>30g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela, con buccia</li>
		<li>200g di Pera, con buccia</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>300g di Pizza marinara</li></ul>

		</div>	
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta4">
				<input type="hidden" name="dieta" value="dieta_cheto"/>
				<input type="submit" value="Aggiungi" id="Bdieta4"></input>
			</form>
			
		</div>
</div>



<!-- Dieta 5 -->
<div class="carousel-cell">
    <div class="carousel-cell__content" style="background: url(images/i7.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">



		<h4 class="start-text tw">Dieta vegana</h4>

		<p class="start-text tw">Giorno 1</p>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Avena</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Kiwi</li>
		<li>20g di Gallette di riso</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta al pomodoro:</p>
		<ul><li>90g di Pasta di semola;</li>
		<li>100g di Passata di pomodoro.</li>
		<li>60g di Fagioli secchi, bolliti e scolati</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela, con buccia</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>300g di Tofu</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 2</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Cereali muesli, con frutta e nocciole</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Arance</li>
		<li>20g di Gallette di mais</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Risotto ai piselli:</p>
		<ul><li>90g di Riso bianco, a chicco corto;</li>
		<li>70g di Piselli secchi, bolliti e scolati.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Meloni invernali - casaba</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>150g di Burger vegetali</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 3</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Corn flakes, con vitamine e minerali per la crescita</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Arance</li>
		<li>20g di Gallette di farro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Fette di polenta con affettato vegetale:</p>
		<ul><li>180g di Polenta a fette;</li>
		<li>80g di Salame vegetale.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mandarini - tangerini</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>200g di Arrosto di seitan</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 4</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Avena</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Kiwi</li>
		<li>20g di Gallette di riso</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pizza:</p>
		<ul><li>210g di Pizza marinara.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela, con buccia</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>120g di Tempeh</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 5</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Cereali muesli, con frutta e nocciole</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Arance</li>
		<li>20g di Gallette di mais</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pasta e ceci:</p>
		<ul><li>90g di Pasta di semola;</li>
		<li>70g di Ceci secchi, bolliti e scolati.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Meloni invernali - casaba</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>100g di Wurstel vegetali</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>	


		<h4 class="start-text tw">Giorno 6</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Corn flakes, con vitamine e minerali per la crescita</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Arance</li>
		<li>20g di Gallette di farro</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Fette di polenta con affettato vegetale:</p>
		<ul><li>180g di Polenta a fette;</li>
		<li>110g di Hummus.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mandarini - tangerini</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>200g di Arrosto di seitan</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>


		<h4 class="start-text tw">Giorno 7</h4>

		<p class="med-text tw">Colazione</p>
		<ul><li>300ml di Latte di soia, fortificato con calcio</li>
		<li>40g di Avena</li>
		<li>15g di Biscotti per l'infanzia, fortificati con vitamine e minerali</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Kiwi</li>
		<li>20g di Gallette di riso</li></ul>

		<p class="med-text tw">Pranzo</p>
		<p class="normal-text tw">Pizza:</p>
		<ul><li>210g di Pizza marinara.</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		<p class="med-text tw">Spuntino</p>
		<ul><li>200g di Mela, con buccia</li>
		<li>20g di Fette biscottate</li></ul>

		<p class="med-text tw">Cena</p>
		<ul><li>300g di Tofu</li>
		<li>90g di Pane di segale</li>
		<li>20g di Olio extravergine d'oliva</li></ul>

		</div>	
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta5">
				<input type="hidden" name="dieta" value="dieta_vegan"/>
				<input type="submit" value="Aggiungi" id="Bdieta5"></input>
			</form>			
		</div>
</div>



<!-- Dieta 6 -->
<div class="carousel-cell">
    <div class="carousel-cell__content" style="background: url(images/i8.jpeg) no-repeat center center; background-size: cover;">
		<div class="scrittura">


		<h4 class="start-text tw">Dieta vegetariana</h4>
		
		<h4 class="start-text tw">Giorno 1</h4>
		<p class="start-text tw">Colazione</li>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Avena</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di	Kiwi</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Pasta al pomodoro:</p>
		<ul><li>80g di Pasta di semola;</li>
		<li>100g di	Passata di pomodoro.</li>
		<li>10g di Parmigiano</li>
		<li>70g di Lattuga</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Kiwi</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Ceci stufati con uova sode:</p>
		<ul><li>300g di Ceci in scatola, scolati;</li>
		<li>50g di Uovo di gallina (intero).</li>
		<li>150g di Finocchi, bulbo</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>

		<h4 class="start-text tw">Giorno 2</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Corn flakes</li></ul>

		<p class="start-text tw">Spuntino</li>
		<ul><li>100g di Mela, con buccia</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Risotto ai funghi:</p>
		<ul><li>80g di Riso bianco a chicco corto;</li>
		<li>100g di Funghi champignon.</li>
		<li>10g di Parmigiano</li>
		<li>70g di Radicchio rosso</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Mela, con buccia</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Fagioli borlotti stufati e pecorino:</p>
		<ul><li>300g di Fagioli in scatola, scolati;</li>
		<li>30g di Formaggio pecorino romano.</li>
		<li>200g di Carciofi (tradizionale francese)</li>
		<li>10g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>

		<h4 class="start-text tw">Giorno 3</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Avena</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Clementina</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>
	
		<p class="start-text tw">Pranzo</p>
		<ul><li>Patate lesse</li>
		<li>400g di Pasta di semola</li>
		<li>10g di Parmigiano</li>
		<li>70g di Rucola</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Clementina</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Lenticchie stufate:</p>
		<ul><li>300g di Lenticchie in scatola, scolate.</li></ul>
		<p class="med-text tw">Frittata d'albumi:</p>
		<ul><li>150g di Albumi, in brik, pastorizzati.</li>
		<li>150g di Carote</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>


		<h4 class="start-text tw">Giorno 4</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Corn flakes</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Pere</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Polenta con formaggio cremoso:</p>
		<ul><li>80g di Farina di mais;</li>
		<li>50g di Formaggio cremoso.</li>
		<li>70g di Valeriana</li>
		<li>10g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Pere</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Piselli con cipolla brasata:</p>
		<ul><li>300g di Piselli in scatola, scolati;</li>
		<li>200g di Cipolle.</li>
		<li>80g di Ricotta di vacca, da latte parzialmente scremato</li>
		<li>150g di Finocchi, bulbo</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>


		<h4 class="start-text tw">Giorno 5</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Avena</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Kiwi</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Pasta ai peperoni:</p>
		<ul><li>80G DI Pasta di semola;</li>
		<li>100g di Peperoni misti, crudi.</li>
		<li>10g di Parmigiano</li>
		<li>70g di Lattuga</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Kiwi</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Lupini con uova sode:</p>
		<ul><li>300g di Lupini bolliti, pelati e scolati;</li>
		<li>50g di Uovo di gallina (intero)</li>
		<li>150g di Indivia</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>


		<h4 class="start-text tw">Giorno 6</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Corn flakes</li></ul>

		<p class="start-text tw">Spuntino</p>
		<li>100g di Mela, con buccia</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Risotto agli spinaci:</p>
		<ul><li>80g di Riso bianco a chicco corto;</li>
		<li>100g di Spinaci, surgelati.</li>
		<li>10g di Parmigiano</li>
		<li>70g di Radicchio rosso</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Mela, con buccia</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Tempeh e pecorino:</p>
		<ul><li>200g di Tempeh;</li>
		<li>30g di Formaggio pecorino romano.</li>
		<li>200g di Carciofi (tradizionale francese)</li>
		<li>10g di Olio extravergine d'oliva</li>
		<li>30g di Pane tipo 00</li></ul>


		<h4 class="start-text tw">Giorno 7</h4>
		<p class="start-text tw">Colazione</p>
		<ul><li>300ml di Latte scremato, 2% di lipidi</li>
		<li>40g di Avena</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Clementina</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Pranzo</p>
		<p class="med-text tw">Pasta al formaggio:</p>	
		<ul><li>400g di Pasta di semola;</li>
		<li>10g di Parmigiano.</li>
		<li>70g di Rucola</li>
		<li>20g di Olio extravergine d'oliva</li>
		<li>60g di Pane tipo 00</li></ul>

		<p class="start-text tw">Spuntino</p>
		<ul><li>100g di Clementina</li>
		<li>125g di Yogurt da latte scremato, 5,7g di proteine per 100g</li></ul>

		<p class="start-text tw">Cena</p>
		<p class="med-text tw">Pizza iperproteica:</p>
		<ul><li>300g di Pizza iperproteica, impasto e ingredienti a crudo.</li>
		<li>200g di Carote</li>
		<li>10-15g di Olio extravergine d'oliva</li></ul>

		</div>	
    </div>

		<div class="button">
			<!-- button -->
			<form action="#" metod="post" id="formDieta6">
				<input type="hidden" name="dieta" value="dieta_vege"/>
				<input type="submit" value="Aggiungi" id="Bdieta6"></input>
			</form>
		</div>
</div>




  </div>



</div>

	<footer>

			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="allenamento.php">Allenamento</a></li>
				<li><a href="imc.php">Calcolo IMC</a></li>
				<li><a href="diete.php">Diete</a></li>
				<li><a href="consulenza.php">Consulenze</a></li>
				<li><a href="contatti.php">Contatti</a></li>
			</ul>

			<div class="copyright">
				I contenuti presenti sul sito <b>"Your Own Fitness"</b> dei quali &egrave; autore il proprietario del sito <b>Barlo&Fitness</b>
				non possono essere copiati, riprodotti, pubblicati o redistribuiti perch&egrave; appartenenti all'autore stesso.
				&#200; vietata la copia e la riproduzione dei contenuti in qualsiasi modo o forma.
				&#200; vietata la pubblicazione e la redistribuzione dei contenuti non autorizzata espressamente dall’autore.
				<hr>Copyright © 2021 Your Own Fitness by Barlo&Fitness, BARLETTA Francesco Pio. All rights reserved
			</div>

	</footer>



<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js" integrity="sha512-Nx/M3T/fWprNarYOrnl+gfWZ25YlZtSNmhjHeC0+2gCtyAdDFXqaORJBj1dC427zt3z/HwkUpPX+cxzonjUgrA==" crossorigin="anonymous"></script>
  

  <script>
  
  $( document ).ready(function() {

    $('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
  });

  });

  ScrollReveal().reveal('.reveal',  { distance: '100px', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600 });
  ScrollReveal().reveal('.zoom',  { duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 200, scale: 0.65, mobile: false});


</script>





<?php include("ajax.js"); ?>

</body>

</html>
