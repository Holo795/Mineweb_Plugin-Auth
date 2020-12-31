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

###  Exemples :
 
Connexion avec Username et Password :
```java
public static void auth(String username, String password) {

	AuthMineweb.setTypeConnection(TypeConnection.launcher);
	AuthMineweb.setUrlRoot("https://exemple.com");
	AuthMineweb.setUsername(username);
	AuthMineweb.setPassword(password);
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
				//Action à faire après la connexion
			}
		};
		t.start();
	}

}
```
   
Connexion avec Username, AccessToken et ClientToken :
```java
public static void reauth(String username, String accesstoken, String clienttoken) {

	AuthMineweb.setTypeConnection(TypeConnection.launcher);
	AuthMineweb.setUrlRoot("https://exemple.com");
	AuthMineweb.setUsername(username);
	AuthMineweb.setAccessToken(accesstoken);
	AuthMineweb.setClientToken(clienttoken);
	try {
		AuthMineweb.reauth();
	} catch (DataWrongException | DataEmptyException | ServerNotFoundException | IOException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}

	if (AuthMineweb.isConnected()) {
		Thread t = new Thread() {
			@Override
			public void run() {
				//Action à faire après la connexion
			}
		};
		t.start();
	}

}
```
### Configuration :
| Parameter         |      Default  |  Description |
|:-------------------:|:-------------:|:-----------:|
| setTypeConnection |  null | TypeConnection.launcher (authentification) ou TypeConnection.ingame (get info by uuid) |
| col 2 is          |    centered   |   $12 |
| col 3 is          | right-aligned |    $1 |
##
