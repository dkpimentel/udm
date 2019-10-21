<?php 

require_once("inc/funcoes.php");

/*
Funções recursisvas

Funções recursisvas exigem muito do servidor, se der par autilizar um while ou um for é melhor, esse tipo de função só é utilizado em caso muito exepsionais.
*/
//Array bidirecional, um array contendo vários objetos/array dentro dele
$hierarquia =  array(

	array(
		'nome_cargo'=>'CEO',
		'subordinados'=> array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=> array(
					//Início: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas',
					)
					//Término: Gerente de Vendas
				)
			),
			//Término: Diretor Comercial
			
			//Início: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=> array(
					//Inínio: Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Início: Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos',
							)
							//Término: Supervisor
						)

					),
					//Termino: Gerente de Contas a Pagar

					//Início: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=> array(
									//Início: Encarregado
									array(
										'nome_cargo'=>'Encarregado'
									)
									//Término: Encarregado
								)
							)
							//Término:

						)

					)
					//Término: Gerente de Compras

				)
				

			)
			//Término: Diretor Financeiro
		)

	)

);



echo exibe($hierarquia);

?>