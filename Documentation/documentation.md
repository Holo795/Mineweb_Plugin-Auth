# AuthMineweb
- Ce plugin vous permettra de mettre une authentification personnalisé
sur votre Launcher

<h1>Installation :  
  
  
## Web | FTP
- Cliquez sur "Clone or download" sur la page "https://github.com/Holo795/Mineweb_Plugin-Auth/".
- Téléchargez et enregistrez le ZIP, puis extrayez le.
- Renommez le fichier "Mineweb_Plugin-Auth-master" par "Auth".
- Déplacez le fichier dans votre FTP à l'adresse "/app/Plugin".
- Supprimez tous les fichiers dans le "/app/tmp/cache" de votre FTP.
- Installation effectuée. 
##  
  
## Java | Launcher
- Ajoutez la librairie Java "[AuthMineweb_1.4.0.jar](https://github.com/Holo795/Mineweb_Plugin-Auth/raw/master/Documentation/AuthMineweb_1.4.0.jar)" à votre projet.

###  Exemples
 
Faire la liaison avec username et password :
```java
import fr.holo.mineweb.auth.mineweb.AuthMineweb;

AuthMineweb.setTypeConnection(TypeConnection.launcher);
AuthMineweb.setUrlRoot("https://exemple.com");
AuthMineweb.setUsername("Holo");
AuthMineweb.setPassword("123456");
try {
	AuthMineweb.auth();
} catch (DataWrongException | DataEmptyException | ServerNotFoundException | IOException e) {
	// TODO Auto-generated catch block
	e.printStackTrace();
}

if (AuthMineweb.isConnected()) {
	Thread t = new Thread() {
		@Override
		public void run() {
			//action a faire apres la connexion
		}
	};
	t.start();
}
```
##
