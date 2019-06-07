**Builder**

Cenário: Impostos diferentes que precisam ser calculados em cima do valor de um orçamento.

Agora todo orçamento tem diferentes itens e todo orçamento deve receber um desconto e existem varias regras de desconto, mas somente um desconto pode ser aplicado no orçamento, não é permitido aplicar mais de um desconto em um orçamento.

As regras são: 
- Caso o orçamento ter pelo menos 5 itens, desconto de 10%
- Caso o valor do orçamento seja maior ou igual a 500 reais, desconto de 5%
- Caso o valor do orçamento seja maior ou igual a 300 reais, desconto de 3%

Agora os impostos de ICMS e ISS tem regras diferentes para gerar o imposto, ao invés de ser uma porcentagem fixa essa porcentagem vai variar.

As regras são:
- Para o gerar o ICMS se o orçamento for acima de 500 reais, ele vai ser 15% acima do valor do orçamento, abaixo disso 5%.
- Para o gerar o ISS se o orçamento for acima de 300 reais, ele vai ser 15% acima do valor do orçamento, abaixo disso 10%.

Agora é necessario criar um imposto que é composto por dois impostos diferentes.

Agora é necessário aplicar descontos de acordo com o estado do orçamento, 

**Cenário do Builder:**
Agora é necessário gerar nota fiscal no sistema de orçamento, sempre que for criar uma nota, precisa calcular o valor bruto da nota, calcular impostos e para isso foi criado um gerador, que nesse gerador tem toda a logica.

Links: 
- https://forum.imasters.com.br/topic/581696-design-pattern-builder-qual-utilidade-real/
- https://www.devmedia.com.br/design-patterns-aplicando-os-padroes-builder-singleton-e-prototype/31023