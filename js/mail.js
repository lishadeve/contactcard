let emailNL = document.getElementById("subccardinput");
let btnNL = document.getElementById("subccardbutton");

btnNL &&
    btnNL.addEventListener("click", () => {
        Email.send({
            SecureToken: "41b9b013-4dcf-47b9-a01c-3b0d539c145f",
            To: "codeinfluencer@gmail.com",
            From: "erimalisha7@gmail.com",
            Subject: "Contact Info",
            Body: `New contact from ${emailNL.value}.`,
        }).then((message) => alert("Contact Added"));
    });