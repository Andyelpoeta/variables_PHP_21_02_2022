addEventListener("DomcontentLoaded", async(e)=>{
    let peticion= await fetch("https://andyelpoeta.000webhostapp.com/variables_PHP_21_02_2022/api.php");
    let texto= await peticion.text();
    document.body.insertAdjacentHTML("afterend",texto)
})