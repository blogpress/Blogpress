<?php

include(ROOT_PATH . "/bp-includes/database/db.php");
include(ROOT_PATH . "/bp-includes/helpers/middleware.php");
include(ROOT_PATH . "/bp-includes/helpers/validateTopic.php");

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Topics New</h4>Topic created successfully.</div>';
        $_SESSION['type'] = 'success';
        header('location: ' . ADMIN_URL . '/index.php?posts=topics');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="far fa-trash-alt"></i> Topic Delete</h4>Topic deleted successfully.</div>';
    $_SESSION['type'] = 'success';
    header('location: ' . ADMIN_URL . '/index.php?posts=topics');
    exit();
}


if (isset($_POST['update-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fas fa-highlighter"></i> Topics Updated</h4>Topic updated successfully.</div>';
        $_SESSION['type'] = 'success';
        header('location: ' . ADMIN_URL . '/index.php?posts=topics');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}
