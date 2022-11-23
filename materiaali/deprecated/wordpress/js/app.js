function change_language(id)
{
    if (id == "English")
        window.location.href = location.protocol + '//' + location.host + location.pathname + "?lang=en_GB";
    else if (id == "Etopia")
        window.location.href = location.protocol + '//' + location.host + location.pathname + "?lang=am";
    
    setTimeout(function(){
        window.location.reload(); // reload site so it changes the actual language in real-time.
    }, 1000);
}