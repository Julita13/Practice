-- 1. Filmai gali turėti daug aktorių, žanrų, kalbų ir šalių.

-- 2. Pakeisti visus šiuos laukelius į many-to-many ryšius. Tam reikės
-- atskirų lentelių  - actors, languages, countries, genres.
-- Tokių lentelių sandara paprasta: id, name, created_at, updated_at, deleted_at.

-- 3. Taip pat kiekvienam ryšiui reikės jungiamųjų lentelių pvz.: 
-- actor_movie, genre_movie ir t.t., kurias sudarys svetimų raktų poros -
-- actor_id-movie_id, genre_id-movie_id ir t.t.   

-- 4. Ant jungiamųjų lenteliu svetimų raktų turi būti uždėti saitai fk constraint į 
-- atitinkamas svetimas lenteles. Taip pat turi būti uždėti unique index saitai.

-- 5. Kiekviena lentelė turi savo katalogą ir kūrimo procedūros failą.

-- 6. Lenteliu duomenis pildyti savo nuožiūra, svarbiausia, kad būtų galima ištestuoti
-- duomenų paėmimą su SELECT užklausa.

-- 7. Parašyti atskiras SELECT užklausas, kuriomis paimami duomenys:

-- movies+actors, 
-- movies+languages,
-- movies+genres,
-- movies+countries;