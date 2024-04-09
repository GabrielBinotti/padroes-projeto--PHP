# Bridge

É um padrão estrutural em programação orientada a objetos que visa desacoplar uma abstração da sua implementação, de modo que os dois possam variar independentemente. Este padrão permite que você divida uma classe grande ou um conjunto de classes estreitamente relacionadas em duas hierarquias separadas—abstração e implementação—que podem ser desenvolvidas e atualizadas de forma independente uma da outra.

## Como funciona

* Abstração: Define a interface abstrata. Ela mantém uma referência à implementação, que é a outra hierarquia de classes. A abstração delega todas as operações reais à implementação.

* Implementação Refinada: Esta é a segunda hierarquia que implementa a interface definida pela primeira hierarquia (abstração). A implementação pode ser alterada sem afetar os clientes.

## Diagrama


## Aplicabilidade
* Quando você quer evitar um vínculo permanente entre uma abstração e sua implementação. Isso pode ser útil, por exemplo, quando a implementação deve ser selecionada ou alterada em tempo de execução.

* Quando ambas as abstrações e suas implementações devem ser extensíveis por meio de subclasses. O padrão Bridge permite combinar diferentes abstrações e implementações e estendê-las independentemente.

* Quando mudanças na implementação de uma abstração não devem afetar os clientes; ou seja, o código do cliente não precisa ser recompilado.
Para compartilhar uma implementação entre múltiplas abstrações.

## Prós e contra

✔️ Desacoplamento: Promove o princípio do desacoplamento, permitindo que a interface (abstração) e a implementação variem independentemente.

✔️ Flexibilidade: Oferece maior flexibilidade na escolha ou alteração de implementações em tempo de execução.

✔️ Extensibilidade: Torna mais fácil estender as abstrações e implementações separadamente.

✔️ Manutenção: Simplifica a manutenção do código, uma vez que mudanças em uma parte do sistema não afetam outras partes.

❌ Complexidade aumentada: Pode aumentar a complexidade do design ao introduzir várias novas camadas.

❌ Dificuldade de entendimento: Para desenvolvedores não familiarizados com o padrão, pode ser mais difícil de entender e implementar corretamente.

❌ Overengineering: Em casos onde a flexibilidade adicional não é necessária, o uso do padrão Bridge pode ser visto como uma sobreengenharia, adicionando complexidade desnecessária ao projeto.