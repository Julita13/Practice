-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

INSERT INTO
    `movie_rentals`.`movies`(
        `title`,
        `description`,
        `release_date`,
        `runtime`,
        `rating`
    )
VALUES (
        'Titanic',
        'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
        '1977-11-01',
        195,
        'PG-13'
    ), (
        'Inception',
        'Inception is a 2010 science fiction action film[4][5][6] written and directed by Christopher Nolan, who also produced the film with Emma Thomas, his wife.',
        '2010-07-08',
        148,
        'PG-13'
    ), (
        'Forrest Gump',
        'Forrest Gump is a 1994 American comedy-drama film directed by Robert Zemeckis and written by Eric Roth. ',
        '1994-06-23',
        142,
        'PG-13'
    ), 
    (
        "Scary Movie",
        "A year after disposing of the body of a man they accidentally killed, a group of dumb teenagers are stalked by a bumbling serial killer.",
        "2000-07-07",
        88,
        "PG-13"
    ), 
    (
        "American Pie",
        "Four teenage boys enter a pact to lose their virginity by prom night.",
        "1999-07-09",
        95,
        "R"
    ), (
        "Harry Potter and the Deathly Hallows: Part 2",
        "Harry, Ron, and Hermione search for Voldemort's remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.",
        "2011-07-07",
        130,
         "PG-13"
    )