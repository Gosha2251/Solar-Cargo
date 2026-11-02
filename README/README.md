# Solar Cargo

Solar Cargo ir mācību web projekts konteineru pārvaldības sistēmas izstrādes un uzturēšanas principu apguvei.

## Projekta mērķis

Projekta mērķis ir demonstrēt vienkāršas konteineru pārvaldības sistēmas pakāpenisku attīstību, izmantojot HTML, CSS, PHP, MariaDB, Git un GitHub.

## Projekta versijas

Projektā pašlaik ir saglabātas divas attīstības versijas.

### PB2 statiskā versija

Galvenais fails: `index.html`

Izmantots:

- HTML;
- CSS;
- Google Forms;
- Google Sheets;
- GitHub Pages.

Google Forms tiek izmantots datu ievadei, bet Google Sheets datu glabāšanai un attēlošanai.

### PB3 PHP/MariaDB prototips

Galvenais fails: `index.php`

Izmantots:

- PHP;
- MariaDB;
- MySQLi;
- lietotāju autentifikācija;
- PHP sesijas;
- administratora loma.

Autentifikācijas pamata funkcionalitāte un datubāzes struktūra ir sagatavota, bet konteineru web saskarne vēl nav pilnībā savienota ar MariaDB tabulu `containers`.

## Galvenā funkcionalitāte

### PB2

- konteineru datu ievade;
- Google Forms un Google Sheets integrācija;
- konteineru datu attēlošana;
- CSS noformējums;
- publicēšana GitHub Pages.

### PB3

- lietotāja pieteikšanās;
- paroles pārbaude;
- PHP sesijas;
- lietotāju lomas;
- administratora piekļuves pārbaude;
- MariaDB savienojums;
- konteineru datubāzes struktūra un testa dati.

## Galvenie projekta faili

- `index.html` — PB2 statiskās versijas sākumlapa.
- `index.php` — PB3 PHP versijas sākumlapa.
- `login.php` — lietotāja pieteikšanās.
- `logout.php` — sesijas pārtraukšana.
- `admin.php` — administratora lapa.
- `auth.php` — autentifikācijas un autorizācijas funkcijas.
- `db.php` — MariaDB savienojums.
- `config.example.php` — konfigurācijas paraugs.
- `style.css` — projekta noformējums.
- `solar_cargo_schema.sql` — datubāzes struktūra.
- `solar_cargo_data.sql` — testa dati.
- `solar_cargo_queries.sql` — pārbaudes SQL vaicājumi.
- `migration_notes.md` — migrācijas apraksts.
- `CHANGELOG.md` — projekta izmaiņu vēsture.

## Nepieciešamās atkarības

### PB2 versijai

- moderna web pārlūkprogramma;
- interneta savienojums Google Forms un Google Sheets darbībai.

### PB3 versijai

- PHP;
- MySQLi;
- MariaDB;
- lokāls web serveris;
- moderna web pārlūkprogramma.

## PB2 versijas palaišana

1. Lejupielādēt projekta failus.
2. Atvērt `index.html` pārlūkprogrammā.
3. Pārliecināties, ka ir interneta savienojums Google Forms un Google Sheets darbībai.

Publiskā PB2 versija:

https://gosha2251.github.io/Solar-Cargo/

## PB3 versijas sagatavošana un palaišana

1. MariaDB izpildīt `solar_cargo_schema.sql`.
2. Pievienot testa datus ar `solar_cargo_data.sql`.
3. Izveidot `config.local.php` pēc `config.example.php` parauga.
4. Konfigurācijā norādīt savas MariaDB savienojuma vērtības.
5. Palaist projektu lokālā PHP web serverī.
6. Pārlūkprogrammā atvērt `login.php`.
7. Pēc veiksmīgas autentifikācijas lietotājs tiek novirzīts uz `index.php`.
8. Administratoram ir pieejams `admin.php`.

## Konfigurācija

Reālie datubāzes piekļuves dati tiek glabāti:

`config.local.php`

Šo failu nedrīkst publicēt Git repozitorijā.

Konfigurācijas paraugs:

`config.example.php`

## Datubāze

Datubāze: `solar_cargo`

Galvenā tabula: `containers`

Lauki:

- `id`;
- `cargo_code`;
- `cargo_name`;
- `mass_kg`;
- `status`;
- `created_at`.

Migrācijas un pārbaudes informācija pieejama failā `migration_notes.md`.

## Zināmie ierobežojumi

- PB2 un PB3 versijas pašlaik atrodas vienā projektā.
- PB3 PHP prototips vēl nav pilnībā savienots ar `containers` tabulu web saskarnē.
- PB3 versijai nepieciešams PHP un MariaDB serveris.
- GitHub Pages atbalsta PB2 statisko versiju, bet neizpilda PHP servera kodu.
- Vecās PB2 HTML lapas pagaidām ir saglabātas, kamēr PHP versija nav pilnībā pabeigta.
- `config.local.php` nedrīkst publicēt ar reāliem piekļuves datiem.

## Uzturēšana

Veicot izmaiņas projektā:

1. Saglabāt izmaiņas Git.
2. Izmantot skaidrus commit aprakstus.
3. Nepievienot Git slepenus konfigurācijas datus.
4. Pēc PHP izmaiņām pārbaudīt autentifikāciju un lietotāju lomas.
5. Pēc datubāzes izmaiņām pārbaudīt SQL vaicājumus.
6. Būtiskas izmaiņas reģistrēt `CHANGELOG.md`.
7. Ja mainās projekta darbība vai konfigurācija, atjaunināt README.

## Projekta statuss

- PB2 statiskā versija ir pabeigta un publicēta.
- PB3 PHP/MariaDB versija ir prototipa stadijā.
- Autentifikācijas pamata funkcionalitāte ir sagatavota.
- MariaDB struktūra un testa dati ir sagatavoti.
- Konteineru PHP saskarnes pilnīga integrācija ar MariaDB vēl nav pabeigta.

## Turpmākie uzlabojumi

Nākotnē iespējams:

- savienot konteineru PHP formu ar MariaDB;
- attēlot konteinerus tieši no datubāzes;
- pievienot konteineru rediģēšanu un dzēšanu;
- uzlabot datu validāciju un kļūdu apstrādi;
- pēc PHP versijas pabeigšanas arhivēt nevajadzīgos PB2 failus.

## Autors

**Deniss Cvetkovs**  
Grupa: **73346**