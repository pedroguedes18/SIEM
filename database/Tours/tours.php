<?php

  function getAllTours() {
    global $conn;
    $stmt = $conn->prepare('SELECT nome_c, nome_t, duracao, vagas, lotacao, datapartida, custo_tour, linkimg, descricao, linkimgdois, linkimgtres
									          FROM tourcidade
										             JOIN cidade USING(id_cidade)
										             JOIN tour USING(id_tour)');
    $stmt->execute();
    return $stmt->fetchAll();
  }

?>
