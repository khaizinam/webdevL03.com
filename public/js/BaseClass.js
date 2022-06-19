logger = (mess) => {
    console.log(mess);
}
let Display = {
    show: (e) => {
        $(e).css("display", "block");
    },
    hide: (e) => {
        $(e).css("display", "none");
    },
    null: (e) => {
        $(e).css("display", null);
    }
}
let Css = {
    right: (e, val) => {
        $(e).css("right", val);
    }
}
let Style = {
    getWidth: (e) => {
        return e.offsetWidth;
    },
    setWidth: (e, val) => {
        e.style.width = val;
    },
    getHeight: (e) => {
        return e.offsetHeight;
    },
    setHeight: (e, val) => {
        e.style.height = val;
    }
}
let Value = {
        get: (e) => {
            return $(e).val();
        },
        set: (e, v) => {
            $(e).val(v);
        },
        clear: (e) => {
            $(e).val(null);
        }
    }
    //   COOKIE
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}