<?php

    function newHistoric($titulo_historico, $acao, $cliente, $recrutador, $recrutador_anterior){
        $current_user = wp_get_current_user();
        $user_logged = $current_user->user_login;

        $new_historico = array(
            'post_title' => $titulo_historico,
            'post_type' => 'historico',
            'post_status' => 'publish'
        );


        $historico_id = wp_insert_post($new_historico);

        update_post_meta($historico_id, 'h_usuario', $user_logged);
        update_post_meta($historico_id, 'h_acao', $acao);
        update_post_meta($historico_id, 'h_cliente', $cliente);
        update_post_meta($historico_id, 'h_recrutador', $recrutador);
        update_post_meta($historico_id, 'h_antigo_recrutador', $recrutador_anterior);

        // FIM DO LOG DO HISTÓRICO

    }
