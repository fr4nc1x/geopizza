# Geopizza: find the nearest pizza

Link: https://geopizza.azurewebsites.net/

L'idea è quella di creare un servizio per pizzerie, in particolare un portale dove in base alla geolocalizzazione dell'utente, consiglia le pizzerie più vicine dove poter ordinare delle pizze sia a domicilio che da asporto.

L’utente può selezionare la pizzeria che preferisce (in base al ranking, alla vetrina e alla distanza dalla propria posizione) e scegliere in base al menù che offre la pizzeria le pizze che vuole ed eventuali bibite. Ogni pizza avrà un prezzo mostrato all'utente e quindi il costo totale dell'ordine sarà subito disponibile.

La pizzeria dopo aver ricevuto l’ordine, incluso l’indirizzo e altre informazioni, invierà una conferma con importo e orario indicativo della consegna delle pizze.

L'utente per poter utilizzare il servizio deve obbligatoriamente registrarsi al portale. 
A consegna ultimata, l'utente riceverà una brevissimo sondaggio dove potrà votare il servizio offerto dalla pizzeria scelta (voto che va da 0 a 5) e scrivere un eventuale commento.

I voti ricevuti dai vari utenti servono per creare una vera e propria classifica, in modo da premiare le pizzerie più meritevoli.
Inoltre è possibile far pagare una pizzeria per mettersi in mostra per un determinato periodo di tempo. La pizzeria in questione sarà messa in vetrina in modo tale che tutti gli utenti possano vederla. Questa è una vera e propria forma di pubblicità.

# Team:
Il team è composto dagli studenti Luca Guarnera (matricola W82000100) e Francesco Ragusa (matricola: W82000102) iscritti al corso di laurea magistrale in Informatica dell'Università degli Studi di Catania.



# Architettura Microsoft Azure
![Architecture scheme](https://github.com/fr4nc1x/hello-world/blob/master/Untitled%20Diagram.png)

### Piano tariffario Microsoft Azure
Il piano tariffario utilizzato per lo sviluppo del servizio, a fronte degli 80€ disponibili, è stato il piano Standard S1.
Tale piano è stato progettato per Web app, per dispositivi mobili e per le API negli ambienti di produzione. 
Il numero di app/domini che è possibile ospitare con il piano di servizio Standard è illimitato. I prezzi variano in base alle dimensioni e al numero di istanze di macchina virtuale eseguite. Quello scelto da noi S1 ha il prezzo di 62.74 € mensili.
Il supporto predefinito per il bilanciamento del carico di rete permette di distribuire automaticamente il traffico tra le istanze VM. Il piano Standard include supporto integrato per la scalabilità automatica, che modifica automaticamente il numero di istanze di macchine virtuali in esecuzione in base alle esigenze di traffico. Include anche supporto predefinito per il backup.

![Standard S1](https://github.com/fr4nc1x/hello-world/blob/master/StandardS1.png)

In dettaglio, il suddetto piano tariffario offre:

 * Web App, per dispositivi mobili o API senza alcun limite;
 * Spazio su disco pari a 50 GB;
 * Numero massimo di istanze pari a 10;
 * 1 core dedicato e 1.75 GB di RAM;
 * Backup giornaliero automatico;
 * 5 slot per lo staging delle app Web.

Inoltre il sistema grazie alle funzionalità di Microsoft Azure acquisisce proprietà quali:

* Adattività :risponde dinamicamente alla crescita degli utenti
* Modularità: consente una scala facile di qualsiasi parte indipendente
* Costo: si paga solo quello di cui si ha veramente bisogno
* Ridondanza: moltiplica la soluzione e riduce i rischi di guasto
 


### Azure Active Directory

Azure AD è il provider di identità, responsabile della verifica dell'identità degli utenti e delle applicazioni esistenti nella directory di un'organizzazione e, in ultima analisi, la pubblicazione di token di sicurezza dopo l'autenticazione di tali utenti e applicazioni.
Un'applicazione che vuole gestire l'autenticazione con Azure AD deve essere registrata in Azure AD, che registra e identifica in modo univoco l'applicazione nella directory.
Il form di login è stato gestito utilizzando le librerie di autenticazione open source Azure AD per rendere facile l'autenticazione gestendo i dettagli del protocollo (Librerie di autenticazione Active Directory Azure (ADAL))

### Data Storage
Come data storage per la web app è stato scelto una database MySql.
Database di Azure per MySQL offre un servizio di database gestito per lo sviluppo e la distribuzione di app, che permette di creare e gestire un database MySQL su cloud.
La scalabilità dinamica consente al database di rispondere in modo trasparente ai requisiti delle risorse soggetti a rapidi cambiamenti. 
Il servizio gestito Database di Azure per MySQL garantisce l'applicazione automatica di patch al database, i backup automatici, il monitoraggio predefinito, la sicurezza e soprattutto garantisce la totale disponibilità del DB che è sempre attivo ed in esecuzione.

### Web App

La soluzione al progetto è stata pensata come una Web App, in modo da essere accessibile ed utilizzabile da qualsiasi dispositivo mobile e non. 
Come servizio di Azure è stato utilizzato il servizio App Web che permette di creare, distribuire e gestire rapidamente potenti siti Web e app Web. Inoltre permette di creare API dedicate e app Web basate su standard con .NET, Node.js, PHP, Python e Java. 
Il servizio app offre scalabilità automatica e disponibilità in un'infrastruttura di data center globale.
Grazie all'utilizzo di questo servizio è anche possibile avere una distribuzione continua con Git, Team Foundation Server, GitHub e Visual Studio Team Services. 

 
### Estensioni
All'interno della nostra soluzione sono state utilizzate varie estensioni per l'importanza dei servizi che offrono e per l'ottimizzazione dei processi.

#### Google Maps
Per la geolocalizzazione dell'utente e delle pizzerie è stato utilizzato il servizio fornito da Google, ovvero Google Maps.
In modo da facilitare la ricerca delle pizzerie da parte dell'utente tramite questo servizio basato su localizzazione tramite GPS.
In questo modo settando una distanza massima dalla posizione dell'utente, espressa in latitudine e longitudine, è possibile interrograre il database e trovare le pizzerie che rientrano nel raggio d'azione desiderato.
#### phpMyAdmin
Per la gestione del database MySql è stato utilizzato phpMyAdmin.
Azure permette l'installazione nella propria web app del tool phpMyAdmin, per poi utilizzarlo tramite browser inserendo delle credenziali settate durante la configurazione dell'estensione.
#### Microsoft Image Optimizer
Nella web App è stata incorporata anche un'estensione per l'ottimizzazione delle immagini, anche quelle caricate dagli utenti. Quest'estensione si chiama Microsoft Image Optimizer, è gratuita ed è disponibile direttamente dalla lista di estensioni sul portale di Azure. 
#### Microsoft Azure Minifier
Un altro tool di ottimizzazione installato è Microsoft Azure Minifier. Estensione che serve a minimizzare i file .css e .js della Web App. Anche questo è gratuito e disponibile nella lista di estensioni di Azure.
#### Application Insights
Tool di Azure per il monitoraggio della Web App. Tramite quest'estensione è possibile ottenere informazioni dettagliate di utilità pratica grazie alle funzionalità di gestione delle prestazioni e analisi immediata.

Con questo tool si hanno funzionalità avanzate di monitoraggio delle prestazioni e generazione di avvisi, dashboard facili da usare e da interpretare. Identifica rapidamente i problemi e offre un'analisi avanzata di tutte le parti del sistema per trovare una soluzione al  problema. E' possibile fare un'analisi interattiva dei dati per individuare le tendenze nelle prestazioni e nel comportamento delle applicazioni, identifica i modelli di utilizzo. Si può gestire il tool tramite query interattive e ricerca full-text.
Quest'estensione è dotata di algoritmi di machine learning per analizzare continuamente i dati di telemetria delle applicazioni. Rileva le anomalie, il numero di errori, i cambiamenti in termini di prestazioni e i comportamenti di Servizi cloud di Azure.
Si può configurare in modo da ricevere notifiche e avvisi con informazioni di diagnostica avanzate per poter affrontare i problemi all'interno della Web App in maniera immediata.
#### Logs Browser
Si tratta di un'estensione del servizio per i siti web Azure che sa leggere i diversi registri del sito, inclusi i log di http e i log di applicazioni provenienti da diverse fonti.
 
 ### Cognitive Services
 Con il servizio Cognitive Services di Microsoft si possono introdurre nelle app potenti algoritmi con poche righe di codice. Compatibilità con diversi dispositivi e piattaforme, ad esempio iOS, Android e Windows, miglioramenti continui e facilità di configurazione.
I servizi che mette a disposizione sono:
 
 * Visione Artificiale
 * Sintesi Vocale
 * Linguaggio
 * Conoscenza
 * Ricerca
 
 ### Computer Vision API
 L'API Computer Vision per cloud fornisce l'accesso ad algoritmi avanzati per l'elaborazione di immagini e la restituzione delle informazioni. Caricando un'immagine o specificando un URL di immagine, gli algoritmi Microsoft Computer Vision possono analizzare i contenuti visivi in modi diversi in base agli input e alle scelte dell'utente. Con le API di Computer Vision si possono analizzare le immagini:
 
 * Analizzare un immagine per estrarre tag descrittivi
 * Utilizzare un modello di dominio specifico
 * Creare una miniatura
 * Rilevare ed estrarre testo stampato da un'immagine
 
Con il metodo Analyse Image, è possibile estrarre features visive basate sul contenuto dell'immagine. È possibile caricare un'immagine o specificare un URL di immagine e scegliere le caratteristiche da restituire, tra cui:

 * Categoria dell'immagine
 * Un elenco dettagliato dei tag relativi al contenuto dell'immagine
 * Il colore dominante o se un'immagine è in bianco e nero
 * Una descrizione del contenuto dell'immagine in una frase completa
 * Le coordinate, il sesso e l'età di tutti i volti contenuti nell'immagine

Nel progetto è stata creata una sezione "Prossimamente" perchè l'intenzione è quella di analizzare le immagini delle pizze, caricate dagli utenti per estrarre in automatico il tipo di pizza in base ad un classificatore allenato opportunamente ed inserire quella determinata pizza nella comanda.


# Guida all'uso

La Web App è stata strutturata nel seguente modo:
 * Una index page:
 
![index](https://github.com/fr4nc1x/hello-world/blob/master/index.png)

L’utente, dalla home page, può effettuare i il “login/Registrazione”, oppure cercare le pizzerie (Notare che per poter effettuare l’operazione di prenotazione pizza e i successivi voti bisogna effettuare il login):
![pag_1](https://github.com/fr4nc1x/hello-world/blob/master/pag_1.png)

 * La pagina di “Login/Registrazione” è la seguente:
 
![pag_2](https://github.com/fr4nc1x/hello-world/blob/master/pag_2.png)

Dalla pagina di login l’utente, se già registrato potrà fare l’accesso (Notare che è possibile usare un account di prova). Se l’utente non si è registrato potrà farlo cliccando sull’apposita voce “Registrati”. Al click apparirà il seguente menù:

 ![pag_3](https://github.com/fr4nc1x/hello-world/blob/master/pag_3.png)
 
Possiamo notare che per questa fase di registrazione l’utente resta sulla stessa pagina “login”. Il form per la registrazione appare grazie ad una animazione in JQuery. Per la fase di registrazione sono obbligatori i campi “Username” e “Password”. 
Dopo aver effettuato il login, il menù posto sopra la pagina cambia nel seguente modo:

 ![pag_4](https://github.com/fr4nc1x/hello-world/blob/master/pag_4.png)
 
Tramite il tasto “Cerca pizzeria” possiamo cercare le pizzerie vicino ad una determinata zona:

 ![pag_5](https://github.com/fr4nc1x/hello-world/blob/master/pag_5.png)
 
 Attenzione che se la mappa non viene fatta visualizzare, bisogna procedere con l'abilitazione degli script non sicuri nel browser. Ogni volta che accediamo su questa pagina il numero di pizzerie disponibili per quella zona cambia. Questo perché non avendo un elenco di tutte le pizzerie per tutte le zone abbiamo deciso di aggiungere 10 diverse pizzerie e ogni volta che si accede alla pagine ne vengono prese un numero N random.
A questo punto possiamo procedere con l’effettuare una prenotazione. Cliccando sul bottone “Da Vinci” (lo stesso procedimento è possibile farlo con le “gocce” che sono presenti sulla mappa, dove cliccando su di esse appare il nome della pizzeria e di conseguenza è possibile proseguire con lo step di ordinazione) ) ci spostiamo sulla seguente pagina:

![pag_6](https://github.com/fr4nc1x/hello-world/blob/master/pag_6.png)

Riempito tutto il form possiamo inviare la comanda. Successivamente, verremo indirizzati in una pagina dove viene mostrata la comanda appena effettuata e il totale da pagare:

![pag_7](https://github.com/fr4nc1x/hello-world/blob/master/pag_7.png)

Infine c’è anche la possibilità di poter votare le pizzerie cliccando o sul tasto “Vota pizzeria” o sulla voce del menù principale “Vota pizzeria”:

![pag_8](https://github.com/fr4nc1x/hello-world/blob/master/pag_8.png)

Dopo aver dato un voto alla pizzeria, il rank delle pizzerie mostrate nella home page, verrà automaticamente aggiornato. Il rank viene calcolato effettuando una media dei voti.
Infine un ultimo elemento che è stato implementato è stato quello di aggiungere un modulo di computer vision. È possibile visualizzare il tutto cliccando sulla voce del menù “Prossimamente”:

![pag_9](https://github.com/fr4nc1x/hello-world/blob/master/pag_9.png)

Dopo aver inserito l’URL dell’immagine di pizza (quello presente nella textbox è settato di default) e cliccato su “Analizza immagine”, verrà mostrata l’immagine caricata e i tag di quest’utlima:

![pag_9](https://github.com/fr4nc1x/hello-world/blob/master/pag_10.png)

