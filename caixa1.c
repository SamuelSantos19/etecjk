#include <stdio.h>

int main() {
	int opcao;
	float saldo = 1000.00;
	float emprestimo = 0.00;
	float valor;

	while (1) {
		printf("\n===== caixa eletronico====\n");
		printf("1 - verificar saldo\n");
		printf("2 - depositar valor\n");
		printf("3 - sacar valor\n");
		printf("4 - pedir emprestimo\n");
		printf("5 - pagar emprestimo\n");
		printf("6 - consultar emprestimo\n");
		printf("7 - sair\n");
		printf("escolha uma opcao: ");
		scanf("%d", &opcao);

		if (opcao == 7) break;
		
		switch(opcao) {
			case 1:
				printf("saldo atual: RS %.2f\n", saldo);
				break;
			case 2:
				printf("valor: "); scanf("%f", &valor);
				if (valor > 0) {
				saldo += valor;
				}else{
				printf ("valor invalido.\n");
				}	
				break;
			case 3:
				printf("valor: "); 
				scanf("%f", &valor);
				if ( valor > 0 && valor <= saldo) {
					saldo -= valor;
				} else if (valor <= 0)
			       	{printf("valor invalido.\n");
				}
				 else {
				printf("saldo insuficiente.\n");
				 } 
				 break;
				
			case 4:
				printf("valor: "); scanf("%f", & valor);
				if (valor >0 && valor <= 1000000.00) {
					emprestimo += valor;
					saldo += valor;
				}  else if (valor > 1000000.00) {
					printf("valor de emprestimo muito alto! Limite maximo: 1.000.000,00\n");
				}else{
					printf("valor invalido.\n");
				}
				break;
			case 5:
				printf("valor: "); scanf("%f", &valor);
			       if (valor <= saldo && valor <= emprestimo) { saldo -= valor; emprestimo -= valor; }
		               else printf("operacao invalida.\n"); break;
			
			case 6: printf("dividia; R$ %.2f\n", emprestimo); break;
			default: printf("opcao invalida.\n");
		}
	}
 return 0;
}


