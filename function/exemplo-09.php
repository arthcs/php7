<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' =>array(
			//inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Termino: Gerente de Vendas
				)
			),
			//Termino: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//Inicio: Gerente de Contas a Pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//Inicio: Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Termino: Supervisor de Pagamntos
						)
					),					
					//Termino: Gerente de Contas a Pagar
					//Inicio: GErente de Compras
					array(
						'nome_cargo'=> 'Gerente de Contas',
						'subordinados'=> array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							//Termino: Supervisor de Suprimentos
						)
					)
					//Tertmino: Gerente de Contas
				)
			)
			//Termino: Diretor Financeiro
		)
	)
);

print_r($hierarquia);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		//$html .= $cargo['subordinados'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){

			echo "ok";

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;
}


echo exibe($hierarquia);


 ?>