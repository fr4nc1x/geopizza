# Geopizza: find the nearest pizza

L'idea è quella di creare un servizio per pizzerie, in particolare un portale dove in base alla geolocalizzazione dell'utente, consiglia le pizzerie più vicine dove poter ordinare delle pizze sia a domicilio che da asporto.

L’utente può selezionare la pizzeria che preferisce (in base al ranking, alla vetrina e alla distanza dalla propria posizione) e scegliere in base al menù che offre la pizzeria le pizze che vuole ed eventuali bibite. Ogni pizza avrà un prezzo mostrato all'utente e quindi il costo totale dell'ordine sarà subito disponibile.

La pizzeria dopo aver ricevuto l’ordine, incluso l’indirizzo e altre informazioni, invierà una conferma con importo e orario indicativo della consegna delle pizze.

L'utente per poter utilizzare il servizio deve obbligatoriamente registrarsi al portale. 
A consegna ultimata, l'utente riceverà una brevissimo sondaggio dove potrà votare il servizio offerto dalla pizzeria scelta (voto che va da 1 a 5) e scrivere un eventuale commento.

I voti ricevuti dai vari utenti servono per creare una vera e propria classifica, in modo da premiare le pizzerie più meritevoli.
Inoltre è possibile far pagare una pizzeria per mettersi in mostra per un determinato periodo di tempo. La pizzeria in questione sarà messa in vetrina in modo tale che tutti gli utenti possano vederla. Questa è una vera e propria forma di pubblicità.

# Team:
Il team è composto dagli studenti Luca Guarnera (matricola ??) e Francesco Ragusa (matricola: W82000102) iscritti al corso di laurea magistrale in Informatica dell'Università degli Studi di Catania.



# Architettura Microsoft Azure
![Architecture scheme](https://github.com/fr4nc1x/hello-world/blob/master/Untitled%20Diagram.png)

### Piano tariffario Microsoft Azure
Il piano tariffario utilizzato per lo sviluppo del servizio, a fronte degli 80€ disponibili, è stato il piano Standard S1.
Tale piano è stato progettato per app Web, per dispositivi mobili e per le API negli ambienti di produzione. 
Il numero di app/domini che è possibile ospitare con il piano di servizio Standard è illimitato. I prezzi variano in base alle dimensioni e al numero di istanze di macchina virtuale eseguite. Quello scelto da noi S1 ha il prezzo di 62.74 € mensili.
Il supporto predefinito per il bilanciamento del carico di rete permette di distribuire automaticamente il traffico tra le istanze VM. Il piano Standard include supporto integrato per la scalabilità automatica, che modifica automaticamente il numero di istanze di macchina virtuale in esecuzione in base alle esigenze di traffico. Include anche supporto predefinito per il backup.

![Standard S1](https://github.com/fr4nc1x/hello-world/blob/master/StandardS1.png)

In dettaglio, il suddetto piano tariffario offre:

 * App Web, per dispositivi mobili o API senza alcun limite;
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

 
 ### Database:

Struttura Database MySQL

* PIZZERIA :
-	L’elenco delle pizzerie vengono trovate in base alla geolocalizzazione;
-	Ogni pizzeria deve avere un menù, per iniziare metteremo lo stesso menù per tutte le pizzerie.
* UTENTE:
-	Nel caso in cui l’utente usufruisce del servizio a domicilio deve rilasciare informazioni riguardo: Cognome, telefono, via.
* RANKING:
-	Ogni Pizzeria riceverà voti e commenti, e da questi verrà creata una classifica. 
* VETRINA:
-	Una vera e propria vetrina dove verranno mostrate le migliori pizzerie, quelle con i migliori voti e commenti e quelle che pagano per avere una popolarità maggiore.
