<?php
add_action('register_form', 'custom_registration_fields');
function custom_registration_fields(){
    if( isset( $_POST['user_father'] ) ){
        $father = $_POST['user_father'];
    }else{
        $father = '';
    }
    ?>
    <p>
		<label for="father">Father's Name<br>
		<input type="text" name="user_father" id="father" class="input" value="<?php echo $father; ?>" size="20"></label>
	</p>
    <?php  
}

add_action('personal_options_update', 'custom_registration_form_save');
add_action('edit_user_profile_update', 'custom_registration_form_save');
add_action('user_register', 'custom_registration_form_save');
function custom_registration_form_save( $user_id ){
    update_user_meta( $user_id, 'user_father', $_POST['user_father'] );
    update_user_meta( $user_id, 'user_mother', $_POST['user_mother'] );
}

add_action('show_user_profile', 'displayUserCustomData');
add_action('edit_user_profile', 'displayUserCustomData');
function displayUserCustomData( $user ){ ?>
    <h3>Our Custom Info</h3>
    <table class="form-table">
        <tr class="user-description-wrap">
            <th><label for="fathersName">Father's Name:</label></th>
            <td><input name="user_father" value="<?php echo get_user_meta( $user->ID, 'user_father', true ); ?>" id="fathersName" class="regular-text code"></td>
        </tr>
    </table>
<?php
}