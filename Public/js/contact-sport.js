function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#f64949";
   else
      champ.style.backgroundColor = "#7ff687";
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;

   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifForm(f)
{
 var mailOk = verifMail(f.email);
  
   if(mailOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
  
}