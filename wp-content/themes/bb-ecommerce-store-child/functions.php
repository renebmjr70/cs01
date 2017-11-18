<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url_site = esc_url( home_url( '/'  ) );

function produtos_abril_init() {
	global $woocommerce, $post;

    $args = array(
		'labels' => array(
				'name'                  => __( 'Produtos Abril', 'woocommerce' ),
				'singular_name'         => __( 'Produto Abril', 'woocommerce' ),
				'all_items'             => __( 'Todos os Produtos', 'woocommerce' ),
				'menu_name'             => _x( 'Produtos Abril', 'Admin menu name', 'woocommerce' ),
				'add_new'               => __( 'Add New', 'woocommerce' ),
				'add_new_item'          => __( 'Add new product', 'woocommerce' ),
				'edit'                  => __( 'Edit', 'woocommerce' ),
				'edit_item'             => __( 'Edit product', 'woocommerce' ),
				'new_item'              => __( 'New product', 'woocommerce' ),
				'view'                  => __( 'View product', 'woocommerce' ),
				'view_item'             => __( 'View product', 'woocommerce' ),
				'search_items'          => __( 'Search products', 'woocommerce' ),
				'not_found'             => __( 'No products found', 'woocommerce' ),
				'not_found_in_trash'    => __( 'No products found in trash', 'woocommerce' ),
				'parent'                => __( 'Parent product', 'woocommerce' ),
				'featured_image'        => __( 'Product image', 'woocommerce' ),
				'set_featured_image'    => __( 'Set product image', 'woocommerce' ),
				'remove_featured_image' => __( 'Remove product image', 'woocommerce' ),
				'use_featured_image'    => __( 'Use as product image', 'woocommerce' ),
				'insert_into_item'      => __( 'Insert into product', 'woocommerce' ),
				'uploaded_to_this_item' => __( 'Uploaded to this product', 'woocommerce' ),
				'filter_items_list'     => __( 'Filter products', 'woocommerce' ),
				'items_list_navigation' => __( 'Products navigation', 'woocommerce' ),
				'items_list'            => __( 'Products list', 'woocommerce' ),
            ),     
        'description'         => __( 'This is where you can add new products to your store.', 'woocommerce' ), 	
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'map_meta_cap'        => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'produtos_abril'),
        'query_var' => true,
        'exclude_from_search' => true,
        'supports' => array('title',),
        'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'has_archive'         => false,
        );
    register_post_type( 'produtos_abril', $args );
}
add_action( 'init', 'produtos_abril_init' );



function pedidos_abril_init() {
	global $woocommerce, $post;

    $args = array(
		'labels'              => array(
				'name'                  => __( 'Pedidos Abril', 'woocommerce' ),
				'singular_name'         => _x( 'Pedido Abril', 'shop_order post type singular name', 'woocommerce' ),
				'add_new'               => __( 'Add order', 'woocommerce' ),
				'add_new_item'          => __( 'Add new order', 'woocommerce' ),
				'edit'                  => __( 'Edit', 'woocommerce' ),
				'edit_item'             => __( 'Edit order', 'woocommerce' ),
				'new_item'              => __( 'New order', 'woocommerce' ),
				'view'                  => __( 'View order', 'woocommerce' ),
				'view_item'             => __( 'View order', 'woocommerce' ),
				'search_items'          => __( 'Search orders', 'woocommerce' ),
				'not_found'             => __( 'No orders found', 'woocommerce' ),
				'not_found_in_trash'    => __( 'No orders found in trash', 'woocommerce' ),
				'parent'                => __( 'Parent orders', 'woocommerce' ),
				'menu_name'             => _x( 'Pedidos Abril', 'Admin menu name', 'woocommerce' ),
				'filter_items_list'     => __( 'Filter orders', 'woocommerce' ),
				'items_list_navigation' => __( 'Orders navigation', 'woocommerce' ),
				'items_list'            => __( 'Orders list', 'woocommerce' ),
			),
		'description'         => __( 'This is where store orders are stored.', 'woocommerce' ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'map_meta_cap'        => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'pedidos_abril'),
        'query_var' => true,
        'exclude_from_search' => true,
        'supports' => array('slug',),
        'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'has_archive'         => false,
        );
    register_post_type( 'pedidos_abril', $args );
}
add_action( 'init', 'pedidos_abril_init' );

function usuarios_abril_init() {
	global $woocommerce, $post, $user;

    $args = array(
		'labels'              => array(
				'name'                  => __( 'Clientes Abril', 'woocommerce' ),
				'singular_name'         => _x( 'Cliente Abril', 'woocommerce' ),
				'add_new'               => __( 'Adicionar cliente', 'woocommerce' ),
				'add_new_item'          => __( 'Adicionar novo cliente', 'woocommerce' ),
			),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'map_meta_cap'        => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'usuarios_abril'),
        'query_var' => true,
        'exclude_from_search' => true,
        'supports' => array('title',),
        'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'has_archive'         => false,
        );
    register_post_type( 'usuarios_abril', $args );
}
add_action( 'init', 'usuarios_abril_init' );

add_filter( 'manage_produtos_abril_posts_columns', 'set_custom_edit_produtos_abril_columns' );
function set_custom_edit_produtos_abril_columns($columns) {
	unset($columns['title']);
	unset($columns['date']);


    $columns['produtos_abril_nome'] = __( 'Nome' );
    $columns['produtos_abril_preco'] = __( 'Preço' );
    $columns['produtos_abril_estoque'] = __( 'Estoque' );

    return $columns;
}

add_filter( 'manage_usuarios_abril_posts_columns', 'set_custom_edit_usuarios_abril_columns' );
function set_custom_edit_usuarios_abril_columns($columns) {
	unset($columns['title']);
	unset($columns['date']);


    $columns['usuarios_abril_nome'] = __( 'Nome' );
    $columns['usuarios_abril_email'] = __( 'E-mail' );
    $columns['usuarios_abril_telefone'] = __( 'Telefone' );
    $columns['usuarios_abril_pedidos'] = __( 'Pedidos' );

    return $columns;
}

add_filter( 'manage_pedidos_abril_posts_columns', 'set_custom_edit_pedidos_abril_columns' );
function set_custom_edit_pedidos_abril_columns($columns) {
	unset($columns['title']);
	unset($columns['date']);


    $columns['pedidos_abril_id'] = __( 'ID' );
    $columns['pedidos_abril_cliente'] = __( 'Cliente' );
    $columns['pedidos_abril_produtos'] = __( 'Produtos' );
    $columns['pedidos_abril_qtdprodutos'] = __( 'Qtd. Produtos' );
    $columns['pedidos_abril_valortotalprodutos'] = __( 'Valor Total Pedido' );

    return $columns;
}

add_action( 'manage_produtos_abril_posts_custom_column' , 'custom_produtos_abril_column', 10, 2 );
function custom_produtos_abril_column( $column, $post_id ) {
	global $post, $wpdb;

    switch ( $column ) {



        case 'produtos_abril_nome' :
        	$nome = get_the_title();
        	if(is_string($nome)){
        		the_title();	
        	} else {
        		_e( 'Unable to get Nome' );	
        	}
            break;

        case 'produtos_abril_preco' :
        	$preco = get_field('preco-produto-abril',$post_id,true);
        	
        	if(is_numeric($preco)){
        		echo "R$ $preco";
        	} else {
        		_e( 'Unable to get Preço' );	
        	}
            break;

        case 'produtos_abril_estoque' :
        	$estoque = get_field('estoque-produto-abril',$post_id,true);
        	
        	if(is_numeric($estoque) && $estoque > 0){
        		echo "$estoque";
        	} elseif (is_numeric($estoque) && $estoque == 0) {
        		echo "<p id='estoque_esgotado' class='estoque-esgotado' style='color: red !important;'>ESGOTADO</p>";
        	} else {
        		_e( 'Unable to get Estoque' );	
        	}

            break;
    }
}

add_action( 'manage_usuarios_abril_posts_custom_column' , 'custom_usuarios_abril_column', 10, 2 );
function custom_usuarios_abril_column( $column, $post_id ) {
	global $post, $wpdb, $user;

    switch ( $column ) {



        case 'usuarios_abril_nome' :
        	$nome = get_the_title();
        	if(is_string($nome)){
        		the_title();	
        	} else {
        		_e( 'Unable to get Nome' );	
        	}
            break;

        case 'usuarios_abril_email' :
        	$email = get_field('email-usuario-abril',$post_id,true);
        	
        	if(is_string($email)){
        		echo "$email";
        	} else {
        		_e( 'Unable to get E-mail' );	
        	}
            break;

        case 'usuarios_abril_telefone' :
        	$telefone = get_field('telefone-usuario-abril',$post_id,true);
        	
        	if(!empty($telefone)){
        		echo "$telefone";
        	} else {
        		_e( 'Unable to get Telefone' );	
        	}
            break;


        case 'usuarios_abril_pedidos' :
        	$sql = "SELECT
					pusr.ID,
					(
						SELECT
							COUNT(pmm.meta_id)
						FROM
							wpcs01_postmeta AS pmm
						WHERE
							(
								pmm.meta_key = 'pedido-abril-cliente'
								AND pmm.meta_value = pusr.ID
							)
					) AS qtdped
				FROM
					wpcs01_posts AS pusr
				WHERE
					pusr.post_type = 'usuarios_abril'
				AND pusr.post_status = 'publish'
				AND pusr.ID = $post_id";

			@$pedidos = $wpdb->get_results( ($sql));

			if(is_numeric($pedidos[0]->qtdped)){
				echo "<p>";
				echo ($pedidos[0]->qtdped);
				echo "</p>";
			} else {
				_e( 'Unable to get Pedidos' );
			}
            break;

    }
}

add_action( 'manage_pedidos_abril_posts_custom_column' , 'custom_pedidos_abril_column', 10, 2 );
function custom_pedidos_abril_column( $column, $post_id ) {
	global $post, $wpdb, $user;

    switch ( $column ) {



        case 'pedidos_abril_id' :
        	if(is_numeric($post_id)){
        		echo $post_id;	
        	} else {
        		_e( 'Unable to get ID' );	
        	}
            break;

        case 'pedidos_abril_cliente' :
        	$pedidocliente = get_field('pedido-abril-cliente',$post_id,true);
        	
  	
        	if(!empty($pedidocliente)){
			 	echo "<p>";
				echo($pedidocliente->post_title);
				echo "</p>";     
        		
        	} else {
        		_e( 'Unable to get Cliente' );	
        	}
            break;

        case 'pedidos_abril_produtos' :
        	$pedidoprodutos = get_field('produtos-pedido-abril',$post_id,true);
        	
        	if(is_array($pedidoprodutos)){
        		foreach ( $pedidoprodutos as $produtospedido ) {
        			echo "<p>";
        			echo $produtospedido->post_title;
        			echo "</p>";
        		}
        	} else {
        		_e( 'Unable to get Lista de Produtos do Pedido' );	
        	}
            break;

        case 'pedidos_abril_qtdprodutos' :
        	$pedidoqtdprodutos = get_field('produtos-pedido-abril',$post_id,true);

        	$qtdprodutos = count($pedidoqtdprodutos);

        	echo "<p>$qtdprodutos</p>";
        	
            break;

        case 'pedidos_abril_valortotalprodutos' :
        	$pedidoqtdprodutos = get_field('produtos-pedido-abril',$post_id,true);
			
			if(is_array($pedidoqtdprodutos)){
        		foreach ( $pedidoqtdprodutos as $produtospedido ) {
        			$produtoID 		= $produtospedido->ID;
        			$produtoVlr 	= get_field('preco-produto-abril',$produtoID,true);
        			$produtoVlr		+= $produtoVlr;
        		}
        		echo "<p>R$: $produtoVlr</p>";
        	} else {
        		_e( 'Unable to get Total do Pedido' );	
        	}
        	
            break;
    }
}


function profileGen(){
	global $wp_query, $wpdb, $post, $woocommerce;

	$uniqid = uniqid('prefGen',23);
	$path 	= $_SERVER['DOCUMENT_ROOT'];


	echo "uniqid: ".$uniqid."<br>";
	echo "path: ".$path."<br>"; // /home/renebmjr/htdocs/web
	
	$wp_query->in_the_loop = true; // Fake being in the loop.
	
	$sql = "SELECT
				pst.*
			FROM
				wpcs01_posts AS pst
			WHERE
				pst.post_type = 'shop_order'
			AND pst.post_status = 'wc-completed'
			ORDER BY
				pst.ID DESC";
	@$novos = $wpdb->get_results( ($sql));

	foreach ( $novos as $listaGerNew ) {
		setup_postdata( $listaGerNew );

		$_billing_persontype 	= get_field('_billing_persontype',$listaGerNew->ID);
		$_billing_cpf 			= get_field('_billing_cpf',$listaGerNew->ID);
		$_billing_cnpj			= get_field('_billing_cnpj',$listaGerNew->ID);
		$_uniqidprefGen			= get_field('_uniqidprefGen',$listaGerNew->ID);
		$_order_key				= get_field('_order_key',$listaGerNew->ID);

		$newdir 	= $path.'/prefGen/'.$_order_key;
		$templdir 	= $path.'/prefGen/wordpress/*';

		$db_templ	= $path.'/prefGen/sqldump/renebmjr01_template.sql';


		if (!is_dir($newdir)) {
			mkdir($newdir);

			//system("cp -r $templdir $newdir");

			$fname 	 = $db_templ;
			$fhandle = fopen($fname,"r");
			$content = fread($fhandle,filesize($fname));
			
			$content = str_replace("wpcstemplate", "wpcs_".$_order_key, $content);

			//$fhandle = fopen($fname,"w");
			//fwrite($fhandle,$content);
			
			echo "<pre>";
			echo $content;
			echo "</pre><hr>";

			fclose($fhandle);

			//echo "newdir: $newdir<br>";

			
		}

		// echo "_billing_persontype: $_billing_persontype<br>";
		// echo "_billing_cpf: $_billing_cpf<br>";
		// echo "_billing_cnpj: $_billing_cnpj<br>";
		// echo "_uniqidprefGen: $_uniqidprefGen<br>";
		// echo "_order_key: $_order_key<br>";
		


		/*echo "<pre>";
		print_r($listaGerNew);
		echo "</pre><hr>";*/
	}
}
//profileGen();
?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	console.clear();

	// - GLOBALS 
	//-------------------------------------------

	var w 			 			= window.innerWidth;
	var url_site 	 			= '<?php echo($url_site);?>';
	

	//- IE FIX
	//-------------------------------------------------

	(function msiedetection() {
		var ie = window.navigator.userAgent.indexOf("MSIE ")
		// If Internet Explorer, return true
		if (ie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  {
			document.querySelector('html').classList.add('ie');
		}
		// If another browser, return false
		else  {
			console.log('thank you for not using ie');
		}	
	})();


	//- FIREFOX FIX 
	//-------------------------------------------------

	if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
		document.querySelector('html').classList.add('firefox');
	}

	$(document).ready(function(){
		var post_type 	= $('#post_type').val();

		if(post_type == 'pedidos_abril'){
			var original_post_status 	= $('#original_post_status').val();

			if(original_post_status == 'auto-draft' || original_post_status == 'publish'){
				var originalaction 			= $('#originalaction').val();
				var action 					= $('#hiddenaction').val();
				
				if(action == 'editpost' && originalaction == 'editpost'){
					var post_ID 	 			= $('#post_ID').val();		
					var submit_btn 				= $('#publish').val();
					var pedidoprodutosatual 	= $('#acf-field-produtos-pedido-abril').val();

					$('#publish').click(function() {
						var pedido_abril_cliente 	= $('#acf-field-pedido-abril-cliente').val();
						var selectedValues		 	= $('#acf-field-produtos-pedido-abril').val();

						var url_ajax				=  url_site+'wp-content/themes/bb-ecommerce-store-child/ajaxcmdr.php';


						
						// console.log('w: '+w);
						// console.log('url_site: '+url_site);		
						// console.log('post_type: '+post_type);
						// console.log('post_ID: '+post_ID);
						// console.log('originalaction: '+originalaction);
						// console.log('action: '+action);		
						// console.log('original_post_status: '+original_post_status);
						// console.log('submit_btn: '+submit_btn);
						// console.log('pedido_abril_cliente: '+pedido_abril_cliente);
						// console.log('selectedValues: '+selectedValues);
						// console.log('url_ajax: '+url_ajax);
						// console.log('pedidoprodutosatual: '+pedidoprodutosatual);
						

						$.ajax({
							url: url_ajax,
							data: {
								pedidoprodutosatual: pedidoprodutosatual,
								selectedValues: selectedValues,
								post_ID: post_ID,
								action: "ajaxAtualizaEstoqueProduto"
							},
							type: 'GET',
							success: function(data) {		
								//console.log('data_success: '+data);
							},
							beforeSend: function() {    
								//activateLoad();
							},
							error: function(err){
								//console.log(err);
							}
						});		

					});
				}
			}
		}


	});

	
</script>    