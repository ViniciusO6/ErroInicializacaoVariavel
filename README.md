# Solução de variáveis não inicializadas


![vscode1](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/ad4c34c1-a0cd-4d9d-b676-345f70fd7d2f)
<p>Como podemos ver as variáveis não foram declaradas no codigo, mas sim na url do site. <br>
o codigo resgata o valor dessas variáveis usando a GET e efetua os cálculos</p>

![codigo1](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/959167a7-5136-43ed-a90d-6aa8880c7686)

<p>Entretanto se a parte da url que contém as variavéis for deletada, será exibida uma menssagem de erro.</p>

![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/31d1d76a-e4ad-4b3b-93ec-b953afd2eb59) <br>
![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/5b66163b-9802-4d0c-ba14-b6be5d69b9ef)
![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/86024850-be95-4ca0-aeb8-f9739b3f3f0a)

<p>Isso ocorre pois as variáveis que seriam utilizadas não existem mais. <br>
  Para resolver isso, basta utilizarmos o "isset", isset — Determina se uma variável está declarada e é diferente de null</p>

  ![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/75f303fa-001c-4119-9510-577b5f97f30a)

  Dessa forma a menssagem de erro deixa de aparecer, já que o o cálculo não foi executado pois a condição isset retornou false

  ![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/593aea07-6fcb-4790-84ae-939e60dffbea)



  <p>Para confirmarmos que a condição retornou false pordemos utilizar o Else</p>
  
![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/cb86ee12-382a-49da-a9b3-4eab005b9bb1)

![image](https://github.com/ViniciusO6/Solu-oDeErroPHP/assets/125403644/1bebe7f2-bea9-40ca-865d-c953d1624c3c)













