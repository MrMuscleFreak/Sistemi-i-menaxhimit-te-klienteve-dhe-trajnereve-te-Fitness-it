<p align="center">
    <a href="https://ibb.co/ck6G4LN">
        <img src="https://i.ibb.co/HBtW5dr/diagrami-ER-1.jpg" alt="diagrami-ER-1" width="800" />
    </a>
</p>

# Fitness App Dashboard

## Pershkrimi

Nje aplikacion dashboard per menaxhimin e palestrave, stervitjeve dhe klienteve. Sistemi mundeson organizimin e programeve stervitore, ndjekjen e pagesave dhe menaxhimin e klienteve.

## Karakteristikat Kryesore

### 1. Sistemi i Autentifikimit

- Faqe hyrjeje me username dhe password
- Session tracking per siguri
- Mundesi daljeje nga sistemi

### 2. Menaxhimi i Klienteve

- Shfaqja e listes se klienteve
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
├── about.md
├── database.sql
├── diagrami_ER_1.jpg
├── diagrami_ER_2.jpg
├── implementimi_ne_web/
│ ├── dashboard/ # Permban faqet te cilat do shfaqen ne "dashboard"
│ │ ├── clients.php
│ │ ├── exercise-library.php
│ │ ├── home.php
│ │ ├── payment-records.php
│ │ ├── training-programs.php
│ ├── logic/ # permban logic per te kryer lidhjen me databazen
│ │ ├── authenticate.php
│ │ ├── config.php
│ ├── queries/ # permban llogjiken edhe queries per cdo gje te nevojshme ne dashboard
│ │ ├── clients-query.php
│ │ ├── exercises-query.php
│ │ ├── general-info-queries.php
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
JOIN exercises e ON pe.exercise_id = e.idpse
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

### Instalimi

1. Kopjoni repository-n ne serverin tuaj
2. Konfiguroni detajet e databazes ne `logic/config.php`
3. Importoni skemen e databazes nga `database.sql`
4. Importoni disa te dhena per databazen nga `initial_data.sql`
5. Vendosni kredencialet e hyrjes ne `logic/authenticate.php`

### Konfigurimi i Databazes

```php
define('DB_HOST', 'localhost'); # ose ip e databazes suaj
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'fitness_app');
```

### Perdorimi

1. Hyni ne sistem duke perdorur kredencialet e konfiguruara
2. Navigoni nepermjet menu-se ne krah
3. Menaxhoni klientet, programet dhe pagesat
4. Perdorni funksionin e kerkimit per te gjetur programe specifike
5. Renditni te dhenat sipas nevojes

## Kontributi

1. [Klausar Vladi](mailto:klausar.vladi@fshnstudent.info) - Implementimi i projektit ne SQL edhe web per nje nderfaqe me te thjeshte edhe intuitive

2. [Grasjela Nora](mailto:grasjela.nora@fshnstudent.info) & [Igli Daja](mailto:igli.daja@fshnstudent.info) - Hartimin e diagramit ER , lidhjet midis entiteteve edhe hartimin e atributeve perkatese

3. [Fadiona Keraj](mailto:fadiona.keraj@fshnstudent.info) & [Klejdi Cenaj](mailto:klejdi.cenaj@fshnstudent.info) - Hartimin e querive te ndryshme te perdorura ne rastet e ndryshme te nevojshme te implementimit te databases
