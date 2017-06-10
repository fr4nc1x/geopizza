# Geopizza: find the nearest pizza

La nostra idea è quella di creare un servizio per pizzerie, in particolare un portale dove in base alla geolocalizzazione consiglia le pizzerie più vicine dove poter ordinare delle pizze sia a domicilio che da asporto.

L’utente può selezionare la pizzeria che preferisce (in base al ranking e alla vetrina) e scegliere in base al menù che offre la pizzeria le pizze che vuole ed eventuali bibite ecc.ecc.

La pizzeria dopo aver ricevuto l’ordine, incluso l’indirizzo e altre informazioni, invierà una conferma con importo e orario indicativo della consegna delle pizze.

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

Architettura Microsoft Azure
![Image of Yaktocat](https://octodex.github.com/images/yaktocat.png)
