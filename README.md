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



### Architettura Microsoft Azure
![Architecture scheme](https://github.com/fr4nc1x/hello-world/blob/master/Untitled%20Diagram.png)
 
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
