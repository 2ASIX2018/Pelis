# Exàmen Implantació d'Aplicacions Web. 1a Avaluació.

Disposem d'una base de dades MySQL sobre pel·lícules en un servidor i volem desenvolupar una xicoteta aplicació web per a la seua gestió.

Es demana, a partir de la plantilla de la que disposeu al directori `templates`, crear la funcionalitat bàsica per a la consulta de pel·lícules, en l'índex del lloc, i per afegir noves pel·lícules a partir del formulari que es facilita.

Les dades del servidor seran les següents:

* **IP del servidor**: A determinar
* **Base de dades**: cine
* **Taula de la BD**: Pelis
* **Usuari de la base de dades**: examen
* **Contrassenya de l'usuari a la BD**: eljust

La taula sobre la que treballarem es diu `Pelis`, i té la següent estructura:

| Camp | Tipus | Restriccions |
|------|-------|--------------|
| idPelis | INT | CP, VNN, Auto-incremental |
| Episodi | VARCHAR(45) | - |
| Titol | VARCHAR(45) | - |
| Any | VARCHAR(45) | - |
| Director | VARCHAR(45) | - |

L'estructura de la plantilla que se us facilita és:

```sh
.
├── addPeli.php
├── header.html
├── index.php*
├── lib
│   └── bootstrap
├── models
│   ├── connexio.php*
│   └── Pelis.php*
└── processRequest.php*
```
Les pàgines marcades amb * seran aquelles on caldrà incorporar alguna modificació. Veiem amb més detall aquestes pàgines:

| Pàgina | Descripció |
|--------|------------|
| addPeli.php | Formulari per afegir pel·lícules |
| header.html | Capçalera amb la barra de navegació |
| index.php* | Índex de la pàgina: A implementar la creació de la taula de pel·lícules |
| processRequest.php* | Processament del formulari per afegir una pel·lícula |
| lib/bootstrap | Llibrería bootstrap amb els css |
| models/connexio.php* | Dades de connexió a la base de dades |
| models/Pelis.php* | Definició de la classe del model de pel·lícules amb els dos mètodes a implementar |

1. Realitza la clonació del repositori i prepara el projecte per a servir-lo des del teu servidor web. (1 punt)
2. Implementa la funcionalitat necessària a l'aplicació per a que a la pàgina index.php es mostre un llistat de les pel·lícules de la taula Pelis de la base de dades. (4 punts).
3. Modifica la taula de l'apartat anterior per a que diferencie les files parell i les imparelles, de manera que a les files imparells els aplique la classe `class="table-info"` i a les parells `class="table-light"`. (2 punts).
4. Realitza la funcionalitat per tal de poder processar el formulari per afegit pel·lícules. (3 punts).
