<?php

declare(strict_types=1);

namespace Crystal;

include("../init.php");
$Crystal->Auth->checkAuthorization();

if(isset($_POST['field'])){

    $id = $Crystal->Cms->clean_block_id($_POST['id']);
    $type = htmlentities($_POST['type'], ENT_QUOTES);
    $content = $_POST['field'];

    $Crystal->Cms->update_block($id, $content);

    $Crystal->Template->load(APP_PATH . "cms/views/v_saving.php");

} else {

    if(isset($_GET['id']) == FALSE || isset($_GET['type']) == FALSE){
        $Crystal->Template->error();
        exit;
    }

    $id = $Crystal->Cms->clean_block_id($_GET['id']);
    $type = htmlentities($_GET['type'], ENT_QUOTES);

    $content = $Crystal->Cms->load_block($id);

    $Crystal->Template->setData('block_id', $id);
    $Crystal->Template->setData('block_type', $type);
    $Crystal->Template->setData('cms_field', $Crystal->Cms->generate_field($type,$content), false);

    $Crystal->Template->load(APP_PATH . 'cms/views/v_edit.php');

}