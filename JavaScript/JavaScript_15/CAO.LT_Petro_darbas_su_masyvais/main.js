const music = [
    {
      title: "Du gaideliai",
      author: "Lietuviai",
      releaseDate: 1990
    },
    {
      title: "Baby",
      author: "Justin Bieber",
      releaseDate: 2015
    }
  ]
  
  console.log(music.filter(v => v.releaseDate > 2000));
  console.log(music.filter(v => v.releaseDate > 2000).map(x => x.author));