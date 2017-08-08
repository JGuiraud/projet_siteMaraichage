/*
  OPEN SOURCE FOR GOOD DIRECTORY SAMPLE CONFIG FILE

  title: Displayed at the top and as the webpage title
  demoVideo: the YouTube video address
  liveDemo: the address of the project's homepage
  description: an ES6 template string that contains GitHub-flavored Markdown.
               Keep this relatively short - a paragraph tops
  body: an ES6 template string with GitHub-flavored Markdown.
        Please include the open source license, with the freeCodeCamp copyright at the end.

  If the 'liveDemo' or the 'demoVideo' aren't yet available, you can exclued them.
  They just won't be added to the project's page.
*/

module.exports = {
  title: 'Maraîchage',
  demoVideo: '',
  liveDemo: 'http://lesjardinsderiton.herokuapp.com/',
  description: `Ce site permet à un maraîcher de gérer ses légumes, paniers, recettes mais aussi les marchés où il est présent.
  Ce site responsif se présente sur smartphones et tablettes comme une authentique application mobile.
`,
  body: `## Que fait Maraîchage?

Avec Maraîchage, vous pouvez :

- lister les légumes que vous proposez,
- composer des paniers de légumes,
- proposer des recettes et les imprimer,
- mettr en vitrine une recette au choix,
- lister les marchés où vous êtes présent,
- afficher sur une carte (google maps) les marchés.

### Performance


### Pourquoi?

Ce projet est issu de la demande d'un futur maraîcher soucieux de communiquer autour de son activité sur internet.
L'idée ici est de le mettre à disposition du plus grand nombre.


### License

This computer software is licensed under the Open Source [BSD-3-Clause].

Copyright (c) 2017, Simplon.
`
};
