<?php 
require_once("../conn.php");

if ( isset($_GET['page']) && !empty($_GET['page']) )
{
    $page =  $_GET['page']; 
    //classes
    if ($page=="addClass") {
        require_once('classes/add.php');
    } else if ($page=="classes") {
        require_once('classes/index.php');
    } else if ($page=="insertClass") {
        require_once("classes/insert.php");
    } else if ($page == "deleteClass") {
        require_once("classes/delete.php");    
    } elseif ($page == "editClass") {
        require_once("classes/edit.php");
    } elseif ($page == "updateClass.php") {
        require_once("classes/update.php");
    }
    //subjects
    else if ($page == "addSubject") {
        require_once("subjects/add.php");
    } else if ($page == "insertSubject") {
        require_once("subjects/insert.php");
    } else if ($page == "subjects") {
        require_once("subjects/index.php");
    } else if ($page == "deleteSubject") {
        require_once("subjects/delete.php");
    } elseif ($page == "editSubject") {
        require_once("subjects/edit.php");
    } elseif ($page == "updateSubject.php") {
        require_once("subjects/update.php");
    }
    //school_info
    else if ($page == "school_info") {
        require_once("school_info/index.php");
    } else if ($page == "updateSchoolInfo") {
        require_once("school_info/update.php");
    } elseif ($page == "editSchoolInfo") {
        require_once("school_info/edit.php");
    }
    //students
    elseif ($page == "addStudent") {
        require_once("students/add.php");
    } elseif ($page == "students") {
        require_once("students/index.php");
    } elseif ($page == "insertStudent") {
        require_once("students/insert.php");
    } elseif ($page == "deleteStudent") {
        require_once("students/delete.php");
    } elseif ($page == "editStudent") {
        require_once("students/edit.php");
    } elseif ($page == "updateStudent.php") {
        require_once("students/update.php");
    }
    //teachers
    elseif ($page == "addTeacher") {
        require_once("teachers/add.php");
    } elseif ($page == "teachers") {
        require_once("teachers/index.php");
    } elseif ($page == "insertTeacher") {
        require_once("teachers/insert.php");
    } elseif ($page == "deleteTeacher") {
        require_once("teachers/delete.php");
    } elseif ($page == "editTeacher") {
        require_once("teachers/edit.php");
    } elseif ($page == "updateTeacher.php") {
        require_once("teachers/update.php");
    }
    //teacher_subjects
    elseif ($page == "teacher_subjects") {
        require_once("teacher_subjects/index.php");
        // require_once("teacher_subjects/teacher_subjects.php");
    } elseif ($page = "showTeacherSubject") {
        require_once("teacher_subjects/show.php");
    }

} else { 
    require_once ("dashboard.php");
}

?>