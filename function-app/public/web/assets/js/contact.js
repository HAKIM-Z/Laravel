$(".add_ms").submit(function (e) {
    e.preventDefault();
    let name = $("._name").val();
    let email = $("._email").val();
    let phone = $("._phone").val();
    let message = $("._message").val();
    let _token = $("._token").val();

    if (!name) {
        $("._name").attr("placeholder", "please enter your name");
    }

    if (!email) {
        $("._email").attr("placeholder", "please enter your email");
    }

    if (!phone) {
        $("._phone").attr("placeholder", "please enter your phone");
    }

    if (!message) {
        $("._message").attr("placeholder", "please enter your message");
    }

    if (name && email && phone && message) {
        $.ajax({
            url: "message_store",
            method: "post",
            data: {
                _token: _token,
                name: name,
                email: email,
                phone: phone,
                message: message,
            },
            success: function (x) {
                $(".call_mass").html(x);

                $("._name").val("");
                $("._email").val("");
                $("._phone").val("");
                $("._message").val("");

                setTimeout(() => {
                    $(".call_mass").html("");
                }, 3000);
            },
            error: function (y) {
                console.log(y);
            },
        });
    }
});
