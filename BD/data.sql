INSERT INTO administrateur(
	id, nom, mot_de_passe
)
VALUES (
	1, 'admin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'
);
--mot de passe = test
INSERT INTO text(
	id,page,contenu
)
VALUES (
	1, 'acceuil', 'Vous avez un évènement à organiser et vous voulez que vos convives soient impressionnés au plus haut point par la qualité et la fraîcheur du banquet? Un appel de votre part et nous comblerons vos attentes et vos exigences. Notre service vous fera vivre une expérience digne des plus grands restaurants. Que ce soit pour un buffet chaud ou froid servi sur tables, un banquet avec service digne des plus grands chefs, DynamiKoncept vous assure de vous concocter le festin de vos rêves..'
);
INSERT INTO text(
	id,page,contenu
)
VALUES (
	2, 'services', 'Déjeuners et Brunchs Au travail ou à la maison, nos choix variés de déjeuners et de brunchs sauront plaire à tous les goûts et à tous les budgets. Tôt le matin ou comme goûter en matinée, commencez votre journée du bon pied en dégustant un déjeuner équilibré et savoureux sans la contrainte de le préparer. Buffets Froids Nos buffets froids se démarquent de la compétition par la multitude de saveurs que nous vous offrons. La couleur, la saveur et la texture de nos buffets froids vous surprendront sans contredits. Pour vous satisfaire, notre approche personnalisée vous invite à nous faire part de vos demandes spéciales ainsi que de votre budget, vous serez à tout coup comblé! Buffets Chauds et froids Pour goûter le meilleur des deux mondes, vous pouvez combiner le froid et le chaud avec notre sélection de menus. Nous vous invitons à savourer un de nos buffetschauds qui sont tous succulents et qui vous feront saliver les papilles. Que ce soit pour toutes sortes d''évènements, notre menu s''adaptera à vos besoins et vos attentes. Votre budget est le nôtre, n''hésitez pas à nous faire part de vos restrictions et nous saurons les satisfaire! '
);
INSERT INTO text(
	id,page,contenu
)
VALUES (
	3, 'compagnie', 'Une équipe « nouvelle génération » Notre équipe se veut tout d’abord avant-gardiste et originale. Issue de différents horizons tous les membres de l’équipe sont polyvalents et font intervenir leurs diverses compétences au sein d’une entreprise nouvelle génération formant alors une petite structure « de jeunes dynamiques passionnés» mais dont les grandes compagnies ont déjà fait confiance, ainsi que des personnalités comme Chuck Norris, Bruce Wayne, Steve Jobs et bien d''autres encore…'
);
INSERT INTO employe(
	id,nom,chemin_photo,description
)
VALUES (
	1,'Egon Spengle','images/employes/manquante.png', 'Egon Spengle chef cuisinier et traiteur à domicile, seul ou avec son équipe, réalise pour vous, selon vos goûts et envies, vos dîners, repas, cocktails, réceptions ou touts autres évènements. Le restaurant qui se déplace chez vous, c''est le concept que je vous propose. Ainsi vous profitez pleinement de vos convives'
);
INSERT INTO employe(
	id,nom,chemin_photo,description
)
VALUES (
	2,'Winston Zeddmor','images/employes/manquante.png','Le Chef Winston Zeddmore a rejoint notre équipe en tant qu''adjoint. Depuis 1992, son parcours professionnel lui a permis de mettre sa formation en cuisine traditionnelle et en pâtisserie au service d''établissements où il a exercé ses talents avec succès. Il apporte sa touche personnelle et sa créativité au service de notre clientèle... Bienvenue Chef.');
INSERT INTO poste(
	id,nom,description,date_daffichage
)
VALUES (
	1,'Aide cuisinie','temps partiel','12/01/01'
);
INSERT INTO poste(
	id,nom,description,date_daffichage
)
VALUES (
	2,'Chef cuisinie',' temps partiel (fin de semaine)','12/02/01'
);