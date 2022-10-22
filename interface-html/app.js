function resquestOfServer() {
    $.ajax({
        type: 'get',
        url: "http://localhost:8000/hello-world?info=testonly=OlaMundo"
    }).done(function (data) {
        document.getElementById('developer').innerHTML = data.name
        document.getElementById('version').innerHTML = data.version
        document.getElementById('value-of-variable').innerHTML = data.value_of_variable_info
        document.getElementById('mananger-developer').innerHTML = data.mananger_developer
        document.getElementById('company-site').innerHTML = data.web_site_company

        $("#show-values").css('display', 'block')
    });

}

function submitDataOfUser() {
    const carName = $("#carName").val()
    const modelCar = $("#model").val()

    $.ajax({
        "url": "http://localhost:8000/carinsert",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json; charset=UTF-8"
        },
        "data": JSON.stringify({
            "carName": carName,
            "model": modelCar,
        })
    }).done(function (response) {
        
        if (response.success) {

            closeErrorMsg()
            
            $("#success-record-msg").css('display', 'block')

            $("#carName").val('')
            $("#model").val('')
        } else {

            let errorMsg;

            closeSuccessMsg()

            if(response.missingAttribute === 'carName') {
                errorMsg = 'O campo carro não pode ficar em branco.'
            }

            if(response.missingAttribute === 'model') {
                errorMsg = 'O campo modelo não pode ficar em branco.'
            }

            console.log(response)
            $("#error-record-msg").css('display', 'block')
            $("#content-error-record-msg").html(errorMsg)
        }

    });

    console.log(carName)
    console.log(modelCar)
    
}

function closeSuccessMsg() {
    $("#success-record-msg").css('display', 'none')
}

function closeErrorMsg() {
    $("#error-record-msg").css('display', 'none')
}

