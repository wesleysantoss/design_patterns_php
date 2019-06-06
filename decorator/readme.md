**Decorator**

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

**Decorator:**
Agora é necessario criar um imposto que é composto por dois impostos diferentes.

Links: 