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
				saldo += valor; break;
			case 3:
				printf("valor: "); scanf("%f", &valor);
				if (valor<= saldo) saldo -= valor;
				else printf("saldo infusciente.\n"); break;
			case 4:
				printf("valor: "); scanf("%f", & valor);
				emprestimo += valor; saldo += valor; break;
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


