<p align="center">
    <a href="https://ibb.co/ck6G4LN">
        <img src="https://i.ibb.co/HBtW5dr/diagrami-ER-1.jpg" alt="diagrami-EER-1" width="1600" />
    </a>
</p>

# PROJEKT

## Tema: Sistemi i menaxhimit te klienteve dhe trajnereve te Fitness-it

## Shpjegimi i struktures se databazes

Kjo databaze eshte projektuar per te menaxhuar klientet, trajneret, programet e trajnimit, ushtrimet, seancat dhe pagesat ne nje sistem fitnesi. Struktura dhe lidhjet mes tabelave jane bere ne nje menyre qe siguron integritetin e te dhenave dhe lehteson menaxhimin e tyre.

## Struktura dhe lidhjet kryesore

### Tabela clients (Klientet)

- Kjo tabele ruan informacionin e klienteve, perfshire emrin, mbiemrin, datelindjen, adresen dhe kontaktin.
- Ka nje lidhje trainer_id, qe tregon trajnerin e klientit (nese ka nje te tille).
- Lidhja clients.trainer_id → trainers.id eshte nje lidhje shume-me-nje, qe do te thote se nje trajner mund te trajnoje shume kliente, por nje klient ka vetem nje trajner.

### Tabela trainers (Trajneret)

- Kjo tabele permban trajneret, me informacione si emri, mbiemri, specializimi, pervoja dhe cmimi per seance.
- Eshte e lidhur me tabelat clients dhe training_programs per te menaxhuar klientet qe trajnojne dhe programet e trajnimit qe cdo trajner ka.
- Lidhja training_programs.trainer_id → trainers.id eshte nje shume-me-nje, qe do te thote se nje trajner mund te krijoje shume programe trajnimi.

### Tabela training_programs (Programet e Trajnimit)

- Cdo program trajnimi ka nje emer, pershkrim, kohezgjatje dhe eshte i lidhur me nje trajner.
- Kjo strukture ben te mundur qe trajneret te krijojne programe te ndryshme per klientet e tyre.
- eshte e lidhur me program_exercises, qe menaxhon ushtrimet specifike per çdo program.

### Tabela exercises (Ushtrimet)

- Ruhet informacioni per ushtrimet specifike, duke perfshire emrin, llojin dhe nje video udhezuese.
- Kjo tabele nuk eshte e lidhur drejtperdrejt me klientet ose trajneret, por me program_exercises, per te menaxhuar ushtrimet brenda nje programi.

### Tabela program_exercises (Ushtrimet ne nje program)

- Kjo tabele eshte nje tabele lidhese mes training_programs dhe exercises.
- Çdo rresht ne kete tabele perfaqeson nje ushtrim brenda nje programi te caktuar dhe ka nje sequence_number per te ruajtur rendin e ushtrimeve.
- Lidhjet:
  program_exercises.program_id → training_programs.id
  program_exercises.exercise_id → exercises.id
- Kjo lidhje shume-me-shume (many-to-many) lejon qe nje ushtrim te jete pjese e disa programeve te ndryshme.

### Tabela sessions (Seancat e Klienteve)

- Perfaqeson seancat individuale te nje klienti per nje program te caktuar ne nje date te caktuar.
- Lidhjet:
  sessions.client_id → clients.id → nje klient mund te kete shume seanca.
  sessions.program_id → training_programs.id → nje program mund te permbaje shume seanca.
- Kjo strukture lejon te gjurmohet pjesemarrja e klienteve ne seanca te ndryshme te trajnimit.

### Tabela payments (Pagesat)

- Regjistron pagesat qe bejne klientet per trajnim.
- Lidhjet:
  payments.client_id → clients.id, qe do te thote se nje klient mund te kete bere shume pagesa me kalimin e kohes.
- Kjo strukture ndihmon per te mbajtur nje historik te pagesave te secilit klient.

## Pse eshte bere kjo strukture keshtu?

### Normalizimi i te dhenave:

- Duke e ndare informacionin ne tabela te ndryshme dhe duke krijuar lidhje te sakta, shmanget perseritja e te dhenave.
- P.sh., ne vend qe te ruajme ushtrimet brenda tabeles training_programs, ato ruhen me vete ne exercises, dhe lidhja behet permes program_exercises.

### Fleksibiliteti dhe skalabiliteti:

- Nje trajner mund te trajnoje shume kliente, dhe cdo klient mund te ndjeke programe te ndryshme.
- Nje program mund te kete shume ushtrime, dhe nje ushtrim mund te jete pjese e shume programeve.
- Klientet mund te bejne pagesa te shumta dhe te kene shume seanca.

### Integriteti i te dhenave:

- Duke perdorur celesa te huaj (Foreign Keys), sigurohet qe nuk mund te kete te dhena te pavlefshme. P.sh., nje session nuk mund te ekzistoje pa nje client_id dhe nje program_id.
- Nese nje trajner largohet nga palestra, te dhenat e tij mund te trajtohen ne menyre te kujdesshme pa prishur sistemin.

## Avantazhet e te implementuarit te databazes ne nje website/dashboard

### 1. Sistemi i Autentifikimit

- Faqe hyrjeje me username dhe password
- Session tracking per siguri
- Mundesi daljeje nga sistemi

### 2. Menaxhimi i Klienteve

- Shfaqja e listes se klienteve
- Shtimi i klienteve te ri nga website
- Statusi i pagesave per secilin klient
- Lidhja me trajneret perkates
- Renditja sipas emrit ose statusit te pageses

### 3. Libraria e Ushtrimeve

- Video demonstruese nga YouTube
- Kategorizimi i ushtrimeve
- Informacion per perdorimin e programeve

### 4. Programet Stervitore

- Krijimi i programeve te personalizuara
- Perfshirja e ushtrimeve specifike
- Caktimi i trajnereve
- Kohezgjatja ne jave

### 5. Menaxhimi i Pagesave

- Shfaqja ne liste e pagesave
- Shfaqja e statusit (paguar/papaguar)
- Renditja sipas dates ose statusit
- Gjurmimi i pagesave te papaguara

### Teknologjite e Perdorura

- PHP
- MySQL
- HTML
- CSS
- JavaScript

### Struktura e Projektit

```
Sistemi i menaxhimit te klienteve dhe trajnereve te Fitness-it/
├── readme.md
├── database.sql
├── diagrami_ER_1.jpg
├── diagrami_ER_2.jpg
├── implementimi_ne_web/
│ ├── dashboard/ # Permban faqet te cilat do shfaqen ne "dashboard"
│ │ ├── clients.php
│ │ ├── exercise-library.php
│ │ ├── home.php
│ │ ├── new-client.php
│ │ ├── payment-records.php
│ │ ├── training-programs.php
│ ├── logic/ # permban logic per te kryer lidhjen me databazen
│ │ ├── authenticate.php
│ │ ├── config.php
│ ├── queries/ # permban llogjiken edhe queries per cdo gje te nevojshme ne dashboard
│ │ ├── clients-query.php
│ │ ├── exercises-query.php
│ │ ├── general-info-queries.php
│ │ ├── new-client.php
│ │ ├── payments-query.php
│ │ ├── sessions-query.php
│ │ ├── trainers-query.php
│ │ ├── training-programs-query.php
│ ├── styles/ # permban stilizimet e web-it
│ │ └── style.css
│ ├── content.php # llogjiken per faqet korrespondente per cdo kategori
│ ├── index.php # ne qofte se jeni loguar , redirects ne home page, nqs jo , redirects to login.php
│ ├── layout.php # permban layout, komponentet qe nuk ndryshojne ne faqe
│ ├── login.php
│ ├── logout.php
```

## Query te perdorura

### Query per te marre klientet edhe tranjeret e tyre respektiv

```sql
SELECT c.first_name AS client_first, c.last_name AS client_last,
       t.first_name AS trainer_first, t.last_name AS trainer_last,
       c.date_of_birth AS birthday, t.price_per_session AS trainer_price,
       p.id AS paymentID
FROM clients c
LEFT JOIN trainers t ON c.trainer_id = t.id
LEFT JOIN payments p ON c.id = p.client_id
ORDER BY $orderBy
```

### Query per te marre 5 sessionet me te fundit

```sql
SELECT tp.name AS program_name,
       CONCAT(c.first_name, ' ', c.last_name) AS client_name,
       CONCAT(t.first_name, ' ', t.last_name) AS trainer_name,
       s.session_date
FROM sessions s
JOIN training_programs tp ON s.program_id = tp.id
JOIN clients c ON s.client_id = c.id
JOIN trainers t ON c.trainer_id = t.id
ORDER BY s.session_date DESC
LIMIT 5
```

### Query per te marre listen e ushtrimeve

```sql
SELECT e.name AS name,
       e.type,
       e.video_link AS youtube_video_id,
       COUNT(DISTINCT pe.program_id) AS program_count
FROM Exercises e
LEFT JOIN program_exercises pe ON e.id = pe.exercise_id
GROUP BY e.id, e.name, e.type, e.video_link
```

### Query per te marre programet stervitore, me cdo ushtrim sipas rradhes

```sql
SELECT tp.id AS program_id,
       tp.name AS program_name,
       tp.description AS program_description,
       tp.duration_weeks,
       CONCAT(t.first_name, ' ', t.last_name) AS trainer_name,
       pe.sequence_number,
       e.name AS exercise_name
FROM training_programs tp
JOIN trainers t ON tp.trainer_id = t.id
JOIN program_exercises pe ON pe.program_id = tp.id
JOIN exercises e ON pe.exercise_id = e.id
WHERE tp.name LIKE ?
ORDER BY tp.id, pe.sequence_number
```

### Query per te marre listen e pagesave

```sql
SELECT c.first_name, c.last_name, p.amount, p.payment_date, t.price_per_session
FROM clients c
JOIN trainers t ON c.trainer_id = t.id
LEFT JOIN payments p ON p.client_id = c.id
ORDER BY $orderBy
```

### Query per te marre informacionet generale

```sql
SELECT ROUND(AVG(price_per_session), 0) AS average FROM trainers
SELECT COUNT(*) AS excercises FROM exercises
SELECT COUNT(*) AS trainers FROM trainers
SELECT COUNT(*) AS clients FROM clients
```

### Query per te shtuar klienta te ri ne database

```php
// Prepare and bind
$stmt = $conn→prepare("INSERT INTO clients (first_name, last_name, date_of_birth, address, contact_info, trainer_id) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $first_name, $last_name, $date_of_birth, $address, $contact_info, $trainer_id);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$contact_info = $_POST['contact_info'];
$trainer_id = $_POST['trainer_id'];
```

### Instalimi

1. Kopjoni repository-n ne serverin tuaj
2. Konfiguroni detajet e databazes ne `logic/config.php`
3. Importoni skemen e databazes nga `database.sql`
4. Importoni disa te dhena per databazen nga `initial_data.sql`
5. Vendosni kredencialet e hyrjes ne `logic/authenticate.php`

### Konfigurimi i Databazes

```php
define('DB_HOST', 'localhost'); # ose ip e databazes
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'fitness_app');
```

### Perdorimi

1. Logohu ne sistem duke perdorur kredencialet e konfiguruara
2. Navigoni nepermjet menu-se ne krah
3. Menaxhoni klientet, programet dhe pagesat
4. Perdorni funksionin e kerkimit per te gjetur programe specifike
5. Renditni te dhenat sipas nevojes

## Kontributi

1. [Klausar Vladi](mailto:klausar.vladi@fshnstudent.info) - Implementimi i projektit ne SQL edhe web per nje nderfaqe me te thjeshte edhe intuitive

2. [Grasjela Nora](mailto:grasjela.nora@fshnstudent.info) & [Igli Daja](mailto:igli.daja@fshnstudent.info) - Hartimin e diagramit EER , lidhjet midis entiteteve edhe hartimin e atributeve perkatese

3. [Fadiona Keraj](mailto:fadiona.keraj@fshnstudent.info) & [Klejdi Cenaj](mailto:klejdi.cenaj@fshnstudent.info) - Hartimin e querive te ndryshme te perdorura ne rastet e ndryshme te nevojshme te implementimit te databases
