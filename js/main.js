
    const nombre = document.getElementById('f-nombre')
    const mail = document.getElementById('f-mail')
    const tel = document.getElementById('f-tel')
    const mens = document.getElementById('f-mens')
    const form = document.getElementById('form')

    form.onsubmit = (e) => {
        e.preventDefault()
        let mensaje = `Nombre: *${nombre.value}*\nMail: ${mail.value}\nTelefono: ${tel.value}\n${mens.value}`
        mensaje = encodeURIComponent(mensaje)    
        alert(mensaje)   
        fetch(`https://api.callmebot.com/whatsapp.php?phone=+5493413469014&text=${mensaje}&apikey=439722`)
            .then(alert("Gracias por comuncarte"))
            .catch(e => alert(e))
    }
