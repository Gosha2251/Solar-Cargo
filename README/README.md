# Solar Cargo

Solar Cargo ir mācību web projekts konteineru pārvaldības sistēmas izstrādes principu apguvei. Projekts tika pakāpeniski attīstīts vairākos praktiskajos darbos, sākot ar statisku HTML/CSS versiju un vēlāk izveidojot PHP un MariaDB prototipu.

---

## 1. Projekta mērķis

Solar Cargo projekta mērķis ir demonstrēt vienkāršas konteineru pārvaldības sistēmas izstrādi un tās pakāpenisku attīstību.

Projektā apgūtas un izmantotas:

- HTML lapu izveide;
- CSS noformēšana;
- datu ievades formas;
- Google Forms un Google Sheets integrācija;
- Git un GitHub;
- GitHub Pages;
- MariaDB datubāzes;
- SQL vaicājumi;
- PHP;
- lietotāju autentifikācija;
- sesijas;
- lietotāju lomas;
- programmatūras uzturēšana un refaktorēšana.

---

## 2. Projekta versijas

Projektā pašlaik ir saglabātas divas Solar Cargo attīstības versijas.

### 2.1. PB2 statiskā versija

Galvenais fails:

`index.html`

PB2 versija izmanto:

- HTML;
- CSS;
- Google Forms;
- Google Sheets;
- iframe;
- GitHub Pages.

Šajā versijā Google forma tiek izmantota konteineru datu ievadei, bet Google Sheets tabula tiek izmantota datu glabāšanai un attēlošanai.

PB2 versija darbojas kā statiska web lapa un tai nav nepieciešams PHP vai MariaDB serveris.

---

### 2.2. PB3 PHP/MariaDB prototips

Galvenais fails:

`index.php`

PB3 versijā tika sagatavots projekta turpinājums, izmantojot:

- PHP;
- MariaDB;
- MySQLi;
- lietotāju autentifikāciju;
- PHP sesijas;
- administratora lomu;
- SQL datubāzes struktūru.

PHP prototipā darbojas lietotāju autentifikācijas pamata daļa un ir sagatavota MariaDB datubāze.

Konteineru web saskarne vēl nav pilnībā savienota ar MariaDB tabulu `containers`, tāpēc PB3 versija uzskatāma par projekta prototipu, nevis pilnībā pabeigtu Solar Cargo sistēmas versiju.

---

## 3. Galvenā funkcionalitāte

### PB2 versija

- Solar Cargo galvenās lapas attēlošana;
- konteineru datu ievade;
- Google Forms izmantošana;
- Google Sheets datu glabāšana;
- Google Sheets tabulas attēlošana web lapā;
- CSS noformējums;
- projekta publicēšana GitHub Pages.

### PB3 PHP prototips

- lietotāja pieteikšanās sistēmā;
- paroles pārbaude;
- lietotāja sesijas izveide;
- lietotāja lomas saglabāšana;
- administratora piekļuves pārbaude;
- izrakstīšanās no sistēmas;
- MariaDB savienojums;
- konteineru datubāzes struktūra;
- SQL testa dati un pārbaudes vaicājumi.

---

## 4. Projekta struktūra

Galvenie projekta faili:

    Solar-Cargo/
    │
    ├── index.html
    ├── index.php
    ├── login.php
    ├── logout.php
    ├── admin.php
    ├── auth.php
    ├── db.php
    │
    ├── config.example.php
    ├── config.local.php
    │
    ├── add-container.html
    ├── konteineri.html
    ├── statistika.html
    │
    ├── style.css
    │
    ├── solar_cargo_schema.sql
    ├── solar_cargo_data.sql
    ├── solar_cargo_queries.sql
    │
    ├── migration_notes.md
    ├── README.md
    └── CHANGELOG.md

---

## 5. Failu nozīme

### `index.html`

PB2 statiskās versijas galvenā lapa.

Tajā tiek izmantoti Google Forms un Google Sheets iegultie elementi.

### `index.php`

PB3 PHP prototipa galvenā lapa.

Tajā tiek izmantota lietotāja sesija un lietotāju lomas.

### `login.php`

Lietotāja autentifikācijas forma.

Pārbauda lietotāja ievadīto lietotājvārdu un paroli datubāzē.

### `logout.php`

Pārtrauc lietotāja sesiju un izraksta lietotāju no sistēmas.

### `admin.php`

Administratoram paredzēta lapa.

Pieejama tikai lietotājam ar administratora lomu.

### `auth.php`

Satur kopīgās autentifikācijas un autorizācijas funkcijas:

- `isLoggedIn()`;
- `requireLogin()`;
- `requireRole()`;
- `escape()`.

### `db.php`

Izveido savienojumu ar MariaDB datubāzi.

Datubāzes konfigurācija tiek nolasīta no lokālā konfigurācijas faila.

### `config.example.php`

Konfigurācijas paraugs bez reāliem datubāzes piekļuves datiem.

### `config.local.php`

Lokālā datubāzes konfigurācija.

Šajā failā tiek glabāti konkrētās vides datubāzes piekļuves dati.

**Šo failu nedrīkst publicēt GitHub**ai izplatīt kopā ar īstiem piekļuves datiem.**

### `style.css`

Kopējais projekta CSS noformējums.

### `solar_cargo_schema.sql`

Izveido `solar_cargo` datubāzi un tabulu `containers`.

### `solar_cargo_data.sql`

Satur konteineru testa datus.

### `solar_cargo_queries.sql`

Satur SQL vaicājumus datu pārbaudei un analīzei.

### `migration_notes.md`

Apraksta datu migrāciju, iespējamos riskus, pārbaudes un rollback plānu.

### `README.md`

Galvenā projekta dokumentācija.

### `CHANGELOG.md`

Projekta izmaiņu žurnāls.

---

## 6. Nepieciešamās tehnoloģijas un atkarības

### PB2 statiskajai versijai

Nepieciešams:

- moderna web pārlūkprogramma;
- interneta savienojums Google Forms un Google Sheets izmantošanai.

Papildu instalācija nav nepieciešama.

### PB3 PHP versijai

Nepieciešams:

- PHP;
- MySQLi atbalsts;
- MariaDB;
- lokāls web serveris;
- moderna web pārlūkprogramma.

Nepieciešama arī izveidota `solar_cargo` datubāze un lokāls konfigurācijas fails.

---

## 7. PB2 statiskās versijas palaišana

1. Lejupielādēt projekta mapi.
2. Atvērt `index.html`.
3. Failu var atvērt pārlūkprogrammā.
4. `style.css` tiek ielādēts automātiski.
5. Google Forms un Google Sheets iegultajiem elementiem nepieciešams interneta savienojums.

---

## 8. PB3 PHP versijas sagatavošana

### 8.1. Datubāzes izveide

MariaDB vidē izpildīt:

1. `solar_cargo_schema.sql`
2. `solar_cargo_data.sql`

Pārbaudei var izmantot:

`solar_cargo_queries.sql`

### 8.2. Konfigurācijas sagatavošana

Izmantot failu:

`config.example.php`

kā paraugu lokālajam:

`config.local.php`

Lokālajā konfigurācijas failā jānorāda:

- datubāzes serveris;
- datubāzes lietotājs;
- datubāzes parole;
- datubāzes nosaukums.

---

## 9. PB3 PHP versijas palaišana

1. Sagatavot MariaDB datubāzi.
2. Izveidot `config.local.php`.
3. Palaist lokālo PHP web serveri.
4. Atvērt projektu caur lokālo web serveri.
5. Atvērt `login.php`.
6. Ievadīt datubāzē reģistrēta lietotāja datus.
7. Pēc veiksmīgas autentifikācijas lietotājs tiek novirzīts uz `index.php`.
8. Administratora lietotājam ir pieejama `admin.php`.
9. Izrakstīšanās tiek veikta ar `logout.php`.

---

## 10. Datubāzes struktūra

Datubāzes nosaukums:

`solar_cargo`

Konteineru tabula:

`containers`

Galvenie lauki:

- `id`;
- `cargo_code`;
- `cargo_name`;
- `mass_kg`;
- `status`;
- `created_at`.

`cargo_code` ir unikāls konteinera identifikators.

---

## 11. Datu migrācija

PB3 posmā konteineru testa dati tika sagatavoti pārejai no PB2 Google Sheets risinājuma uz MariaDB datubāzi.

Migrācijas laikā tika ņemti vērā šādi riski:

- nepareizi datu tipi;
- UTF-8 kodējuma problēmas;
- dublēti konteineru kodi;
- trūkstoši obligātie dati;
- nekorekti statusu nosaukumi.

Plašāka informācija pieejama:

`migration_notes.md`

---

## 12. Migrācijas pārbaude

Datu pārbaudei var izmantot:

    SELECT * FROM containers;

    SELECT COUNT(*)
    FROM containers;

    SELECT status, COUNT(*)
    FROM containers
    GROUP BY status;

    SELECT *
    FROM containers
    ORDER BY mass_kg DESC;

Šie vaicājumi ļauj pārbaudīt datu esamību, ierakstu skaitu, statusu sadalījumu un konteineru svara vērtības.

---

## 13. Rollback plāns

Ja datubāzes migrācija neizdodas:

1. Dzēst kļūdaini izveidoto `solar_cargo` datubāzi.
2. Izveidot datubāzi atkārtoti ar `solar_cargo_schema.sql`.
3. Atjaunot testa datus ar `solar_cargo_data.sql`.
4. Pārbaudīt rezultātu ar `solar_cargo_queries.sql`.

---

## 14. Datu plūsma

### PB2

    Lietotājs
       ↓
    Google Form
       ↓
    Google Sheets
       ↓
    iframe
       ↓
    Solar Cargo web lapa

PB2 versijā Google Forms un Google Sheets imitē vienkāršu datu ievades un glabāšanas sistēmu.

### PB3 autentifikācijas prototips

    Lietotājs
       ↓
    login.php
       ↓
    db.php
       ↓
    MariaDB lietotāju dati
       ↓
    password_verify()
       ↓
    PHP sesija
       ↓
    index.php / admin.php

---

## 15. Publicēšana

PB2 statiskā versija ir publicēta, izmantojot GitHub Pages.

Publiskā adrese:

https://gosha2251.github.io/Solar-Cargo/

GitHub Pages ir piemērots PB2 statiskās HTML/CSS versijas publicēšanai.

PB3 PHP versijai nepieciešama servera vide ar PHP un MariaDB atbalstu, tāpēc tā netiek izpildīta GitHub Pages vidē.

---

## 16. Zināmie ierobežojumi

Pašreizējā projekta stāvoklī:

- PB2 un PB3 versijas atrodas vienā repozitorijā;
- PB3 PHP prototipa konteineru web saskarne vēl nav pilnībā savienota ar `containers` tabulu;
- vecās PB2 HTML lapas joprojām ir saglabātas projekta vēstures un iepriekšējās versijas vajadzībām;
- PHP versijai nepieciešams lokāls serveris un MariaDB;
- `config.local.php` ir nepieciešams lokālai PHP versijai, bet to nedrīkst publicēt;
- PB2 Google Forms un Google Sheets funkcionalitātei nepieciešams interneta savienojums.

---

## 17. Uzturēšanas informācija

Veicot izmaiņas projektā:

1. Pirms lielākām izmaiņām saglabāt strādājošu projekta versiju Git.
2. Veikt nelielus un loģiski nodalītus commit.
3. Commit aprakstā skaidri norādīt izmaiņas.
4. Nepievienot Git repozitorijam paroles vai citus slepenus datus.
5. Pēc PHP izmaiņām pārbaudīt autentifikāciju un lietotāju lomas.
6. Pēc datubāzes izmaiņām pārbaudīt SQL vaicājumus.
7. Būtiskas projekta izmaiņas reģistrēt `CHANGELOG.md`.
8. Atjaunināt README, ja mainās projekta palaišana, konfigurācija vai arhitektūra.

---

## 18. Projekta attīstības statuss

Pašlaik:

- PB2 statiskā versija ir pabeigta un publicēta;
- PB3 PHP/MariaDB versija ir prototipa stadijā;
- autentifikācijas pamata daļa ir sagatavota;
- datubāzes struktūra ir sagatavota;
- datubāzes konfigurācija ir nodalīta no galvenā koda;
- konteineru PHP saskarnes pilna integrācija ar MariaDB vēl nav pabeigta.

Tādēļ vecās PB2 lapas pagaidām tiek saglabātas.

Kad PHP/MariaDB versija būs pilnībā pabeigta un pārbaudīta, veco PB2 HTML failu nepieciešamību varēs izvērtēt atkārtoti.

---

## 19. Turpmākie iespējamie uzlabojumi

Nākotnē projektu varētu papildināt ar:

- konteinera pievienošanu MariaDB no PHP formas;
- konteineru saraksta iegūšanu tieši no MariaDB;
- konteineru rediģēšanu;
- konteineru dzēšanu;
- datu validāciju;
- kļūdu apstrādi;
- detalizētāku administratora paneli;
- PB2 legacy failu arhivēšanu pēc PHP versijas pabeigšanas.

---

## 20. Izmaiņu vēsture

Būtiskākās projekta izmaiņas tiek reģistrētas failā:

`CHANGELOG.md`

Git repozitorija commit vēsture tiek izmantota detalizētai tehnisko izmaiņu izsekošanai.

---

## 21. Autors

**Deniss Cvetkovs**  
Grupa: **73346**