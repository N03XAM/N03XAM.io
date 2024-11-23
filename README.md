//

CREATION D'UNE CLE SSH :

ssh-keygen -t ed25519 -C "amaxence.1402@gmail.com" 

COPIER LA CLE POUR LA METTRE DANS GITHUB :
  - windows :  clip < ~/.ssh/id_ed25519.pub
  - mac :  pbcopy < ~/.ssh/id_ed25519.pub

POUR LA METTRE SUR GITHUB :

parametre du compte --> clé ssh --> ajouter une clé

//

//

CREER UN PROJET SYMFONY :

symfony new "nom projet" --webapp

//

//

CREER UN CONTROLLER :

rentrer dans le dossier du projet symfony

executer :

symfony console make:controller "NomController"

//
