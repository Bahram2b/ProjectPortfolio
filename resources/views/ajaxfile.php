<?php
include 'config.php';

$request = 1;
if(isset($_POST['request'])){
    $request = $_POST['request'];
}

// DataTable data
if($request == 1){
    ## Read value
    $draw = $_POST['draw'];
    $row = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
    $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = $_POST['columns'][$columnIndex]['data']; // Column title
    $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc

    $searchValue = mysqli_escape_string($con,$_POST['search']['value']); // Search value

    ## Search
    $searchQuery = " ";
    if($searchValue != ''){
        $searchQuery = " and (title like '%".$searchValue."%' ";
    }

    ## Total number of records without filtering
    $sel = mysqli_query($con,"select count(*) as allcount from photos");
    $records = mysqli_fetch_assoc($sel);
    $totalRecords = $records['allcount'];

    ## Total number of records with filtering
    $sel = mysqli_query($con,"select count(*) as allcount from photos WHERE 1 ".$searchQuery);
    $records = mysqli_fetch_assoc($sel);
    $totalRecordwithFilter = $records['allcount'];

    ## Fetch records
    $empQuery = "select * from photos WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
    $empRecords = mysqli_query($con, $empQuery);
    $data = array();

    while ($row = mysqli_fetch_assoc($empRecords)) {

        // Update Button
        $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row['id']."' data-toggle='modal' data-target='#updateModal' >Update</button>";

        // Delete Button
        $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$row['id']."'>Delete</button>";

        $action = $updateButton." ".$deleteButton;

        $data[] = array(
                "title" => $row['title'],
                "category" => $row['category'],
                "action" => $action
            );
    }

    ## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    echo json_encode($response);
    exit;
}

// Fetch user details
if($request == 2){
    $id = 0;

    if(isset($_POST['id'])){
        $id = mysqli_escape_string($con,$_POST['id']);
    }

    $record = mysqli_query($con,"SELECT * FROM photos WHERE id=".$id);

    $response = array();

    if(mysqli_num_rows($record) > 0){
        $row = mysqli_fetch_assoc($record);
        $response = array(
            "title" => $row['title'],
            "category" => $row['category'],
        );

        echo json_encode( array("status" => 1,"data" => $response) );
        exit;
    }else{
        echo json_encode( array("status" => 0) );
        exit;
    }
}

// Update user
if($request == 3){
    $id = 0;

    if(isset($_POST['id'])){
        $id = mysqli_escape_string($con,$_POST['id']);
    }

    // Check id
    $record = mysqli_query($con,"SELECT id FROM photos WHERE id=".$id);
    if(mysqli_num_rows($record) > 0){

        $title = mysqli_escape_string($con,trim($_POST['title']));
        $category = mysqli_escape_string($con,trim($_POST['category']));

        if( $title != '' && $category != ''){

            mysqli_query($con,"UPDATE photos SET title='".$title."',category='".$category."' WHERE id=".$id);

            echo json_encode( array("status" => 1,"message" => "Record updated.") );
            exit;
        }else{
            echo json_encode( array("status" => 0,"message" => "Please fill all fields.") );
            exit;
        }

    }else{
        echo json_encode( array("status" => 0,"message" => "Invalid ID.") );
        exit;
    }
}

// Delete User
if($request == 4){
    $id = 0;

    if(isset($_POST['id'])){
        $id = mysqli_escape_string($con,$_POST['id']);
    }

    // Check id
    $record = mysqli_query($con,"SELECT id FROM photos WHERE id=".$id);
    if(mysqli_num_rows($record) > 0){

        mysqli_query($con,"DELETE FROM photos WHERE id=".$id);

        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }
}
