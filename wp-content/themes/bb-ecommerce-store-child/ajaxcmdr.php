<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

global $post, $wpdb, $user;

if ( isset( $_GET['action'] )  && isset( $_GET['selectedValues']) && isset( $_GET['post_ID'] ) ) {
	$action = $_GET['action'];

	switch ($action) {
		case 'ajaxAtualizaEstoqueProduto':
			$selectedValues = $_GET['selectedValues'];

			if(isset($_GET['pedidoprodutosatual'])){
				$pedidoprodutosatual = $_GET['pedidoprodutosatual'];

				$result = array_diff($selectedValues,$pedidoprodutosatual);

				
				if(!empty($result)){
					foreach ( $result as $rss ) {
						
						$estoque = get_field('estoque-produto-abril',$rss,true);					
						
						$estoque--;

						if($estoque < 0){
							$estoque = (int)(0);
						}						
	

						update_field( 'estoque-produto-abril', $estoque, $rss );
					}
				}

				$result2 = array_diff($pedidoprodutosatual,$selectedValues);


				if(!empty($result2)){
					foreach ( $result2 as $rss2 ) {
					
						
						$estoque2 = get_field('estoque-produto-abril',$rss2,true);


						$estoque2++;


						update_field( 'estoque-produto-abril', $estoque2, $rss2 );
					}
				}
		
			} 

	



		break;
		
		default:
			break;
	}	
}
?>