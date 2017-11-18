<?php
// carregamos o core do wordpress
require_once( 'wp-load.php' );

global $wpdb, $woocommerce, $post, $user;

if ( isset( $_GET['action']) && isset( $_GET['selectedValues']) && isset( $_GET['post_id'] ) ) {
	$action 		= $_GET['action'];
	$selectedValues = $_GET['selectedValues'];
	$post_id 		= $_GET['post_id'];

	$listasel 		= explode(',', $selectedValues);

	
	echo "<pre>";
	print_r($listasel);
	echo "</pre><hr>";
	

	$pedidoprodutosatual = get_field('produtos-pedido-abril',$post_id,true);

	foreach ( $pedidoprodutosatual as $lista ) {
		//echo "<pre>";
		//print_r($lista);
		//echo "</pre>";	

		$pLID[] = $lista->ID;

		$estoque = get_field('estoque-produto-abril',$lista->ID,true);
		echo "estoque: $estoque<br>";
	}

	echo "<pre>";
	print_r($pLID);
	echo "</pre><hr>";
	
	$result = array_diff($listasel,$pLID);

	echo "<pre>";
	print_r($result);
	echo "</pre><hr>";

	$result2 = array_diff($pLID,$listasel);

	echo "<pre>";
	print_r($result2);
	echo "</pre><hr>";	
} else {
	echo "no way...";
}

echo "action: $action<br>";
echo "selectedValues: $selectedValues<br>";
echo "post_id: $post_id<br>";

?>