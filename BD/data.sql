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
	1, 'acceuil', 'Vous avez un �v�nement � organiser et vous voulez que vos convives soient impressionn�s au plus haut point par la qualit� et la fra�cheur du banquet? Un appel de votre part et nous comblerons vos attentes et vos exigences. Notre service vous fera vivre une exp�rience digne des plus grands restaurants. Que ce soit pour un buffet chaud ou froid servi sur tables, un banquet avec service digne des plus grands chefs, DynamiKoncept vous assure de vous concocter le festin de vos r�ves..'
);
INSERT INTO text(
	id,page,contenu
)
VALUES (
	2, 'services', 'D�jeuners et Brunchs Au travail ou � la maison, nos choix vari�s de d�jeuners et de brunchs sauront plaire � tous les go�ts et � tous les budgets. T�t le matin ou comme go�ter en matin�e, commencez votre journ�e du bon pied en d�gustant un d�jeuner �quilibr� et savoureux sans la contrainte de le pr�parer. Buffets Froids Nos buffets froids se d�marquent de la comp�tition par la multitude de saveurs que nous vous offrons. La couleur, la saveur et la texture de nos buffets froids vous surprendront sans contredits. Pour vous satisfaire, notre approche personnalis�e vous invite � nous faire part de vos demandes sp�ciales ainsi que de votre budget, vous serez � tout coup combl�! Buffets Chauds et froids Pour go�ter le meilleur des deux mondes, vous pouvez combiner le froid et le chaud avec notre s�lection de menus. Nous vous invitons � savourer un de nos buffetschauds qui sont tous succulents et qui vous feront saliver les papilles. Que ce soit pour toutes sortes d''�v�nements, notre menu s''adaptera � vos besoins et vos attentes. Votre budget est le n�tre, n''h�sitez pas � nous faire part de vos restrictions et nous saurons les satisfaire! '
);
INSERT INTO text(
	id,page,contenu
)
VALUES (
	3, 'compagnie', 'Une �quipe � nouvelle g�n�ration � Notre �quipe se veut tout d�abord avant-gardiste et originale. Issue de diff�rents horizons tous les membres de l��quipe sont polyvalents et font intervenir leurs diverses comp�tences au sein d�une entreprise nouvelle g�n�ration formant alors une petite structure � de jeunes dynamiques passionn�s� mais dont les grandes compagnies ont d�j� fait confiance, ainsi que des personnalit�s comme Chuck Norris, Bruce Wayne, Steve Jobs et bien d''autres encore�'
);
INSERT INTO employe(
	id,nom,chemin_photo,description
)
VALUES (
	1,'Egon Spengle','images/employes/manquante.png', 'Egon Spengle chef cuisinier et traiteur � domicile, seul ou avec son �quipe, r�alise pour vous, selon vos go�ts et envies, vos d�ners, repas, cocktails, r�ceptions ou touts autres �v�nements. Le restaurant qui se d�place chez vous, c''est le concept que je vous propose. Ainsi vous profitez pleinement de vos convives'
);
INSERT INTO employe(
	id,nom,chemin_photo,description
)
VALUES (
	2,'Winston Zeddmor','images/employes/manquante.png','Le Chef Winston Zeddmore a rejoint notre �quipe en tant qu''adjoint. Depuis 1992, son parcours professionnel lui a permis de mettre sa formation en cuisine traditionnelle et en p�tisserie au service d''�tablissements o� il a exerc� ses talents avec succ�s. Il apporte sa touche personnelle et sa cr�ativit� au service de notre client�le... Bienvenue Chef.');
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