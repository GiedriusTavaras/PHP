const button = document.querySelector("button")

button.addEventListener("click", () => {

    const all = document.querySelectorAll("input[type = checkbox]");
    const checked = document.querySelectorAll("input[type = checkbox]:checked");


    axios.post('http://localhost/NamuDarbai/7namuDarbas/7_9suJSantrasFailas.php', {all:all.length, checked:checked.length})
    .then(function (response) {
      console.log(response.data.atsakymas);
      document.querySelector("#info").innerHTML = response.data.tekstas;
      document.querySelector("#forma").style.display="none";
      document.querySelector("#body").style.background="white";
    })
    .catch(function (error) {
      console.log(error);
    });



})