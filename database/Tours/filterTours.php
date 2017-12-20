<?php

function FilterData($cidade_req,$price_req,$viajantes_req,$order_req){

    global $conn;

    if($cidade_req != 'anycity' && $order_req != 'anyorder'){

			if($price_req != 'Maximum Price' && $viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
                  						  FROM tourcidade
                  							   JOIN cidade USING(id_cidade)
                  							   JOIN tour USING(id_tour)
                  						  WHERE nome_c = '".$cidade_req."' AND
                  								custo_tour <= '".$price_req."' AND
                  								lotacao >= '".$viajantes_req."'
                  						  ORDER BY ".$order_req."");
			}
			else if($price_req != 'Maximum Price'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."' AND
								custo_tour <= '".$price_req."'
						  ORDER BY ".$order_req."");
			}
			else if($viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."' AND
								lotacao >= '".$viajantes_req."'
						  ORDER BY ".$order_req."");
			}
			else {
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."'
						  ORDER BY ".$order_req."");
			}
		}

		if($cidade_req == 'anycity' && $order_req != 'anyorder'){

			if($price_req != 'Maximum Price' && $viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								custo_tour <= '".$price_req."' AND
								lotacao >= '".$viajantes_req."'
						  ORDER BY ".$order_req."");
			}
			else if($price_req != 'Maximum Price'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								custo_tour <= '".$price_req."'
						  ORDER BY ".$order_req."");
			}
			else if($viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								lotacao >= '".$viajantes_req."'
						  ORDER BY ".$order_req."");
			}
			else {
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  ORDER BY ".$order_req."");
			}
		}

		if($cidade_req != 'anycity' && $order_req == 'anyorder'){

			if($price_req != 'Maximum Price' && $viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."' AND
								custo_tour <= '".$price_req."' AND
								lotacao >= '".$viajantes_req."'");
			}
			else if($price_req != 'Maximum Price'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."' AND
								custo_tour <= '".$price_req."'");
			}
			else if($viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."' AND
								lotacao >= '".$viajantes_req."'");
			}
			else {
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE nome_c = '".$cidade_req."'");
			}
		}

		if($cidade_req == 'anycity' && $order_req == 'anyorder'){

			if($price_req != 'Maximum Price' && $viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								custo_tour <= '".$price_req."' AND
								lotacao >= '".$viajantes_req."'");
			}
			else if($price_req != 'Maximum Price'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								custo_tour <= '".$price_req."'");
			}
			else if($viajantes_req != 'Travelers'){
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)
						  WHERE
								lotacao >= '".$viajantes_req."'");
			}
			else {
				$stmt = $conn->prepare ("SELECT nome_c, nome_t, duracao, vagas, lotacao, TO_CHAR(datapartida,'DD/MM/YYYY') AS date_p, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
						  FROM tourcidade
							   JOIN cidade USING(id_cidade)
							   JOIN tour USING(id_tour)");
			}
		}

    $stmt->execute();
    return $stmt->fetchAll();
}
?>
