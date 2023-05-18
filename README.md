PHP Strong Password Generator
===
## CONSEGNA

**Descrizione** <br>
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. <br>
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

**Milestone 1** <br>
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. <br>
Scriviamo tutto (logica e layout) in un unico file *index.php*

**Milestone 2** <br>
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

> BONUS

**Milestone 3** <br>
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite `$_SESSION` recupererà la password da mostrare all’utente.
