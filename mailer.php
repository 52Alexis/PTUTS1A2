<!DOCTYPE html>
<html>
<head>
<title>Envoi Email</title>
</head>
</html>

<body>
 
    <form>
        <h2>Envoyer un mail</h2>

        <label> Nom : </label>
        <input type="text" placeholder="Votre Nom" id="name">
        <label> Email :</label>
        <input type="text" placeholder="Votre mail" id="email">
        <label> Objet : </label>
        <input type="text" placeholder="Objet" id="objet">
        
        <p>Votre message</p>
        <textarea id="Cmessage" rows="5" placeholder="Entrez votre message"> </textarea>
        <button type="submit" onclick="sendEmail()" value="Envoyer un mail">Envoyer</button>
    
    </form>
    

</body>