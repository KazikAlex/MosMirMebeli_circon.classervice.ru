<?php

// добавление возможности использования метабоксов в записях

/*
 * Этап 1. Добавление
 */
function tr_meta_boxes() {
	add_meta_box('truediv','Параметры товара','tr_echo_box','post','normal','high');
}
add_action( 'admin_menu', 'tr_meta_boxes' );
 
/*
 * Этап 2. Заполнение
 */
function tr_echo_box($post) {
	wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
	$price = get_post_meta($post->ID, 'price',true);
	// $old_price = get_post_meta($post->ID, 'old_price',true);
	$size = get_post_meta($post->ID, 'size',true);
	$facade = get_post_meta($post->ID, 'facade',true);
	$corpus = get_post_meta($post->ID, 'corpus',true);
	$toptable = get_post_meta($post->ID, 'toptable',true);
	$descr = get_post_meta($post->ID, 'descr',true);
	// $spec = get_post_meta($post->ID, 'spec',true);
	// $noindex = get_post_meta($post->ID, '_seo_noindex',true); 
	?> 
	<label>Цена<br /> <input type="text" name="price" value="<?php echo $price ?>" /> </label><br>
	<!-- <label>Старая цена<br /> <input type="text" name="old_price" value="<?php echo $old_price ?>" /> </label><br> -->
	<label>Размер<br /> <input type="text" name="size" value="<?php echo $size ?>" /> </label><br>
	<label>Материал фасада<br /> <input type="text" name="facade" value="<?php echo $facade ?>" /> </label><br>
	<label>Материал корпуса<br /> <input type="text" name="corpus" value="<?php echo $corpus ?>" /> </label><br>
	<label>Столешница<br /> <input type="text" name="toptable" value="<?php echo $toptable ?>" /> </label><br>
	<label>Фурнитура<br /> <input type="text" name="descr" value="<?php echo $descr ?>" /> </label><br>
	<!-- <label>Характеристики<br /> <textarea style="width: 1000px;" type="text" name="spec" value="<?php echo $spec ?>" /> </textarea></label><br> -->
	
	<!-- <label> <input type="checkbox" name="noindex" checked="checked" /> /> Скрыть запись от поисковиков? </label> -->
<?php
}
 
/*
 * Этап 3. Сохранение
 */
function tr_save_box( $post_id ) {
	// проверяем, пришёл ли запрос со страницы с метабоксом
	if ( !isset( $_POST['seo_metabox_nonce'] )
	|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
        return $post_id;
	// проверяем, является ли запрос автосохранением
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	// проверяем, права пользователя, может ли он редактировать записи
	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	// теперь также проверим тип записи	
	$post = get_post($post_id);
	if ($post->post_type == 'post') { // укажите собственный
		update_post_meta($post_id,'price',esc_attr($_POST['price']));   
		// update_post_meta($post_id,'old_price',esc_attr($_POST['old_price']));  
		update_post_meta($post_id,'size',esc_attr($_POST['size']));   
		update_post_meta($post_id,'facade',esc_attr($_POST['facade']));  
		update_post_meta($post_id,'corpus',esc_attr($_POST['corpus']));
		update_post_meta($post_id,'toptable',esc_attr($_POST['toptable']));    
		update_post_meta($post_id,'descr',esc_attr($_POST['descr']));  
		// update_post_meta($post_id,'',esc_attr($_POST['']));  
		// update_post_meta($post_id,'_seo_noindex', $_POST['noindex']);
	}
	return $post_id;
}
 
add_action('save_post','tr_save_box');


// добавление возможности использования метабоксов в КОНТАКТАХ

function contact_meta_boxes() {
	add_meta_box('contactMetabox','Контакты','contact_echo_box','contact','normal','high');
}
add_action( 'admin_menu', 'contact_meta_boxes' );
 
/*
 * Этап 2. Заполнение
 */
function contact_echo_box($post) {
	wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
	$adr = get_post_meta($post->ID, 'adr', true);
	$adrsaloon = get_post_meta($post->ID, 'adrsaloon', true);
	$destsaloon = get_post_meta($post->ID, 'destsaloon', true);
	$office = get_post_meta($post->ID, 'office', true);
	$times = get_post_meta($post->ID, 'times', true);
	$telcall = get_post_meta($post->ID, 'telcall', true);
	$calltime = get_post_meta($post->ID, 'calltime', true);
	$tel = get_post_meta($post->ID, 'tel', true);
	$telmess = get_post_meta($post->ID, 'telmess', true);
	// $legaladr = get_post_meta($post->ID, 'legaladr', true);
	$usermail = get_post_meta($post->ID, 'usermail', true);
	$reg = get_post_meta($post->ID, 'reg', true);
	$inn = get_post_meta($post->ID, 'inn', true);
	$ogrn = get_post_meta($post->ID, 'ogrn', true);
	$instagram = get_post_meta($post->ID, 'instagram', true);
	$youtube = get_post_meta($post->ID, 'youtube', true);
	// $noindex = get_post_meta($post->ID, '_seo_noindex',true); 
	?> 
	<label>Адрес<br /> <input style="width: 400px;" type="text" name="adr" value="<?php echo $adr ?>" /> </label><br>
	<label>Основной салон<br /> <input style="width: 400px;" type="text" name="adrsaloon" value="<?php echo $adrsaloon ?>" /> </label><br>
	<label>Основной салон (как найти)<br /> <input  style="width: 800px;" type="text" name="destsaloon" value="<?php echo $destsaloon ?>" /> </label><br>
	<label>Офис<br /> <input style="width: 400px;" type="text" name="office" value="<?php echo $office ?>" /> </label><br>
	<label>Режим работы<br /> <input type="text" name="times" value="<?php echo $times ?>" /> </label><br>
	<label>Телефон колл-центра<br /> <input type="text" name="telcall" value="<?php echo $telcall ?>" /> </label><br>
	<label>Работа колл-центра<br /> <input type="text" name="calltime" value="<?php echo $calltime ?>" /> </label><br>
	<label>Телефон<br /> <input type="text" name="tel" value="<?php echo $tel ?>" /> </label><br>
	<label>Телефон для мессенджеров<br /> <input type="text" name="telmess" value="<?php echo $telmess ?>" /> </label><br>
	<label>E-mail<br /> <input style="width: 250px;" type="text" name="usermail" value="<?php echo $usermail ?>" /></label><br>
	<label>Юр.лицо<br /> <input type="text" name="reg" value="<?php echo $reg ?>" /> </label><br>
	<label>ИНН<br /> <input type="text" name="inn" value="<?php echo $inn ?>" /> </label><br>
	<label>ОГРН<br /> <input type="text" name="ogrn" value="<?php echo $ogrn ?>" /> </label><br>
	<label>Ссылка на инстаграмм<br /> <input style="width: 500px;" type="text" name="instagram" value="<?php echo $instagram ?>" /> </label><br>
	<label>Ссылка на YouTube<br /> <input style="width: 600px;" type="text" name="youtube" value="<?php echo $youtube ?>" /> </label><br>
	
	<!-- <label> <input type="checkbox" name="noindex" checked="checked" /> /> Скрыть запись от поисковиков? </label> -->
<?php
}
 
/*
 * Этап 3. Сохранение
 */
function contact_save_box( $post_id ) {
	// проверяем, пришёл ли запрос со страницы с метабоксом
	if ( !isset( $_POST['seo_metabox_nonce'] )
	|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
        return $post_id;
	// проверяем, является ли запрос автосохранением
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	// проверяем, права пользователя, может ли он редактировать записи
	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	// теперь также проверим тип записи	
	$post = get_post($post_id);
	if ($post->post_type == 'contact') { // укажите собственный
		update_post_meta($post_id,'adr',esc_attr($_POST['adr']));   
		// update_post_meta($post_id,'timew',esc_attr($_POST['timew']));
		update_post_meta($post_id,'adrsaloon',esc_attr($_POST['adrsaloon']));   
		update_post_meta($post_id,'destsaloon',esc_attr($_POST['destsaloon']));
		update_post_meta($post_id,'office',esc_attr($_POST['office']));
		update_post_meta($post_id,'times',esc_attr($_POST['times']));    
		update_post_meta($post_id,'telcall',esc_attr($_POST['telcall']));
		update_post_meta($post_id,'calltime',esc_attr($_POST['calltime'])); 
		update_post_meta($post_id,'tel',esc_attr($_POST['tel']));  
		update_post_meta($post_id,'telmess',esc_attr($_POST['telmess']));
		update_post_meta($post_id,'usermail',esc_attr($_POST['usermail']));
		update_post_meta($post_id,'reg',esc_attr($_POST['reg'])); 
		update_post_meta($post_id,'inn',esc_attr($_POST['inn'])); 
		update_post_meta($post_id,'ogrn',esc_attr($_POST['ogrn']));
		update_post_meta($post_id,'instagram',esc_attr($_POST['instagram']));
		update_post_meta($post_id,'youtube',esc_attr($_POST['youtube']));
		// update_post_meta($post_id,'_seo_noindex', $_POST['noindex']);
	}
	return $post_id;
}
 
add_action('save_post','contact_save_box');



// добавление возможности использования метабоксов в Материалах фасадов

function facade_meta_boxes() {
	add_meta_box('facadeMetabox','Фасады','facade_echo_box','facade','normal','high');
}
add_action( 'admin_menu', 'facade_meta_boxes' );
 
/*
 * Этап 2. Заполнение
 */
function facade_echo_box($post) {
	wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
		$facadeprice = get_post_meta($post->ID, 'facadeprice', true);
		$facadetime = get_post_meta($post->ID, 'facadetime', true);
		$facadefrezer = get_post_meta($post->ID, 'facadefrezer', true);
	?> 
	<label>Цена за погонный метр<br /> <input type="text" name="facadeprice" value="<?php echo $facadeprice ?>" /> </label><br>
	<label>Срок изготовления, рабочих дней<br /> <input type="text" name="facadetime" value="<?php echo $facadetime ?>" /> </label><br>
	<label>Фрезеровка (+/-)<br /> <input type="text" name="facadefrezer" value="<?php echo $facadefrezer ?>" /> </label><br>
<?php
}
 
/*
 * Этап 3. Сохранение
 */
function facade_save_box( $post_id ) {
	// проверяем, пришёл ли запрос со страницы с метабоксом
	if ( !isset( $_POST['seo_metabox_nonce'] )
	|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
        return $post_id;
	// проверяем, является ли запрос автосохранением
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	// проверяем, права пользователя, может ли он редактировать записи
	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	// теперь также проверим тип записи	
	$post = get_post($post_id);
	if ($post->post_type == 'facade') { // укажите собственный
		update_post_meta($post_id,'facadeprice',esc_attr($_POST['facadeprice']));   
		update_post_meta($post_id,'facadetime',esc_attr($_POST['facadetime']));
		update_post_meta($post_id,'facadefrezer',esc_attr($_POST['facadefrezer']));   

	}
	return $post_id;
}
 
add_action('save_post','facade_save_box');




?>
