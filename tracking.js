if("undefined"==typeof jQuery)throw new Error("Js Tracking requires jQuery");

//Javascript que faz a contagem de acessos e também o utm_source

let save_user_access = (page) =>
{
    let utmSource = get_cookie('utmSource');
    $.ajax({
        type: "POST",
        url: "ajax/registra_acesso.php",
        data: { pagina: page, utmSource: utmSource},
        success: () => {
            console.log('Acesso registrado com sucesso');
        },
        error: () => {
            console.log('Falha ao registrar acesso');
        }
    });
}

let get_utm_source = () =>
{
    let utm_source = location.search.split('utm_source=')[1];
    return typeof utm_source !== 'undefined' ? utm_source : get_cookie('utmSource');
}

let add_url_to_tracking = (save_on_session = true, page = null) => 
{
    //Getting utm-source from url
    try{
        let utm_source = location.search.split('utm_source=')[1];
        let utm_medium = location.search.split('utm_medium=')[1];
        let utm_campaign = location.search.split('utm_campaign=')[1];

        if(!(typeof utm_source === 'undefined'))
        {
            let { userAgent, language, platform, doNotTrack } = navigator;
            
            //Saving on the session


            //Saving on cookies
            set_cookie('userAgent', userAgent, 7);
            set_cookie('language', language, 7);
            set_cookie('platform', platform, 7);
            set_cookie('doNotTrack', doNotTrack, 7);
            set_cookie('utmSource', utm_source, 7);
            set_cookie('page', page, 7);

            if(save_on_session)
            {
                $.ajax({
                    type: "POST",
                    url: "ajax/registra_source_session.php",
                    data: { 
                        userAgent: userAgent, 
                        language: language, 
                        platform: platform, 
                        doNotTrack: doNotTrack, 
                        utmSource: utm_source, 
                        page: page == null ? window.location.pathname : page,
                        utm_campaign: utm_campaign,
                        utm_medium: utm_medium
                    },
                    success: () => {
                        console.log('Acesso registrado com sucesso');
                    },
                    error: () => {
                        console.log('Falha ao registrar acesso');
                    }
                });
            }
            
            console.log(utm_source);
        }else{
            console.log(get_cookie('utmSource', 'web'));
        }
    }catch(ex)
    {
        console.log(ex);
    }
}

// let register_access = () =>
// {

// }

let set_cookie = (cname, cvalue, exdays = 30) => 
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

let get_cookie = (name, defaultName = "web") =>
{
    try
    {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
        }
        return "";
    }catch(ex)
    {
        return defaultName;
    }
}

let getLocation = () => 
{
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        console.log('Location not supported by this browser');
    }
}
  
let showPosition = position =>
{
    let lat = position.coords.latitude;
    let lon = position.coords.longitude;

    console.log(lat, lon);
}

//add_url_to_tracking();