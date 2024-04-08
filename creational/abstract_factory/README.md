# Abstract Factory
Lembra muito o padrão Factory Method, a diferença que tem uma camada a mais que Factory Method, sendo composto por varios factory Method.

Visa agrupar familias de produtos compativeis com seus elementos.

Aplica o SRP e o OCP.

A programação é focada em interfaces.

## Diagrama
![](Abstract%20Factory.jpeg)

## Aplicabilidade

* Quando um sistema deve ser idependente de como seus produtos são criados.
* Quando um sistema deve ser configurado com uma familia de produtos.


## Pró e contra

✔️ Você pode ter certeza que os produtos que você obtém de uma fábrica são compatíveis entre si.

✔️ Você evita um vínculo forte entre produtos concretos e o código cliente.

✔️ Princípio de responsabilidade única. Você pode extrair o código de criação do produto para um lugar, fazendo o código ser de fácil manutenção.

✔️ Princípio aberto/fechado. Você pode introduzir novas variantes de produtos sem quebrar o código cliente existente.

❌ O código pode tornar-se mais complicado do que deveria ser, uma vez que muitas novas interfaces e classes são introduzidas junto com o padrão